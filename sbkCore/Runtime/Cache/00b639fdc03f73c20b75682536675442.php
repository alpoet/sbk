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
  
<div align="center"><p><h1>邵阳市中心医院设备科设备网上报库平台</h1></p></div>

<form id="preview_form" method="post" action="__URL__/preview" class="kooForm"> 
<div class="tabbable">
  <div class="tab-content">
    <div class="tab-pane active" id="step1">
      <ul class="nav nav-pills">
	<li class="active"><a href="#">第一步 请选择您所在的科室</a></li>
	<li><a href="#">第二步 选择您要报库的设备和数量</a></li>
	<li><a href="#">第三步 报库单提交预览</a></li>
</ul>

<div align="center">
	<p>
	<a href="#step2" data-toggle="tab" class="btn btn-success">下一步</a>	
	</p>
</div>

<select name="bk_hospital_departments" id="bk_hospital_departments-need" class="select2Buttons">
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
    </div>
    <div class="tab-pane" id="step2">
      <ul class="nav nav-pills">
	<li><a href="#">第一步 请选择您所在的科室</a></li>
	<li class="active"><a href="#">第二步 选择您要报库的设备和数量</a></li>
	<li><a href="#">第三步 报库单提交预览</a></li>
</ul>

<div align="center">
	<p>
	<a href="#step1" data-toggle="tab" class="btn btn-success">上一步</a>
	<button  type="submit" class="btn btn-danger">确认提交进入下一步报库单预览</button>
	</p>
</div>

<table class="table table-bordered" align="center">
	<thead>
    	<tr>
        	<th>设备特征码</th>
            <th>设备名称</th>
            <th>规格</th>
            <th>数量（请输入正整数）</th>
        </tr>
    </thead>
    <?php if(is_array($equipmentsdata)): $i = 0; $__LIST__ = $equipmentsdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bk_equipments_data): $mod = ($i % 2 );++$i;?><tbody>
        <tr>
            <td>
            	<select name="bk_equipment_id[]" class="select-mini select2Buttons">
					<option><?php echo ($bk_equipments_data["equipment_id"]); ?></option>
				</select>
            </td>
            <td>
            	<select name="bk_equipment_name[]" class="select-mini select2Buttons">
					<option><?php echo ($bk_equipments_data["equipment_name"]); ?></option>
				</select>
            </td>
            <td>
            	<select name="bk_equipment_specification[]" class="select-mini select2Buttons">
					<option><?php echo ($bk_equipments_data["equipment_specification"]); ?></option>
				</select>
            </td>
            <td>
	            <input name="bk_quantity[]" id="bk_quantity-digit" title="* 请输入正整数" value="0" type="number" min="0"/>
            </td>
        </tr>
    </tbody><?php endforeach; endif; else: echo "" ;endif; ?>
</table> 
    </div>
  </div>
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