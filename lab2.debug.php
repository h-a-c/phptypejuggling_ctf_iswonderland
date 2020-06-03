 <?php
if (isset($_GET['value']))
{
    $get_hash=$_GET['value'];  
    $rot=sha1($get_hash);
    echo "rot = ".$rot."<br>";
    $res = preg_replace("/[^0-9.]/", "", $rot);
    echo "res = ".$res."<br>";
    $md5_hash=md5($res);
    echo "md5_hash = ".$md5_hash."<br>";
    $t=substr($md5_hash,0,7);
    echo "t = ".$t."<br>";
    echo "preg_match = ".var_dump((preg_match('/^([a-z]+$/', $get_hash)))."<br>";
    if ((preg_match ('/^([a-z]+)$/', $get_hash)) && $t =='0')      
        echo "This is your flag {xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx}";
    else
        echo "Nope.. you need something 'magic' here";

}

?> 
