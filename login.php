<?php 
$email=$_GET['email'];
//通过email查找公司（接口实现）

?>
<!DOCTYPE html>
<html lang="zh-Hans" id="juswork" class="">
<head>
<meta charset="utf-8">
<style></style>
<title id="pageTitle">Juswork</title>
<link href="./css/V5BPgQ4Nkh6.css" rel="stylesheet" />
<link href="./css/BK5a5ZySG9u.css" rel="stylesheet" />
<link href="./css/fzJkYBCNteB.css" rel="stylesheet" />
<link href="./css/hEvm1275trV.css" rel="stylesheet" />
<link href="./css/44rSUOmbb1I.css" rel="stylesheet" />
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/jquery.md5.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$.get("./tp/index.php/index/index/login.html",'email=<?=$email?>',function(data){
		if(data){
			$("div[role=heading]").html(data.company);	
			$("input[name=user]").val(data.email);
		}
	},'json')
	$("#sub").click(function(){
		$.post("./tp/index.php/index/index/login.html",{user: $("input[name='user']").val(), password: $.md5($("input[name='password']").val())},function(data){
			if(data){
				data = JSON.parse(data);
                if (data.msg == 'success') {
                    if(data.data.role == 'manager'){
                        location.href="manager_main.php";
                    }else{
                        location.href="main.php";
                    }
                } else if (data.msg == 'invalid password'){
                    alert('用户名或密码错误');
                }

			}else{
				alert('登陆失败');
			}
		},'json')
	})
})
</script>
</head>
<body
	class="_5rwf fbx UIPage_LoggedOut _-kb b_c3pyn-ahh chrome webkit win x1 Locale_zh_CN"
	dir="ltr">
	<div class="_li">
		<div id="globalContainer" class="uiContextualLayerParent">
			<div class="fb_content clearfix " id="content" role="main">
				<div class="UIFullPage_Container">
					<div>
						<div class="_40q1">
							<div class="_4b21">
								<i class="_4b23 img sp_7TEUOWunhWd sx_05a6e2" aria-hidden="true"></i>
								<div class="_5wct ellipsis" role="heading" aria-level="1"></div>
							</div>
						</div>
						<div class="_5rwd">
							<div class="_5rwe">
								<div class="_5rw3">
									<i class="_3-90 img sp_7TEUOWunhWd sx_f0d08b"><u>lock</u></i>输入密码即可登录
								</div>
								<div class="_5rw9">
									<span class="_5rwa">欢迎回来！</span> 请输入 Juswork 密码继续。
								</div>
								<div class="_5rw9">
									<a class="_42ft _4jy0 _3210 _3211 _4jy4 _4jy1 selected _51sy"
										role="button" href="company_create.php">返回</a>
								</div>
							</div>
						</div>
						<div class="_tp1">
							<form action="./login" id="login_form" method="post">
								<div class="_tp2">
									<!-- <div class="pam _3-8x uiBoxRed" role="alert" tabindex="0"><div class="fsl fwb fcb">请重新输入密码</div><div>密码有误。<a href="https://work-85849704.facebook.com/recover/initiate?lwv=120&amp;lwc=1348092">忘记密码？</a></div></div> -->
									<div class="_tp3">邮箱或证件编号</div>
									<div class="_tp7 _3-97">
										<input type="text" class="inputtext" name="user" placeholder="邮箱">
									</div>
									<div class="_tp3 _2pig">
										密码<a href="identify.php"
											data-testid="login_forgot_password">忘记密码？</a>
									</div>
									<div class="_tp7">
										<input autofocus="1" type="password" name="password"
											class="inputpassword" placeholder="密码">
									</div>
								</div>
								<div class="_tp6">
									<a id="sub"
										class="_42ft _4jy0 _3210 _4jy4 _4jy1 selected _51sy"
										id="u_0_3">登录</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div>
				<div id="pageFooter" data-referrer="page_footer">
					<ul
						class="uiList localeSelectorList _2pid _509- _4ki _6-h _6-j _6-i"
						data-nocookies="1">
						<li>中文(简体)</li><li><a dir="ltr"
							href="https://work-85849704.facebook.com/login/?next=%2F&amp;email=magic.han%40juphoon.com.cn&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;en_US&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/login\/?next=\u00252F&amp;email=magic.han\u002540juphoon.com.cn&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 0); return false;"
							title="English (US)">English (US)</a></li><li><a dir="ltr"
							href="https://work-85849704.facebook.com/login/?next=%2F&amp;email=magic.han%40juphoon.com.cn&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ja_JP&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/login\/?next=\u00252F&amp;email=magic.han\u002540juphoon.com.cn&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 1); return false;"
							title="Japanese">日本語</a></li><li><a dir="ltr"
							href="https://work-85849704.facebook.com/login/?next=%2F&amp;email=magic.han%40juphoon.com.cn&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ko_KR&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/login\/?next=\u00252F&amp;email=magic.han\u002540juphoon.com.cn&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 2); return false;"
							title="Korean">한국어</a></li><li><a dir="ltr"
							href="https://work-85849704.facebook.com/login/?next=%2F&amp;email=magic.han%40juphoon.com.cn&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;fr_FR&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/login\/?next=\u00252F&amp;email=magic.han\u002540juphoon.com.cn&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 3); return false;"
							title="French (France)">Français (France)</a></li><li><a dir="ltr"
							href="https://work-85849704.facebook.com/login/?next=%2F&amp;email=magic.han%40juphoon.com.cn&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;id_ID&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/login\/?next=\u00252F&amp;email=magic.han\u002540juphoon.com.cn&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 4); return false;"
							title="Indonesian">Bahasa Indonesia</a></li><li><a dir="ltr"
							href="https://work-85849704.facebook.com/login/?next=%2F&amp;email=magic.han%40juphoon.com.cn&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;pl_PL&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/login\/?next=\u00252F&amp;email=magic.han\u002540juphoon.com.cn&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 5); return false;"
							title="Polish">Polski</a></li><li><a dir="ltr"
							href="https://work-85849704.facebook.com/login/?next=%2F&amp;email=magic.han%40juphoon.com.cn&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;es_LA&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/login\/?next=\u00252F&amp;email=magic.han\u002540juphoon.com.cn&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 6); return false;"
							title="Spanish">Español</a></li><li><a dir="ltr"
							href="https://work-85849704.facebook.com/login/?next=%2F&amp;email=magic.han%40juphoon.com.cn&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;pt_BR&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/login\/?next=\u00252F&amp;email=magic.han\u002540juphoon.com.cn&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 7); return false;"
							title="Portuguese (Brazil)">Português (Brasil)</a></li><li><a dir="ltr"
							href="https://work-85849704.facebook.com/login/?next=%2F&amp;email=magic.han%40juphoon.com.cn&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;de_DE&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/login\/?next=\u00252F&amp;email=magic.han\u002540juphoon.com.cn&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 8); return false;"
							title="German">Deutsch</a></li><li><a dir="ltr"
							href="https://work-85849704.facebook.com/login/?next=%2F&amp;email=magic.han%40juphoon.com.cn&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;it_IT&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/login\/?next=\u00252F&amp;email=magic.han\u002540juphoon.com.cn&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 9); return false;"
							title="Italian">Italiano</a></li><li><a class="_42ft _4jy0 _517i _517h _51sy" role="button"
							href="#" rel="dialog"
							ajaxify="/settings/language/language/?uri=https%3A%2F%2Fwork-85849704.facebook.com%2Flogin%2F%3Fnext%3D%252F%26email%3Dmagic.han%2540juphoon.com.cn%26csrdr%3D1&amp;source=www_list_selector_more"
							title="更多语言"><i class="img sp_o8EjrWZHjAz sx_fdc8a5"></i></a></li>
					</ul>
					<div id="contentCurve"></div>
					<div role="contentinfo" aria-label="Facebook 网站链接">
						<table class="uiGrid _51mz navigationGrid" cellspacing="0"
							cellpadding="0">
							<tbody>
								<tr class="_51mx">
									<td class="_51m- hLeft plm"><a
										href="https://l.facebook.com/l.php?u=https%3A%2F%2Fworkplace.fb.com%2F&amp;h=ATOlSeblb5ZxELtpz1PNGuEM38v3tcuNQkgUfB91UagZ92ZP4BXVJiMo6nmVmbFVIs3G3A_4Ds6EM_Jj3ryQ33EW9C80s6gQBJf40y52NyFE7zB--DFRGvRh2_yz7ykqgDGyJVMmrNmY&amp;s=1"
										accesskey="8" title="Workplace 简介" target="_blank"
										rel="nofollow noopener"
										onmouseover="LinkshimAsyncLink.swap(this, &quot;https:\/\/workplace.fb.com\/&quot;);"
										onclick="LinkshimAsyncLink.swap(this, &quot;https:\/\/l.facebook.com\/l.php?u=https\u00253A\u00252F\u00252Fworkplace.fb.com\u00252F&amp;h=ATOlSeblb5ZxELtpz1PNGuEM38v3tcuNQkgUfB91UagZ92ZP4BXVJiMo6nmVmbFVIs3G3A_4Ds6EM_Jj3ryQ33EW9C80s6gQBJf40y52NyFE7zB--DFRGvRh2_yz7ykqgDGyJVMmrNmY&amp;s=1&quot;);">关于</a></td>
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
</body>
</html>