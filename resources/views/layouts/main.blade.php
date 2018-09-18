<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>六安瓜片网是六安瓜片原产地官方网站，为宣传原产地的六安瓜片品牌、六安瓜片价格，服务茶农茶企</title>
	<meta name="keywords" content="六安瓜片,六安瓜片价格,六安瓜片原产地,白茶文化,白茶种植,白茶历史">
	@yield('title')
	<meta name="description"
		  content="六安瓜片网是由六安县人民政府六安县白茶产业发展办公室、六安瓜片协会主办的官方网站， 六安瓜片企业与广大消费者搭建了信用交易平台，提供最新六安瓜片价格，传递有关六安瓜片产业发展背景和其特有的品质，确保消费者购买真正原产地的六安瓜片，促进行业良性发展。">
	<link rel="stylesheet" href="/css/base.css">
	<link rel="stylesheet" href="/css/index.css">
	<link rel="stylesheet" href="/css/normalize.css">
	@yield('css')
	<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
	<script>
		$(function(){
			$('#friendlinks i:last').remove();
			$('.slides li:first div:gt(4)').appendTo($('.slides li:eq(1)'));
		})
		function randomsort(a, b) {
			return Math.random()>.5 ? -1 : 1;
		}
	</script>
</head>
<body>
@include('layouts.header')

@yield('content')
<!--轮播图  end-->
<!--footer start-->
@include('layouts.footer')
<!--footer end-->

@yield('script')
<script src="/js/jquery.min.js"></script>
<script src="/js/ft-carousel.min.js"></script>
<script type="text/javascript">
	$("#carousel_1").FtCarousel();

	$("#carousel_2").FtCarousel({
		index: 1,
		auto: false
	});

	$("#carousel_3").FtCarousel({
		index: 0,
		auto: true,
		time: 3000,
		indicators: false,
		buttons: true
	});
</script>

<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript">

	$(document).ready(function() {
		//美图切换
		$('#demo01').flexslider({
			animation: "slide",
			direction:"horizontal",
			easing:"swing"
		});
	});

</script>
</body>
</html>