<?php
    /*
     * 有會員登入統一開啟session
     */
    //session_start();
    include_once 'config.local.php';
    
    /*
     * function
     */
    include_once WEB_PATH.'modules/adodb5/adodb.inc.php';
    /*
     * autoload set
     */
    $includePath[] = get_include_path();
    $includePath[] = WEB_PATH.'cls';
    $includePath[] = WEB_PATH.'modules/class';
    $includePath[] = WEB_PATH.'template';
    set_include_path(join(PATH_SEPARATOR,$includePath));
    function __autoload($className)
    {
        $className = strtolower($className);
        //include同名class
        include_once $className.'.class.php';
        
        //判斷載入同名class的template
        if(file_exists(WEB_PATH.'template/'.$className.'.tbl.php')) {
            include_once $className.'.tbl.php';
        }
        
    }
?>