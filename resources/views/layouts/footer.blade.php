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
        <p><a href="/html/list_189.html">关于本站</a><span> | </span><a
                    href="/html/list_190.html">版权声明</a><span> | </span><a
                    href="/html/list_247.html">本站购物</a><span> | </span><a
                    href="/html/list_249.html">展会合作</a><span> | </span><a
                    href="/html/list_250.html">免责声明</a><span> | </span><a
                    href="/html/list_191.html">联系方式</a><span> | </span><a
                    href="/html/list_289.html">友情链接</a><span>  </span>

        </p>
        <p class="copyright">六安瓜片网 www.guapian.cn</p>

    </div>

</div>