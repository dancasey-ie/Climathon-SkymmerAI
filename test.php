<!doctype html>
<html lang="en">
<head>
<script src="https://repo.indentationerror.com/animator.js"></script>
<link rel="icon" type="image/x-icon" href="https://repo.indentationerror.com/favicon.ico">
<link rel="icon" type="image/png" href="https://repo.indentationerror.com/favicon.png">
<meta name="google-site-verification" content="xIR0vogtguToimZeaYLxhpTCNxhcdNwCmK9axzUjnJY">
<!-- <meta name="theme-color" content="#222222"> -->
<meta id="viewport" name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,maximum-scale=5,user-scalable=yes">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<style>
@import url(https://repo.indentationerror.com/styleSheet.css);

pre {
    font-size: 3mm;
}
</style>

<title>WeatherModel</title>

</head>
<body>

<div class="smallSpacer"></div>

<div class="material flexibleContainer">
    <div class="material outerRestrictor outerRestrictor">
        <div class="innerRestrictor innerRestrictor">
            <h1>Test</h1>
            <p></p>
            <div id="outputArea" style="width:100%;height:120mm;overflow-y:scroll;">
            </div>
            <!--<div class="buttonBoundingBox">
                <a href="../software" class="button">Browse software</a>
            </div> -->
        </div>
    </div>
</div>

<script>
    let containers = [];
    let sources = [];
    let sinks = [];
    let timeStepSeconds = 60;
    
    function randomString(length, chars) {
        var mask = '';
        if (chars.indexOf('a') > -1) mask += 'abcdefghijklmnopqrstuvwxyz';
        if (chars.indexOf('A') > -1) mask += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        if (chars.indexOf('#') > -1) mask += '0123456789';
        var result = '';
        for (var i = length; i > 0; --i) result += mask[Math.floor(Math.random() * mask.length)];
        return result;
    }
    
    function getWaterObjectById(id) {
        for (let i=0; i<containers.length; i++) {
            if (containers[i]["id"] == id) {
                return containers[i];
            }
        }
        for (let i=0; i<sources.length; i++) {
            if (sources[i]["id"] == id) {
                return sources[i];
            }
        }
        for (let i=0; i<sinks.length; i++) {
            if (sinks[i]["id"] == id) {
                return sinks[i];
            }
        }
        return null;
    }
    
    function addContainer(capacityLitres, drainTo, overflowTo, drainRate, name) {
        let containerId = randomString(32, "aA#");
        containers.push({
            "type": "container",
            "id": containerId,
            "name": name,
            "litres": 0,
            "capacityLitres": capacityLitres,
            "drainTo": drainTo,
            "drainRate": drainRate,
            "overflowTo": overflowTo
        });
        var node = document.createElement("pre");
        var textnode = document.createTextNode("loading");
        node.appendChild(textnode);
        node.id = containerId;
        document.getElementById("outputArea").appendChild(node);
        return containerId;
    }
    
    function addSink(maximumDissipationRate, name) {
        let sinkId = randomString(32, "aA#");
        sinks.push({
            "type": "sink",
            "id": sinkId,
            "name": name,
            "litres": 0,
            "maximumDissipationRate": maximumDissipationRate
        });
        var node = document.createElement("pre");
        var textnode = document.createTextNode("loading");
        node.appendChild(textnode);
        node.id = sinkId;
        document.getElementById("outputArea").appendChild(node);
        return sinkId;
    }
    
    function addSource(inputRate, drainTo, name) {
        let sourceId = randomString(32, "aA#");
        sources.push({
            "type": "source",
            "id": sourceId,
            "name": name,
            "drainTo": drainTo,
            "inputRate": inputRate
        });
        var node = document.createElement("pre");
        var textnode = document.createTextNode("loading");
        node.appendChild(textnode);
        node.id = sourceId;
        document.getElementById("outputArea").appendChild(node);
        return sourceId;
    }
    
    function stepSimulation() {
        for (let i=0; i<sources.length; i++) {
            let litresThisTimePeriod = sources[i]["inputRate"] * timeStepSeconds;
            for (let j=0; j<sources[i]["drainTo"].length; j++) {
                getWaterObjectById(sources[i]["drainTo"][j])["litres"] += litresThisTimePeriod / sources[i]["drainTo"].length;
            }
            document.getElementById(sources[i]["id"]).innerHTML = JSON.stringify(sources[i], null, 2);
        }
        for (let i=0; i<containers.length; i++) {
            let capacityToRemove = containers[i]["litres"];
            if (capacityToRemove > (containers[i]["drainRate"] * timeStepSeconds)) {
                capacityToRemove = (containers[i]["drainRate"] * timeStepSeconds);
            }
            containers[i]["litres"] -= capacityToRemove;
            for (let j=0; j<containers[i]["drainTo"].length; j++) {
                getWaterObjectById(containers[i]["drainTo"][j])["litres"] += capacityToRemove / containers[i]["drainTo"].length;
            }
            if (containers[i]["litres"] > containers[i]["capacityLitres"]) {
                getWaterObjectById(containers[i]["overflowTo"])["litres"] += containers[i]["litres"] - containers[i]["capacityLitres"];
                containers[i]["litres"] = containers[i]["capacityLitres"];
            }
            document.getElementById(containers[i]["id"]).innerHTML = JSON.stringify(containers[i], null, 2);
        }
        for (let i=0; i<sinks.length; i++) {
            if (sinks[i]["litres"] > sinks[i]["maximumDissipationRate"]) {
                sinks[i]["litres"] -= sinks[i]["maximumDissipationRate"];
            } else {
                sinks[i]["litres"] = 0;
            }
            document.getElementById(sinks[i]["id"]).innerHTML = JSON.stringify(sinks[i], null, 2);
        }
    }
    
    function setUpSimulation() {
        let river = addSink(1000, "river");
        let house1Tank = addContainer(1000, [river], river, 10, "house1Tank");
        let house1Roof = addSource(20, [house1Tank], "house1Roof");
        setInterval(stepSimulation,1000);
    }
    
    setUpSimulation();
</script>

<div class="smallSpacer"></div>

</body>
</html>
