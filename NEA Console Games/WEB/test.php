<?php $url = "http://38.242.132.154:9000/api/token?count=10000&token=hello"; $curl = curl_init($url); 
curl_setopt($curl, CURLOPT_URL, $url); curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); $resp = 
curl_exec($curl); curl_close($curl); var_dump($resp);

$website = file_get_contents('http://google.com');
echo $website
?>
