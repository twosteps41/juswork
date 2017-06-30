<?php 
$email=$_GET['email'];
$pos=strpos($email, '@');
$company_item=substr($email, $pos+1);
?>
<!DOCTYPE html>
<html id="juswork">
<head>
<meta charset="UTF-8">
<title>Juswork</title>
<link href="./css/styles.css" rel="stylesheet" />
<link href="./css/1tAy8qmhkp3.css" rel="stylesheet" />
<link href="./css/landing.css" rel="stylesheet" />
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#button_sub").click(function(){
		$.post("./tp/index.php/index/index/landing.html",$("#u_0_3").serialize(),function(data){
			if(data.status==1){
				location.href='register.php?email='+data.email+'&company_item='+data.company;
			}else{
				location.href='landing_info.php?email='+data.email;
			}
		},'json')
	})
})
</script>
</head>
<body class="_5rwf _5rwg fbx UIPage_LoggedOut _-kb b_c3pyn-ahh chrome webkit win x1 Locale_zh_CN" dir="ltr">
	<div class="_li">
		<div id="globalContainer" class="uiContextualLayerParent">
			<div class="fb_content clearfix " id="content" role="main">
				<div data-testid="work_landing">
					<div class="_40q1">
						<div class="_4b21">
							<i class="_4b23 img sp_3-kS6fnFdIn sx_ca3d6e" aria-hidden="true"></i>
							<div class="_5wct ellipsis" role="heading" aria-level="1"><?=$company_item?></div>
						</div>
					</div>
					<div class="_5rw0">
						<div class="_5rw2">
							<div class="_5rw3" role="heading" aria-level="2"
								data-testid="work_landing_title">欢迎加入 Juswork</div>
							<div class="_5rw9">输入 <span class="_5rwa"><?=$company_item?></span> 的有效邮箱才能访问 Workplace。如果还没有帐户，我们可以协助你设置。</div>
							<div class="_5rwb">
								<div class="_workLanding2__inputCardTitle _2pio">公司邮箱</div>
								<form id="u_0_3" method="post">
									<div class="_5aj7">
										<div class="_4bl9">
											<input type="text" class="inputtext _55r1 _5rwc"
												autofocus="1" placeholder="@qq.com" name="email"
												value="<?=$email?>" required="1" aria-label="公司邮箱"
												aria-required="true">
										</div>
										<div class="_4bl7">
											<span class="_42ft _4jy0 _3210 _4jy4 _4jy1 _51sy" id="button_sub">继续</span>
										</div>
									</div>
								</form>
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
						<li>中文(简体)</li><li><a dir="ltr"
							href="https://work-40899153.facebook.com/work/landing/input/?email=499935348%40qq.com&amp;ref=AVvCIxOgJDNUheZ6hDpi0X_qTNtTh0g6oW1CgQ3YQ1GwC-MLZmUgny37DerzgDUFnTiXDc84ZQvQIRLsgjQLOLGDy9AOQvFYi1csAUWoFKCP_ZGVYOIb2xsK7LUVlyYhmDqfLMtNd7Jw7MW4aqVwFBSyHiK5HQ5i1ly7yaqUPkwLh2GpGC4Gt8b-Z_Zlkd7qNNpe1VsO0M7i4ft_3YU3CPprH5cHOnYdmUhUdinSTD7HVQ&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;en_US&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-40899153.facebook.com\/work\/landing\/input\/?email=499935348\u002540qq.com&amp;ref=AVvCIxOgJDNUheZ6hDpi0X_qTNtTh0g6oW1CgQ3YQ1GwC-MLZmUgny37DerzgDUFnTiXDc84ZQvQIRLsgjQLOLGDy9AOQvFYi1csAUWoFKCP_ZGVYOIb2xsK7LUVlyYhmDqfLMtNd7Jw7MW4aqVwFBSyHiK5HQ5i1ly7yaqUPkwLh2GpGC4Gt8b-Z_Zlkd7qNNpe1VsO0M7i4ft_3YU3CPprH5cHOnYdmUhUdinSTD7HVQ&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 0); return false;"
							title="English (US)">English (US)</a></li><li><a dir="ltr"
							href="https://work-40899153.facebook.com/work/landing/input/?email=499935348%40qq.com&amp;ref=AVvCIxOgJDNUheZ6hDpi0X_qTNtTh0g6oW1CgQ3YQ1GwC-MLZmUgny37DerzgDUFnTiXDc84ZQvQIRLsgjQLOLGDy9AOQvFYi1csAUWoFKCP_ZGVYOIb2xsK7LUVlyYhmDqfLMtNd7Jw7MW4aqVwFBSyHiK5HQ5i1ly7yaqUPkwLh2GpGC4Gt8b-Z_Zlkd7qNNpe1VsO0M7i4ft_3YU3CPprH5cHOnYdmUhUdinSTD7HVQ&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ja_JP&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-40899153.facebook.com\/work\/landing\/input\/?email=499935348\u002540qq.com&amp;ref=AVvCIxOgJDNUheZ6hDpi0X_qTNtTh0g6oW1CgQ3YQ1GwC-MLZmUgny37DerzgDUFnTiXDc84ZQvQIRLsgjQLOLGDy9AOQvFYi1csAUWoFKCP_ZGVYOIb2xsK7LUVlyYhmDqfLMtNd7Jw7MW4aqVwFBSyHiK5HQ5i1ly7yaqUPkwLh2GpGC4Gt8b-Z_Zlkd7qNNpe1VsO0M7i4ft_3YU3CPprH5cHOnYdmUhUdinSTD7HVQ&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 1); return false;"
							title="Japanese">日本語</a></li><li><a dir="ltr"
							href="https://work-40899153.facebook.com/work/landing/input/?email=499935348%40qq.com&amp;ref=AVvCIxOgJDNUheZ6hDpi0X_qTNtTh0g6oW1CgQ3YQ1GwC-MLZmUgny37DerzgDUFnTiXDc84ZQvQIRLsgjQLOLGDy9AOQvFYi1csAUWoFKCP_ZGVYOIb2xsK7LUVlyYhmDqfLMtNd7Jw7MW4aqVwFBSyHiK5HQ5i1ly7yaqUPkwLh2GpGC4Gt8b-Z_Zlkd7qNNpe1VsO0M7i4ft_3YU3CPprH5cHOnYdmUhUdinSTD7HVQ&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ko_KR&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-40899153.facebook.com\/work\/landing\/input\/?email=499935348\u002540qq.com&amp;ref=AVvCIxOgJDNUheZ6hDpi0X_qTNtTh0g6oW1CgQ3YQ1GwC-MLZmUgny37DerzgDUFnTiXDc84ZQvQIRLsgjQLOLGDy9AOQvFYi1csAUWoFKCP_ZGVYOIb2xsK7LUVlyYhmDqfLMtNd7Jw7MW4aqVwFBSyHiK5HQ5i1ly7yaqUPkwLh2GpGC4Gt8b-Z_Zlkd7qNNpe1VsO0M7i4ft_3YU3CPprH5cHOnYdmUhUdinSTD7HVQ&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 2); return false;"
							title="Korean">한국어</a></li><li><a dir="ltr"
							href="https://work-40899153.facebook.com/work/landing/input/?email=499935348%40qq.com&amp;ref=AVvCIxOgJDNUheZ6hDpi0X_qTNtTh0g6oW1CgQ3YQ1GwC-MLZmUgny37DerzgDUFnTiXDc84ZQvQIRLsgjQLOLGDy9AOQvFYi1csAUWoFKCP_ZGVYOIb2xsK7LUVlyYhmDqfLMtNd7Jw7MW4aqVwFBSyHiK5HQ5i1ly7yaqUPkwLh2GpGC4Gt8b-Z_Zlkd7qNNpe1VsO0M7i4ft_3YU3CPprH5cHOnYdmUhUdinSTD7HVQ&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;fr_FR&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-40899153.facebook.com\/work\/landing\/input\/?email=499935348\u002540qq.com&amp;ref=AVvCIxOgJDNUheZ6hDpi0X_qTNtTh0g6oW1CgQ3YQ1GwC-MLZmUgny37DerzgDUFnTiXDc84ZQvQIRLsgjQLOLGDy9AOQvFYi1csAUWoFKCP_ZGVYOIb2xsK7LUVlyYhmDqfLMtNd7Jw7MW4aqVwFBSyHiK5HQ5i1ly7yaqUPkwLh2GpGC4Gt8b-Z_Zlkd7qNNpe1VsO0M7i4ft_3YU3CPprH5cHOnYdmUhUdinSTD7HVQ&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 3); return false;"
							title="French (France)">Français (France)</a></li><li><a dir="ltr"
							href="https://work-40899153.facebook.com/work/landing/input/?email=499935348%40qq.com&amp;ref=AVvCIxOgJDNUheZ6hDpi0X_qTNtTh0g6oW1CgQ3YQ1GwC-MLZmUgny37DerzgDUFnTiXDc84ZQvQIRLsgjQLOLGDy9AOQvFYi1csAUWoFKCP_ZGVYOIb2xsK7LUVlyYhmDqfLMtNd7Jw7MW4aqVwFBSyHiK5HQ5i1ly7yaqUPkwLh2GpGC4Gt8b-Z_Zlkd7qNNpe1VsO0M7i4ft_3YU3CPprH5cHOnYdmUhUdinSTD7HVQ&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;id_ID&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-40899153.facebook.com\/work\/landing\/input\/?email=499935348\u002540qq.com&amp;ref=AVvCIxOgJDNUheZ6hDpi0X_qTNtTh0g6oW1CgQ3YQ1GwC-MLZmUgny37DerzgDUFnTiXDc84ZQvQIRLsgjQLOLGDy9AOQvFYi1csAUWoFKCP_ZGVYOIb2xsK7LUVlyYhmDqfLMtNd7Jw7MW4aqVwFBSyHiK5HQ5i1ly7yaqUPkwLh2GpGC4Gt8b-Z_Zlkd7qNNpe1VsO0M7i4ft_3YU3CPprH5cHOnYdmUhUdinSTD7HVQ&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 4); return false;"
							title="Indonesian">Bahasa Indonesia</a></li><li><a dir="ltr"
							href="https://work-40899153.facebook.com/work/landing/input/?email=499935348%40qq.com&amp;ref=AVvCIxOgJDNUheZ6hDpi0X_qTNtTh0g6oW1CgQ3YQ1GwC-MLZmUgny37DerzgDUFnTiXDc84ZQvQIRLsgjQLOLGDy9AOQvFYi1csAUWoFKCP_ZGVYOIb2xsK7LUVlyYhmDqfLMtNd7Jw7MW4aqVwFBSyHiK5HQ5i1ly7yaqUPkwLh2GpGC4Gt8b-Z_Zlkd7qNNpe1VsO0M7i4ft_3YU3CPprH5cHOnYdmUhUdinSTD7HVQ&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;pl_PL&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-40899153.facebook.com\/work\/landing\/input\/?email=499935348\u002540qq.com&amp;ref=AVvCIxOgJDNUheZ6hDpi0X_qTNtTh0g6oW1CgQ3YQ1GwC-MLZmUgny37DerzgDUFnTiXDc84ZQvQIRLsgjQLOLGDy9AOQvFYi1csAUWoFKCP_ZGVYOIb2xsK7LUVlyYhmDqfLMtNd7Jw7MW4aqVwFBSyHiK5HQ5i1ly7yaqUPkwLh2GpGC4Gt8b-Z_Zlkd7qNNpe1VsO0M7i4ft_3YU3CPprH5cHOnYdmUhUdinSTD7HVQ&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 5); return false;"
							title="Polish">Polski</a></li><li><a dir="ltr"
							href="https://work-40899153.facebook.com/work/landing/input/?email=499935348%40qq.com&amp;ref=AVvCIxOgJDNUheZ6hDpi0X_qTNtTh0g6oW1CgQ3YQ1GwC-MLZmUgny37DerzgDUFnTiXDc84ZQvQIRLsgjQLOLGDy9AOQvFYi1csAUWoFKCP_ZGVYOIb2xsK7LUVlyYhmDqfLMtNd7Jw7MW4aqVwFBSyHiK5HQ5i1ly7yaqUPkwLh2GpGC4Gt8b-Z_Zlkd7qNNpe1VsO0M7i4ft_3YU3CPprH5cHOnYdmUhUdinSTD7HVQ&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;es_LA&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-40899153.facebook.com\/work\/landing\/input\/?email=499935348\u002540qq.com&amp;ref=AVvCIxOgJDNUheZ6hDpi0X_qTNtTh0g6oW1CgQ3YQ1GwC-MLZmUgny37DerzgDUFnTiXDc84ZQvQIRLsgjQLOLGDy9AOQvFYi1csAUWoFKCP_ZGVYOIb2xsK7LUVlyYhmDqfLMtNd7Jw7MW4aqVwFBSyHiK5HQ5i1ly7yaqUPkwLh2GpGC4Gt8b-Z_Zlkd7qNNpe1VsO0M7i4ft_3YU3CPprH5cHOnYdmUhUdinSTD7HVQ&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 6); return false;"
							title="Spanish">Español</a></li><li><a dir="ltr"
							href="https://work-40899153.facebook.com/work/landing/input/?email=499935348%40qq.com&amp;ref=AVvCIxOgJDNUheZ6hDpi0X_qTNtTh0g6oW1CgQ3YQ1GwC-MLZmUgny37DerzgDUFnTiXDc84ZQvQIRLsgjQLOLGDy9AOQvFYi1csAUWoFKCP_ZGVYOIb2xsK7LUVlyYhmDqfLMtNd7Jw7MW4aqVwFBSyHiK5HQ5i1ly7yaqUPkwLh2GpGC4Gt8b-Z_Zlkd7qNNpe1VsO0M7i4ft_3YU3CPprH5cHOnYdmUhUdinSTD7HVQ&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;pt_BR&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-40899153.facebook.com\/work\/landing\/input\/?email=499935348\u002540qq.com&amp;ref=AVvCIxOgJDNUheZ6hDpi0X_qTNtTh0g6oW1CgQ3YQ1GwC-MLZmUgny37DerzgDUFnTiXDc84ZQvQIRLsgjQLOLGDy9AOQvFYi1csAUWoFKCP_ZGVYOIb2xsK7LUVlyYhmDqfLMtNd7Jw7MW4aqVwFBSyHiK5HQ5i1ly7yaqUPkwLh2GpGC4Gt8b-Z_Zlkd7qNNpe1VsO0M7i4ft_3YU3CPprH5cHOnYdmUhUdinSTD7HVQ&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 7); return false;"
							title="Portuguese (Brazil)">Português (Brasil)</a></li><li><a dir="ltr"
							href="https://work-40899153.facebook.com/work/landing/input/?email=499935348%40qq.com&amp;ref=AVvCIxOgJDNUheZ6hDpi0X_qTNtTh0g6oW1CgQ3YQ1GwC-MLZmUgny37DerzgDUFnTiXDc84ZQvQIRLsgjQLOLGDy9AOQvFYi1csAUWoFKCP_ZGVYOIb2xsK7LUVlyYhmDqfLMtNd7Jw7MW4aqVwFBSyHiK5HQ5i1ly7yaqUPkwLh2GpGC4Gt8b-Z_Zlkd7qNNpe1VsO0M7i4ft_3YU3CPprH5cHOnYdmUhUdinSTD7HVQ&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;de_DE&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-40899153.facebook.com\/work\/landing\/input\/?email=499935348\u002540qq.com&amp;ref=AVvCIxOgJDNUheZ6hDpi0X_qTNtTh0g6oW1CgQ3YQ1GwC-MLZmUgny37DerzgDUFnTiXDc84ZQvQIRLsgjQLOLGDy9AOQvFYi1csAUWoFKCP_ZGVYOIb2xsK7LUVlyYhmDqfLMtNd7Jw7MW4aqVwFBSyHiK5HQ5i1ly7yaqUPkwLh2GpGC4Gt8b-Z_Zlkd7qNNpe1VsO0M7i4ft_3YU3CPprH5cHOnYdmUhUdinSTD7HVQ&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 8); return false;"
							title="German">Deutsch</a></li><li><a dir="ltr"
							href="https://work-40899153.facebook.com/work/landing/input/?email=499935348%40qq.com&amp;ref=AVvCIxOgJDNUheZ6hDpi0X_qTNtTh0g6oW1CgQ3YQ1GwC-MLZmUgny37DerzgDUFnTiXDc84ZQvQIRLsgjQLOLGDy9AOQvFYi1csAUWoFKCP_ZGVYOIb2xsK7LUVlyYhmDqfLMtNd7Jw7MW4aqVwFBSyHiK5HQ5i1ly7yaqUPkwLh2GpGC4Gt8b-Z_Zlkd7qNNpe1VsO0M7i4ft_3YU3CPprH5cHOnYdmUhUdinSTD7HVQ&amp;csrdr=1"
							onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;it_IT&quot;, &quot;zh_CN&quot;, &quot;https:\/\/work-40899153.facebook.com\/work\/landing\/input\/?email=499935348\u002540qq.com&amp;ref=AVvCIxOgJDNUheZ6hDpi0X_qTNtTh0g6oW1CgQ3YQ1GwC-MLZmUgny37DerzgDUFnTiXDc84ZQvQIRLsgjQLOLGDy9AOQvFYi1csAUWoFKCP_ZGVYOIb2xsK7LUVlyYhmDqfLMtNd7Jw7MW4aqVwFBSyHiK5HQ5i1ly7yaqUPkwLh2GpGC4Gt8b-Z_Zlkd7qNNpe1VsO0M7i4ft_3YU3CPprH5cHOnYdmUhUdinSTD7HVQ&amp;csrdr=1&quot;, &quot;www_list_selector&quot;, 9); return false;"
							title="Italian">Italiano</a></li><li><a class="_42ft _4jy0 _517i _517h _51sy" role="button"
							href="#" rel="dialog"
							ajaxify="/settings/language/language/?uri=https%3A%2F%2Fwork-40899153.facebook.com%2Fwork%2Flanding%2Finput%2F%3Femail%3D499935348%2540qq.com%26ref%3DAVvCIxOgJDNUheZ6hDpi0X_qTNtTh0g6oW1CgQ3YQ1GwC-MLZmUgny37DerzgDUFnTiXDc84ZQvQIRLsgjQLOLGDy9AOQvFYi1csAUWoFKCP_ZGVYOIb2xsK7LUVlyYhmDqfLMtNd7Jw7MW4aqVwFBSyHiK5HQ5i1ly7yaqUPkwLh2GpGC4Gt8b-Z_Zlkd7qNNpe1VsO0M7i4ft_3YU3CPprH5cHOnYdmUhUdinSTD7HVQ%26csrdr%3D1&amp;source=www_list_selector_more"
							title="更多语言"><i class="img sp_ZsGK432gRe8 sx_1be642"></i></a></li>
					</ul>
					<div id="contentCurve"></div>
					<div role="contentinfo" aria-label="Facebook 网站链接">
						<table class="uiGrid _51mz navigationGrid" cellspacing="0"
							cellpadding="0">
							<tbody>
								<tr class="_51mx">
									<td class="_51m- hLeft plm"><a
										href="https://l.facebook.com/l.php?u=https%3A%2F%2Fworkplace.fb.com%2F&amp;h=ATNLZcdijYqcSLcEfpj-SWFsEhDkNu_HT32SPgE6CSL1jXY3odB9tuka51-rXvRo5HcL-EEhKGq-NiYyTCPEPiYWKdvrsTsrRRg0e1B3p1E952fjvqSiKz7yQ5njvtRc2rDpjsi7Hsc&amp;s=1"
										accesskey="8" title="Workplace 简介" target="_blank"
										rel="nofollow noopener"
										onmouseover="LinkshimAsyncLink.swap(this, &quot;https:\/\/workplace.fb.com\/&quot;);"
										onclick="LinkshimAsyncLink.swap(this, &quot;https:\/\/l.facebook.com\/l.php?u=https\u00253A\u00252F\u00252Fworkplace.fb.com\u00252F&amp;h=ATNLZcdijYqcSLcEfpj-SWFsEhDkNu_HT32SPgE6CSL1jXY3odB9tuka51-rXvRo5HcL-EEhKGq-NiYyTCPEPiYWKdvrsTsrRRg0e1B3p1E952fjvqSiKz7yQ5njvtRc2rDpjsi7Hsc&amp;s=1&quot;);">关于</a></td>
									<td class="_51m- hLeft plm"><a
										href="/work/legal/Workplace_Standard_Privacy/?show_chrome=false"
										title="了解 Facebook 和你的隐私权。">隐私权政策</a></td>
									<td class="_51m- hLeft plm"><a
										href="/work/legal/Workplace_Standard_Cookies/?show_chrome=false"
										title="详细了解 Cookie 和 Workplace。" data-nocookies="1">Cookie</a></td>
									<td class="_51m- hLeft plm"><a
										href="/work/legal/Workplace_Standard_Terms/?show_chrome=false"
										accesskey="9" title="审阅我们的条款和政策。">服务条款</a></td>
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
	<div>
	</div>
</body>
</html>