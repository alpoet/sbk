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

<ul class="nav nav-pills">
	<li><a href="#">第一步 请选择您所在的科室</a></li>
	<li><a href="#">第二步 选择您要报库的设备和数量</a></li>
	<li class="active"><a href="#">第三步 报库单提交预览</a></li>
</ul>

<form id="bk_form" method="post" action="__URL__/add" class="kooForm">

<div align="center">
	<p>
	<a href="__APP__/Bk/index" class="btn btn-danger">取消并返回重新报库</a>
	<button  type="submit" class="btn btn-success">确认并提交报库请求</button>
	</p>
</div>
 
<table class="table table-bordered" align="center">
	<thead>
    	<tr>
        	<th>设备特征码</th>
            <th>设备名称</th>
            <th>规格</th>
            <th>报库数量</th>
            <th>报库科室</th>
        </tr>
    </thead>
    <?php if(is_array($previewdata)): $i = 0; $__LIST__ = $previewdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tbody>
        <tr>
            <td>
            	<select name="bk_equipment_id[]" class="select-mini select2Buttons">
					<option><?php echo ($vo["id"]); ?></option>
				</select>		
            </td>
            

            <td>            	
            	<select name="bk_equipment_name[]" class="select-mini select2Buttons">
					<option><?php echo ($vo["name"]); ?></option>
				</select>            	
            </td>

            <td>            	
            	<select name="bk_equipment_specification[]" class="select-mini select2Buttons">
					<option><?php echo ($vo["specification"]); ?></option>
				</select>
            </td>

            <td>           	
	            <select name="bk_quantity[]" class="select-mini select2Buttons">
	            	<option><?php echo ($vo["quantity"]); ?></option>
	            </select>
            </td>
            
            <td>           	
	            <select name="bk_hospital_departments[]" class="select-mini select2Buttons">
	            	<option><?php echo ($vo["departments"]); ?></option>
	            </select>
            </td>
        </tr>
    </tbody><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
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