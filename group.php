<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>分析</title>
<link href="./css/main.css" rel="stylesheet" />
<link href="./css/perfect-scrollbar.css" rel="stylesheet">
<script src="./js/jquery.min.js"></script>
<script src="./js/manager_do.js"></script>
<script>
$(document).ready(function ($) {
	initTables();
	$.get("./tp/index.php/index/index/getManager.html",null,function (data){
	    alert(data);
    })
});
</script>
</head>
<body>
	<div class="cont_header">
	   <div class="inner_cont">
	       <div class="_3dz-"><div class=""><div class="_5zk_"></div></div></div>
	       <div class="_4evd" role="presentation"><span class="_4evc"><button type="button" onclick="jump('add_manager.php')" class="header_button" style="-webkit-font-smoothing: antialiased; color: rgb(255, 255, 255); font-family: Helvetica, Arial, sans-serif; font-weight: 600; font-size: 12px; line-height: 30px; text-align: center; background: rgb(58, 132, 197); border-color: rgb(58, 132, 197); height: 32px; padding-left: 16px; padding-right: 16px;"><div class="_43rl"><div data-hover="tooltip" data-tooltip-display="overflow" class="_43rm"><em class="_4qba">新建群组</em></div></div></button></span></div>
	   </div>
	</div>
	<div class="cont_stack">
		<div class="table_stack">
			<div class="table_title">群组列表</div>
			<div>
				<table class="table_cont" id="tb_group">
					<tr>
						<th>管理员</th>
						<th>群组名称</th>
						<th>群组ID</th>
						<th>群组对外ID</th>
						<th>创建时间</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>