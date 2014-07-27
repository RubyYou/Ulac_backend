<?php include_once 'index.c.php';?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo WEB_TITLE;?></title>
<style type="text/css">
    table {
        width: 100%;
    }
    h4{
        color: #f22;
        border-bottom: solid #ccc 1px;
    }
</style>
<script type="text/javascript" src="libraries/js/jquery-1.11.0.min.js"></script>
</head>
<body>
    <h1>ULAC back data push to front</h1>
    <h4>use ajax to pass Htmldata</h4>

    <input type="button" value="click to get data" onclick="getMemberList();">
    <div id="ajax">
    </div>
    
</body>
<script type="text/javascript">
function getMemberList() {
    $.ajax({
        url: 'ajax.php',
        //data: {list_type:1},
        //傳送至ajax.php的資料
        //這個範例是傳1 or 2產生不同顏色的列表，
        //如果要分頁，就能傳現在的頁次到ajax.php
        //讓ajax.php判斷抓下一個分頁資料
        type:'post',
        //傳送方式get or post
        //type：「get」用$_GET接資料、「post」用$_POST接資料
        dataType:'html',
        //回傳資料型態json or html or text.....
        success: function(msg){
            //傳送成功「msg」為回傳的資料
            $('#ajax').last().after(msg);
        },
        error:function(xhr, ajaxOptions, thrownError){
            //傳送失敗
            alert('取得列表失敗！');
        }
    });
}
</script>
</html>