<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Document</title>
		<meta name="viewport" content="width=device-width,  initial-scale=1.0, user-scalable=0, minimum-scale=1.0,  maximum-scale=1.0"/> 		
		<?php 
			// echo "Hello World"; 
			// function  longdate($timestamp){
			//     return date("l F jS Y",$timestamp);
			// }
		?>
<!-- 		css不行的，如果用css表达式可以取到页面宽度和高度，但不兼容非ie浏览器。这个还是应该用js取： -->
<!-- document.documentElement.clientWidth：取得浏览器页面可视区域的宽度document.documentElement.clientHeight：取得浏览器页面可视区域的高度 -->
<!-- screen.width：取得屏幕宽度 -->
<!-- screen.height：取得屏幕高度 -->
<!-- screen.availWidth：取得除任务栏外的屏幕宽度 -->
<!-- screen.availHeight取得除任务栏外的屏幕高度 -->
		<script>
			function getInfo(){
				var s = "";
				s += "屏幕分辨率的高"+window.screen.height;
// 				alert(s);
			}
			getInfo();
		</script>
		<!-- rem布局原生js代码 -->
		<script type="text/javascript">
			(function (doc, win) {
      	 	var docEl = doc.documentElement,
            resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
            recalc = function () {
                var clientWidth = docEl.clientWidth;
                if (!clientWidth) return;
                if(clientWidth>=640){
                    docEl.style.fontSize = '100px';
                }else{
                    docEl.style.fontSize = 100 * (clientWidth / 640) + 'px';
                }
           	 };
             if (!doc.addEventListener) return;
        win.addEventListener(resizeEvt, recalc, false);
        doc.addEventListener('DOMContentLoaded', recalc, false);
    	})(document, window);	

		</script>
		<!-- 初始化 -->
		<style>
				body, h1, h2, h3, h4, h5, h6, hr, p, blockquote, dl, dt, dd, ul, ol, li, pre, form, fieldset, legend, button, input, textarea, th, td { margin:0; padding:0; }
				body, button, input, select, textarea { font:12px/1.5tahoma, arial, \5b8b\4f53; }
				h1, h2, h3, h4, h5, h6{ font-size:100%; }
				address, cite, dfn, em, var { font-style:normal; }
				code, kbd, pre, samp { font-family:couriernew, courier, monospace; }
				small{ font-size:12px; }
				ul, ol { list-style:none; }
				a { text-decoration:none; }
				a:hover { text-decoration:underline; }
				sup { vertical-align:text-top; }
				sub{ vertical-align:text-bottom; }
				legend { color:#000; }
				fieldset, img { border:0; }
				button, input, select, textarea { font-size:100%; }
				table { border-collapse:collapse; border-spacing:0; }
		</style>
		<style>
/* 		设置div水平居中,跟footer水平居中并固定在页面底部 */
		    html,body{
		      height:100%;
		      width:100%;
		    }
			nav{
				width: 100%;
				height: 80px;
				background: #BA55D3;
			}
			.nav_top{
				width: 100%;
				height: 20px;
				background: red;
			}
			.nav_top_right{
				width: 20%;
				height: 100%;
				float: right;
				background: yellow;
			}
			.nav_top_right_span{
				width: 0.8189rem;
				height: 100%;
				float: right;	
				margin: 0 auto;
				background: pink;
			}
			.login{
				float: left;
				width: 50%;
				height: 100%;
				color: #369;
				line-height: 100%;
				/*-webkit-text-size-adjust: auto;*/
				font-size:0.12rem;
				font-family: 'PingFang SC','Helvetica Neue','Helvetica','Arial',sans-serif;
				padding: 0px;
				border:0px;
				word-break: keep-all;
			}
			.register{
				float: right;
				width: 50%;
				height: 100%;
				line-height: 100%;
				/*-webkit-text-size-adjust: auto;*/
				color: #369;
				font-size:0.12rem;
				font-family: 'PingFang SC','Helvetica Neue','Helvetica','Arial',sans-serif;
				border:0px;
				word-break: keep-all;
			}
			.nav_bottom{
				width: 100%;
				height: 60px;
				background: green;
			}
			#main{
				width:100%;
				height:60%;
				background:blue;
				margin: auto;
                position:absolute; 
                top: 0; 
                bottom: 0;
			}
			footer{
			   
			    clear:both;
			    width:100%;
			    height:50px;
			    text-algin:center;
			    margin:0px auto;
			    position:absolute;
			    bottom:0px;
			    background:pink;
			}
		</style>
	</head>
		
	<body>
		<nav>
			<div class ="nav_top">
				<div class = "nav_top_right">
					<span class = "nav_top_right_span">
					<button class = "login" onclick = "javascript:window.location.href='http://120.78.73.225/wp-login.php'">登录</button>
					<button class = "register" onclick = "javascript:window.location.href='http://120.78.73.225/wp-admin/user-new.php'">注册</button>
					</span>
				</div>
			</div>
			<div class ="nav_bottom"></div>
		</nav>
		<div id = "main">
		</div>
		<footer>

		</footer>
	</body>
</html>