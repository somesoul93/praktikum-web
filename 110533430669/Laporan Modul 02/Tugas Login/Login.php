<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign in &middot;</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="favicon.png">
  </head>

  <body>

    <div class="container">

      <form class="form-signin"  name="frmlogin" onSubmit="return validasi()" action="<?php $_SERVER['PHP_SELF'];?>" method="post" >
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" name="txtuser" class="input-block-level" placeholder="User name">
        <input type="password" name="txtpass" class="input-block-level" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox"  value="remember-me"> Remember me
        </label>
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
      </form>

      <?php
			$u = $_POST['txtuser'];
			$p = $_POST['txtpass'];
			
			if(isset($u) && isset($p) && $u!="" && $p!=""){
				if($u == "admin" && $p == "admin"){
					echo '<script> alert("Selamat Datang"); window.location.href="Dashboard.php"</script>';
//					header(location:"Dashboard.php");
				}else{
					echo '<script> alert("Username/Password salah. ulangi langkah");</script>';
				}	
			}
			
        	
	  ?>
      
		

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.js"></script>
    <script src="bootstrap-transition.js"></script>
    <script src="bootstrap-alert.js"></script>
    <script src="bootstrap-modal.js"></script>
    <script src="bootstrap-dropdown.js"></script>
    <script src="bootstrap-scrollspy.js"></script>
    <script src="bootstrap-tab.js"></script>
    <script src="bootstrap-tooltip.js"></script>
    <script src="bootstrap-popover.js"></script>
    <script src="bootstrap-button.js"></script>
    <script src="bootstrap-collapse.js"></script>
    <script src="bootstrap-carousel.js"></script>
    <script src="bootstrap-typeahead.js"></script>
	<script language="javascript">
    	function validasi(){
			var n  = document.forms["frmlogin"]["txtuser"].value;
			if(n==null||n==""){
				alert("Username Empty!")
				document.getElementById("txtuser").focus();
				return false;
			}
			
			var o  = document.forms["frmlogin"]["txtpass"].value;
			if(o==null||o==""){
				alert("Password Empty!")
				document.getElementById("txtpass").focus();
				return false;
			}
			
			var charExep = /^[a-zA-Z]+$/;
			if(n.match(charExep)){
				if(o.match(charExep)){
					return true;
				}else{
					alert("Password harus berisi huruf")	
					document.getElementById("txtpass").focus();
					return false;
				}
			}else{
				alert("Username harus berisi huruf");
				document.getElementById("txtpass").focus();
				return false;
			}
		}
    </script>
  </body>
</html>
