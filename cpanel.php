<?php
    require_once '/http/indentationerror.com/juzo/flooding/pageBuilder.php';
    printHead();
?>

<title>Skymmer Control Panel</title>
</head>
<body>

<?php
    printNavbar();
    //printTitle("IndenetationError","Software");
    printTitle("Control Panel");
?>

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

</script>

<div class="smallSpacer"></div>

<?php
    printFooter();
?>

</body>
</html>
