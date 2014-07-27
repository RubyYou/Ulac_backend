<?php
include_once 'config/config.main.fe.php';
$cProduct = new Product();
$arr = $cProduct->getProduct();


if(is_array($arr)) {
    foreach($arr as $key => $val) {
        getProductDetail($arr[$key]['id'],$arr[$key]['productName'],$arr[$key]['description'],$arr[$key]['productCode'],
            $arr[$key]['Specs'],$arr[$key]['Weight'],$arr[$key]['security'],$arr[$key]['thumbImgUrl'],
            $arr[$key]['Intro'],$arr[$key]['BigImgUrl']);
    }
}else{
    echo 'no data in the produc table!';
}

?>