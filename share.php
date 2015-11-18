<?php
$testId = 2;
$logId = isset($_REQUEST['log_id']) ? intval($_REQUEST['log_id']) : 0;
if (empty($logId))
{
    die('Error');
}
?>
<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no" name="format-detection">
<meta content="email=no" name="format-detection">
<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">
<meta name="keywords" content="神准测试：和胡歌一起旺桃花">
<title>神准测试：和胡歌一起旺桃花</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="http://images.vxinyou.com/jsCommon/jquery-1.7.2.min.js"></script>
</head>
<body>
<div class="result">
    <div class="re_txt">
        <h3>TA的桃花运就在</h3>
        <p id="reName" class="f6"></p>
        <p class="r_txt"></p>
        <a id="MyBtn" class="my_btn" href="index.html">测测我的桃花运在哪</a>
    </div>
</div>
<div id="ShareF" class="share">请点击右上角菜单选择“分享朋友圈”</div>
<div class='pop_bg'></div>
<script type="text/javascript">
    var test_id = '<?php echo $testId ?>';
    var log_id = '<?php echo $logId ?>';   
    var submit_url = 'http://event.vxinyou.com/activity/test/get_result';
    var wH = $(window).height();
    $(function(){
        $(".result").css("height",wH);
        $.post(
            submit_url,
            { 
                "test_id"  : test_id,
                "log_id"   : log_id,
            },   
            function(response) {
                if (response.success){
                    var text = response.result.result_share;
                    var data = text.split('\r\n');
                    var rN = data[0].split('：');
                    //console.log(rN.length);
                    //console.log(data[1]);
                   $("#reName").html(rN[1]);
                   $(".r_txt").html(data[1]);

                    switch (rN[1])
                    {
                        case "电影院":
                            $(".result").addClass("a");
                        break;
                        case "海滩":
                            $(".result").addClass("b");
                        break;
                        case "沙漠":
                            $(".result").addClass("c");
                        break;
                        case "古城小道":
                            $(".result").addClass("d");
                        break;
                        case "餐厅":
                            $(".result").addClass("e");
                        break;
                        case "登山":
                            $(".result").addClass("f");
                        break;
                        case "湖泊":
                            $(".result").addClass("g");
                        break;
                        case "工作学习地点":
                            $(".result").addClass("h");
                        break;
                        case "商场":
                            $(".result").addClass("i");
                        break;
                        case "书屋":
                            $(".result").addClass("j");
                        break;
                        case "寺庙":
                            $(".result").addClass("k");
                        break;
                        case "归乡的旅程中":
                            $(".result").addClass("l");
                        break;
                    }

                }
                
            },
            "jsonp"
        );
    });

</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?8b496f21669266204353c5a1ec4babf0";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>