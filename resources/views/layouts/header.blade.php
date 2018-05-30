<?php
use App\Models\Article;
use App\Models\Category;
use App\Models\Advertisement;
use App\Models\AdSpace;
$firstCategory = Category::where('base_id',1)->orderBy('number','desc')->first();
$firstArtices = Article::where('category_id',$firstCategory->id)->orderBy('number','desc')->limit(10)->get();
$categories = Category::where('base_id',1)->where('id','!=',$firstCategory->id)->orderBy('number','desc')->limit(3)->get();
//$fourCategory = Category::where('base_id',1)->orderBy('number','asc')->limit(1)->first();
//$fourArticles = Article::where('category_id',$fourCategory->id)->orderBy('number','desc')->limit(10)->get();
?>

<div class="header clearfix">
    <div class="w">
        <div class="logo">
            <a href=""><img src="/images/logo.png" alt="马陆葡萄网" title="马陆葡萄网"></a>
        </div>
        <div class="logo-left">
            <a href=""><img src="/images/luntan_bg.png" alt="马陆葡萄网" title="马陆葡萄网"></a>
        </div>
        <div class="logo-right">
            <a href=""><img src="/images/gifweixin.gif" alt="马陆葡萄网" title="马陆葡萄网"></a>
        </div>
    </div>
</div>
<div class="nav clearfix">
    <div class="w nav-top">
        <span>{{$firstCategory->name}}</span>
        <ul>
            <li><a href="/">首页</a></li>
            @foreach($categories as $category)
                <li><a href="/list/{{$category->id}}">{{$category->name}}</a></li>
            @endforeach
            {{--<li><a href="/list">马陆葡萄采摘园</a></li>--}}
            {{--<li><a href="/list">葡萄知识</a></li>--}}
            <li><a href="/list">联系我们</a></li>
        </ul>
    </div>
</div>