<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | Panimalar SiS</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<script language="javascript">
	
	window.history.forward();
    function noBack() { window.history.forward(); }

	 document.onkeydown = function (e) {
            
                    return false;
          
    }



    document.onkeydown=function (e) {
            if(e.which==91){
                    return false;
					
            }
    }


document.onkeydown=function (e) {
            if(e.which==92){
                    return false;
					
            }
    }
   
function forceFullscreen()
{

top.resizeTo(window.screen.availWidth,window.screen.availHeight);
top.moveTo(0,0);
setTimeout("forceFullscreen()",5000);

}

//////////alt disable code////////////////////////
document.onkeydown = function(e) {
        if (e.altKey && (e.keyCode === 9)) {//Alt+tab blocked.
            return false;
        }
       if (e.altKey && (e.keyCode === 70)) {//Alt+f blocked.
           return false;
        }
    };
  function AltDown() {
if (event.altLeft) {
alert("This fuctionality has been disabled.");
}
else {
if (event.altKey) {
alert("This fuctionality has been disabled.");
}
}
document.body.focus();
}


document.onkeydown = keydown;

function keydown(evt) {
    if (!evt) evt = event;
    if (evt.altKey) {
        alert('alt');
    }
} // function keydown(evt)?




/////////////////////end///////////////////////
   
//////////F12 disable code////////////////////////
    document.onkeypress = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
           //alert('No F-12');
            return false;
        }
    }
    document.onmousedown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
document.onkeydown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
/////////////////////end///////////////////////


//Disable right click script 
//visit http://www.rainbow.arch.scriptmania.com/scripts/ 
var message="Sorry, right-click has been disabled"; 
/////////////////////////////////// 
function clickIE() {if (document.all) {(message);return false;}} 
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) { 
if (e.which==2||e.which==3) {(message);return false;}}} 
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;} 
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;} 
document.oncontextmenu=new Function("return false") 
// 
function disableCtrlKeyCombination(e)
{
//list all CTRL + key combinations you want to disable
var forbiddenKeys = new Array('a','p','o','s', 'n', 'c', 'x', 'v', 'j' , 'w', 't', 'u', 'alt');
var key;
var isCtrl;
if(window.event)
{
key = window.event.keyCode;     //IE
if(window.event.ctrlKey)
isCtrl = true;
else
isCtrl = false;
}
else
{
key = e.which;     //firefox
if(e.ctrlKey)
isCtrl = true;
else
isCtrl = false;
}
//if ctrl is pressed check if other key is in forbidenKeys array
if(isCtrl)
{
for(i=0; i<forbiddenKeys.length; i++)
{
//case-insensitive comparation
if(forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase())
{
//alert('Key combination CTRL + '+String.fromCharCode(key) +' has been disabled.');
return false;
}
}
}
return true;
}
	
	
	
	
<!--
function myChanged(v){
	//alert("Hello, value has been changed : "+document.getElementById("date1").value+"["+v+"]");
}
function validate(obj,op)
{

var x=document.getElementById(obj).value;
	switch(op)
	{
		 case 1:
		 if(x.trim().length==0)
		 {
		 alert("Enter name");
		 }
		 break;
		 
		 case 2:
		 if(x.trim().length>12 || x.trim().length<11)
		 {
		 alert("Invalid Register number");
		 }
		 break;
	}
}
//-->
</script>
	<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>

</head><!--/head-->

<body bgcolor="#99CCFF" onload='loadques();noBack();timer();AltDown(); forceFullscreen();  ' onkeydown="return showKeyCode(event)" 
    onpageshow='if (event.persisted) noBack();' onkeypress='return disableCtrlKeyCombination(event);' onkeydown='return disableCtrlKeyCombination(event);'>
	
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
							
								<li><a ><i class="fa fa-envelope"></i> panimalarlogistics@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								
								<li><a ><i class="fa fa-linkedin"></i></a></li>
								<li><a ><i class="fa fa-dribbble"></i></a></li>
								<li><a ><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
				<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left"><a href="index.html"><img src="logo.jpg" alt="" /></a></a></div>
						<div class="btn-group pull-right">
							
							
							<div class="btn-group">
								
									
								</button>
								
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Home</a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	</header><!--/header-->
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
							
							<img src="images/home/admin.png" alt="" />
							
							
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Admin Account</h2>
						<form method="post" action="adminloginsms.php">
						<input type="text" placeholder="Admin User ID" name="uid" />
							<input type="password" placeholder="Password" name="pass" />
							
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	<div>
	     <p>&nbsp;
		 </p>
		 <p>&nbsp;
		 </p><p>&nbsp;
		 </p><p>&nbsp;
		 </p><p>&nbsp;
		 </p>
		 <p>&nbsp;		 </p>
		</div>
		
	
	
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2016 Panimalar Group of Institutions SMS Portal. All rights reserved.</p>
				
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>