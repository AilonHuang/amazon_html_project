<?php
include 'header.php';
?>
<link rel="stylesheet" href="./include/css/order_detail.css">

<div class="order_detail">
<span>我的帐户›  我的订单› 查看订单详情(含支付信息)</span>
<h1>查看订单详情(含支付信息) </h1>    
    
  
<div class="order_detail_top">
	<span class="order_date">下单日：2014年9月3日</span>
	<span class="">订单编号 C03-8092899-4180611 </span>
	<input type="submit" value="查看或打印发票" >
</div>
<div class="order_detail_middle">
	<div class="left"> 
		<h5>配送地址</h5>
		<span>黄一伦</span><br>
		<span>山东 济南 槐荫区</span><br>
		<span>百事春秋</span><br>
		<span>邮编</span>
	</div>
	<div class="center">
		<h5>付款方式</h5>
		<span>支付宝</span><br>
	</div>
	<div class="right">
		<h5>订单汇总</h5>
		<div class="right_left">
			
			<div>
				<span>商品小计：</span>
			</div>
			<div>
				<span>配送费：</span>
			</div>
			
			<div>
				<span>小计：</span>
			</div>
			<div>
				<h5>总计：</h5>
			</div>
		</div>
		<div class="right_right">
			<div><span>￥123</span></div>
			<div><span>￥123</span></div>
			<div><span>￥123</span></div>
			<h5>￥123</h5>
		</div>
	</div>
</div>

<div class="order_detail_bottom">
	<div class="box">
		<div class="box_left">
			<div>
				<img  width="100" height="100" src="./include/img/41Y9rMm9muL.jpg">
			</div>
			<div class="box_content">
				<h4><a href="" class="h1_a">Kindle Paperwhite电子书阅读器：300 ppi电子墨水触控屏、内置阅读灯、超长续航 </a></h4>
				<div><span>青岛东合信息技术有限公司</span></div>
				<div>卖家: 书山路图书 </div>
				<div><span class="price">￥55.40</span></div>
				<div><b>商品状况：</b> 全新品</div>
				<div><input type='submit' value="再次购买"></div>
			</div>
		</div>
		<div class="box_right">
			<div class="box_right_right">
				<form>
					<input type="button" value="联系卖家">
					<input type="button" value="需要退换货">
					<input type="button" value="补开发票">
					<input type="button" value="撰写商品评论">
					<input type="button" value="隐藏订单">
				</form>
			</div>
			
		</div>
	</div>
</div>

<?php
include 'footer.php';
?>