@extends('layouts.main')
@section('title')
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
@endsection
@section('css')
    <link rel="stylesheet" href="/css/lunbotu.css">
    <link href="/css/baicha.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
            <!--content start-->
    <div class="content w  clearfix">
        <div class="content-l">
            <div class="example">
                <div class="ft-carousel" id="carousel_1">
                    <ul class="carousel-inner">
                        <li class="carousel-item"><img src="images/a1.jpg" /></li>
                        <li class="carousel-item"><img src="images/a2.jpg" /></li>
                        <li class="carousel-item"><img src="images/a3.jpg" /></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content-m">
            <div class="news_text" id="ajbcxw">
                @if($firstNews)
                <h2 class="red"><a href="/html/3291.html" title="安吉白茶协会第四届二次理事会议今日召开" target="_blank">{{substr($firstNews->title,0,24)}}</a>
                    <p>{{$firstNews->meta_description}}</p>
                </h2>
                @endif
                @if($secondNews)
                <h3>
                    @foreach($secondNews as $second)
                    <a href="/html/3278.html" title="{{$second->title}}" target="_blank">{{substr($second->title,0,24)}}</a>
                    @endforeach
                    <div class="clear"></div>
                </h3>
                @endif
            </div>
            <div class="news_img clearfix">
                @if($thirdNews)
                    @foreach($thirdNews as $third)
                        <div class="img ">
                            <div class="imgfl">
                                <a href="" target="_blank">
                                    <span style="position:relative">
                                        <span class="ImgBox">
                                            <img src="/images/2018319165139590.jpg">
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <a href="">{{substr($third->title,0,21)}}</a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="content-r">
            <div class="box mb25" id="rmw_fangtan">
                <h3><a href="http://fangtan.people.com.cn/"><span class="rmicon"></span>新闻排行</a></h3>
                @foreach($currentNews as  $currKey => $currNews)
                @if($currKey == 0)
                <p class="imgstyle">
                    <a href="http://ft.people.com.cn/fangtanGroup.do?id=16784" target="_blank">
                        <img src="images/luntan.jpg" alt=" " width="130" height="90" border="0">
                    </a>{{substr($currNews->title,0,24)}} <a href="">{{substr($currNews->title,0,24)}} </a>
                </p>
                @else
                    <?php
                        break;
                    ?>
                @endif
                @endforeach
                <ul class="list14">
                    @foreach($currentNews as  $currKey => $currNews)
                       @if($currKey> 0)
                    <li><a href="http://ft.people.com.cn/fangtanDetail.do?pid=16782">{{mb_substr($currNews->title,0,10)}}</a></li>
                    @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="contentq w  clearfix">
        <div class="contentq-l">
            <div class="example">
                <div class="ft-carousel" id="carousel_1">
                    <ul class="carousel-inner left-inner clearfix">
                        <li><a href="">茶叶鉴别</a></li>
                    </ul>
                    <ul class="news_img_xiao clearfix">
                        @foreach($knowNews as $knKey => $knew)
                            @if($knKey <2)
                                <div class="imgll imgfll">
                                    <a href="" target="_blank"><span class="ImgBox"><img src="images/20150313123995349534.jpg"></span>{{mb_substr($knew->title,0,10)}}</a>
                                </div>
                            @else
                                <?php
                                    break;
                                ?>
                            @endif
                        @endforeach
                    </ul>
                    <ul class="text-left">
                        @foreach($knowNews as $knKey => $knew)
                            @if($knKey >= 2)
                        <li><a href="">{{mb_substr($knew->title,0,25)}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="contentq-m">
            <div class="news_text" id="ajbcxw">
                @foreach($priceNews as $pKey => $pNew)
                @if($pKey == 0)
                <h2 class="red"><a href="/html/3291.html" title="安吉白茶协会第四届二次理事会议今日召开" target="_blank">{{$pNew->title}}</a>
                    <p>{{$pNew->meta_meta_description}}</p>
                </h2>
                @else
                    <?php
                        break;
                    ?>
                @endif
                @endforeach
                <h3>
                    @foreach($priceNews as $pKey => $pNew)
                        @if($pKey >=1 && $pKey <=6)
                            <a href="/html/3278.html" title="入夏安吉白茶树生长情况" target="_blank">{{mb_substr($pNew->title,0,10)}}</a>
                        @else
                            <?php
                                break;
                            ?>
                        @endif
                    @endforeach
                    <div class="clear"></div>
                </h3>
            </div>
            <div class="news_img clearfix">
                @foreach($priceNews as $pKey => $pNew)
                    @if($pKey > 6)
                        <div class="img ">
                            <div class="imgfl">
                                <a href="" target="_blank">
                                    <span style="position:relative">
                                        <span class="ImgBox">
                                            <img src="images/2018319165139590.jpg">
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <a href="">{{$pNew->title}}</a>
                        </div>
                    @else
                        <?php
                        break;
                        ?>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="content-r">
            <div class="box mb25" id="rmw_fangtan">
                <h3><a href="http://fangtan.people.com.cn/"><span class="rmicon"></span>瓜片冲泡方法</a></h3>
                @foreach($fillNews as $fillKey => $fillNew)
                    @if($fillKey == 0)
                <p class="imgstyle"><a href="http://ft.people.com.cn/fangtanGroup.do?id=16784" target="_blank"><img src="images/luntan.jpg" alt="{{$fillNew->title}}" width="130" height="90" border="0"></a>{{$fillNew->title}}<a href="http://ft.people.com.cn/fangtanGroup.do?id=16784">［阅读] </a>
                    @else
                        <?php
                            break;
                        ?>
                    @endif
                </p>
                @endforeach
                <ul class="list14">
                    @foreach($fillNews as $fillKey => $fillNew)
                        @if($fillKey > 0)
                    <li><a href="http://ft.people.com.cn/fangtanDetail.do?pid=16782">{{$fillNew->title}}</a></li>
                        @else
                            <?php
                                break;
                            ?>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!--content end-->
    <!--content start-->
    <div class="contentq w  clearfix">
        <div class="contentq-l">
            <div class="example">
                <div class="ft-carousel" id="carousel_1">
                    <ul class="carousel-inner left-inner clearfix">
                        <li><a href="">瓜片品牌</a></li>
                    </ul>
                    <ul class="news_img_xiao clearfix">
                        @foreach($brandNews as $brandKey => $brandNew)
                            @if($brandKey <= 1)
                        <div class="imgll imgfll">
                            <a href="" target="_blank"><span class="ImgBox"><img src="images/20150313123995349534.jpg"></span>
                                <p>{{$brandNew->title}}</p>
                            </a>
                        </div>
                            @else
                                <?php
                                    break;
                                ?>
                            @endif
                        @endforeach
                    </ul>
                    <ul class="text-left">
                        @foreach($brandNews as $brandKey => $brandNew)
                            @if($brandKey > 1)
                                <li><a href="">{{$brandNew->title}}</a></li>
                            @else
                            <?php
                                break;
                            ?>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="contentq-m">
            <div class="news_text" id="ajbcxw">
                @foreach($studyNews as $styKey => $studyNew)
                    @if($styKey == 0)
                        <h2 class="red"><a href="/html/3291.html" title="{{$studyNew->title}}" target="_blank">{{$studyNew->title}}</a>
                        <p>{{$studyNew->meta_description}}</p>
                    @else
                        <?php
                           break;
                        ?>
                    @endif
                </h2>
                @endforeach
                <h3>
                    @foreach($studyNews as $styKey => $studyNew)
                        @if($styKey >0 && $styKey <= 6)
                            <a href="/html/3278.html" title="入夏安吉白茶树生长情况" target="_blank">入夏安吉白茶树生长</a>
                        @else
                            <?php
                                break;
                            ?>
                        @endif
                    @endforeach



                    <div class="clear"></div>
                </h3>
            </div>
            <div class="news_img clearfix">
                @foreach($studyNews as $styKey => $studyNew)
                    @if($styKey > 6)
                        <div class="img ">
                            <div class="imgfl"><a href="" target="_blank"><span style="position:relative"><span class="ImgBox"><img src="images/2018319165139590.jpg"></span></a> </div>
                            <a href="">{{$studyNew->title}}</a>
                        </div>
                    @else
                        <?php
                            break;
                        ?>
                    @endif
                @endforeach
            </div>
        </div>

        <div class="content-r">
            <div class="box mb25" id="rmw_fangtan">
                <h3><a href="http://fangtan.people.com.cn/"><span class="rmicon"></span>瓜片功效</a></h3>
                @foreach($effectNews as $effKey => $effNew)
                    @if($effKey == 0)
                <p class="imgstyle">
                    <a href="http://ft.people.com.cn/fangtanGroup.do?id=16784" target="_blank">
                        <img src="images/luntan.jpg" alt=" " width="130" height="90" border="0">
                    </a>{{$effNew->title}}<a href="">［阅读] </a>
                </p>
                    @else
                        <?php
                        break;
                        ?>
                    @endif
                @endforeach
                <ul class="list14">
                    @foreach($effectNews as $effKey => $effNew)
                        @if($effKey > 0)
                            <li><a href="http://ft.people.com.cn/fangtanDetail.do?pid=16782">{{$effNew->title}}</a></li>
                        @else
                            <?php
                            break;
                            ?>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!--content end-->
    <!--轮播图 start-->
    <div class="float_nav" id="float"></div>
    <div class="wrapper">

        <div id="demo01" class="flexslider">
            <ul class="slides">
                <li>
                @foreach($imageNews as $imgKey => $imgNew)
                    <div class="focuspic pic{{$imgKey+1}}">
                        <a href="/html/3284.html">
                            <p class="img"><span class="ImgBox"><img src="images/20180725084239073907.jpg"></span><em>{{$imgNew->title}}</em><i></i></p>
                        </a>
                    </div>
                @endforeach
                </li>
                <li>

                </li>
            </ul>
        </div>

    </div>

@endsection