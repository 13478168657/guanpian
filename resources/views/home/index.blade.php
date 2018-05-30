@extends('layouts.main')
@section('content')
    <link rel="stylesheet" type="text/css" href="/css/lunbotu.css">
    @include('layouts.header')
    <!--main  start-->
    <div class="main w">
        <div class="main-l">
            <ul class="main-l-t">
                @foreach($firstArticles as $firstArticle)
                <li><a href="/thread-{{$firstArticle->id}}">{{$firstArticle->title}}<span>></span></a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="main-c">
            <div class="content">
                <div class="a-content">
                    <div class="carousel-content">
                        <ul class="carousel">
                            <li><img src="/images/pic1.png"></li>
                            <li><img src="/images/pic2.png"></li>
                            <li><img src="/images/pic3.png"></li>
                            <li><img src="/images/pic4.png"></li>
                            <li><img src="/images/pic5.png"></li>
                        </ul>
                        <ul class="img-index"></ul>
                        <div class="carousel-prev"><img src="/images/left1.png"></div>
                        <div class="carousel-next"><img src="/images/right1.png"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-r">
            <div class="main-r-t">
                <h3><a href="/list/{{$fourCategory->id}}.html">{{$fourCategory->name}}</a></h3>
                <span><a href="/list/{{$fourCategory->id}}.html">更多</a></span>
            </div>
            <div class="main-r-n">
                <ul>
                    @foreach($fourArticles as $article)
                        <li><a href="/thread-{{$article->id}}.html">【公告】{{$article->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!--main  end-->
    <!--品牌种类价格专区 start-->
    <div class="pin w clearfix">
        <div class="pin-t">
            <div class="pin-l fl"><h2>{{$firstCategory->name}}</h2></div>
            <div class="pin-r fr">
                <ul>
                    @foreach($firstArticles as $firstArticle)
                    <li><a href="/thread-{{$firstArticle->id}}.html">{{$firstArticle->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="fenlei">
            @foreach($firstArticles as $firstArticle)
            <div class="fenlei-t">
                <a href="/thread-{{$firstArticle->id}}.html"><img src="{{env('IMG_URL')}}/{{$firstArticle->thumbPic}}" alt=""></a>
                <a href="/thread-{{$firstArticle->id}}.html"><h3>{{$firstArticle->title}}</h3></a>
                <p>市场价：<del>{{$firstArticle->market_price}}</del>元</p>
                <p>会员价：<span>{{$firstArticle->member_price}}</span>元</p>
            </div>
            @endforeach
        </div>
    </div>
    <!--品牌种类价格专区 end-->
    <!--ad start-->
    <div class="ad w">
        <img src="/images/ad.jpg" alt="">
    </div>
    <!--ad end-->
    <!--news start-->
    <div class="news w clearfix">
        @foreach($categories as $category)
        <div class="news-l">
            <div class="news-l-t">
                <h2><a href="/list/{{$category->id}}.html">{{$category->name}}</a></h2>
                <span><a href="/list/{{$category->id}}.html">更多</a></span>
            </div>
            <?php
                $articles = \App\Models\Article::where('category_id',$category->id)->select('id','title','created_at')->get();
            ?>
            <div class="news-l-b">
                <ul>
                    @foreach($articles as $article)
                    <li><a href="/thread-{{$article->id}}.html">{{$article->title}}</a><span>{{date('Y-m-d',strtotime($article->created_at))}}</span></li>
                    @endforeach

                </ul>
            </div>
        </div>
        @endforeach
    </div>

    <div class="flinks w">
        友情链接：
        @foreach($links as $link)
            <a href="{{$link->url}}">{{$link->name}}</a>
            <span>|</span>
        @endforeach

    </div>
@endsection
@section('script')
    <!--links end-->
    <!--轮播图 start-->
    <script type="text/javascript" src="/scripts/carousel.js"></script>
    <script type="text/javascript">
        $(function(){
            $(".carousel-content").carousel({
                carousel : ".carousel",//轮播图容器
                indexContainer : ".img-index",//下标容器
                prev : ".carousel-prev",//左按钮
                next : ".carousel-next",//右按钮
                timing : 3000,//自动播放间隔
                animateTime : 700,//动画时间
                autoPlay : true,//是否自动播放 true/false
                direction : "left",//滚动方向 right/left
            });

            $(".carousel-content").hover(function(){
                $(".carousel-prev,.carousel-next").fadeIn(300);
            },function(){
                $(".carousel-prev,.carousel-next").fadeOut(300);
            });

            $(".carousel-prev").hover(function(){
                $(this).find("img").attr("src","./images/left2.png");
            },function(){
                $(this).find("img").attr("src","./images/left1.png");
            });
            $(".carousel-next").hover(function(){
                $(this).find("img").attr("src","./images/right2.png");
            },function(){
                $(this).find("img").attr("src","./images/right1.png");
            });
        });
    </script>
    <!--轮播图 end-->
@endsection
@section('css')
    <link rel="stylesheet" href="/css/index.css">
@endsection