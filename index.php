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
    height:20vh;
}


.mainPageBuffer2 {
    position: relative;
    height:20vh;
}

</style>


</head>
<body>

<?php
    printNavbar();
?>

<div class="materialContrast outerRestrictor outerRestrictor" style="margin-top:-3mm;">
    <div class="background">
        <img style="width:100%;" src="bkg.jpg"></img>
    </div>
    <div class="mainPageBuffer1 spacer"></div>
    <div class="innerRestrictor innerRestrictor">
        <h1>Flood defences for the 21'st century</h1>
        <p>Using blah blah Machine Learning blah blah e.t.c</p>
    </div>
    <div class="mainPageBuffer2 spacer"></div>
</div>

<div class="material outerRestrictor outerRestrictor">
    <div class="innerRestrictor innerRestrictor">
        <h1>About us</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus lectus nec velit venenatis, in interdum sapien tristique. Donec id pulvinar eros. Suspendisse vulputate vel felis ut pellentesque. Pellentesque et venenatis nulla. Nunc sagittis neque a neque molestie sagittis ac et neque. Vestibulum posuere vitae nisl pellentesque mollis. Aenean ultricies vulputate elit eu ornare. Etiam tempor lorem eget nisl accumsan, ac mattis ipsum lobortis. In placerat tristique est, sit amet sollicitudin tellus tempor venenatis. Nulla pharetra egestas massa, a sollicitudin metus egestas et. Duis ut libero cursus, ultrices tellus et, pretium nisl. Aliquam id mi sit amet est vehicula interdum eget in risus. Donec diam tellus, sagittis ut fermentum id, consectetur a odio. Nam scelerisque at lorem id porttitor. Curabitur metus nisl, fringilla a metus sed, vehicula rutrum velit. Morbi rhoncus gravida ex, elementum gravida lacus consequat id. </p>
    </div>
</div>
<div class="materialEmphasis outerRestrictor outerRestrictor">
    <div class="innerRestrictor innerRestrictor">
        <h1>How we work</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus lectus nec velit venenatis, in interdum sapien tristique. Donec id pulvinar eros. Suspendisse vulputate vel felis ut pellentesque. Pellentesque et venenatis nulla. Nunc sagittis neque a neque molestie sagittis ac et neque. Vestibulum posuere vitae nisl pellentesque mollis. Aenean ultricies vulputate elit eu ornare. Etiam tempor lorem eget nisl accumsan, ac mattis ipsum lobortis. In placerat tristique est, sit amet sollicitudin tellus tempor venenatis. Nulla pharetra egestas massa, a sollicitudin metus egestas et. Duis ut libero cursus, ultrices tellus et, pretium nisl. Aliquam id mi sit amet est vehicula interdum eget in risus. Donec diam tellus, sagittis ut fermentum id, consectetur a odio. Nam scelerisque at lorem id porttitor. Curabitur metus nisl, fringilla a metus sed, vehicula rutrum velit. Morbi rhoncus gravida ex, elementum gravida lacus consequat id. </p>
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
