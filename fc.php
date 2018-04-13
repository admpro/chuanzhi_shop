<?php
function getCategory(){
 $mysqli=new mysqli('localhost','root','', 'web');
if($mysqli->connect_error){
    $back=array(1=>$mysqli->connect_error);//if the database meets error,assign the value 1 to array back[];
    return $back;
}
$sql="select * from itcast_category";
$mysqli->query('set names utf8');
    if($result=$mysqli->query($sql)){
       // $data=[];
        while ($row=$result->fetch_assoc()){
           $data[]=$row['cname'];//call the value by array row['cname'] into data[],and now the data[] is two-dim array;
        } 
        $back=array(0=>$data);//trans the two-dim array to one-dim array;
    } else {
        $back=array(1=>$mysqli->error);
    }
    return $back;//if it was called as a variable, send it.
}
?>