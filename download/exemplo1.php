<?php 

$link = "https://www.google.com/logos/doodles/2021/get-vaccinated-wear-a-mask-save-lives-august-4-6753651837109295-law.gif";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>">