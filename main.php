<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>分析</title>
<link href="./css/main.css" rel="stylesheet" />
<link href="./css/perfect-scrollbar.css" rel="stylesheet">
<script src="./js/jquery.min.js"></script>
<script src="./js/jquery.mousewheel.js"></script>
<script src="./js/perfect-scrollbar.js"></script>
<script src="./js/admin_do.js"></script>
<script>
$(document).ready(function ($) {
	initManager();
    $('.uiScrollableArea').perfectScrollbar();
    $("._17gf").click(function(){
    	if($(this).find("i").hasClass("sx_fdbb54")){
    		$(this).parent("div").addClass("_17gb");
    		$(this).find("._17gh").removeClass("sx_fdbb54");
			$(this).find("._17gh").addClass("sx_52131f");
    		$(this).next("._1lzn").slideDown(50);
    	}else{
    		$(this).parent("div").removeClass("_17gb");
    		$(this).find("._17gh").removeClass("sx_52131f");
			$(this).find("._17gh").addClass("sx_fdbb54");
    		$(this).next("._1lzn").slideUp(20);
    	}
    })
});
</script>
</head>
<body>
<div id="globalcontainer">
	<div class="header">
		<div class="inner_header">
			<div class="inner_left">
				<div class="_4bl7"><h1><a class="_1r7_" href="https://www.facebook.com/" aria-label="Facebook"></a></h1></div>
				<div class="_4bl7"><div class="_4k59 _77s"></div></div>
				<div class="_4bl9"><div><div class="uiToggle" id="u_0_1"><div><h2 class="_1-ys"><div class="_1-yt"><a class=" _aqz _5f0v" href="#"><i class="_57jh img sp_Z6qWeVkk8K_ sx_aa4e07" alt=""></i><span class="_3r7u">Analytics</span></a></div></h2></div></div><div id="pagelet_megamenu_jewel" data-referrer="pagelet_megamenu_jewel"></div></div></div>
			</div>
			<div class="inner_right">				
				<div class="_4bl7"><ul class="uiList _wuq _509- _4ki"><li></li><li><div class="_6a uiPopover _38xo _5v-0" id="u_0_0"><div class="_38xq _p" data-testid="persona-selector" aria-haspopup="true" aria-expanded="false" rel="toggle" id="u_0_2" role="button"><div class="_skv"><img class="img" src="https://fb-s-b-a.akamaihd.net/h-ak-fbx/v/t1.0-1/c15.0.50.50/p50x50/10354686_10150004552801856_220367501106153455_n.jpg?oh=99f7a23b27b7b285107a17ae7a3003da&amp;oe=59AF882F&amp;__gda__=1504542980_0a1d507c7d984b09cff7f63a37f5a720" height="24" width="24" alt="">韩祯</div><div class="_3oo9"></div></div></div></li><li><div class="_4k59"></div></li><li></li><li id="u_0_3"><div><a class="_14xs" data-testid="help-jewel" id="adsHelpTrayToggleButtonTip" href="/help/analytics"><em class="_4qba" data-intl-translation="获取帮助" data-intl-trid="">获取帮助</em><span class="_tkm"><i class="_nxh img sp_OpHGIg68bKv sx_c2d2a0" alt=""></i></span></a></div></li></ul><div></div></div>
			</div>
		</div>
	</div>
</div>
	<div class="_4j8d _5331" id="pagelet_content"
		data-referrer="pagelet_content">
		<div data-testid="main_controller">
			<div>
				<div class="_1fiv">
					<div class="_d63" data-testid="nav">
						<div>
							<a class="_50i7 _17gf" title="JusTalk" href="#">
								<img class="_50i8 img" src="https://fb-s-b-a.akamaihd.net/h-ak-fbx/v/t39.2081-6/c0.0.40.40/p40x40/11409220_434886466718145_302567747_n.png?oh=b26018e45ec868adc55a119924b568c8&amp;oe=59AE544A&amp;__gda__=1504815499_91e8d9f1983a0adca225a8f1e49e9dbc" width="24" height="24" alt="" />
								<span class="_50i9">JusWork</span>
								<i class="_34bb img sp_7aRljiuGd4F sx_660606" alt=""></i>
							</a>
						</div>
						<div class="uiScrollableArea fade uiScrollableAreaWithShadow contentAfter">
							<div class="uiScrollableAreaWrap scrollable" id="js_9">
								<div class="uiScrollableAreaBody">
									<div class="uiScrollableAreaContent">
										<div class="_pop">
											<a class="_pot" data-testid="overview" href="https://www.facebook.com/analytics/370164013190391/?section=overview">
												<div class="_24p3">
													<i alt="" class="img sp_gPYcc_wjhBR sx_b2ac6c"></i>
												</div>
												<span class="_24p4">
													<em class="_4qba" data-intl-translation="概览" data-intl-trid="">概览</em>
												</span>
											</a>
										</div>
										<div class="_17gb _17gd">
											<a class="_17gf" data-testid="activity" href="#">
												<div class="_17g7">
													<i alt="" class="img sp_gPYcc_wjhBR sx_520616"></i>
												</div>
												<span class="_17gg">
													<em class="_4qba" data-intl-translation="活动" data-intl-trid="">操作</em>
												</span>
												<i class="_17gh img sp_gPYcc_wjhBR sx_52131f" alt=""></i>
											</a>
											<div class="_1lzn">
												<div>
													<div class="_pop">
														<a class="_pot" data-testid="active_users" onclick="jump('./manager.php')" href="javascript:void(0);">
															<div class="_24p3"></div>
															<span class="_24p4">
																<em class="_4qba" data-intl-translation="活跃用户" data-intl-trid="">查看管理员及群组</em>
															</span>
														</a>
													</div>
													<div class="_pop">
														<a class="_pot" data-testid="Funnels" onclick="jump('add_manager.php')" href="javascript:void(0);">
															<div class="_24p3"></div>
															<span class="_24p4">
																<em class="_4qba" data-intl-translation="漏斗" data-intl-trid="">新建管理员</em>
															</span>
														</a>
													</div>
													<div class="_pop">
														<a class="_pot" data-testid="retention" onclick="jump('reset_password.php')" href="javascript:void(0);">
															<div class="_24p3"></div>
															<span class="_24p4">
																<em class="_4qba" data-intl-translation="留存率" data-intl-trid="">重置密码</em>
															</span>
														</a>
													</div>
													<div class="_pop">
														<a class="_pot" data-testid="Cohorts" onclick="jump('delete_manager.php')" href="javascript:void(0);">
															<div class="_24p3"></div>
															<span class="_24p4">
																<em class="_4qba" data-intl-translation="队列" data-intl-trid="">删除管理员</em>
															</span>
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class=" _17gd">
											<a class="_17gf" data-testid="people" href="crm.juphoon.com">
												<div class="_17g7">
													<i alt="" class="img sp_gPYcc_wjhBR sx_3d88fd"></i>
												</div>
												<span class="_17gg">
													<em class="_4qba" data-intl-translation="CRM" data-intl-trid="">CRM</em>
												</span>
												<i class="_17gh img sp_gPYcc_wjhBR sx_fdbb54" alt=""></i>
											</a>
											<span class="_1lzn"></span>
										</div>
										<div class=" _17gd">
											<a class="_17gf" data-testid="push_campaigns" href="#">
												<div class="_17g7">
													<i alt="" class="img sp_gPYcc_wjhBR sx_54368f"></i>
												</div>
												<span class="_17gg">
													<em class="_4qba" data-intl-translation="推送营销" data-intl-trid="">推送营销</em>
												</span>
												<i class="_17gh img sp_gPYcc_wjhBR sx_fdbb54" alt=""></i>
											</a>
											<span class="_1lzn"></span>
										</div>
										<div class=" _17gd">
											<a class="_17gf" data-testid="integrations" href="#">
												<div class="_17g7">
													<i alt="" class="img sp_gPYcc_wjhBR sx_40a640"></i>
												</div>
												<span class="_17gg"><em class="_4qba"
													data-intl-translation="Facebook 开放平台" data-intl-trid="">Facebook
														开放平台</em></span><i class="_17gh img sp_gPYcc_wjhBR sx_fdbb54" alt=""></i></a><span
												class="_1lzn"></span>
										</div>
										<div class="_pop">
											<a class="_pot _17gf" data-testid="Settings"
												href="https://www.facebook.com/analytics/370164013190391/?section=Settings"><div
													class="_24p3">
													<i alt="" class="img sp_gPYcc_wjhBR sx_5ff24d"></i>
												</div>
												<span class="_24p4"><em class="_4qba"
													data-intl-translation="设置" data-intl-trid="">设置</em></span></a>
											<div></div>
										</div>
									</div>
								</div>
							</div>
							<div class="uiScrollableAreaTrack hidden_elem">
								<div class="uiScrollableAreaGripper hidden_elem"></div>
							</div>
						</div>
						<div class="_beg">
							<a href="#"><div class="_beh">
									<div class="_bei">
										<em class="_4qba" data-intl-translation="获取支持"
											data-intl-trid="">获取支持</em>
									</div>
								</div></a>
						</div>
					</div>
				</div>
				<div class="_1fj1" onload="initManager()">
				</div>
			</div>
		</div>
	</div>
</body>
</html>