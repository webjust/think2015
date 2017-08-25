<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:44:"./template/pc/rainbow/user\comment_list.html";i:1499420874;s:38:"./template/pc/rainbow/user\header.html";i:1499420874;s:46:"./template/pc/rainbow/public\footer_index.html";i:1499420874;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>评价订单-<?php echo $tpshop_config['shop_info_store_title']; ?></title>
    <meta name="keywords" content="<?php echo $tpshop_config['shop_info_store_keyword']; ?>" />
    <meta name="description" content="<?php echo $tpshop_config['shop_info_store_desc']; ?>" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/tpshop.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/myaccount.css" />
    <script src="__STATIC__/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <link type="text/css" rel="stylesheet" href="__STATIC__/css/saved_resource.css">
    <link type="text/css" rel="stylesheet" href="__STATIC__/css/saved_resource(2).css" source="widget">
    <link href="__STATIC__/css/jquery.raty.css" media="screen" rel="stylesheet" type="text/css">
    <script src="__STATIC__/js/jquery.raty.js"></script>
    <script src="__PUBLIC__/js/global.js"></script>
    <style type="text/css">
        .ev-img img {
            width: 50px;
            height: 50px;
            position: absolute;
            z-index: 2;
            border-width: 0;
        }
        body{
            font: 12px/1.67em Tahoma, Arial, "Simsun", sans-serif !important;
        }
        .commstargoods.a_number img{
            vertical-align: text-bottom;
        }
    </style>
</head>
<body class="bg-f5">
<script src="__PUBLIC__/js/global.js" type="text/javascript"></script>
<link rel="stylesheet" href="__STATIC__/css/location.css" type="text/css"><!-- 收货地址，物流运费 -->
<script src="__PUBLIC__/static/js/layer/layer.js" type="text/javascript"></script>
<style>
	.list1 li{float:left;}
</style>
<div class="top-hander home-index-top p">
	<div class="w1224 pr">
		<div class="fl">
			<?php if(!(empty($user) || (($user instanceof \think\Collection || $user instanceof \think\Paginator ) && $user->isEmpty()))): ?>
			<div class="fl ler">
				<a href="<?php echo U('Home/User/index'); ?>"><?php echo $user['nickname']; ?></a>
			</div>
			<div class="fl ler">
				<a href="<?php echo U('Home/User/message_notice'); ?>">
					消息<?php if($user_message_count > 0): ?>（<span class="red"> <?php echo $user_message_count; ?> </span>）<?php endif; ?>
				</a>
			</div>
			<div class="fl ler">
				<a href="<?php echo U('Home/User/logout'); ?>">退出</a>
			</div>
			<?php else: ?>
			<div class="fl ler">
		        <a class="red" href="<?php echo U('Home/user/login'); ?>">登录</a>
		        <span class="spacer"></span>
		        <a href="<?php echo U('Home/user/reg'); ?>">注册</a>
		    </div>
			<?php endif; ?>
			<div class="fl spc"></div>
			<div class="sendaddress pr fl">
				<!-- 收货地址，物流运费 -start-->
				<ul class="list1">
					<li class="jaj"><span>配&nbsp;&nbsp;送：</span></li>
					<li class="summary-stock though-line" style="margin-top:2px">
						<div class="dd" style="border-right:0px;">
							<div class="store-selector add_cj_p">
								<div class="text" style="width: 150px;background: inherit;top: 2px;border-left: 0"><div></div><b style="top: 2px"></b></div>
								<div onclick="$(this).parent().removeClass('hover')" class="close"></div>
							</div>
						</div>
					</li>
				</ul>
				<!--<i class="jt-x"></i>-->
				<!-- 收货地址，物流运费 -end-->
				<!--<span>深圳<i class="jt-x"></i></span>-->
			</div>
		</div>
		<div class="top-ri-header fr">
			<ul>
				<li><a href="<?php echo U('/Home/User/order_list'); ?>">我的订单</a></li>
				<li class="spacer"></li>
				<li><a href="<?php echo U('/Home/User/visit_log'); ?>">我的浏览</a></li>
				<li class="spacer"></li>
				<li><a href="<?php echo U('Home/User/goods_collect'); ?>">我的收藏</a></li>
				<li class="spacer"></li>
				<li><a title="点击这里给我发消息" href="tencent://message/?uin=<?php echo $tpshop_config['shop_info_qq']; ?>&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">客户服务</a></li>
				<li class="spacer"></li>
				<li class="hover-ba-navdh">
					<div class="nav-dh">
						<span>网站导航</span>
						<i class="jt-x"></i>
						<div class="conta-hv-nav">
							<ul>
								<li>
									<a href="<?php echo U('/Home/Activity/group_list'); ?>">团购</a>
								</li>
								<li>
									<a href="<?php echo U('Home/Activity/flash_sale_list'); ?>">抢购</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="nav-middan-z p home-index-head">
	<div class="header w1224">
		<div class="ecsc-logo">
			<a href="/" class="logo"> <img src="__STATIC__/images/logo2.png"></a>
		</div>
		<div class="m-index">
			<a href="<?php echo U('Home/User/index'); ?>" class="index">我的商城</a>
			<a href="/" class="home">返回商城首页</a>
		</div>
		<div class="m-navitems">
			<ul class="fixed p">
				<li><a href="<?php echo U('Home/Index/index'); ?>">首页</a></li>
				<li>
					<div class="u-dl">
						<div class="u-dt">
							<span>账户设置</span>
							<i></i>
						</div>
						<div class="u-dd">
							<a href="<?php echo U('Home/User/info'); ?>">个人信息</a>
							<!--<a href="<?php echo U('Home/User/safety_settings'); ?>">安全设置</a>-->
							<a href="<?php echo U('Home/User/address_list'); ?>">收货地址</a>
						</div>
					</div>
				</li>
				<li class="u-msg"><a class="J-umsg" href="<?php echo U('Home/User/message_notice'); ?>">消息<span><?php if($user_message_count > 0): ?><?php echo $user_message_count; endif; ?></span></a></li>
				<li><a href="<?php echo U('Home/Goods/integralMall'); ?>">积分商城</a></li>
				<li class="search_li">
				   <form id="sourch_form" id="sourch_form" method="post" action="<?php echo U('Home/Goods/search'); ?>">
		           	<input class="search_usercenter_text" name="q" id="q" type="text" value="<?php echo \think\Request::instance()->param('q'); ?>"/>
		           	<a class="search_usercenter_btn" href="javascript:;" onclick="if($.trim($('#q').val()) != '') $('#sourch_form').submit();">搜索</a>
		           </form>
		        </li>
			</ul>
		</div>
		<div class="shopingcar-index fr">
			<div class="u-g-cart fr fixed" id="hd-my-cart">
				<a href="<?php echo U('Home/Cart/cart'); ?>">
					<p class="c-n fl">我的购物车</p>

					<p class="c-num fl">(<span class="count cart_quantity" id="cart_quantity">0</span>)
						<i class="i-c oh"></i>
					</p>
				</a>

				<div class="u-fn-cart u-mn-cart" id="show_minicart">
					<div class="minicartContent" id="minicart">
					</div>
					<!--有商品时-e-->
				</div>
			</div>
		</div>
	</div>
</div>
<script src="__STATIC__/js/common.js"></script>
<!--------收货地址，物流运费-开始-------------->
<script src="__STATIC__/js/location.js"></script>
<!--------收货地址，物流运费--结束-------------->


<div class="home-index-middle">
    <div class="w1224">
        <div class="home-main">
            <?php if($order_info['is_comment'] == 0): ?>
                    <div class="w">
                    <div class="mycomment-detail">
                    <div class="detail-hd" id="o-info-orderinfo" oid="20703525920" payid="4" ot="0" shipmentid="70" venderid="32+ro+cdrp0=">
                        <div class="orderinfo">
                            <h3 class="o-title">评价订单</h3>
                            <div class="o-info"> <span class="mr20">订单号：<?php echo $order_info['order_sn']; ?></a></span> <span><?php echo date("Y-m-d  H:i:s",$order_info['add_time']); ?></span> </div>
                        </div>
                    </div>
                    <form method="post" id="add_comment" onsubmit="return false">
                        <input type="hidden" id="order_id" name="order_id" value="<?php echo $order_info['order_id']; ?>">
                        <input type="hidden" id="goods_id" name="goods_id" value="<?php echo $order_info['goods_id']; ?>">
                        <div class="mycomment-form">
                            <!-- page -->
                            <div class="form-part1">
                                <!--待评价商品-s-->
                                    <div class="f-cutline"></div>
                                    <div class="f-item f-goods product-741538" voucherstatus="0" catefi="670" catese="677" cateth="680">
                                        <!--商品信息-s-->
                                        <div class="fi-info">
                                            <div class="comment-goods">
                                                <div class="p-img"><a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$order_info['goods_id'])); ?>" target="_blank"><img src="<?php echo goods_thum_images($order_info['goods_id'],400,400); ?>" alt=""></a></div>
                                                <div class="p-name"><a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$order_info['goods_id'])); ?>" target="_blank"><?php echo $order_info['goods_name']; ?></a></div>
                                                <div class="p-price"><strong>￥<?php echo $order_info['goods_price']; ?></strong></div>
                                                <div class="p-attr"><?php echo $order_info['spec_key_name']; ?></div>
                                            </div>
                                        </div>
                                        <!--商品信息-e-->
                                        <div class="fi-operate" id="div_<?php echo $order_info['goods_id']; ?>">
                                            <!--评分--->
                                            <div class="fop-item fop-star   z-tip-warn" >
                                                <div class="fop-label">商品描述相符</div>
                                                <div class="fop-main">
                                                    <span class="commstargoods a_number" id="goods_rank">
                                                        <span class="star-info">0分</span>
                                                    </span>
                                                    <input type="hidden" id="goods_rank_hidden" name="goods_rank">
                                                </div>
                                                <div class="fop-label">客服服务质量</div>
                                                <div class="fop-main">
                                                    <span class="commstargoods a_number" id="service_rank">
                                                        <span class="star-info">0分</span>
                                                    </span>
                                                    <input type="hidden" id="service_rank_hidden" name="service_rank">
                                                </div>
                                                <div class="fop-label">物流服务质量</div>
                                                <div class="fop-main">
                                                    <span class="commstargoods a_number" id="deliver_rank">
                                                        <span class="star-info">0分</span>
                                                    </span>
                                                    <input type="hidden" id="deliver_rank_hidden" name="deliver_rank">
                                                </div>
                                                <div class="fi-tip">
                                                    <i class="tip-icon"></i><em class="tip-text">请为商品服务的评分</em>
                                                </div>
                                            </div>
                                            <!--评分-e-->
                                            <div class="fop-item J-mjyx"></div>
                                            <div class="fop-tip">
                                                <i class="tip-icon"></i><em class="tip-text"></em>
                                            </div>
                                        <!--</div>-->
                                            <div class="fop-item " >
                                                <div class="fop-label">评价晒单</div>
                                                 <div class="fop-main">
                                                    <div class="f-textarea">
                                                        <textarea name="content" data-id="<?php echo $order_info['goods_id']; ?>" class="content" onkeyup="setval(this,'200')" id="comment_content" placeholder="商品是否给力？快分享你的购买心得吧~" style="height:140px" maxlength="200"></textarea>
                                                        <div class="textarea-ext"><em class="textarea-num">
                                                            <b id="textarea_<?php echo $order_info['goods_id']; ?>">200</b> / 200</em>
                                                            <span class="tips">（评价多于<span class="ftc1">10</span>个字）</span>
                                                        </div>
                                                    </div>
                                                    <!--上传图片-s-->
                                                    <div class="m-imgshow f-imgshow" >
                                                        <div class="thumbnail-list" id="img_container" style="position: relative;">
                                                            <div class="ev-img po-re fl" id="add_img">
                                                                <span id="image-upload-741538" class="btn-upload img_span" onClick="uploadimg('#div_<?php echo $order_info['goods_id']; ?>')" style="position: relative; z-index: 0; "></span>
                                                            </div>
                                                            <span class="upload-num">最多只能上传5张图片</span>
                                                            <!--<div id="p1ap78atrc2drqrn1eee13k21unp0_html5_container" class="plupload html5" style="position: absolute; width: 50px; height: 50px; overflow: hidden; z-index: -1; opacity: 0; top: 0px; left: 0px; background: transparent;">-->
                                                            <!--<input id="p1ap78atrc2drqrn1eee13k21unp0_html5" style="font-size: 999px; position: absolute; width: 100%; height: 100%;" type="file" accept="image/jpeg,image/gif,image/png,image/bmp" multiple>-->
                                                            <!--</div>-->
                                                        </div>
                                                        <div class="bigimg-switch hide">
                                                            <div class="bigimg-operate">
                                                                <a href="#" class="op-rotate1"><i></i><em>左转</em></a>
                                                                <a href="#" class="op-rotate2"><i></i><em>右转</em></a>
                                                                <a href="#" class="op-delete"><i></i><em>删除</em></a>
                                                            </div>
                                                            <div class="switch-inner"> <img src="" alt="" class="bigimg">
                                                                <div class="cursor-small"></div>
                                                                <div class="cursor-prev"></div>
                                                                <div class="cursor-next"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--上传图片-e-->
                                                </div>
                                                <div class="fop-tip"><i class="tip-icon"></i><em class="tip-text"></em></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--</div>-->
                                <!--待评价商品-e-->
                            </div>
                            <!-- page -->
                            <div class="f-btnbox">
                                <a  href="javascript:void(0);" onClick="comment_submit(this);" class="btn-submit">提交</a>
                                <span class="f-checkbox">
                                    <label ><input name="hide_username" class="i-check" type="checkbox"  value="1">匿名评价</label>
                                </span>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            <?php else: ?>
                <div class="mycomment-detail">
                    <div class="detail-hd">
                        <div class="m-success-tip">
                            <div class="tip-inner">
                                <i class="tip-icon"></i>
                                <h3 class="tip-title">该商品已评价过啦~</h3>
                                <div class="tip-hint"><a clstag="pageclick|keycount|pingjiachenggong_201605192|1" href="<?php echo U('Home/User/comment',array('status'=>0)); ?>" class="ftc3 ml10">返回待评价列表 &gt;</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!--footer-s-->
<div class="footer p">
    <div class="mod_service_inner">
        <div class="w1224">
            <ul>
                <li>
                    <div class="mod_service_unit">
                        <h5 class="mod_service_duo">多</h5>
                        <p>品类齐全，轻松购物</p>
                    </div>
                </li>
                <li>
                    <div class="mod_service_unit">
                        <h5 class="mod_service_kuai">快</h5>
                        <p>多仓直发，极速配送</p>
                    </div>
                </li>
                <li>
                    <div class="mod_service_unit">
                        <h5 class="mod_service_hao">好</h5>
                        <p>正品行货，精致服务</p>
                    </div>
                </li>
                <li>
                    <div class="mod_service_unit">
                        <h5 class="mod_service_sheng">省</h5>
                        <p>天天低价，畅选无忧</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
<div class="w1224">
    <div class="footer-ewmcode">
        <div class="foot-list-fl">
            <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article_cat` where parent_id = 2");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__article_cat` where parent_id = 2"); 
                                    S("sql_".$md5_key,$sql_result_v,86400);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
                <ul>
                    <li class="foot-th">
                        <?php echo $v[cat_name]; ?>
                    </li>
                    <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1");
                                $result_name = $sql_result_v2 = S("sql_".$md5_key);
                                if(empty($sql_result_v2))
                                {                            
                                    $result_name = $sql_result_v2 = \think\Db::query("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1"); 
                                    S("sql_".$md5_key,$sql_result_v2,86400);
                                }    
                              foreach($sql_result_v2 as $k2=>$v2): ?>
                        <li>
                            <a href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id])); ?>"><?php echo $v2[title]; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endforeach; ?>
        </div>
        <div class="QRcode-fr">
            <ul>
                <li class="foot-th">客户端</li>
                <li><img src="__STATIC__/images/qrcode.png"/></li>
            </ul>
            <ul>
                <li class="foot-th">微信</li>
                <li><img src="__STATIC__/images/qrcode.png"/></li>
            </ul>
        </div>
    </div>
    <div class="mod_copyright p">
        <div class="grid-top">
            <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article` where cat_id = 5 and is_open=1");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__article` where cat_id = 5 and is_open=1"); 
                                    S("sql_".$md5_key,$sql_result_v,86400);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
                <a href="<?php echo U('Home/Article/detail',array('article_id'=>$v[article_id])); ?>"><?php echo $v[title]; ?></a>
                <span>|</span>
            <?php endforeach; ?>
            <a href="javascript:void (0);">客服热线:<?php echo $tpshop_config['shop_info_phone']; ?></a>
        </div>
        <p>Copyright © 2016-2025 <?php echo (isset($tpshop_config['shop_info_store_name']) && ($tpshop_config['shop_info_store_name'] !== '')?$tpshop_config['shop_info_store_name']:'TPshop商城'); ?> 版权所有 保留一切权利 备案号:<?php echo $tpshop_config['shop_info_record_no']; ?></p>

        <p class="mod_copyright_auth">
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_1" href="" target="_blank">经营性网站备案中心</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_2" href="" target="_blank">可信网站信用评估</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_3" href="" target="_blank">网络警察提醒你</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_4" href="" target="_blank">诚信网站</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_5" href="" target="_blank">中国互联网举报中心</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_6" href="" target="_blank">网络举报APP下载</a>
        </p>
    </div>
</div>
</div>
<!--footer-e-->
<script>
    store_comment_flag = false;
    //评分
    $('.commstargoods').raty({
        click: function(score, evt) {
//            showErrorMsg('ID: ' + this.id + "\nscore: " + score + "\nevent: " + evt);
            $('#'+ this.id + ' .star-info').html(score+'分');
            $('#'+this.id+'_hidden').val(score);
            store_comment_flag = true;
        }
    });

    //判断内容填写和评分
    function setval(obj,sum){
        var len = $(obj).val().length;
        var textarea = $('#textarea_'+$(obj).attr('data-id'));
        if(len > sum){
            $(obj).val($(obj).val().substring(0,sum));  //截取规定长度字符串
        }
        var num = sum - len;
        num <= 0 ? textarea.text(0): textarea.text(num);  //防止出现负数
    }

    function comment_submit(){
        var flag = false;
        $('.rank').each(function(i,o){
            if($(this).attr('rel')==1){
                flag = true;
            }
        })
        if($('#goods_rank_hidden').val()==''){
            showErrorMsg('请给描述相符打分');
            return false;
        }
        if($('#sever_brank_hidden').val()==''){
            showErrorMsg('请给卖家服务打分');
            return false;
        }
        if($('#deliver_rank_hidden').val()==''){
            showErrorMsg('请给物流服务打分');
            return false;
        }
        if($('#comment_content').val() == ''){
            showErrorMsg('请输入评论内容');
            return false;
        }
        //判断是否超过五个图片
        if($('.btn-upload').length > 6){
            showErrorMsg('最多只能上传5张图片');
            return false;
        }
        $.ajax({
            type: "POST",
            url: "<?php echo U('Home/User/add_comment'); ?>",
            data: $('#add_comment').serialize(),
            success: function (data) {
                data = jQuery.parseJSON(data);
                if (data.status == 1) {
                    window.location.href="<?php echo U('Home/User/comment',array('status'=>0)); ?>";
                } else {
                    showErrorMsg(data.msg);
                    window.location.reload();
                }
            }
        });
    }

    //图片上传
    var now_access;
    function uploadimg(div){
        now_access = $(div);
        //检查是否超过限制数量
        GetUploadify2(5,'','comment','add_img')
    }
    function delimg(file,t){

        $.get(
                "/index.php?m=Admin&c=Uploadify&a=delupload",{action:"del", filename:file},function(){}
        );
        $(t).remove();
        var obj = now_access.find('.btn-upload');
        if(obj.length < 6)
        now_access.find('.img_span').show();
    }
    function add_img(str){
        var div_id =  now_access.selector;
        var goods_id = div_id.substr(5);
        var tpl_list = String(str).split(',');
        for (var i=0;i<tpl_list.length;i++)
        {
            var tpl = '<span class="btn-upload" onclick="delimg(\'$IMG\',this)" ><input type="hidden" name="comment_img[]" value="$IMG"><img src="$IMG" border="0" alt=""></span>';
            var str_do = tpl.replace(/\$IMG/g,tpl_list[i]);
            $(now_access).find('#img_container').find('#add_img').append(str_do);
        }
        //判断是否超过五个图片
        var obj = now_access.find('.btn-upload');
        if(obj.length >= 6){
            now_access.find('.img_span').hide();
        }
    }

    /**
     * 提示弹窗
     * */
    function showErrorMsg(msg){
        layer.alert(msg,{icon:3});
    }
</script>
</body>
</html>