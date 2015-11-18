<?php

include("Mobile_Detect.php");
$detect = new Mobile_Detect();

// type=2是AndroidOS_______ type=1是iOS   如果地址要改的話就改 url= （後面的下載地址修改需要轉碼） 格斗之皇二维码下载统计 
if($detect->isAndroidOS()){
	header("Location:http://www.vxinyou.com/ad/mlsd/download.php?type=2&url=http%3a%2f%2fwww.vxinyou.com%2fad%2fmlsd%2fa.html"); // 
}else if($detect->isiOS()){
    header("Location:http://www.vxinyou.com/ad/mlsd/download.php?type=1&url=http%3a%2f%2fwww.vxinyou.com%2fad%2fmlsd%2fb.html"); 
}else{
	header("Location:http://ml.vxinyou.com/");
}
