<?php
//header("Content-type: text/html; charset=gb2312");
    echo '<html>
    <head>
    <title>IP地理位置接口</title></head></html>';
if (!empty($_GET["ip"])){
    $local=$_GET["ip"];
} else {
    $local=$_SERVER["REMOTE_ADDR"];
}
	$url="https://ip.chinaz.com/".$local;
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1);   // ssl 访问核心参数
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	$response = curl_exec($ch);
	$response = preg_replace('/\s+/', '', $response);
	//file_put_contents('yuan.txt',$response);
	curl_close($ch);
	function get_em($input, $start, $end) {
    $substr = substr($input, strlen($start)+strpos($input, $start),
    (strlen($input) - strpos($input, $end))*(-1));
    return $substr;
}
    $string = $response;
    $start = '0lh45"><em>';
    $end = '</em><aclass';
    echo 'IP：'.$local.'<br>位置：'.get_em($string, $start, $end);

?>
