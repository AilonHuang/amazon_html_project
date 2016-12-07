<?php
include 'header.php';
?>
<link rel="stylesheet" href="./include/css/car.css">

<div class="car">
	<div class="car_left">
		<h2>购物车</h2>
		<div class="a_row">
			<div class="a_row_right a_row_price">数量</div>
			<div class="a_row_right ">价格</div>
		</div>
		<div class="box">
			<div class="box_left">
				<div>
					<img  width="100" height="100" <img src="./include/img/41Y9rMm9muL.jpg">
				</div>
				<div class="box_content">
					<h4><a href="" class="h1_a">Kindle Paperwhite电子书阅读器：300 ppi电子墨水触控屏、内置阅读灯、超长续航 </a></h4>
					<span class="green">现在有货</span><br>
					<span>此商品可享受满99元免费送货 </span><br>
					<span><a href="" class="nav_a">删除</a> | <a href="" class="nav_a">收藏</a></span>
				</div>
			</div>
			<div class="box_right">
				<div class="box_right_right a_row_price">
					<select>
						<option>1</option>
					</select>
				</div>
				<div class="box_right_right total_price">￥ 958.00</div>
			</div>
		</div>
		<div class="a_row_bottom">
			<p>
				<b>小计（1件商品）:</b><span class="total_price">￥ 958.00</span>
			</p>
		</div>
	</div>
	<div class="car_right">
		<div class="car_right_top">
			<span><span class="green">您的订单可享受免费配送 </span>请在订单信息确认页面选择快递送货上门<a href="" class="nav_a">了解更多</a></x	>
		</div>
		<div class="car_right_center">
			<p>
				<b>小计（1件商品）</b>:<span class="total_price">￥ 958.00</span>
			</p>
			<form action="account_center.php" method="">
			<input type="submit" value="进入结算中心">
			</form>
		</div>
	</div>
</div>

<?php
include 'footer.php';
?>