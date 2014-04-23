<?php

foreach (glob("*.csv" ) as $filename) {
   echo "$filename size " . filesize($filename) . "\n";
   unlink($filename);
}
foreach (glob("*.zip" ) as $filename) {
   echo "$filename size " . filesize($filename) . "\n";
   unlink($filename);
}

?>