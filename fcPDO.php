<?php 
function getCategory(){
    try {
        $dsn="mysql:host=localhost;dbname=web;charset=utf8";
        $sql="select * from itcast_category";
        $pdo=new PDO($dsn,"root",'');
        $result=$pdo->query($sql);
            if($result){
                while($row=$result->fetch(PDO::FETCH_ASSOC)){
                    $data[]=$row['cname'];
                }
                $back=array(0=>$data);
            }
            return $back;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}
function getGoods(){
    try {
        $dsn="mysql:host=localhost;dbname=web;charset=utf8";
        $sql="select * from itcast_goods";
        $pdo=new PDO($dsn,"root",'');
        $result=$pdo->query($sql);
        if($result){
            while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $data[]=$row;
            }
            $back=array(0=>$data);
        }
        return $back;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
function checkUserPwd($user,$pwd){
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=web;charset=utf8","root",'');
        $sql="select * from itcast_member where user='$user' and pwd='$pwd'";
        $stmt=$pdo->prepare("insert into 'itcast_member'(user,pwd)values(?,?)");
        $stmt->bindParam(1,$user,PDO::PARAM_STR);
        $stmt->bindParam(2,$pwd,PDO::PARAM_STR);
        var_dump($stmt->execute());
        $result=$pdo->query($sql);
        if($result->rowCount()){
            return(array(0=>"ok"));
        }else{
            return(array(1=>'数据不匹配，请确认用户名或密码是否有误'));
        }
    }catch (PDOException $e){
        return(array(1=>$e->getMessage()));
    }
}
?>