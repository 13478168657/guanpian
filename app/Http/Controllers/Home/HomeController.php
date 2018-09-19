<?php

namespace App\Http\Controllers\Home;

use App\Models\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Advertisement;
use App\Models\AdSpace;
use App\Models\BaseConfig;
use App\Models\Goods;
use App\Utils\PageUtil;
class HomeController extends Controller
{

    public function index(Request $reques){
        $data['secondNews'] = Article::where('category_id',6)->where('status',3)->OrderBy('id','desc')->take(12)->skip(1)->get();
        $data['firstNews'] = Article::where('category_id',6)->where('status',3)->OrderBy('id','desc')->first();
        $data['thirdNews'] = Article::where('category_id',6)->where('status',3)->OrderBy('id','desc')->take(2)->skip(13)->get();
        $data['currentNews'] = Article::where('status',3)->orderBy('id','desc')->take(7)->get();
        $data['knowNews'] = Article::where('category_id',9)->where('status',3)->OrderBy('id','desc')->take(6)->get();
        $data['priceNews'] = Article::where('category_id',1)->where('status',3)->OrderBy('id','desc')->take(9)->get();
        $data['fillNews'] = Article::where('category_id',2)->where('status',3)->OrderBy('id','desc')->take(9)->get();
        $data['brandNews'] = Article::where('category_id',12)->where('status',3)->OrderBy('id','desc')->take(5)->get();
        $data['studyNews'] = Article::where('category_id',13)->where('status',3)->OrderBy('id','desc')->take(6)->get();
        $data['effectNews'] = Article::where('category_id',4)->where('status',3)->OrderBy('id','desc')->take(5)->get();
        $data['imageNews'] = Article::where('category_id',11)->where('status',3)->OrderBy('id','desc')->take(10)->get();
        $data['lunbo'] = Advertisement::where('position_id',4)->get();
        return view('home.index',$data);

    }

    public function lists(Request $request,$id){
        $position = strpos($id, 's');;

        if($position < 0 || $position === false){
            $id = $id;
            $page=1;
        }else{
            $info = $id;
            $id = substr($info, 0,strpos($info, 's'));
            $page = substr($info,strpos($info, 's')+1);
        }
        $request->page = $page;
        $pageSize = 10;
        $category =  Category::where('id',$id)->first();
        $categories = Category::where('base_id',1)->where('id','!=',$category->id)->orderBy('number','desc')->limit(3)->get();
        $articles = Article::where('status',3)->where('category_id',$id)->orderBy('created_at','desc')->paginate($pageSize);
        $pageSize = PageUtil::getPage($page,$articles->total(),$pageSize,$id,'s');
        if($id == 11){
            return view('home.imgList',['category'=>$category,'categories'=>$categories,'articles'=>$articles,'pageSize'=>$pageSize,'page'=>$page]);
        }
        return view('home.list',['category'=>$category,'categories'=>$categories,'articles'=>$articles,'pageSize'=>$pageSize,'page'=>$page]);
        return view('home.list');
    }

    public function detail(Request $request,$id){
        $article = Article::where('id',$id)->first();
        $article->visit_num = $article->visit_num+1;
        $article->save();
        $category =  Category::where('id',$article->category_id)->first();
        $nextArticle = Article::where('id',$id+1)->first();
        $prevArticle = Article::where('id',$id-1)->first();
        $categories = Category::where('base_id',1)->where('id','!=',$article->category_id)->orderBy('number','desc')->take(3)->get();
        return view('home.detail',['article'=>$article,'categories'=>$categories,'category'=>$category,'nextArticle'=>$nextArticle,'prevArticle'=>$prevArticle]);
        return view('home.detail');
    }

    public function goodsDetail(Request $request,$id){
        $goods = Goods::where('id',$id)->where('status',3)->first();
        $goods->visit_num = $goods->visit_num+1;
        $goods->save();
        $nextGoods = Goods::where('id',$id+1)->first();
        $prevGoods = Goods::where('id',$id-1)->first();
        $category =  Category::where('id',1)->first();
        $categories = Category::where('base_id',1)->where('id','!=',1)->orderBy('number','desc')->take(3)->get();
        return view('home.goodsDetail',['goods'=>$goods,'categories'=>$categories,'category'=>$category,'nextGoods'=>$nextGoods,'prevGoods'=>$prevGoods]);
    }
}