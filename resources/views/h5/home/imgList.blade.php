@extends('h5.layouts.main')
@section('title')
    <title></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
@endsection
@section('content')
    <div class="content_top">
        <div class="arrowl"><a href=""><img src="/h5/images/home.png" alt="首页" height="22"></a></div>
        <div class="context">雄安热线</div>
        <div class="arrowr"><a href="#" class="more" id="dhmore"><img src="/h5/images/more.png" height="23"></a></div>
    </div>
    <div class="cnsnav">
        <div class="navlayer" id="navlayer">
            <div class="cnsnav">
                <ul id="">
                    <li class="selimg"><a href="">首页</a></li>

                    <li><a href="list.php?tid=50">资讯</a></li>

                    <li><a href="list.php?tid=108">价格</a></li>

                    <li><a href="list.php?tid=76">功效</a></li>

                    <li><a href="list.php?tid=55">种植</a></li>

                    <li><a href="list.php?tid=81">冲泡</a></li>

                    <li><a href="list.php?tid=8">图片</a></li>

                    <li><a href="list.php?tid=5">品牌</a></li>


                </ul>
            </div>
        </div>
    </div>
    <header>
        <nav>
            <a target="_blank" href="">首页</a>
            <a href="list.php?tid=50" >资讯</a>
            <a href="list.php?tid=108" >价格</a>
            <a href="list.php?tid=76" >功效</a>
            <a href="list.php?tid=55" >种植</a>
            <a href="list.php?tid=81" >冲泡</a>
            <a href="list.php?tid=5" >图片</a>
            <a href="list.php?tid=132" >品牌</a>
        </nav>
    </header>


    <!-- 元素开始 -->
    <div class="tabBox">
        <div class="hd">
            <h2>当前位置：<a href='index.php'>雄安热线-雄安新区门户网站</a> > <a href='list.php?tid=5'>图片</a> > </h2>
        </div>
        <div class="pblimg">
            <a target="_blank" href="view.php?aid=1710" title="贴饼子熬小鱼"><img src="images/1-1p102220934v5.jpg" alt="贴饼子熬小鱼" /><p>贴饼子熬小鱼</p></a><a target="_blank" href="view.php?aid=1704" title="<font color='#FF0000'>雄县中学</font>"><img src="images/1-1g229220242333.jpg" alt="<font color='#FF0000'>雄县中学</font>" /><p><font color='#FF0000'>雄县中学</font></p></a><a target="_blank" href="view.php?aid=1386" title="<b>容城中学</b>"><img src="images/1-1g229215i5a6-lp.jpg" alt="<b>容城中学</b>" /><p><b>容城中学</b></p></a><a target="_blank" href="view.php?aid=1387" title="<b>河北安新中学</b>"><img src="images/1-1g229215531354.jpg" alt="<b>河北安新中学</b>" /><p><b>河北安新中学</b></p></a><a target="_blank" href="view.php?aid=1320" title="<b>抗战纪念馆</b>"><img src="images/1-1g22921501a24-lp.jpg" alt="<b>抗战纪念馆</b>" /><p><b>抗战纪念馆</b></p></a><a target="_blank" href="view.php?aid=1354" title="<b>白洋淀鸳鸯岛</b>"><img src="images/1-1g229214643d9-lp-lp.jpg" alt="<b>白洋淀鸳鸯岛</b>" /><p><b>白洋淀鸳鸯岛</b></p></a><a target="_blank" href="view.php?aid=1383" title="<b>宋辽边关古地道</b>"><img src="images/1-1g229214126100-lp-lp.jpg" alt="<b>宋辽边关古地道</b>" /><p><b>宋辽边关古地道</b></p></a><a target="_blank" href="view.php?aid=1413" title="<b>白洋淀文化苑</b>"><img src="images/1-1g22921331n44-lp.jpg" alt="<b>白洋淀文化苑</b>" /><p><b>白洋淀文化苑</b></p></a>
        </div>
    </div>

    <div class="pages">
        <ul><li><a>首页</a></li>
            <li><a href='/list.php?tid=5&TotalResult=13&PageNo=2'>下一页</a></li>
            <li><a href='/list.php?tid=5&TotalResult=13&PageNo=2'>末页</a></li>
        </ul>
    </div>

    <!-- 效果导航 -->
    <div class="effectNav">
    <h3></h3>
    <p>电话：13865929250 邮箱：13865929250</p>
@endsection