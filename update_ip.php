<?php
// 如果 IP 误差太大了，网络直接访问这个文件可以更新 IP 归属地信息。
$copywrite = file_get_contents("http://update.cz88.net/ip/copywrite.rar");
$qqwry = file_get_contents("http://update.cz88.net/ip/qqwry.rar");
$key = unpack("V6", $copywrite)[6];
for($i=0; $i<0x200; $i++){
	$key *= 0x805;
	$key ++;
	$key = $key & 0xFF;
	$qqwry[$i] = chr( ord($qqwry[$i]) ^ $key );
}
$qqwry = gzuncompress($qqwry);
$fp = fopen("qqwry.dat", "wb");
if($fp){
	fwrite($fp, $qqwry);
	fclose($fp);
}
?>
