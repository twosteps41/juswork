<?php 
$email=$_GET['email'];
$company=$_GET['company_item'];
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
	$("#u_0_2,#u_0_6").click(function(){
		let name=$("input[name=name]").val();
		let password=$("input[name=password]").val();
		if(!name){
			$(".error_n").css('display', 'inline-block').fadeIn();
		}
		var patrn = /^[a-zA-Z][a-zA-Z0-9_]{8,20}$/;
	    if (!patrn.exec(password)){
	    	$(".error_p").css('display', 'inline-block').fadeIn();
	    }
	    $.post("./tp/index.php/index/index/register.html",$("#r_form").serialize(),function(data){
			if(data.status==1){
				location.href="login.php";
			}else if(data.msg=='name'){
				$(".error_n").css('display', 'inline-block').fadeIn();
			}else if(data.msg=='password'){
				$(".error_p").css('display', 'inline-block').fadeIn();
			}else if(data.msg=='email'){
				alert('邮箱被修改，请重新注册');
				location.href='company_create.php';
			}else{
				alert(data.msg);
				location.href="login.php";
			}
		},'json')
	})
	$(".inputtext").focus(function(){
		$(".error").hide();
	})
})
</script>
</head>
<body class="_5rwf fbx UIPage_LoggedOut _-kb b_c3pyn-ahh chrome webkit win x1 Locale_zh_CN" dir="ltr">
	<div class="_li">
		<div id="globalContainer" class="uiContextualLayerParent">
			<div class="fb_content clearfix " id="content" role="main">
				<div class="UIFullPage_Container">
					<div>
						<div class="_3wnb">
							<div class="_4b21">
								<i class="_4b23 img sp_aNcnXJZpj7Q sx_f98160" aria-hidden="true"></i>
								<div class="_5wct ellipsis" role="heading" aria-level="1"><?=$company?></div>
								<div class="_3wnd">
									<button class="_42ft _4jy0 _3210 _4jy3 _517h _51sy" id="u_0_2">
										创建帐户<i class="_3-99 img sp_aNcnXJZpj7Q sx_29ac4f"><u>arrow-right</u></i>
									</button>
								</div>
							</div>
						</div>
						<div class="_3wne _3wnc">
							<div class="_3wnf">
								<div class="clearfix">
									<div class="_3wng lfloat _ohe">
										<div class="_5rw3" role="heading" aria-level="1">欢迎加入 Juswork</div>
										<div class="_5rw9">填写个人信息，和 qq.com 同事一起加入 Juswork</div>
									</div>
									<i class="rfloat _ohf img sp_eIcMgWukNPb sx_9a7e78"></i>
								</div>
							</div>
						</div>
						<div class="_2pip _2l46 _p38">
							<div class="_4r40">
								<div class="_4r4g">
								    <form id="r_form">
									<div class="_4r3w" id="u_0_0">邮箱</div>
									<div class="_3ra6" role="textbox" aria-disabled="true" aria-labelledby="u_0_0" aria-describedby="u_0_1">
										<div class="clearfix">
											<div class="_3ra7 lfloat _ohe"><?=$email?></div>
											<div class="_3raa rfloat _ohf" id="u_0_1">已验证</div>
											<input type="hidden" name="email" value="<?=$email?>" />
										</div>
									</div>
									<div class="_workLanding2__namePronounSection">
										<div>
											<div class="_4r3w">
												姓名<span class="_4r3z">（必填）</span>
											</div>
											<input type="text" class="inputtext _55r1 _55r2 _4r4f" name="name" placeholder="名称" id="u_0_3" />
									        <div class="error error_n">名字不能为空。</div>
										</div>
									</div>
									<div>
										<div class="_4r3w _2l4s">
											密码<span class="_4r3z">（必填）</span>
										</div>
									</div>
									<input type="password" class="inputtext _55r1 _55r2 _4r4f _3-95 error_input" name="password" placeholder="密码" id="u_0_5" />
									<div class="error error_p">请组合使用至少8个大小写字母和数字。</div>
									<div class="clearfix">
										<div class="_2l47 lfloat _ohe">
											<div class="_p34 _2pid">
												设置帐户即表示你接受 Juswork Standard <a
													href="/work/legal/Workplace_Standard_Privacy/?show_chrome=false">隐私权政策</a>、<a
													href="/work/legal/Workplace_Standard_Terms/?show_chrome=false">服务条款</a>和
												<a
													href="/work/legal/Workplace_Standard_Cookies/?show_chrome=false">Cookie</a>
												政策。
											</div>
										</div>
										<div class="rfloat _ohf">
											<button class="_42ft _4jy0 _3210 _4jy3 _517h _51sy" id="u_0_6">
												创建帐户<i class="_3-99 img sp_aNcnXJZpj7Q sx_29ac4f"><u>arrow-right</u></i>
											</button>
										</div>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div>
				<div id="pageFooter" data-referrer="page_footer">
					<ul
						class="uiList localeSelectorList _2pid _509- _4ki _6-h _6-j _6-i"
						data-nocookies="1">
						<li>中文(简体)</li>
						<li><a dir="ltr"
							href="https://work-85849704.facebook.com/login/?next=%2F&amp;email=magic.han%40juphoon.com.cn&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;en_US&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/login\/?next=\u00252F&amp;email=magic.han\u002540juphoon.com.cn&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 0); return false;"
							title="English (US)">English (US)</a></li>
						<li><a dir="ltr"
							href="https://work-85849704.facebook.com/login/?next=%2F&amp;email=magic.han%40juphoon.com.cn&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ja_JP&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/login\/?next=\u00252F&amp;email=magic.han\u002540juphoon.com.cn&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 1); return false;"
							title="Japanese">日本語</a></li>
						<li><a dir="ltr"
							href="https://work-85849704.facebook.com/login/?next=%2F&amp;email=magic.han%40juphoon.com.cn&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ko_KR&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/login\/?next=\u00252F&amp;email=magic.han\u002540juphoon.com.cn&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 2); return false;"
							title="Korean">한국어</a></li>
						<li><a dir="ltr"
							href="https://work-85849704.facebook.com/login/?next=%2F&amp;email=magic.han%40juphoon.com.cn&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;fr_FR&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/login\/?next=\u00252F&amp;email=magic.han\u002540juphoon.com.cn&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 3); return false;"
							title="French (France)">Français (France)</a></li>
						<li><a dir="ltr"
							href="https://work-85849704.facebook.com/login/?next=%2F&amp;email=magic.han%40juphoon.com.cn&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;id_ID&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/login\/?next=\u00252F&amp;email=magic.han\u002540juphoon.com.cn&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 4); return false;"
							title="Indonesian">Bahasa Indonesia</a></li>
						<li><a dir="ltr"
							href="https://work-85849704.facebook.com/login/?next=%2F&amp;email=magic.han%40juphoon.com.cn&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;pl_PL&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/login\/?next=\u00252F&amp;email=magic.han\u002540juphoon.com.cn&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 5); return false;"
							title="Polish">Polski</a></li>
						<li><a dir="ltr"
							href="https://work-85849704.facebook.com/login/?next=%2F&amp;email=magic.han%40juphoon.com.cn&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;es_LA&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/login\/?next=\u00252F&amp;email=magic.han\u002540juphoon.com.cn&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 6); return false;"
							title="Spanish">Español</a></li>
						<li><a dir="ltr"
							href="https://work-85849704.facebook.com/login/?next=%2F&amp;email=magic.han%40juphoon.com.cn&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;pt_BR&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/login\/?next=\u00252F&amp;email=magic.han\u002540juphoon.com.cn&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 7); return false;"
							title="Portuguese (Brazil)">Português (Brasil)</a></li>
						<li><a dir="ltr"
							href="https://work-85849704.facebook.com/login/?next=%2F&amp;email=magic.han%40juphoon.com.cn&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;de_DE&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/login\/?next=\u00252F&amp;email=magic.han\u002540juphoon.com.cn&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 8); return false;"
							title="German">Deutsch</a></li>
						<li><a dir="ltr"
							href="https://work-85849704.facebook.com/login/?next=%2F&amp;email=magic.han%40juphoon.com.cn&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;it_IT&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-85849704.facebook.com\/login\/?next=\u00252F&amp;email=magic.han\u002540juphoon.com.cn&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 9); return false;"
							title="Italian">Italiano</a></li>
						<li><a class="_42ft _4jy0 _517i _517h _51sy" role="button"
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