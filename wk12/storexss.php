<?php

$file = fopen("storedxss.txt", "r") or die("Unable to open file!");
echo fread($file, filesize("storedxss.txt"));
fclose($file);

?>