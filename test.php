
<?php

$fortune = array(
 "https://raw.githubusercontent.com/murabitoz/pic/master/%E8%8D%8A%E6%9C%AC%E7%B7%A8/%E3%83%97%E3%83%AD%E3%83%95%20_01.png",
 "http://raw.githubusercontent.com/murabitoz/pic/master/%E8%8D%8A%E6%9C%AC%E7%B7%A8/%E3%83%97%E3%83%AD%E3%83%95.png"
);

$count  = count($fortune);
$random = rand(0, $count - 1);

echo $fortune[$random];

?>