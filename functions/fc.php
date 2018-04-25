<?php
function getCategory(){
 $mysqli=new mysqli('localhost','root','', 'web');
if($mysqli->connect_error){
    $back=array(1=>$mysqli->connect_error);
    return $back;
}
$sql="select * from itcast_category";
$mysqli->query('set names utf8');
    if($result=$mysqli->query($sql)){
       // $data=[];
        while ($row=$result->fetch_assoc()){
           $data[]=$row['cname'];
        } 
        $back=array(0=>$data);
    } else {
        $back=array(1=>$mysqli->error);
    }
    return $back;
}
function getGoods(){
 $mysqli=new mysqli('localhost','root','', 'web');
if($mysqli->connect_error){
    $back=array(1=>$mysqli->connect_error);
    return $back;
}
$sql="select gname,price,thumb from itcast_goods limit 4";
$mysqli->query('set names utf8');
    if($result=$mysqli->query($sql)){
       // $data=[];
        while ($row=$result->fetch_assoc()){
           $data[]=$row;
        } 
        $back=array(0=>$data);
    } else {
        $back=array(1=>$mysqli->error);
    }
    return $back;
}
?>