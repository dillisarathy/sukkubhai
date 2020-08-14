<?php
$file = fopen("instaContent.txt","r");
$script ='';
while(!feof($file))
{
    $script.= "<div class='col-sm-6'>";
    $script.= fgets($file);
    $script.= "</div>";
}
echo $script;
?>