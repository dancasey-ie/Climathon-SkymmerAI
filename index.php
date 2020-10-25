<?php
    require_once '/http/indentationerror.com/juzo/flooding/pageBuilder.php';
    printHead();
?>

<title>Skymmer Control Panel</title>

<style>
.background {
	position: absolute;
	overflow: visible;
	width:100vmax;
	height:100vmax;
    padding:0;
    top:0mm;
    left:0mm;
    box-sizing:border-box;
	background-color:#000000;
    filter: contrast(0.75) brightness(0.75);
}

.mainPageBuffer1 {
    position: relative;
    height:25vh;
}


.mainPageBuffer2 {
    position: relative;
    height:25vh;
}

</style>


</head>
<body>

<?php
    printNavbar();
?>

<div class="materialContrast outerRestrictor outerRestrictor" style="margin-top:-3mm;">
    <div class="background">
        <img style="width:100%;" src="Glen-Coe-Pano.jpg"></img>
    </div>
    <div class="mainPageBuffer1 spacer"></div>
    <div class="innerRestrictor innerRestrictor">
        <h1>Flood defences that don't cost the earth</h1>
        <p>We use machine learning to predict and actively manage floods with our network of small and low environmental impact storage tanks.</p>
    </div>
    <div class="mainPageBuffer2 spacer"></div>
    <div class="innerRestrictor innerRestrictor">
        <h6 style="position:absolute; bottom:0mm;">Coire nan Lochan, on the south side of Glen Coe - 7 July 2016 Javier Olivares - CC-BY-SA-4.0</h6>
    </div>
</div>

<div class="material outerRestrictor outerRestrictor">
    <div class="innerRestrictor innerRestrictor">
        <h1>About us</h1>
        <p>Flood defences have traditionally been large concrete structures, with huge environmental and ecological impact. We want to shake up the industry with a new and innovative model. By distributing the task of storing storm water to small tanks around the country, we can effectively limit single points of failure, and remove the need to destory the natural landscape to create dams and levees.</p>
    </div>
</div>

<div class="materialEmphasis outerRestrictor outerRestrictor">
    <div class="innerRestrictor innerRestrictor">
        <h1>How we work</h1>
        <p>SkymmerAI's bespoke Machine Learning software coupled with connected IoT devices, provide the most accurate flood warning systems in areas with pluvial flood risk.</p>
    </div>
</div>


<script>

</script>

<div class="smallSpacer"></div>

<?php
    printFooter();
?>

</body>
</html>
