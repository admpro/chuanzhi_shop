<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>传智商城</title>
	<link href="../css/home.css" rel="stylesheet" />
</head>
<body>
	<div id="top">
		<div class="top_nav">
		<ul><li>收藏本站</li><li>关注本站</li></ul>
		<ul class="right">
						<li>您好，欢迎来到传智商城！[<a href="#">登录</a>][<a href="#">免费注册</a>]</li>			<li class="line">|</li><li>我的订单</li>
			<li class="line">|</li><li><a href="#" >会员中心</a></li>
			<li class="line">|</li><li><a href="#" >我的购物车</a></li>
			<li class="line">|</li><li>联系客服</li>
		</ul>
		</div>
	</div>
	<div id="box">
		<div id="header">
			<a class="left" href="#"><div id="logo"></div></a>
			<div id="search" class="left">
				<input type="text" class="left" />
				<input class="search_btn" type="button" value="搜索" />
				<p id="search_hot">热门搜索：PHP培训　大学教材　智能手机　平板电脑</p>
			</div>
			<div id="info" class="left">
				<input type="button" value="会员中心" />
				<input type="button" value="去购物车结算" />
			</div>
		</div>
		<div class="clear"></div>
		<div id="nav">
			<ul><li class="category"><a href="#">全部商品分类</a></li><li class="curr"><a href="#">首页</a></li>
				<li><a href="#">PHP</a></li><li><a href="#">Java</a></li><li><a href="#">安卓</a></li>
				<li><a href="#">.Net</a></li><li><a href="#">C/C++</a></li><li><a href="#">IOS</a></li>
			</ul>
		</div>
<div id="slide">
<?php
foreach ($category[0] as $row){
    ?>
     <div class="cate"><div class="cate1 left"><a href="#" ><?php echo $row ?> </a></div></div>
<?php
}
?>
        <div class="clear"></div>
</div>
<div id="hot" class="left"></div>
<div id="news" class="right">新闻列表</div>
<div class="clear"></div>
<div id="best">
    <div class="best-img left"></div>
            <?php
            foreach ($goods[0] as $row){
            ?>
            <ul class="item left">
                <li><a href="#" target="_blank"><img src="../image/<?php echo $row['thumb'] ?>"></a></li>
		<li class="goods"><a href="#" target="_blank"><?php echo $row['gname'] ?></a></li>
		<li class="price"><?php echo $row['price'] ?></li>
            </ul>
                <?php
            }
                ?>
        <div class="clear"></div>
</div>

		<div id="service">
			<ul><li>购物指南</li><li>配送方式</li><li>支付方式</li>
				<li>售后服务</li><li>特色服务</li><li>网络服务</li>
			</ul>
			<div class="clear"></div>
		</div>
		<div id="footer">传智商城·本项目仅供学习使用</div>
	</div>
</body>
</html>