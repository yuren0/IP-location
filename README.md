# IP-location
利用PHP的curl方式获取站长网IP地理位置接口获取相应IP的物理位置<br>
使用方法：<br>
1.直接访问，如：https://example.com/ip.php<br>
将获取本机IP地址。<br>
2.带参数访问，如：https://example.com/ip.php?ip=8.8.8.8<br>
将获取8.8.8.8的地理位置信息<br>
<br>
返回格式可自行修改为json类型。<br>
（将最后输出信息改为如下代码）<br>
参考:<br>
'''
$ip = ['code' => 200, 'ip' => $local, 'weizhi' => get_em($string, $start, $end)];<br>
die(json_encode($ip,JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES));<br>
'''
