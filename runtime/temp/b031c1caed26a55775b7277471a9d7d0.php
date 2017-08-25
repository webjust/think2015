<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:41:"./application/admin/view2/system\oss.html";i:1499420862;s:44:"./application/admin/view2/public\layout.html";i:1499420862;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="__PUBLIC__/static/css/main.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/static/css/page.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/static/font/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="__PUBLIC__/static/font/css/font-awesome-ie7.min.css">
<![endif]-->
<link href="__PUBLIC__/static/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="__PUBLIC__/static/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<style type="text/css">html, body { overflow: visible;}</style>
<script type="text/javascript" src="__PUBLIC__/static/js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/layer/layer.js"></script><!-- 弹窗js 参考文档 http://layer.layui.com/-->
<script type="text/javascript" src="__PUBLIC__/static/js/admin.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/common.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/jquery.mousewheel.js"></script>
<script src="__PUBLIC__/js/myFormValidate.js"></script>
<script src="__PUBLIC__/js/myAjax2.js"></script>
<script src="__PUBLIC__/js/global.js"></script>
    <script type="text/javascript">
    function delfunc(obj){
    	layer.confirm('确认删除？', {
    		  btn: ['确定','取消'] //按钮
    		}, function(){
    		    // 确定
   				$.ajax({
   					type : 'post',
   					url : $(obj).attr('data-url'),
   					data : {act:'del',del_id:$(obj).attr('data-id')},
   					dataType : 'json',
   					success : function(data){
						layer.closeAll();
   						if(data==1){
   							layer.msg('操作成功', {icon: 1});
   							$(obj).parent().parent().parent().remove();
   						}else{
   							layer.msg(data, {icon: 2,time: 2000});
   						}
   					}
   				})
    		}, function(index){
    			layer.close(index);
    			return false;// 取消
    		}
    	);
    }
    
    function selectAll(name,obj){
    	$('input[name*='+name+']').prop('checked', $(obj).checked);
    }   
    
    function get_help(obj){
        layer.open({
            type: 2,
            title: '帮助手册',
            shadeClose: true,
            shade: 0.3,
            area: ['70%', '80%'],
            content: $(obj).attr('data-url'), 
        });
    }
    
    function delAll(obj,name){
    	var a = [];
    	$('input[name*='+name+']').each(function(i,o){
    		if($(o).is(':checked')){
    			a.push($(o).val());
    		}
    	})
    	if(a.length == 0){
    		layer.alert('请选择删除项', {icon: 2});
    		return;
    	}
    	layer.confirm('确认删除？', {btn: ['确定','取消'] }, function(){
    			$.ajax({
    				type : 'get',
    				url : $(obj).attr('data-url'),
    				data : {act:'del',del_id:a},
    				dataType : 'json',
    				success : function(data){
						layer.closeAll();
    					if(data == 1){
    						layer.msg('操作成功', {icon: 1});
    						$('input[name*='+name+']').each(function(i,o){
    							if($(o).is(':checked')){
    								$(o).parent().parent().remove();
    							}
    						})
    					}else{
    						layer.msg(data, {icon: 2,time: 2000});
    					}
    				}
    			})
    		}, function(index){
    			layer.close(index);
    			return false;// 取消
    		}
    	);	
    }
</script>  

</head>
<body style="background-color: #FFF; overflow: auto;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    <div class="fixed-bar">
        <div class="item-title">
            <div class="subject">
                <h3>对象存储设置</h3>
                <h5>对象存储oss相关设置</h5>
            </div>
            <ul class="tab-base nc-row">
                <?php if(is_array($group_list) || $group_list instanceof \think\Collection || $group_list instanceof \think\Paginator): if( count($group_list)==0 ) : echo "" ;else: foreach($group_list as $k=>$v): ?>
                    <li><a href="<?php echo U('System/index',['inc_type'=> $k]); ?>" <?php if($k==$inc_type): ?>class="current"<?php endif; ?>><span><?php echo $v; ?></span></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    <!-- 操作说明 -->
    <div class="explanation" id="explanation">
        <div class="title" id="checkZoom"><i class="fa fa-lightbulb-o"></i>
            <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
            <span id="explanationZoom" title="收起提示"></span> </div>
        <ul>
            <li>推送服务相关设置, 请从阿里云注册账户, 并在其控制台获取相关信息。</li>
        </ul>
    </div>
    <form method="post" id="handlepost" action="<?php echo U('System/handle'); ?>" enctype="multipart/form-data" name="form1">
        <input type="hidden" name="form_submit" value="ok" />
        <div class="ncap-form-default">
            <dl class="row">
                <dt class="tit">
                    <label for="oss_switch">上传oss开关</label>
                </dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="switch1" class="cb-enable  <?php if($config['oss_switch'] == 1): ?>selected<?php endif; ?>">开启</label>
                        <label for="switch0" class="cb-disable <?php if($config['oss_switch'] == 0): ?>selected<?php endif; ?>">关闭</label>
                        <input type="radio" id="switch1" name="oss_switch" value="1" <?php if($config['oss_switch'] == 1): ?>checked="checked"<?php endif; ?>>
                        <input type="radio" id="switch0" name="oss_switch" value="0" <?php if($config['oss_switch'] == 0): ?>checked="checked"<?php endif; ?> >
                    </div>
                    <p class="notic">是否对商品图片启用对象存储功能</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="oss_key_id">AccessKeyId</label>
                </dt>
                <dd class="opt">
                    <input id="oss_key_id" name="oss_key_id" value="<?php echo $config['oss_key_id']; ?>" class="input-txt" type="text" />
                    <p class="notic">对象存储的key id</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="oss_key_secret">AccessKeySecret</label>
                </dt>
                <dd class="opt">
                    <input id="oss_key_secret" name="oss_key_secret" value="<?php echo $config['oss_key_secret']; ?>" class="input-txt" type="text" />
                    <p class="notic">对象存储的key secret</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="oss_endpoint">Endpoint</label>
                </dt>
                <dd class="opt">
                    <input id="oss_endpoint" name="oss_endpoint" value="<?php echo $config['oss_endpoint']; ?>" class="input-txt" type="text" />
                    <p class="notic">对象存储的Endpoint，比如 oss-cn-shenzhen.aliyuncs.com</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="oss_bucket">Bucket</label>
                </dt>
                <dd class="opt">
                    <input id="oss_bucket" name="oss_bucket" value="<?php echo $config['oss_bucket']; ?>" class="input-txt" type="text" />
                    <p class="notic">对象存储的 Bucket</p>
                </dd>
            </dl>
            <div class="bot">
                <input type="hidden" name="inc_type" value="<?php echo $inc_type; ?>">
                <a href="JavaScript:void(0);" class="ncap-btn-big ncap-btn-green" onclick="check_form();">确认提交</a>
            </div>
        </div>
    </form>
</div>
<div id="goTop"> <a href="JavaScript:void(0);" id="btntop"><i class="fa fa-angle-up"></i></a><a href="JavaScript:void(0);" id="btnbottom"><i class="fa fa-angle-down"></i></a></div>
</body>
<script type="text/javascript">
    function check_form()
    {
        if(!$('#oss_key_id').val()){
            layer.alert('AccessKeyId 非空！',{icon:2});
            return false;
        }
        if(!$('#oss_key_secret').val()){
            layer.alert('AccessKeySecret 非空！',{icon:2});
            return false;
        }
        if(!$('#oss_endpoint').val()){
            layer.alert('Endpoint 非空！',{icon:2});
            return false;
        }
        if(!$('#oss_bucket').val()){
            layer.alert('Bucket 非空！',{icon:2});
            return false;
        }
        document.form1.submit()
    }
</script>
</html>