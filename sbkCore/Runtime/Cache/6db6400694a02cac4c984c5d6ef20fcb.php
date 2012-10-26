<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ($title); ?></title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-responsive.min.css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/docs.css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/prettify.css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/select2Buttons.css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css" />
  </head>
  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5.js"></script>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <style>
      .row-fluid{ padding-top: 42px; }
	</style>
	
	<!--[if IE 6]>    
      <link href="__PUBLIC__/css/ie6.min.css" rel="stylesheet">
    <![endif]-->
  </head>
  <body>
      <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="__APP__/Admin/index">管理员登录</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
                <a href="./index.php">邵阳市中心医院设备科网络平台</a>
              </li>
              <li class="divider-vertical"></li>
              <li class="dropdown">
              	<a href="#" class="dropdown-toggle" data-toggle="dropdown">设备报修 <b class="caret"></b></a>
              	<ul class="dropdown-menu">
                	<li><a href="__APP__/Bx/index">请求设备报修服务</a></li>
                	<li><a href="__APP__/Bx/view">查询设备报修状态</a></li>
                </ul>
              </li>
              <li class="">
                <a href="__APP__/Bk/index">设备报库</a>
              </li>
              <li class="">
                <a href="__APP__/Wx/view">维修人员接修</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container">

<div align="center"><p><h1>邵阳市中心医院设备科设备网上报修平台</h1></p></div>

<ul class="nav nav-pills">
	<li class="active"><a href="__APP__/Bx/index"><i class="icon-pencil"></i>  请求设备报修服务</a></li>
	<li><a href="__APP__/Bx/view" ><i class="icon-search"></i>  查询设备报修状态</a></li>
</ul>

<form id="bx_form" method="post" action="__URL__/insert" class="kooForm">

<h4><font color="orange"> 请选择报修科室  </font><i class="icon-info-sign"></i></h4>
<select name="bx_hospital_departments" id="bx_hospital_departments-need" class="select2Buttons">
	<optgroup label="外 科">
    	<option>肝胆、脾、胰腺</option>
        <option>小儿外科</option>
        <option>泌尿外科</option>
        <option>关节骨伤外科</option>
        <option>烧伤整形科</option>
        <option>肠胃、甲状腺、乳腺</option>
        <option>神经外科</option>
        <option>心胸外科</option>
        <option>脊柱外科</option>
        <option>综合ICU</option>
        <option>皮肤科</option>
        <option>麻醉科</option>
        <option>手术室</option>
        <option>医学整形美容中心</option>
    </optgroup>
    <optgroup label="内 科">
        <option>神经内科</option>
        <option>心血管内科</option>
        <option>心脏介入中心</option>
        <option>老年老干病房</option>
        <option>消化内科</option>
        <option>消化内镜</option>
        <option>肾病内科</option>
        <option>血液肿瘤科</option>
        <option>呼吸内科</option>
        <option>内分泌内科</option>
        <option>风湿免疫科</option>
        <option>中医科</option>
        <option>康复科</option>
    </optgroup>
    <optgroup label="妇儿传五官">
        <option>妇科</option>
        <option>产科</option>
        <option>生殖中心</option>
        <option>普儿</option>
        <option>儿童重症监护室</option>
        <option>新生儿科</option>
        <option>感染科</option>
    </optgroup>
    <optgroup label="医技部">
        <option>检验科</option>
        <option>体检中心</option>
        <option>B超室</option>
        <option>门诊</option>
        <option>急诊科</option>
        <option>120急救中心</option>
        <option>皮肤科</option>
    </optgroup>
</select>
<p></p>

<h4><font color="orange">请选择报修设备名称  </font><i class="icon-barcode"></i></h4>
<select name="bx_equipment_name" id="bx_equipment_name-need" class="select2Buttons">
	<optgroup label="其它设备名称请在故障信息备注中填写">
	    <option>其它设备</option>
        <option>监护仪</option>
        <option>呼吸机</option>
        <option>内窥镜</option>
        <option>手术床</option>
        <option>黑白超</option>
        <option>彩超</option>
        <option>X光机（500MA）</option>
        <option>心电图机</option>
        <option>血透机</option>
        <option>病床</option>
        <option>输液泵</option>
        <option>注射泵</option>
        <option>电刀</option>
        <option>无影灯</option>
        <option>消毒机</option>
        <option>麻醉机</option>
        <option>除颤仪</option>
        <option>多功能治疗台</option>
    </optgroup>
</select>
<p></p>

<h4><font color="orange">故障信息备注（选填 可以为空） </font><i class="icon-comment"></i></h4>
<textarea class="px span9" rows="3" style="resize: none;" placeholder="请填写故障信息备注，不超过140个字，可以留空。" onkeyup="strLenCalc($(this), 'checklen', 280);" value="" name="bx_fault_description" id="bx_fault_description"></textarea>
<span id="checklen" class="help-block">还可输入 <strong>140</strong> 个汉字</span> 
<p></p>

<h4><font color="orange">报修人联系方式（必填 请输入您的手机号码） </font><i class="icon-user"></i></h4>
<input type="tel" placeholder="请输入您的手机号码" name="bx_mobile" id="bx_mobile-need-mobile" title="* 请输入不为空的手机号码"></input>

<div align="center">
	<button type="submit" class="btn btn-large btn-primary"> 确认提交 </button>
</div>
</form>      

    </div><!-- /container -->
    <script src="__PUBLIC__/js/jquery-1.8.1.js"></script>
    <script src="__PUBLIC__/js/bootstrap.js"></script>
    <script src="__PUBLIC__/js/koo.js"></script>
    <script src="__PUBLIC__/js/jQuery.select2Buttons.js"></script>
    <!-- 表单验证 -->
    <script>
	    $(document).ready(function () { 
	    	$('.kooForm').Koo(); 
	    });
    </script>
    <!-- select转化成buttons -->
    <script>
    	$('.select2Buttons').select2Buttons();
	</script>
    <!-- 故障描述字数限制 -->
    <script> 
    	$(function() { 
	    	$("textarea").keyup(); 
	    }); 

	    function strLenCalc(obj, checklen, maxlen) { 
　　			var v = obj.val(), charlen = 0, maxlen = !maxlen ? 200 : maxlen, curlen = maxlen, len = v.length; 
　　			for(var i = 0; i < v.length; i++) { 
　　　　		if(v.charCodeAt(i) < 0 || v.charCodeAt(i) > 255) { 
			curlen -= 1; 
			} 
		} 
　　
		if(curlen >= len) { 
			$("#"+checklen).html("还可输入 <strong>"+Math.floor((curlen-len)/2)+"</strong> 个字").css('color', ''); 
			$("#subBtn").removeAttr("disabled"); 
				} else { 
				$("#"+checklen).html("已经超过 <strong>"+Math.ceil((len-curlen)/2)+"</strong> 个字").css('color', '#FF0000'); 
				$("#subBtn").attr("disabled", "disabled"); 
				} 
		} 
	</script>
    <script src="__PUBLIC__/js/ie6.min.js"></script>
    <script>
      $(function(){if($.browser.msie&&parseInt($.browser.version,10)===6){$('.row div[class^="span"]:last-child').addClass("last-child");$('[class*="span"]').addClass("margin-left-20");$(':button[class="btn"], :reset[class="btn"], :submit[class="btn"], input[type="button"]').addClass("button-reset");$(":checkbox").addClass("input-checkbox");$('[class^="icon-"], [class*=" icon-"]').addClass("icon-sprite");$(".pagination li:first-child a").addClass("pagination-first-child")}})
    </script>
  </body>
</html>