<?php
    require_once '/http/indentationerror.com/juzo/flooding/pageBuilder.php';
    printHead();
?>

<title>Skymmer Control Panel</title>

<style>
.tankInfo{
    position:relative;
    float:left;
    width:auto;
    overflow:visible;
}

.tank{
    position:relative;
    float:right;
    width:20mm;
    height:30mm;
    background-color:#D3DDDF;
    border-radius:2mm;
}

.tankFill{
    position:absolute;
    bottom:0;
    width:100%;
    background-color:#3b8dad;
}

.tankLabel{
    position:absolute;
    width:100%;
    bottom:0;
    line-height: 30mm;
    text-align: center;
    color:#000000;
}

.tankLabel2{
    position:absolute;
    width:100%;
    bottom:0;
    line-height: 30mm;
    text-align: center;
    color:#ffffff;
}
</style>

</head>
<body>

<?php
    printNavbar();
    //printTitle("IndenetationError","Software");
    printTitle("Control Panel");
?>


<div class="materialEmphasis outerRestrictor outerRestrictor">
    <div class="innerRestrictor innerRestrictor">
        <div>
            <h2>Imminent flood alert for Stirling</h2>
            <h3>Current rainfall: 13mm</h3>
            <h3>Expected 24hr peak rainfall: 43mm</h3>
            <h3>Current storm drain flow: 89%</h3>
            <h3>Predicted storm drain flow at peak: 100%</h3>
            <h3>Current tank capacity in area: 76%</h3>
            <h3>Predicted tank capacity in area at peak: 0%</h3>
        </div>
        <div class="buttonContrastLight" style="float:right;margin-right:0;">View details</div>
    </div>
</div>
<div class="material outerRestrictor outerRestrictor">
    <div class="innerRestrictor innerRestrictor">
        <img src="fakeMap1.png" style="width:100%;"></img>
    </div>
</div>

<div class="smallSpacer"></div>

<div class="material outerRestrictor outerRestrictor">
    <div class="innerRestrictor innerRestrictor">
        <div class="tankInfo">
            <h1>Stirling</h1>
            <h3 class="redBackgroundText">Tank capacity may be exceeded</h3>
            <h3>Tank group status: Draining</h3>
            <h3>Tank group capacity: 8340000 litres</h3>
            <h3>Current target: 0%</h3>
            <h3>Current rainfall: 13mm</h3>
            <h3>Expected 24hr peak rainfall: 43mm</h3>
            <h3>Current storm drain flow: 89%</h3>
            <h3>Predicted storm drain flow at peak: 100%</h3>
            <h3>Current tank capacity in area: 76%</h3>
            <h3>Predicted tank capacity in area at peak: 0%</h3>
            <div class="smallSpacer"></div>
            <div class="buttonContrastLight" style="float:left;">View individual tanks</div>
        </div>
        <div class="tank"><h3 class="tankLabel">24%</h3><div class="tankFill" style="height:24%;"><h3 class="tankLabel2">24%</h3></div></div>
    </div>
</div>

<div class="smallSpacer"></div>

<div class="material outerRestrictor outerRestrictor">
    <div class="innerRestrictor innerRestrictor">
        <div class="tankInfo">
            <h1>Dunblane</h1>
            <h3 class="greenBackgroundText">Under control</h3>
            <h3>Tank group status: Draining</h3>
            <h3>Tank group capacity: 1845000 litres</h3>
            <h3>Current target: 35%</h3>
            <h3>Current rainfall: 12mm</h3>
            <h3>Expected 24hr peak rainfall: 13mm</h3>
            <h3>Current storm drain flow: 43%</h3>
            <h3>Predicted storm drain flow at peak: 43%</h3>
            <h3>Current tank capacity in area: 29%</h3>
            <h3>Predicted tank capacity in area at peak: 34%</h3>
            <div class="smallSpacer"></div>
            <div class="buttonContrastLight" style="float:left;">View individual tanks</div>
        </div>
        <div class="tank"><h3 class="tankLabel">71%</h3><div class="tankFill" style="height:71%;"><h3 class="tankLabel2">71%</h3></div></div>
    </div>
</div>

<div class="smallSpacer"></div>

<div class="material outerRestrictor outerRestrictor">
    <div class="innerRestrictor innerRestrictor">
        <div class="tankInfo">
            <h1>Falkirk</h1>
            <h3 class="greenBackgroundText">Under control</h3>
            <h3>Tank group status: Filling</h3>
            <h3>Tank group capacity: 5635000 litres</h3>
            <h3>Current target: 65%</h3>
            <h3>Current rainfall: 27mm</h3>
            <h3>Expected 24hr peak rainfall: 27mm</h3>
            <h3>Current storm drain flow: 86%</h3>
            <h3>Predicted storm drain flow at peak: 86%</h3>
            <h3>Current tank capacity in area: 87%</h3>
            <h3>Predicted tank capacity in area at peak: 23%</h3>
            <div class="smallSpacer"></div>
            <div class="buttonContrastLight" style="float:left;">View individual tanks</div>
        </div>
        <div class="tank"><h3 class="tankLabel">13%</h3><div class="tankFill" style="height:13%;"><h3 class="tankLabel2">13%</h3></div></div>
    </div>
</div>



<script>
    function addTank() {
    
    }
</script>

<div class="smallSpacer"></div>

<?php
    printFooter();
?>

</body>
</html>
