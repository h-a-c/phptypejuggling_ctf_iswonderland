<?php
$handle = fopen("rockyou.txt","r");
while (($line = fgets($handle)) !== false) {
	$line = preg_replace("/\n/", "", $line);//when reading the line it will have \n in it
	$str = sha1($line);
	$res = preg_replace("/[^0-9.]/", "", $str);
	$md5_hash = md5($res);
	$t = substr($md5_hash, 0, 7);
	if ((preg_match ('/^([a-z]+)$/', $line)) && $t =='0'){
		echo $line."\t".$t."\n";
	}
}
echo "done\n";
?>
