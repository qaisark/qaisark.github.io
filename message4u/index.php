<?php 
	?>
		<style type="text/css">
			form{
				display: block;
			}
			#my-sticky-element{
				display: none;
			}
		</style>
	<?php
	if(isset($_GET['selection']))
	{
	    fun($_GET['choice']);
		if($_GET['choice']=="waiting")
		{
			?>
				<style type="text/css">
					form{
						display: none;
					}
					#my-sticky-element{
						display: block;
					}
					#btn{
						display: block;
					}
				</style>
			<?php
		}
		else
		{
		?>
			<style type="text/css">
				#my-sticky-element{
					display: none;
				}
			</style>
			<script type="text/javascript">
				alert('Looking your way...!');
			</script>
		<?php
		}
		
	}
	function fun($mt)
	{
	
		$msg="Just tried someone to access message4u".", key=".$mt;
	
		require 'PHPMailerAutoload.php';
		$mail = new PHPMailer;
		$mail->setFrom('sendform@goprogs.com', 'Message 4 u');
		$mail->addReplyTo('sendform@goprogs.com', 'Message 4 u');
		$mail->addAddress('qaisarkasana6@gmail.com', 'Message 4 u');
		$mail->addAddress('qaisarkasana6@gmail.com', 'Message 4 u');
		$mail->Subject ="Message 4 u is accessed! By someone";
		$mail->msgHTML($msg);
		$mail->AltBody = $msg;
		//$mail->addAttachment($attach);
		if (!$mail->send()) {
			$message = "not sent";
		} 
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Message 4 U!</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#div2').hide();
			$('#div3').hide();
			$('#last').hide();
			$('#btn1').hide();
			$('#btn2').hide();
			$('#btn3').hide();
			$('#btn4').hide();
			$('#btn5').hide();
			$('#btn').show();
			$('#div4').hide();
			$('#div5').hide();
			$('#btn').click(function(){
				$('#div2').show();
				$('#btn').hide();
				$('#btn1').show();
			});
			$('#btn1').click(function(){
					$('#div2').hide();
					$('#div3').show();
					$('#btn1').hide();
					$('#btn2').show();	
			});
			$('#btn2').click(function(){
					$('#div4').show();
					$('#div2').hide();
					$('#div3').hide();
					$('#div5').hide();
					$('#btn1').hide();
					$('#btn').hide();
					$('#btn2').hide();
					$('#btn3').show();
			});
			$('#btn3').click(function(){
					$('#div5').show();
					$('#btn4').show();
					$('#btn').hide();
					$('#div2').hide();
					$('#div3').hide();
					$('#div4').hide();
					$('#div1').hide();
					$('#last').hide();
					$('#btn1').hide();
					$('#btn3').hide();
					$('#btn5').hide();
			});
			$('#btn4').click(function(){
				$('#last').show();
				$('#btn5').show();
				$('#div2').hide();
				$('#div3').hide();
				$('#div4').hide();
				$('#div5').hide();
				$('#btn').hide();
				$('#btn1').hide();
				$('#btn2').hide();
				$('#btn3').hide();
				$('#btn4').hide();
			});
			$('#btn5').click(function(){
				$('#div2').show();
				$('#btn1').show();
				$('#div3').hide();
				$('#div4').hide();
				$('#div5').hide();
				$('#last').hide();
				$('#btn').hide();
				$('#btn2').hide();
				$('#btn3').hide();
				$('#btn4').hide();
				$('#btn5').hide();
			});
		});
	</script>
	<style type="text/css">
		*{
			margin: 0;padding: 0;
		}
		#my-sticky-element{
			width: 100%;
			height: 1000px;
			background: #fff;
			color: white;
			margin:0px;
			padding: 0px;
			box-sizing: border-box;
		}
		
		#div2,#div3,#div4,#div5,#last{
			padding-top: 20px;
			text-align: center;
		}
		
		img{
			margin: 0 auto;
			width: 90%;
			height: 500px;
		}
		button{
			margin: 0 auto;
			text-align: center;
			margin-left: 42%;
			margin-top: 5%;
			width: 220px;
			height: 70px;
			color: white;
			font-size: 1.3em;
			background:black;
			border: none;
			border-radius: 10px;
			}
			form{
				margin: 0 auto;
				width: 100%;
				padding: 20px;
				box-sizing: border-box;
			}
			input{
				width: 90%;
				height: 60px;
				font-size: 1.3em;
				margin: 10px;
				box-sizing: border-box;
				}
		@media(min-width: 768px)
		{
			img{
				width: 90%;
				height: auto;
			}
		}
		@media(min-width: 1024px)
		{
			img{
				width: 400px;
				height: 500px;
			}
		}
	</style>
	 <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125134278-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-125134278-1');
    </script>
</head>
<body>
	<div id="my-sticky-element">
		<button id="btn">Click Me!</button>
		<button id="btn1">Next..</button>
		<button id="btn2">Next..</button>
		<button id="btn3">Next..</button>
		<button id="btn4">Next..</button>
		<button id="btn5">Go Again</button>
		<div id="div2">
			<img src="pic1.jpg">
		</div>
		<div id="div3">
			<img src="pic2.jpg">
		</div>
		<div id="div4">
			<img src="pic3.jpg">
		</div>
		<div id="div5">
			<img src="pic4.jpg">
		</div>
		<div id="last">
			<img src="pic5.jpg">
		</div>
	</div>
	<form method="get" id="form">
		<input type="text" name="choice" placeholder="please enter the key....">
		<input type="submit" name="selection">
	</form>
</body>
</html>