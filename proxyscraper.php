<?php
$directory = '.';
$url  = 'https://api.proxyscrape.com/v2/?request=getproxies&protocol=http&timeout=10000&country=all&ssl=all&anonymity=all';
$path = $directory.'https://github.com/siska090915/proxy/raw/master/proxyscraper.txt';
$fp = fopen($path, 'w');
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_FILE, $fp);
$data = curl_exec($ch);
if($data){
 echo 'File backup sudah diterima...';
}
else{
 echo 'Yah... Gagal Mengambil File';
}
curl_close($ch);
fclose($fp);
?>
