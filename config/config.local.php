<?php
/***************************************
 *Error message
 **************************************/
date_default_timezone_set('Europe/London');
ini_set('display_errors', true);
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
//ini_set('upload_max_filesize',10240);

/***************************************
 *Meta Tag-
 ***************************************/
define(WEB_CHARSET,'utf-8');
define(WEB_KEYWORD,'ULAC backend');
define(WEB_DESCRIPTION,'ULAC backend');
define(WEB_KEYWORD_CN,'');
define(WEB_DESCRIPTION_CN,'');
/***************************************
 *Define-
 *Front-End
 ***************************************/
define(WEB_HOST,$_SERVER['HTTP_HOST']);//gethostbyname($_SERVER['HTTP_HOST']) || $_SERVER['HTTP_HOST'];
define(WEB_ROOT,'http://'.WEB_HOST.'/ulacbackend/');
define(MOB_ROOT,'');
define(WEB_ROOT_CN,'');
define(MOB_ROOT_CN,'');
define(WEB_PATH,$_SERVER['DOCUMENT_ROOT'].'/ulacbackend/');
define(WEB_TITLE,'ulacbackend');
define(WEB_TITLE_CN,'');
define(WEB_WEBSITEMAIL,'email@email.com');
define(WEB_SERVICEMAIL1,'email@email.com');
define(WEB_SERVICEMAIL2,'');
define(WEB_SERVICEMAILTITLE,'');
define(WEB_DATEFORMAT,'%Y/%m/%d');
/***************************************
 *Define-
 *DB path
 ***************************************/
define(DBCONFIG,WEB_PATH."config/db.config.local.php");
/***************************************
 *Define-
 *BackgroundManager
 ***************************************/
define(BGM_ACCOUNTSETTING,2);//Login---> 1 = use file , 2 = use db
define(BGM_ROOT,WEB_ROOT.'manager/');
define(BGM_PATH,WEB_PATH.'manager/');
define(BGM_UPLOADPATH,WEB_PATH.'uploads/');
define(BGM_TITLE,'ulacbackend');
define(BGM_WELCOME,'歡迎來到'.BGM_TITLE);

/***************************************
 *Define-
 *Copyright
 ***************************************/

define(WEBSITEAUTHOR,'Nick Chen');

/***************************************
 *Define-
 *String
 ***************************************/
define(STR_REDIRECTPAGE,'轉頁中...');
define(STR_RESET,'重填');
define(STR_LOGIN,'登入');
define(STR_LOGOUT,'登出');
define(STR_SUBMIT,'送出');
define(STR_ACCOUNT,'帳號');
define(STR_PASSWORD,'密碼');

define(STR_NULLACCOUNT,STR_ACCOUNT.'不可為空！');
define(STR_NULLPASSWORD,STR_PASSWORD.'不可為空！');
define(STR_NULLACCOUNTPASSWORD,'請填寫'.STR_ACCOUNT.'&'.STR_PASSWORD.'！');

define(STR_CHANGEPASSWORDSUCCESS,'修改成功！\\n下次請用新'.STR_PASSWORD.'登入。');
define(STR_CHANGEACCOUNTPASSWORDSUCCESS,'修改成功！\\n下次請用新'.STR_ACCOUNT.'&'.STR_PASSWORD.'登入。');

define(STR_VALIDACCOUNT,STR_ACCOUNT.'格式錯誤！');
define(STR_VALIDPASSWORD,STR_PASSWORD.'格式錯誤！');
define(STR_VALIDNEWPASSWORD,'新'.STR_PASSWORD.'驗證不正確！');
define(STR_VALIDIMGCODE,'驗證碼輸入錯誤！');

define(STR_SEARCHACCOUNTPASSWORD,'系統查無此'.STR_ACCOUNT.'&'.STR_PASSWORD.'！');

define(STR_UPLOAD,'上傳檔案');
define(STR_UPLOADSUCCESS,STR_UPLOAD.'成功！');
define(STR_UPLOADFAIL,STR_UPLOAD.'失敗！');

define(STR_ADD,'新增');
define(STR_ADDSUCCESS,STR_ADD.'成功！');
define(STR_ADDFAIL,STR_ADD.'失敗！');

define(STR_EDIT,'修改');
define(STR_EDITSUCCESS,STR_EDIT.'成功！');
define(STR_EDITFAIL,STR_EDIT.'失敗！');

define(STR_DELETE,'刪除');
define(STR_DELETESUCCESS,STR_DELETE.'成功！');
define(STR_DELETEFAIL,STR_DELETE.'失敗！');
define(STR_DELETECONFIRM, '確定'.STR_DELETE.'？');

define(STR_LIST,'列表');

define(STR_PREVPAGE,'上一頁');
define(STR_NEXTPAGE,'下一頁');
define(STR_ATPAGE,'第');
define(STR_TOTAL,'共');
define(STR_PAGE,'頁');

define(STR_ORDER,'排序');
define(STR_DELETE,'刪除');
define(STR_EDIT,'修改');

define(STR_EMAILSENDED,'信件已寄出，我們將儘快與您聯絡！');
define(STR_EMAILSENDFAIL,'信件寄送失敗，請稍後再試！');
define(STR_VALIDCODEERROR,'驗證碼輸入錯誤！');
define(STR_DATAERROR,'資料輸入有誤，請重新輸入！');

?>