@extends('layouts.main')
@section('title')
    @if($page>=2)
        <title>{{$category->meta_title}}-六安瓜片网-第{{$page}}页</title>
    @else
        <title>{{$category->meta_title}}-六安瓜片网</title>
    @endif
    <meta name="keywords" content="{{$category->meta_keyword}}" />
    <meta name="description" content="{{$category->meta_description}}" />
@endsection
@section('css')
    <link rel="stylesheet" href="/css/list.css">
    <link rel="stylesheet" href="/css/details.css">
    <link href="/css/baicha.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" rev="stylesheet" href="/css/global.css" type="text/css" media="all" />
    <link rel="stylesheet" rev="stylesheet" href="/css/listglobal.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/lunbotu.css">
@endsection

@section('content')
<script>
    $(function(){
        $('#friendlinks i:last').remove();
        $('.slides li:first div:gt(4)').appendTo($('.slides li:eq(1)'));
    })
    function randomsort(a, b) {
        return Math.random()>.5 ? -1 : 1;
    }
</script>
<!--breadCrumbs_begin-->
<div id="breadCrumbs">
    <a href="/" target="_self" title="首页" class="CurrChnlCls">首页</a>&nbsp;&gt;&nbsp;<a href="/index{{$category->id}}.html" target="_self" title="{{$category->name}}" class="CurrChnlCls">{{$category->name}}</a>
</div>
<!--breadCrumbs_end-->
<!--main_begin-->
<div id="main" class="picList noRightS">
    <ul class="list">
        @foreach($articles as $article)
        <li>
            <a href="/thread-{{$article->id}}.html" target="_self"><img src="{{env('IMG_URL')}}/{{$article->thumbPic}}" alt="{{$article->title}}"/></a>
            <h2>
                <a href="/thread-{{$article->id}}.html" target="_self" title="{{$article->title}}">{{$article->title}}</a>
            </h2>
            <p class="info"><span>{{date('Y-m-d',strtotime($article->created_at))}}</span></p></li>
        @endforeach
    </ul>
</div>
<div class="pagination">
    <?php
    echo htmlspecialchars_decode($pageSize);
    ?>
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