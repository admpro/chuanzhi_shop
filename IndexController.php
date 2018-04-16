<?php
include 'fc.php';//Note for English learning;
$category= getCategory();//call the getCateory function;
if(key($category)){//use 'key'function to judge if array category;
    echo $category[1];//if not, print undefind offset error; 
    exit;
}
include 'Index-index.php';
?>