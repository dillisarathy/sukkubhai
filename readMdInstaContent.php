<?php
$file = fopen("mdInstaContent.txt","r");
$script ='';
while(!feof($file))
{
    $script.= "<div class='col-sm-6'>";
    $script.= fgets($file);
    $script.= "</div>";
}
echo $script;
?>
