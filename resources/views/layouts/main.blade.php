<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	@yield('title')
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
	<meta name="baidu-site-verification" content="UIwf5p0taI" />
</head>
<body>
@include('layouts.header')

@yield('content')
<!--轮播图  end-->
<!--footer start-->
<!--footer end-->
@yield('footer')
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