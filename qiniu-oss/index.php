<!DOCTYPE html>
<html>
<head>
	<title>QiNiu Demo</title>
</head>
<body>
<h2>七牛存储API使用-PHP版本</h2>
<br/>
<h3>参考：https://developer.qiniu.com/kodo/sdk/1241/php</h3>
<br/>

<?php 
require 'php-sdk/autoload.php';

use Qiniu\Auth;
use Qiniu\Storage\BucketManager;

// 用于签名的公钥和私钥
$accessKey = 'vS9ypX-wmstdvpcnl0dtGM4pvIz9dmu6bPOBqG-P';
$secretKey = 'AhY1meJpygIGFjdOOstcbnwIUm-3POYrZBVLoqUN';
$bucket = "yueting-free";


// 初始化签权对象
$auth = new Auth($accessKey, $secretKey);
//初始化BucketManager

$config = new \Qiniu\Config();
$bucketManager = new BucketManager($auth, $config);

list($buckets, $err) = $bucketManager->buckets(true);
if ($err) {
    print_r($err);
} else {
    print_r($buckets);
}

list($domains, $err) = $bucketManager->domains($bucket);
if ($err) {
    print_r($err);
} else {
    print_r($domains);
}

?>

</body>
</html>
