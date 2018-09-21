@extends('h5.layouts.main')
@section('title')
    <title></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
@endsection
@section('content')
    <div class="content_top">
        <div class="arrowl"><a href=""><img src="/h5/images/home.png" alt="首页" height="22"></a></div>
        <div class="context">六安瓜片网</div>
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
    <h3 class="headNew"><a href="view.php?aid=2038" title="【重要通知】2018河北保定雄安新区安">【重要通知】2018河北保定雄安新区安</a></h3>
    <h5 class="subNew">2018河北保定雄安新区安新县教师招聘300名公告已经发布，请有意...<a href="view.php?aid=2038">[更多]</a></h5>

    <!-- 焦点图 -->
    <div class="imgSwipeMain">
        <div id="slider" class="swipe">
            <div class="swipe-wrap swiper-wrapper">
                <div class="image swiper-slide" style="background:url(images/1-1p4120951550-l.jpg) center no-repeat;background-size: cover;"> <a href="view.php?aid=2023" target="_blank"></a>
                    <div class="title">
                        <p>坚持“四个靠”!雄安新区引智选才工作将这样展开</p>
                    </div>
                </div>
                <div class="image swiper-slide" style="background:url(images/1-1p3302230459c-lp.jpg) center no-repeat;background-size: cover;"> <a href="view.php?aid=2018" target="_blank"></a>
                    <div class="title">
                        <p>河南濮阳刊文支持雄安新区建设  已做好“当好水</p>
                    </div>
                </div>
                <div class="image swiper-slide" style="background:url(images/1-1p32922105bu-lp.jpg) center no-repeat;background-size: cover;"> <a href="view.php?aid=2013" target="_blank"></a>
                    <div class="title">
                        <p>雄安新区的考古和文物保护的编制工作已完成</p>
                    </div>
                </div>
                <div class="image swiper-slide" style="background:url(images/1-1p32h2013yi-lp.jpg) center no-repeat;background-size: cover;"> <a href="view.php?aid=2004" target="_blank"></a>
                    <div class="title">
                        <p>党工委委员（扩大）会议要求  持续深入纠正“四</p>
                    </div>
                </div>
                <div class="image swiper-slide" style="background:url(images/1-1p3252119542b-lp.jpg) center no-repeat;background-size: cover;"> <a href="view.php?aid=1995" target="_blank"></a>
                    <div class="title">
                        <p>未来的雄安新区  你一定意想不到</p>
                    </div>
                </div>

            </div>
        </div>
        <div id="position"></div>
    </div>

    <!-- Tab切换（高度自适应示范） -->
    <div id="tabBox1" class="tabBox">
        <div class="hd">
            <h3><a href="list.php?tid=50" >资讯</a><span>News</span></h3>
            <!--
                <ul>
              <li><a href="javascript:void(0)">政企</a></li><li><a href="javascript:void(0)">专题</a></li>
            </ul>
            -->
        </div>
        <div class="bd" id="tabBox1-bd">
            <div class="con">
                <!-- 高度自适应需添加外层 -->
                <ul>
                    <li><a href="view.php?aid=2035" title="我省力保雄安新区起步区安全度汛">我省力保雄安新区起步区安全度汛</a></li>
                    <li><a href="view.php?aid=2032" title="雄安新区总体规划将于6月统一交给中央">雄安新区总体规划将于6月统一交给中央</a></li>
                    <li><a href="view.php?aid=2027" title="雄安三县开展全民国家安全教育日宣传活动">雄安三县开展全民国家安全教育日宣传活动</a></li>
                    <li><a href="view.php?aid=2025" title="雄安新区中关村科技园首批签约企业座谈会在">雄安新区中关村科技园首批签约企业座谈会在</a></li>
                    <li><a href="view.php?aid=2020" title="自然资源部部长陆昊到雄安新区调研">自然资源部部长陆昊到雄安新区调研</a></li>
                    <li><a href="view.php?aid=2018" title="河南濮阳刊文支持雄安新区建设  已做好“当">河南濮阳刊文支持雄安新区建设  已做好“当</a></li>
                    <li><a href="view.php?aid=2008" title="今年新区建设与绿色建材产业交流会隆重举行">今年新区建设与绿色建材产业交流会隆重举行</a></li>

                </ul>
            </div><div class="con">
                <!-- 高度自适应需添加外层 -->
                <ul>
                    <li><a href="view.php?aid=2023" title="坚持“四个靠”!雄安新区引智选才工作将这">坚持“四个靠”!雄安新区引智选才工作将这</a></li>
                    <li><a href="view.php?aid=2022" title=" 陈刚书记在安新县调研！加快构建共建共享"> 陈刚书记在安新县调研！加快构建共建共享</a></li>
                    <li><a href="view.php?aid=2016" title="中国移动雄安新区举办数字城市基础设施规划">中国移动雄安新区举办数字城市基础设施规划</a></li>
                    <li><a href="view.php?aid=2014" title="生态建设贯穿雄安新区全过程  环保企业已经">生态建设贯穿雄安新区全过程  环保企业已经</a></li>
                    <li><a href="view.php?aid=2013" title="雄安新区的考古和文物保护的编制工作已完成">雄安新区的考古和文物保护的编制工作已完成</a></li>
                    <li><a href="view.php?aid=2011" title="雄安首个双创——“雄安绿地双创中心”正式">雄安首个双创——“雄安绿地双创中心”正式</a></li>
                    <li><a href="view.php?aid=2007" title="戴厚良表示加快发展地热能有新机会  将全力">戴厚良表示加快发展地热能有新机会  将全力</a></li>

                </ul>
            </div>
        </div>
    </div>
    <a class="readMore" href="list.php?tid=50">进入频道&gt;&gt;</a>
    <script type="text/javascript">
        TouchSlide( { slideCell:"#tabBox1",
            endFun:function(i){ //高度自适应
                var bd = document.getElementById("tabBox1-bd");
                bd.parentNode.style.height = bd.children[i].children[0].offsetHeight+"px";
                if(i>0)bd.parentNode.style.transition="200ms";//添加动画效果
            }
        } );</script>
    <!-- 多图滚动 -->
    <div id="scrollBox" class="scrollBox">
        <div class="bd">
            <ul>
                <li><a class="pic" href="view.php?aid=2037"><img _src="images/1-1p60g052520-l.jpg" alt="应按国际标准在雄安新区建第三家证券交易所" src="/m/style/images/blank.png" /></a>
                    <p>应按国际标准在雄安新区建第三家证券交易所</p>
                </li>
                <li><a class="pic" href="view.php?aid=2036"><img _src="images/1-1p60g050070-l.jpg" alt="雄安新区高考准备工作已经就绪" src="/m/style/images/blank.png" /></a>
                    <p>雄安新区高考准备工作已经就绪</p>
                </li>

            </ul>
            <ul>
                <li><a class="pic" href="view.php?aid=2034"><img _src="images/1-1p522135019243-lp.jpg" alt="雄安新区打造汽车自动驾驶城市" src="/m/style/images/blank.png" /></a>
                    <p>雄安新区打造汽车自动驾驶城市</p>
                </li>
                <li><a class="pic" href="view.php?aid=2033"><img _src="images/1-1p5221346320-l.png" alt="众多学校参与雄安新区教育帮扶活动" src="/m/style/images/blank.png" /></a>
                    <p>众多学校参与雄安新区教育帮扶活动</p>
                </li>

            </ul>
            <ul>
                <li><a class="pic" href="view.php?aid=2032"><img _src="images/1-1p5221343310-l.jpg" alt="雄安新区总体规划将于6月统一交给中央" src="/m/style/images/blank.png" /></a>
                    <p>雄安新区总体规划将于6月统一交给中央</p>
                </li>
                <li><a class="pic" href="view.php?aid=2031"><img _src="images/1-1p4200941270-l.jpg" alt="百度与美团合作：在雄安新区测试无人驾驶送外卖" src="/m/style/images/blank.png" /></a>
                    <p>百度与美团合作：在雄安新区测试无人驾驶送外卖</p>
                </li>

            </ul>
        </div>
        <div class="hd"> <span class="prev"></span>
            <ul>
            </ul>
            <span class="next"></span> </div>
    </div>
    <!-- scrollBox E -->
    <script type="text/javascript">
        TouchSlide({
            slideCell:"#scrollBox",
            titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
            effect:"leftLoop",
            autoPage:true, //自动分页
            switchLoad:"_src" //切换加载，真实图片路径为"_src"
        });
    </script>
    <!-- Tab切换 -->
    <div id="tabBox2" class="tabBox">
        <div class="hd">
            <h3><a href="list.php?tid=108" >价格</a><span>Focus</span></h3>

        </div>
        <div class="bd">
            <ul>
                <li><a href="view.php?aid=2038" title="【重要通知】2018河北保定雄安新区安新县教">【重要通知】2018河北保定雄安新区安新县教</a></li>
                <li><a href="view.php?aid=2036" title="雄安新区高考准备工作已经就绪">雄安新区高考准备工作已经就绪</a></li>
                <li><a href="view.php?aid=2033" title="众多学校参与雄安新区教育帮扶活动">众多学校参与雄安新区教育帮扶活动</a></li>
                <li><a href="view.php?aid=2026" title="好未来与雄安新区共建智慧教育示范校">好未来与雄安新区共建智慧教育示范校</a></li>
                <li><a href="view.php?aid=2012" title="雄安新区迎来了“新成员” 莫斯科交通学院">雄安新区迎来了“新成员” 莫斯科交通学院</a></li>
                <li><a href="view.php?aid=2010" title="河北工业大学将在115周年校庆之际  设立雄">河北工业大学将在115周年校庆之际  设立雄</a></li>
                <li><a href="view.php?aid=2005" title="天津二商校培训班新一期已开课  在雄安就业">天津二商校培训班新一期已开课  在雄安就业</a></li>

            </ul><ul>
                <li><a href="view.php?aid=1916" title="梅西，C罗谁是当今最佳？还是拿数据说话吧">梅西，C罗谁是当今最佳？还是拿数据说话吧</a></li>
                <li><a href="view.php?aid=1773" title="北京体育大学以优质体育资源助力雄安新区建">北京体育大学以优质体育资源助力雄安新区建</a></li>
                <li><a href="view.php?aid=1540" title="雄安新区将编制体育事业发展规划 或建水上">雄安新区将编制体育事业发展规划 或建水上</a></li>
                <li><a href="view.php?aid=1541" title="“雄安体育”有多大想象空间?">“雄安体育”有多大想象空间?</a></li>
                <li><a href="view.php?aid=1542" title="河北省体育局高标准推进雄安新区公共体育服">河北省体育局高标准推进雄安新区公共体育服</a></li>
                <li><a href="view.php?aid=1550" title="河北省体育局：已研制雄安公共体育建设标准">河北省体育局：已研制雄安公共体育建设标准</a></li>

            </ul><ul>
                <li><a href="view.php?aid=1992" title="在雄安新区的带动下  白沟将会成为堪比义乌">在雄安新区的带动下  白沟将会成为堪比义乌</a></li>

            </ul>
        </div>
    </div>
    <a class="readMore" href="list.php?tid=108">进入频道&gt;&gt;</a>
    <script type="text/javascript">TouchSlide( { slideCell:"#tabBox2" } );</script>

    <div class="ad_wap"></div>

    <div id="tabBox3" class="tabBox">
        <div class="hd">
            <h3><a href="list.php?tid=76" >功效</a><span>Tech</span></h3>

        </div>
        <div class="bd">
            <ul>
                <li><a href="view.php?aid=1990" title="网库考察队进军雄安新区  共商产业互联网发">网库考察队进军雄安新区  共商产业互联网发</a></li>
                <li><a href="view.php?aid=1931" title="雄安黑科技时代来临全城打造智慧城市中心纽">雄安黑科技时代来临全城打造智慧城市中心纽</a></li>
                <li><a href="view.php?aid=1925" title="雄安新区与普通城市相比有哪些优势？看了这">雄安新区与普通城市相比有哪些优势？看了这</a></li>
                <li><a href="view.php?aid=1922" title="人民日报社与雄安新区签订合作协议，雄安媒">人民日报社与雄安新区签订合作协议，雄安媒</a></li>
                <li><a href="view.php?aid=1923" title="森特股份在雄安成立合资公司，大力推进生态">森特股份在雄安成立合资公司，大力推进生态</a></li>
                <li><a href="view.php?aid=1913" title="雄安将建能源互联网标准示范工程，什么是能">雄安将建能源互联网标准示范工程，什么是能</a></li>
                <li><a href="view.php?aid=1908" title="美国大学最新研究成果：电动车成本还不到燃">美国大学最新研究成果：电动车成本还不到燃</a></li>

            </ul><ul>
                <li><a href="view.php?aid=1877" title="诺基亚贝尔有助雄安5G网络网速领跑全国">诺基亚贝尔有助雄安5G网络网速领跑全国</a></li>
                <li><a href="view.php?aid=1874" title="移动正式推出自有手机，美观且实用">移动正式推出自有手机，美观且实用</a></li>
                <li><a href="view.php?aid=1820" title="未来智能手机发展趋势是什么？">未来智能手机发展趋势是什么？</a></li>
                <li><a href="view.php?aid=1818" title="二线手机品牌如何才能更有前景？">二线手机品牌如何才能更有前景？</a></li>
                <li><a href="view.php?aid=1754" title="技术新进展：新型电池电量更大，充电时间更">技术新进展：新型电池电量更大，充电时间更</a></li>

            </ul><ul>
                <li><a href="view.php?aid=2031" title="百度与美团合作：在雄安新区测试无人驾驶送">百度与美团合作：在雄安新区测试无人驾驶送</a></li>
                <li><a href="view.php?aid=2030" title="河北移动完成雄安新区首个转控分离云化BRAS">河北移动完成雄安新区首个转控分离云化BRAS</a></li>
                <li><a href="view.php?aid=1988" title="地震勘探中心用高精技术助力雄安生态建设">地震勘探中心用高精技术助力雄安生态建设</a></li>

            </ul>
        </div>
    </div>
    <a class="readMore" href="list.php?tid=76">进入频道&gt;&gt;</a>
    <script type="text/javascript">TouchSlide( { slideCell:"#tabBox3" } );</script>

    <div id="tabBox4" class="tabBox">
        <div class="hd">
            <h3><a href="list.php?tid=55" >种植</a><span>Finance</span></h3>

        </div>
        <div class="bd">
            <ul>
                <li><a href="view.php?aid=2037" title="应按国际标准在雄安新区建第三家证券交易所">应按国际标准在雄安新区建第三家证券交易所</a></li>
                <li><a href="view.php?aid=2021" title="公募基金大力发展雄安布局雄安规划">公募基金大力发展雄安布局雄安规划</a></li>
                <li><a href="view.php?aid=2015" title="雄安新区将迎来一周年  近22亿元资金抢筹16">雄安新区将迎来一周年  近22亿元资金抢筹16</a></li>
                <li><a href="view.php?aid=1994" title="银行推行人脸识别技术  农行分行率先在雄安">银行推行人脸识别技术  农行分行率先在雄安</a></li>
                <li><a href="view.php?aid=1984" title="<strong>善林金融解读区块链项目 雄安新区是国内的</strong>"><strong>善林金融解读区块链项目 雄安新区是国内的</strong></a></li>
                <li><a href="view.php?aid=1982" title="谈绪祥谈协同：临空经济区税收两地共享">谈绪祥谈协同：临空经济区税收两地共享</a></li>
                <li><a href="view.php?aid=1979" title="雄安新区首推“智能金融”，新区智能化建设">雄安新区首推“智能金融”，新区智能化建设</a></li>

            </ul><ul>
                <li><a href="view.php?aid=1919" title="农行河北省分行入驻雄安 以产业基金形式助">农行河北省分行入驻雄安 以产业基金形式助</a></li>
                <li><a href="view.php?aid=1882" title="雄安新区是公司重点发展区域">雄安新区是公司重点发展区域</a></li>
                <li><a href="view.php?aid=1748" title="年底理财首选货基宝宝 余额宝降额之后哪些">年底理财首选货基宝宝 余额宝降额之后哪些</a></li>
                <li><a href="view.php?aid=1745" title="去年新基金发行规模超7500亿创近三年最低">去年新基金发行规模超7500亿创近三年最低</a></li>

            </ul>
        </div>
    </div>
    <a class="readMore" href="list.php?tid=76">进入频道&gt;&gt;</a>
    <script type="text/javascript">TouchSlide( { slideCell:"#tabBox4" } );</script>

    <div id="tabBox5" class="tabBox">
        <div class="hd">
            <h3><a href="list.php?tid=81" >冲泡</a><span>Finance</span></h3>

        </div>
        <div class="bd">
            <ul>
                <li><a href="view.php?aid=2034" title="雄安新区打造汽车自动驾驶城市">雄安新区打造汽车自动驾驶城市</a></li>
                <li><a href="view.php?aid=2019" title="深探汽车行业在雄安的机遇雄安新区一周年走">深探汽车行业在雄安的机遇雄安新区一周年走</a></li>
                <li><a href="view.php?aid=2009" title="清明过后施行新列车运行图 雄安新区白沟站">清明过后施行新列车运行图 雄安新区白沟站</a></li>
                <li><a href="view.php?aid=1972" title="李彦宏：雄安将成为全世界第一个无人驾驶城">李彦宏：雄安将成为全世界第一个无人驾驶城</a></li>
                <li><a href="view.php?aid=1933" title="全新奥迪A6尺寸增长 将采用自动驾驶">全新奥迪A6尺寸增长 将采用自动驾驶</a></li>
                <li><a href="view.php?aid=1893" title="雄安将成为智能汽车发展示范基地">雄安将成为智能汽车发展示范基地</a></li>
                <li><a href="view.php?aid=1875" title="NVIDIA与汽车厂商协作，研发无人驾驶技术">NVIDIA与汽车厂商协作，研发无人驾驶技术</a></li>

            </ul><ul>
                <li><a href="view.php?aid=1603" title="二手车流通形势逆转，存在一定程度利空">二手车流通形势逆转，存在一定程度利空</a></li>
                <li><a href="view.php?aid=1604" title="消费需求跨越式升级，新能源汽车得天独厚">消费需求跨越式升级，新能源汽车得天独厚</a></li>
                <li><a href="view.php?aid=1605" title="商用车率先受益，自卸车将现 &quot; 小阳春">商用车率先受益，自卸车将现 &quot; 小阳春</a></li>
                <li><a href="view.php?aid=1606" title="保守预测将带动汽车市场增量 200 万辆以上">保守预测将带动汽车市场增量 200 万辆以上</a></li>
                <li><a href="view.php?aid=1607" title="独家体验：百度Apollo无人驾驶汽车雄安新区">独家体验：百度Apollo无人驾驶汽车雄安新区</a></li>
                <li><a href="view.php?aid=1608" title="雄安新区来势汹汹，会搅动汽车市场吗?">雄安新区来势汹汹，会搅动汽车市场吗?</a></li>
                <li><a href="view.php?aid=1611" title="雄安火了!没想到对汽车市场影响竟也这么大!">雄安火了!没想到对汽车市场影响竟也这么大!</a></li>

            </ul>
        </div>
    </div>
    <a class="readMore" href="list.php?tid=81">进入频道&gt;&gt;</a>
    <script type="text/javascript">TouchSlide( { slideCell:"#tabBox5" } );</script>

    <div id="tabBox6" class="tabBox">
        <div class="hd">
            <h3><a href="list.php?tid=8" >品牌</a><span>Finance</span></h3>

        </div>
        <div class="bd">
            <ul>
                <li><a href="view.php?aid=1911" title="国内知名建筑企业进驻雄安，成功拿下雄安新">国内知名建筑企业进驻雄安，成功拿下雄安新</a></li>
                <li><a href="view.php?aid=1910" title="雄安新区迈入大建设时代，固定资产投资迎来">雄安新区迈入大建设时代，固定资产投资迎来</a></li>
                <li><a href="view.php?aid=1909" title="房地产出现大幅波动不无可能">房地产出现大幅波动不无可能</a></li>
                <li><a href="view.php?aid=1898" title="首家深企打造概念房新模式为雄安建房">首家深企打造概念房新模式为雄安建房</a></li>
                <li><a href="view.php?aid=1707" title="买房和不买房10年后财富差别有多大，数据说">买房和不买房10年后财富差别有多大，数据说</a></li>
                <li><a href="view.php?aid=1829" title="绿地成立雄安公司，宣布在雄安落地双创中心">绿地成立雄安公司，宣布在雄安落地双创中心</a></li>
                <li><a href="view.php?aid=1789" title="雄安新区住房新模式：租十年就可买">雄安新区住房新模式：租十年就可买</a></li>

            </ul><ul>
                <li><a href="view.php?aid=1828" title="雄安规划只待中央审批 “未来城市”点将高">雄安规划只待中央审批 “未来城市”点将高</a></li>
                <li><a href="view.php?aid=1777" title="盘点雄安新区房地产现状：这里的房子很难炒">盘点雄安新区房地产现状：这里的房子很难炒</a></li>
                <li><a href="view.php?aid=1782" title="雄县房价多少？15小时单价从6000元涨至2.4">雄县房价多少？15小时单价从6000元涨至2.4</a></li>
                <li><a href="view.php?aid=1781" title="雄安新区未来实行租售并举的住房政策">雄安新区未来实行租售并举的住房政策</a></li>
                <li><a href="view.php?aid=1780" title="雄安新区周边形成“限购圈”，调控县市已增">雄安新区周边形成“限购圈”，调控县市已增</a></li>
                <li><a href="view.php?aid=1779" title="雄县容城安新房价一夜暴涨 河北雄安新区房">雄县容城安新房价一夜暴涨 河北雄安新区房</a></li>

            </ul>
        </div>
    </div>
    <a class="readMore" href="list.php?tid=8">进入频道&gt;&gt;</a>
    <script type="text/javascript">TouchSlide( { slideCell:"#tabBox6" } );</script>
    <!-- 效果导航 -->
    <div class="effectNav">
        <h3><a href="/m">首页</a>&#160;&#160;&#160;|&#160;&#160;&#160;<a href="list.php?tid=60" >帮助</a></h3>
        <p>首页 | 资讯 | 价格 | 功效 | 种植 | 冲泡</p>
        <p></p>
    </div>
    <div id="goTopBtn"><img src="/h5/images/top.png" width="30"></div>
    <script src="/h5/js/top.js" type="text/javascript"></script>
    <script type="text/javascript">goTopEx();</script>
@endsection