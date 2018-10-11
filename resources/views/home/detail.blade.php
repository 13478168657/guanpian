@extends('layouts.main')
@section('title')
    <title>{{$article->title}}-六安瓜片网</title>
    <meta name="keywords" content="{{$article->meta_key_word}}" />
    <meta name="description" content="{{$article->meta_description}}"/>
@endsection
@section('content')
    <link rel="stylesheet" href="/css/details.css">
    <div class="news w clearfix">
        <div class="news-l">
            <div class="mainLeft">
                <div class="BreadNav">
                    <a href="/">首页</a>／<a href="/index{{$category->id}}.html" class="hover">{{$category->name}}</a>／<a href="/thread-{{$article->id}}.html">{{$article->title}}</a>
                </div>
                <h1>{{$article->title}}</h1>
                <div class="font2 adimg">
                    <span>发布日期：{{$article->created_at}}</span>
                    <span>出处：{{$article->source}}</span>
                    <span>作者：{{$article->author}}</span>
                    <span>阅读：{{$article->visit_num}}</span>
                </div>
                <div class="content">
                    <?php
                    echo htmlspecialchars_decode($article->content);
                    ?>
                </div>
                <div class="connext adimg">
                    @if($prevArticle)
                        <span class="nextup"><a href="/thread-{{$prevArticle->id}}.html">{{$prevArticle->title}}</a></span>
                    @endif
                    @if($nextArticle)
                        <span class="next"><a href="/thread-{{$nextArticle->id}}.html">{{$nextArticle->title}}</a></span>
                    @endif
                </div>
            </div>
            <div class="yuedu">
                <div class="xiangguan"><span>相关阅读</span></div>
            </div>
            <div class="yuedu-left clearfix">
                <ul>
                    @foreach($articles as $k => $art)
                    @if($k < 5)
                    <li class="item clear active">
                        <span class="li_dot left">
                            <i></i>
                        </span>
                        <a class="no_line left" href="/thread-{{$art->id}}.html">{{$art->title}}</a>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
            <div class="yuedu-right clearfix">
                <ul>
                    @foreach($articles as $k => $art)
                        @if($k >= 5)
                            <li class="item clear active">
                        <span class="li_dot left">
                            <i></i>
                        </span>
                                <a class="no_line left" href="/thread-{{$art->id}}.html">{{$art->title}}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
			      <div style="clear: both;"></div>
               <div class="shengming ">
                【版权及免责声明】凡注明"转载来源"的作品，均转载自其它媒体，转载目的在于传递更多的信息，并不代表本网赞同其观点和对其真实性负责。六安瓜片网倡导尊重与保护知识产权，如发现本站文章存在内容、版权或其它问题，烦请联系。 联系微信：18621791688，我们将及时沟通与处理。
            </div>
        </div>
		
        <div class="news-r">
            <div class="news-r-n">
                @foreach($categories as $k=>$cat)
                        <?php
                        $articles = \App\Models\Article::where('category_id',$cat->id)->where('status',3)->select('id','title','thumbPic')->orderBy('created_at','desc')->limit(3)->get();
                        ?>
                        <div class="news-r-t">
                            <h2>{{$cat->name}}</h2>
                        </div>
                        <ul class="side_class3">
                            @foreach($articles as $article)
                                <li>
                                    <div class="limg">
                                        <a href="/thread-{{$article->id}}.html" target="_blank" >
                                            <img src="{{env('IMG_URL')}}/{{$article->thumbPic}}" alt="{{$article->meta_description}}" >
                                        </a>
                                    </div>
                                    <div class="rtext">
                                        <div class="side3_title"><a href="/thread-{{$article->id}}.html" target="_blank" >{{$article->title}}
                                            </a></div>
                                        <div class="side3_redu">{{$article->visit_num}}</div>
                                    </div>
                                    <div style="clear:both"></div>
                                </li>
                                <div style="clear:both"></div>
                            @endforeach
                        </ul>
                @endforeach
            </div>
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