@extends('layouts.main')
@section('title')
    @if($baseConfig)
        <title>{{$baseConfig->title}}-{{$baseConfig->name}}</title>
        <meta name="keywords" content="{{$baseConfig->home_key_word}}" />
        <meta name="description" content="{{$baseConfig->home_meta_description}}" />
    @endif
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
                        @foreach($lunbo as $lb)
                        <li class="carousel-item"><img src="{{env('IMG_URL')}}/{{$lb->photo}}" /></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="content-m">
            <div class="news_text" id="ajbcxw">
                @if($firstNews)
                <h2 class="red"><a href="/thread-{{$firstNews->id}}.html" target="_blank">{{mb_substr($firstNews->title,0,20)}}</a>
                    <p>{{$firstNews->meta_description}}</p>
                </h2>
                @endif
                @if($secondNews)
                <h3>
                    @foreach($secondNews as $second)
                    <a href="/thread-{{$second->id}}.html" title="{{$second->title}}" target="_blank">{{mb_substr($second->title,0,9)}}</a>
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
                                <a href="thread-{{$third->id}}.html" target="_blank">
                                    <span style="position:relative">
                                        <span class="ImgBox">
                                            <img src="{{env('IMG_URL')}}/{{$third->thumbPic}}">
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <a href="/thread-{{$third->id}}.html">{{mb_substr($third->title,0,14)}}</a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="content-r">
            <div class="box mb25" id="rmw_fangtan">
			
			<h3><a href=""><span class="rmicon"></span>茶乡视频</a></h3>
				<embed src='http://player.youku.com/player.php/sid/XMzgxNzg2NTUzNg==/v.swf' allowFullScreen='true' quality='high' width='268' height='200' align='middle' allowScriptAccess='always' type='application/x-shockwave-flash'></embed>
				<br/><br/>
                <h3><a href="/index14.html"><span class="rmicon"></span>平台公告</a></h3>
              
                <ul class="list14">
                    @foreach($publicNews as $publicNew)
                    <li><a href="/thread-{{$publicNew->id}}.html">{{mb_substr($publicNew->title,0,14)}}</a></li>
                    @endforeach
                </ul>
				<br/><br/>
				
            </div>
        </div>
		
    </div>
    <div class="contentq w  clearfix">
        <div class="contentq-l">
            <div class="example">
                <div class="ft-carousel" id="carousel_1">
                    <ul class="carousel-inner left-inner clearfix">
                        <li><a href="/index9.html">瓜片鉴别</a></li>
                    </ul>
                    <ul class="news_img_xiao clearfix">
                        @foreach($knowNews as $knKey => $knew)
                            @if($knKey <2)
                                <div class="imgll imgfll">
                                    <a href="/thread-{{$knew->id}}.html" target="_blank"><span class="ImgBox"><img src="{{env('IMG_URL')}}/{{$knew->thumbPic}}"></span>{{mb_substr($knew->title,0,10)}}</a>
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
                        <li><a href="/thread-{{$knew->id}}.html">{{mb_substr($knew->title,0,25)}}</a></li>
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
                <h2 class="red"><a href="/thread-{{$pNew->id}}.html" title="" target="_blank">{{mb_substr($pNew->title,0,20)}}</a>
                    <p>{{$pNew->meta_description}}</p>
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
                            <a href="/thread-{{$pNew->id}}.html" title="" target="_blank">{{mb_substr($pNew->title,0,9)}}</a>
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
                                <a href="/thread-{{$pNew->id}}.html" target="_blank">
                                    <span style="position:relative">
                                        <span class="ImgBox">
                                            <img src="{{env('IMG_URL')}}/{{$pNew->thumbPic}}">
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <a href="/thread-{{$pNew->id}}.html">{{mb_substr($pNew->title,0,14)}}</a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="content-r">
            <div class="box mb25" id="rmw_fangtan">
                <h3><a href="/index2.html"><span class="rmicon"></span>瓜片冲泡方法</a></h3>
                @foreach($fillNews as $fillKey => $fillNew)
                    @if($fillKey == 0)
                <p class="imgstyle"><a href="/thread-{{$fillNew->id}}.html" target="_blank"><img src="{{env('IMG_URL')}}/{{$fillNew->thumbPic}}" alt="{{$fillNew->title}}" width="130" height="90" border="0"></a>{{$fillNew->title}}<a href="/thread-{{$fillNew->id}}.html">［阅读] </a>
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
                    <li><a href="/thread-{{$fillNew->id}}.html">{{mb_substr($fillNew->title,0,16)}}</a></li>
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
                        <li><a href="/index12.html">徽茶</a></li>
                    </ul>
                    <ul class="news_img_xiao clearfix">
                        @foreach($brandNews as $brandKey => $brandNew)
                            @if($brandKey <= 1)
                        <div class="imgll imgfll">
                            <a href="/thread-{{$brandNew->id}}.html" target="_blank"><span class="ImgBox"><img src="{{env('IMG_URL')}}/{{$brandNew->thumbPic}}"></span>
                                <p>{{mb_substr($brandNew->title,0,10)}}</p>
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
                                <li><a href="/thread-{{$brandNew->id}}.html">{{mb_substr($brandNew->title,0,20)}}</a></li>
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
                        <h2 class="red"><a href="/thread-{{$studyNew->id}}.html" title="{{$studyNew->title}}" target="_blank">{{mb_substr($studyNew->title,0,20)}}</a>
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
                            <a href="/thread-{{$studyNew->id}}.html" title="" target="_blank">{{mb_substr($studyNew->title,0,9)}}</a>
                        @endif
                    @endforeach

                    <div class="clear"></div>
                </h3>
            </div>
            <div class="news_img clearfix">
                @foreach($studyNews as $styKey => $studyNew)
                    @if($styKey > 6)
                        <div class="img">
                            <div class="imgfl"><a href="/thread-{{$studyNew->id}}.html" target="_blank"><span style="position:relative"><span class="ImgBox"><img src="{{env('IMG_URL')}}/{{$studyNew->thumbPic}}"></span></a> </div>
                            <a href="">{{mb_substr($studyNew->title,0,14)}}</a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        <div class="content-r">
            <div class="box mb25" id="rmw_fangtan">
                <h3><a href="/index4.html"><span class="rmicon"></span>瓜片功效</a></h3>
                @foreach($effectNews as $effKey => $effNew)
                    @if($effKey == 0)
                <p class="imgstyle">
                    <a href="/thread-{{$effNew->id}}.html" target="_blank">
                        <img src="{{env('IMG_URL')}}/{{$effNew->thumbPic}}" alt=" " width="130" height="90" border="0">
                    </a>{{$effNew->title}}<a href="/thread-{{$effNew->id}}.html">［阅读] </a>
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
                            <li><a href="/thread-{{$effNew->id}}.html">{{mb_substr($effNew->title,0,16)}}</a></li>
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
                        <a href="/thread-{{$imgNew->id}}.html">
                            <p class="img"><span class="ImgBox"><img src="{{env('IMG_URL')}}/{{$imgNew->thumbPic}}"></span><em>{{mb_substr($imgNew->title,0,15)}}</em><i></i></p>
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
@section('footer')
    <?php
    use App\Models\Link;

    $links = Link::orderBy('id','desc')->get();

    ?>
    <div class="footer-nav">
        <div class="footer-nav-c w">
            <span>六安瓜片网</span>&nbsp;&nbsp;<span>永久网址：www.guapian.cn</span>
        </div>
        <div id="footer">
            <table class="table">
                <tbody>
                <tr>
                    <th width="360" valign="top">
                        <table class="wx">
                            <tbody>
                            <tr>
                                <td><img src="images/weixin.png" alt="" width="109" height="109">
                                    <p align="center">扫一扫关注<br>
                                    </p></td>
                                <td><img src="images/weixin.png" alt="" width="109" height="109">
                                    <p align="center">扫一扫<br>
                                    </p></td>
                                <td><img src="images/weixin.png" alt="" width="109" height="109">
                                    <p align="center">扫一扫<br>
                                    </p></td>
                                <!--<td><img src="/style/2018/images/wx2.jpg" width="109" height="109" alt=""/>
                                    <p align="center">扫一扫关注<br>
                                        六安瓜片更多</p></td>-->
                            </tr>
                            </tbody>
                        </table>
                    </th>
                    <th width="560" valign="top">
                        <dl class="copyright clearfix">
                            <dt>主办单位</dt>
                            <dd>上海徽尚电子商务有限公司<br>
                                徽茶茶叶发展论坛
                            </dd>
                        </dl>
                        <dl class="copyright clearfix">
                            <dt>承建运营</dt>
                            <dd>上海徽尚电子商务有限公司</dd>
                            <dd>六安瓜片产业服务部</dd>
                            <dd>联系人：黄先生 18621791688</dd>
                        </dl>
                        <!--
                         <dl class="copyright clearfix">
                             <dt>茶园证补办</dt>
                             <dd>地址：六安县六安城北科技创业园5号楼4层408办公室</dd>
                             <dd>电话：0572-5223705</dd>
                         </dl>
                        -->
                    </th>
                    <td class="table_co" valign="top"><h5>联系我们</h5>
                        <p>安徽省六安市高铁站二楼</p>
                        <p>服务热线：4008-111-517</p>
                        <p>手机：18621791688</p>
                        <p>QQ：369782511</p></td>
                </tr>
                </tbody>
            </table>
            <table class="table2">
                <tbody>
                <tr>
                    <td>
                        <dl class="copyright clearfix">
                            <dt>友情链接</dt>
                            <dd id="friendlinks">
                                @foreach($links as $link)
                                    <a href="{{$link->url}}" target="_blank">{{$link->name}}</a>
                                    <i>-</i>
                                @endforeach
                            </dd>
                        </dl>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="footer">
            <p><a href="/about">关于本站</a><span> | </span><a
                        href="/instruction">版权声明</a><span> | </span><a
                        href="/payment">本站购物</a><span> | </span><a
                        href="/notice">免责声明</a><span> | </span><a
                        href="/consult">联系方式</a><span></span>

            </p>
            <p class="copyright">六安瓜片网 www.guapian.cn</p>

        </div>
    </div>
@endsection