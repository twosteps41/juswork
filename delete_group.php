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
	$("._271k").click(function(){
		$("._3ts6").toggle();
	});
	$("._3ts6 li").click(function(){
		let text=$(this).find("span").html();
		$("._271k em").html(text);
		$("._3ts6").toggle();
	})
});
</script>
</head>
<body>
	<div class="cont_header">
		<div class="inner_cont">
			<div class="_3dz-">
				<div class="">
					<div class="_5zk_"></div>
				</div>
			</div>
			<div class="_4evd" role="presentation">
				<span class="_4evc"><button type="button" onclick="jump('add_manager.php')" class="header_button" style="-webkit-font-smoothing: antialiased; color: rgb(255, 255, 255); font-family: Helvetica, Arial, sans-serif; font-weight: 600; font-size: 12px; line-height: 30px; text-align: center; background: rgb(58, 132, 197); border-color: rgb(58, 132, 197); height: 32px; padding-left: 16px; padding-right: 16px;">
						<div class="_43rl">
							<div data-hover="tooltip" data-tooltip-display="overflow" class="_43rm">
								<em class="_4qba">提交</em>
							</div>
						</div>
					</button></span>
				<span class="_4evc"><button type="button" onclick="jump('manager.php')" class="header_button" style="-webkit-font-smoothing: antialiased; color: rgb(255, 255, 255); font-family: Helvetica, Arial, sans-serif; font-weight: 600; font-size: 12px; line-height: 30px; text-align: center; background: rgb(58, 132, 197); border-color: rgb(58, 132, 197); height: 32px; padding-left: 16px; padding-right: 16px;">
						<div class="_43rl">
							<div data-hover="tooltip" data-tooltip-display="overflow" class="_43rm">
								<em class="_4qba">取消并返回</em>
							</div>
						</div>
					</button></span>
			</div>
		</div>
	</div>
	<div class="cont_stack">
		<div class="table_stack">
			<div class="table_title">删除群组</div>
			<div>
				<div class="_5lpf">
					<div class="_5lpc">
						<em class="_4qba" data-intl-translation="事件" data-intl-trid="">选择群组</em>
					</div>
					<div class="_5lpk _wxl" style="width: auto;">
						<button type="button" class="_271k _1qjd _483s" style="width: 100%; -webkit-font-smoothing: antialiased; color: rgb(121, 130, 142); font-family: Helvetica, Arial, sans-serif; font-weight: 600; font-size: 12px; line-height: 30px; text-align: left; border-color: rgb(215, 215, 215); height: 32px; padding-left: 12px; padding-right: 12px;">
							<div class="_43rl">
								<div class="_43rm _46ce">
									<div class="_1e">
										<div class="_1f">
											<em class="_4qba">选择</em>
										</div>
										<i class="_483r img sp_WJZAN2gu5yT sx_1fe200" alt="" style="margin-right: -4px;"></i>
									</div>
								</div>
							</div>
						</button>
					</div>
				</div>
				<div class="_3ts6" style="display:none;-webkit-font-smoothing: antialiased; color: rgb(75, 79, 86); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 17px; background-color: rgb(255, 255, 255); border: 1px solid rgb(233, 235, 238);">
					<ul>
						<li class="_1xog _24hj" style="line-height: 24px;">
						  <div class="_5xzw">
								<span class="_5xzx" style="color: rgb(75, 79, 86);"> 推送通知错误 </span>
						  </div>
						</li>
						<li class="_1xog _24hj" style="line-height: 24px;">
						  <div class="_5xzw">
						      <span class="_5xzx" style="color: rgb(75, 79, 86);"> 推送通知打开 </span>
						  </div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</body>
</html>