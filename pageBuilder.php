<?php
//require_once '/http/indentationerror.com/repo/navbar.php';

function printHead() {
    $myfile = fopen("/http/indentationerror.com/juzo/flooding/header.html", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("/http/indentationerror.com/juzo/flooding/header.html"));
    fclose($myfile);
}

function printNavbar() {

    echo '<div class="bigNavBar">';
    echo '<nav class="materialContrast outerRestrictor navbar">';
    echo '<div class="innerRestrictor">';
    echo '<a href="https://indentationerror.com/" id="navbarStripeContainer" class="btnContrastLight navbarItem">';
    echo '<div id="navbarLogo">';
    echo '<img src="https://juzo.indentationerror.com/flooding/logo.png" style="height:100%;"></img>';
    echo '</div>';
    echo '</a>';
    echo '<a href="https://account.indentationerror.com/" class="buttonContrastLight navbarItem">Account</a>';
    echo '<a href="https://explorer.indentationerror.com/" class="buttonContrastLight navbarItem">Explorer</a>';
    echo '</div>';
    echo '</nav>';
    echo '</div>';

    echo '<div class="smallNavBarSpacer"></div>';
    
    echo '<div class="smallNavBar">';
    echo '<nav class="outerRestrictor navbar">';
    echo '<div class="innerRestrictor">';
    echo '<a onclick="navMenuButton();" id="smallNavbarStripeContainer" class="btnContrastLight navbarItem">';
    echo '<img id="smallHomeNavLabel" src="https://repo.indentationerror.com/images/menuIcon.svg">Home</img>';
    echo '</a>';
    
    echo '<a id="smallNavbarLogo">';
    echo '<img src="https://juzo.indentationerror.com/flooding/logo.png" style="height:100%;"></img>';
    echo '</a>';
    echo '</div>';
    echo '</nav>';
    echo '</div>';
    
    echo '<script>'."\n";
    echo 'function navMenuButton() {'."\n";
    echo '    if (document.getElementById("navMenu").classList.contains("shown")) {'."\n";
    echo '        document.getElementById("navMenu").classList.add("hidden");'."\n";
    echo '        document.getElementById("navMenu").classList.remove("shown");'."\n";
    echo '    } else {'."\n";
    echo '        document.getElementById("navMenu").classList.add("shown");'."\n";
    echo '        document.getElementById("navMenu").classList.remove("hidden");'."\n";
    echo '    }'."\n";
    echo '}'."\n";
    echo '</script>'."\n";
    
    echo '<nav id="navMenu" class="navMenu hidden">'."\n";
    echo '<a class="navMenuLink" href="https://indentationerror.com/"><h1>Home</h1></a>'."\n";
    echo '<div class="smallSpacer"></div>'."\n";
    echo '<a class="navMenuLink" href="https://account.indentationerror.com/"><h1>Account</h1></a>'."\n";
    echo '<div class="smallSpacer"></div>'."\n";
    echo '<a class="navMenuLink" href="https://explorer.indentationerror.com/"><h1>Explorer</h1></a>'."\n";
    echo '</nav>'."\n";

//     $uData = getUserInfoFromSession();
// 
//     if ($uData != null){
//         $shownName = $uData["username"];
//         if (strlen($uData["displayName"]) > 0) {
//             $shownName = $uData["displayName"];
//         }
//         echo '<a href="javascript:toggleAccountsMenu();"><h5 style="margin-right:9mm;">\n'.$shownName.' <i class="material-icons" style="position:absolute;top:-0.5mm;right:-0.5mm;">&#xE851;</i></h5></a>\n';
//     } else {
//         echo '<a href="https://cloud.baldeonline.com/"><h5 style="margin-right:9mm;"><i class="material-icons" style="position:absolute;top:-0.5mm;right:-0.5mm;">&#xE03F;</i> Login</h5></a>\n';

}

function printTitle($title,$subtitle="") {
    echo '<div class="outerRestrictor" style="margin-bottom:3mm;margin-top:1mm;">' . "\n";
    echo '    <div class="innerRestrictor">' . "\n";
    echo '        <div class="materialEmphasis" style="display: inline-block;position: relative; padding-right:7mm; padding-top:7mm; padding-bottom:4mm; overflow: visible; z-index:5;">' . "\n";
    echo '        <h1>' . $title . '</h1>' . "\n";
    echo '        <div class="materialEmphasis" style="position:absolute;left:-100vw;top:0;height:100%;width:100vw;"></div>' . "\n";
    echo '        </div>' . "\n";
    
    if (strlen($subtitle) != 0) {
        echo '        <div class="spacer" style="position: relative; height:0;"></div>' . "\n";
        echo '        <div class="materialContrast" style="display: inline-block;position: relative; padding-right:6mm; padding-top:3.5mm; padding-bottom:4mm; overflow: visible; z-index:5;">' . "\n";
        echo '        <h2>' . $subtitle . '</h2>' . "\n";
        echo '        <div class="materialContrast" style="position:absolute;left:-100vw;top:0;height:100%;width:100vw;"></div>' . "\n";
        echo '        </div>' . "\n";
    }
    echo '    </div>' . "\n";
    echo '</div>' . "\n";
}

function printFooter() {
    $myfile = fopen("/http/indentationerror.com/juzo/flooding/footer.html", "r") or die("Unable to open file!");
    echo str_replace("###logoSmall###",returnLogo("6mm"),fread($myfile,filesize("/http/indentationerror.com/juzo/flooding/footer.html")));
    fclose($myfile);
}


function returnLogo($size) {
    return '<div style="width:8.6em;overflow:hidden;display:inline-block;font-size:' . $size . ';">' . '<h1 class="funTextT1" style="font-size:100%;margin-left:0vmin;margin-bottom:0vmin;display:inline;">indentation</h1>' . '<h1 class="funTextT2" style="font-size:100%;margin-bottom:0vmin;display:inline;">error</h1>' . '</div>';
}

?>
