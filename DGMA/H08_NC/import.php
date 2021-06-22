<?php
http://satelit.bmkg.go.id/IMAGE/HIMA/H08_NC_Indonesia.png
//curl
$url = 'http://satelit.bmkg.go.id/IMAGE/HIMA/H08_NC_Indonesia.png';
 $ch = curl_init(''.$url.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
$content = curl_exec($ch);
curl_close($ch);


unlink('H08_NC_Indonesia.png');
//write
$myfile = fopen("H08_NC_Indonesia.png", "w") or die("Unable to open file!");
$txt = "".$content."";
fwrite($myfile, $txt);
fclose($myfile);

?>
