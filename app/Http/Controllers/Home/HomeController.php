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

    public function index(){
//        if($this->isMobile()){
//            return redirect('/h/index');
//        }
        $data['secondNews'] = Article::where('category_id',6)->where('status',3)->OrderBy('id','desc')->take(12)->skip(1)->get();
        $data['firstNews'] = Article::where('category_id',6)->where('status',3)->OrderBy('id','desc')->first();
        $data['thirdNews'] = Article::where('category_id',6)->where('status',3)->OrderBy('id','desc')->take(2)->skip(13)->get();
        $data['currentNews'] = Article::where('status',3)->orderBy('id','desc')->take(7)->get();
        $data['knowNews'] = Article::where('category_id',9)->where('status',3)->OrderBy('id','desc')->take(6)->get();
        $data['priceNews'] = Article::where('category_id',1)->where('status',3)->OrderBy('id','desc')->take(9)->get();
//        dd($data['priceNews']);
        $data['fillNews'] = Article::where('category_id',2)->where('status',3)->OrderBy('id','desc')->take(9)->get();
        $data['brandNews'] = Article::where('category_id',12)->where('status',3)->OrderBy('id','desc')->take(5)->get();
        $data['studyNews'] = Article::where('category_id',13)->where('status',3)->OrderBy('id','desc')->take(9)->get();
        $data['effectNews'] = Article::where('category_id',4)->where('status',3)->OrderBy('id','desc')->take(5)->get();
        $data['imageNews'] = Article::where('category_id',11)->where('status',3)->OrderBy('id','desc')->take(10)->get();
        $data['lunbo'] = Advertisement::where('position_id',4)->get();
        $data['publicNews'] = Article::where('category_id',14)->where('status',3)->orderBy('id','desc')->take(3)->get();
        $baseConfig = BaseConfig::first();
        $data['baseConfig'] = $baseConfig;
        return view('home.index',$data);

    }

    public function lists($id){
        $position = strpos($id, 's');;

        if($position < 0 || $position === false){
            $id = $id;
            $page=1;
//            if($this->isMobile()){
//                return redirect('/h/index'.$id.'.html');
//            }
        }else{
            $info = $id;
            $id = substr($info, 0,strpos($info, 's'));
            $page = substr($info,strpos($info, 's')+1);
//            if($this->isMobile()){
//                return redirect('/h/index'.$id.'s'.$page.'.html');
//            }
        }

//        $request->page = $page;
        if($id == 11){
            $pageSize = 12;
        }else{
            $pageSize = 10;
        }
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

    public function detail($id){
//        if($this->isMobile()){
//            return redirect('/h/thread-'.$id.'.html');
//        }
        $article = Article::where('id',$id)->first();
        $article->visit_num = $article->visit_num+1;

        $article->save();
        $category =  Category::where('id',$article->category_id)->first();
        $nextArticle = Article::where('id',$id+1)->first();
        $prevArticle = Article::where('id',$id-1)->first();
        $articles = Article::where('category_id',$article->category_id)->take(10)->orderBy('id','desc')->get();
        $categories = Category::where('base_id',1)->where('id','!=',$article->category_id)->orderBy('number','desc')->take(3)->get();
        return view('home.detail',['article'=>$article,'categories'=>$categories,'category'=>$category,'nextArticle'=>$nextArticle,'prevArticle'=>$prevArticle,'articles'=>$articles]);
        return view('home.detail');
    }

    public function goodsDetail($id){
        $goods = Goods::where('id',$id)->where('status',3)->first();
        $goods->visit_num = $goods->visit_num+1;
        $goods->save();
        $nextGoods = Goods::where('id',$id+1)->first();
        $prevGoods = Goods::where('id',$id-1)->first();
        $category =  Category::where('id',1)->first();
        $categories = Category::where('base_id',1)->where('id','!=',1)->orderBy('number','desc')->take(3)->get();
        return view('home.goodsDetail',['goods'=>$goods,'categories'=>$categories,'category'=>$category,'nextGoods'=>$nextGoods,'prevGoods'=>$prevGoods]);
    }

    public function hindex(){

        $data['news'] = Article::where('category_id',6)->where('status',3)->OrderBy('id','desc')->take(7)->get();
        $data['knowNews'] = Article::where('category_id',9)->where('status',3)->OrderBy('id','desc')->take(7)->get();
        $data['priceNews'] = Article::where('category_id',1)->where('status',3)->OrderBy('id','desc')->take(7)->get();
        $data['fillNews'] = Article::where('category_id',2)->where('status',3)->OrderBy('id','desc')->take(7)->get();
        $data['brandNews'] = Article::where('category_id',12)->where('status',3)->OrderBy('id','desc')->take(7)->get();
        $data['studyNews'] = Article::where('category_id',13)->where('status',3)->OrderBy('id','desc')->take(7)->get();
        $data['plantNews'] = Article::where('category_id',10)->where('status',3)->OrderBy('id','desc')->take(6)->get();//种植新闻
        $data['effectNews'] = Article::where('category_id',4)->where('status',3)->OrderBy('id','desc')->take(7)->get();
        $data['imageNews'] = Article::where('category_id',11)->where('status',3)->OrderBy('id','desc')->take(6)->get();
        $data['lunbo'] = Advertisement::where('position_id',4)->get();
        $baseConfig = BaseConfig::first();
        $data['baseConfig'] = $baseConfig;
        return view('h5.home.index',$data);
    }

    public function hlist($id){
        $position = strpos($id, 's');

        if($position < 0 || $position === false){
            $id = $id;
            $page=1;
        }else{
            $info = $id;
            $id = substr($info, 0,strpos($info, 's'));
            $page = substr($info,strpos($info, 's')+1);
        }
//        $request->page = $page;
        $pageSize = 8;
        $category =  Category::where('id',$id)->first();
        $categories = Category::where('base_id',1)->where('id','!=',$category->id)->orderBy('number','desc')->limit(3)->get();
        $articles = Article::where('status',3)->where('category_id',$id)->orderBy('created_at','desc')->paginate($pageSize);
        $pageSize = PageUtil::gethPage($page,$articles->total(),$pageSize,$id,'s');

        if($id == 11){
            return view('h5.home.imgList',['category'=>$category,'categories'=>$categories,'articles'=>$articles,'pageSize'=>$pageSize,'page'=>$page]);
        }
        return view('h5.home.list',['category'=>$category,'categories'=>$categories,'articles'=>$articles,'pageSize'=>$pageSize,'page'=>$page]);
    }

    public function hdetail($id){

        $article = Article::where('id',$id)->first();
        $article->visit_num = $article->visit_num+1;
        $article->save();
        $category =  Category::where('id',$article->category_id)->first();
        $nextArticle = Article::where('id',$id+1)->first();
        $prevArticle = Article::where('id',$id-1)->first();
        $articles = Article::where('category_id',$article->category_id)->take(6)->orderBy('id','desc')->get();
        $categories = Category::where('base_id',1)->where('id','!=',$article->category_id)->orderBy('number','desc')->take(3)->get();
//        return view('home.detail',['article'=>$article,'categories'=>$categories,'category'=>$category,'nextArticle'=>$nextArticle,'prevArticle'=>$prevArticle,'articles'=>$articles]);
        return view('h5.home.detail',['article'=>$article,'categories'=>$categories,'category'=>$category,'nextArticle'=>$nextArticle,'prevArticle'=>$prevArticle,'articles'=>$articles]);
    }


    public function isMobile()
    {
        // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
        if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
        {
            return true;
        }
        // 如果via信息含有wap则一定是移动设备
        if (isset ($_SERVER['HTTP_VIA']))
        {
            // 找不到为flase,否则为true
            return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
        }
        // 脑残法，判断手机发送的客户端标志,兼容性有待提高
        if (isset ($_SERVER['HTTP_USER_AGENT']))
        {
            $clientkeywords = array ('nokia',
                'sony',
                'ericsson',
                'mot',
                'samsung',
                'htc',
                'sgh',
                'lg',
                'sharp',
                'sie-',
                'philips',
                'panasonic',
                'alcatel',
                'lenovo',
                'iphone',
                'ipod',
                'blackberry',
                'meizu',
                'android',
                'netfront',
                'symbian',
                'ucweb',
                'windowsce',
                'palm',
                'operamini',
                'operamobi',
                'openwave',
                'nexusone',
                'cldc',
                'midp',
                'wap',
                'mobile'
            );
            // 从HTTP_USER_AGENT中查找手机浏览器的关键字
            if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
            {
                return true;
            }
        }
        if (isset ($_SERVER['HTTP_ACCEPT']))
        {
            // 如果只支持wml并且不支持html那一定是移动设备
            // 如果支持wml和html但是wml在html之前则是移动设备
            if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
            {
                return true;
            }
        }
        return false;
    }
}