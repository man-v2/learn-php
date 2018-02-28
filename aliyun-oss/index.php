<!DOCTYPE html>
<html>
<head>
	<title>QiNiu Demo</title>
</head>
<body>
<h2>阿里云OSS存储API使用-PHP版本</h2>
<br/>
<h3>参考：https://help.aliyun.com/document_detail/32099.html?spm=a2c4g.11174283.6.775.fnuguD</h3>
<br/>

<?php 
require_once 'aliyun-oss/autoload.php';

use OSS\OssClient;
use OSS\Core\OssException;

// 用于签名的公钥和私钥
$accessKey= "LTAILQqOyiv6cdUz";
$secretKey= "ufuxEnGnnQDGbPMjp8cYzeU101Dwse";
$endpoint= "https://yueting-free.oss-cn-shenzhen.aliyuncs.com";
$bucket="yueting-free";

try {
    $ossClient = new OssClient($accessKey, $secretKey, $endpoint);
    if (is_null($ossClient)) exit(1);
    //$acl = OssClient::OSS_ACL_TYPE_PUBLIC_READ;
    $doesExist = $ossClient->doesBucketExist($bucket);
	println("bucket $bucket exist? <br/>" . ($doesExist ? "yes" : "no"));

	$res = $ossClient->getBucketAcl($bucket);
	println($res);
} catch (OssException $e) {
    printf(__FUNCTION__ . "creating OssClient instance: FAILED\n");
    printf($e->getMessage() . "\n");
}

?>

</body>
</html>
