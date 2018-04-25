<?php
//include '../functions/fc.php';
include '../fcPDO.php';
$category= getCategory();
$goods=getGoods();
if(key($category)||key($goods)){
    echo $category[1];
    echo $goods[1];
    exit;
}
include '../view/Index-index.php';
?>