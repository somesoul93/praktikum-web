<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    
    	<style>
        	.masthead {
				padding: 70px 0px 80px;
				margin-bottom: 0px;
				color: rgb(255, 255, 255);
			}
			.jumbotron {
				position: relative;
				padding: 40px 0px;
				color: rgb(255, 255, 255);
				text-align: center;
				text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.4), 0px 0px 30px rgba(0, 0, 0, 0.075);
				background: linear-gradient(45deg, rgb(0, 11, 159) 0%, rgb(110, 255, 243) 100%) repeat scroll 0% 0% transparent;
				box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.2) inset, 0px -3px 7px rgba(0, 0, 0, 0.2) inset;
			}
			.container {
				margin-right: auto;
				margin-left: auto;
			}
			
			body {
				margin: 0px;
				font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
				font-size: 14px;
				line-height: 20px;
				color: rgb(119, 119, 119);
				background-color: rgb(255, 255, 255);
			}
			.jumbotron .container {
			  position: relative;
			  z-index: 2;
			}
			.jumbotron:after {
			  content: '';
			  display: block;
			  position: absolute;
			  top: 0;
			  right: 0;
			  bottom: 0;
			  left: 0;
			  background: url(bs-docs-masthead-pattern.png) repeat center center;
			  opacity: .7;
			}
			.form-search input, .form-inline input, .form-horizontal input, .form-search textarea, .form-inline textarea, .form-horizontal textarea, .form-search select, .form-inline select, .form-horizontal select, .form-search .help-inline, .form-inline .help-inline, .form-horizontal .help-inline, .form-search .uneditable-input, .form-inline .uneditable-input, .form-horizontal .uneditable-input, .form-search .input-prepend, .form-inline .input-prepend, .form-horizontal .input-prepend, .form-search .input-append, .form-inline .input-append, .form-horizontal .input-append {
				display: inline-block;
				margin-bottom: 0px;
				vertical-align: middle;
			}
			textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
				background-color: rgb(255, 255, 255);
				border: 1px solid rgb(204, 204, 204);
				box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset;
				transition: border 0.2s linear 0s, box-shadow 0.2s linear 0s;
			}
			select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
				display: inline-block;
				height: 30px;
				padding: 4px 6px;
				margin-bottom: 10px;
				font-size: 14px;
				line-height: 20px;
				color: rgb(85, 85, 85);
				vertical-align: middle;
				border-radius: 4px 4px 4px 4px;
			}
			input, textarea, .uneditable-input {
				margin-left: 0px;
			}
			input, textarea, .uneditable-input {
				margin-left: 0px;
			}
			input, textarea, .uneditable-input {
				width: 206px;
			}
			input, button, select, textarea {
				font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
			}
			label, input, button, select, textarea {
				font-size: 14px;
				font-weight: normal;
				line-height: 20px;
			}
			button, input {
				line-height: normal;
			}
			button, input, select, textarea {
				margin: 0px;
				font-size: 100%;
				vertical-align: middle;
			}
			.btn:first-child {
			}
			button.btn, input.btn[type="submit"] {
			}
			.btn-info {
				color: rgb(255, 255, 255);
				text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.25);
				background-color: rgb(73, 175, 205);
				background-image: linear-gradient(to bottom, rgb(91, 192, 222), rgb(47, 150, 180));
				background-repeat: repeat-x;
				border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
			}
			.btn {
				display: inline-block;
				padding: 4px 12px;
				margin-bottom: 0px;
				font-size: 14px;
				line-height: 20px;
				color: rgb(51, 51, 51);
				text-align: center;
				text-shadow: 0px 1px 1px rgba(255, 255, 255, 0.75);
				vertical-align: middle;
				cursor: pointer;
				background-color: rgb(245, 245, 245);
				background-image: linear-gradient(to bottom, rgb(255, 255, 255), rgb(230, 230, 230));
				background-repeat: repeat-x;
				border-width: 1px;
				border-style: solid;
				-moz-border-top-colors: none;
				-moz-border-right-colors: none;
				-moz-border-bottom-colors: none;
				-moz-border-left-colors: none;
				border-image: none;
				border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgb(179, 179, 179);
				border-radius: 4px 4px 4px 4px;
				box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.2) inset, 0px 1px 2px rgba(0, 0, 0, 0.05);
			}
			input, button, select, textarea {
				font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
			}
			label, input, button, select, textarea {
				font-size: 14px;
				font-weight: normal;
				line-height: 20px;
			}
			label, select, button, input[type="button"], input[type="reset"], input[type="submit"], input[type="radio"], input[type="checkbox"] {
				cursor: pointer;
			}
			button, html input[type="button"], input[type="reset"], input[type="submit"] {
				cursor: pointer;
			}
			button, input {
				line-height: normal;
			}
			button, input, select, textarea {
				margin: 0px;
				font-size: 100%;
				vertical-align: middle;
			}
			.table th, .table td {
				line-height: 20px;
				text-align: left;
			}
			.table-bordered {
				border-collapse: separate;
			}
			table {
				border-collapse: collapse;
				border-spacing: 0px;
			}
        </style>
    </head>
    
    <body>
    	<div class="jumbotron masthead">
            <div class="container">

                <p>
                	<h1> Kalkulator Sederhana </h1>
					<form name="frmcalc" class="form-inline" onsubmit="return val()" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                    	<input name="txta" type="text" placeholder="Nilai Pertama" value="<?php echo isset($_POST['txta']) ? $_POST['txta'] : '' ?>">
                        <select name="op">
                        	<option value="kali"> x </option>
                            <option value="bagi"> / </option>
                            <option value="tambah"> + </option>
                            <option value="kurang"> - </option>
                        </select>
                        <input name="txtb" type="text" placeholder="Nilai Kedua" value="<?php echo isset($_POST['txtb']) ? $_POST['txtb'] : '' ?>">
                        <br>
                        <button name="exec" class="btn btn-info" type="submit">=</button>
                        <br><br>
                        <input name="txtc" disabled="disabled" type="text"  placeholder="Hasil" value="<?php
							$a = $_POST['txta'];
							$b = $_POST['txtb'];
							$op = $_POST['op'];
                        	if(isset($a) && isset($b)){
								if($op=="kali"){
									echo $a * $b;
								}else if($op=="bagi"){
									echo $a / $b;
								}else if($op=="tambah"){
									echo $a + $b;
								}else if($op=="kurang"){
									echo $a - $b;
								}
							}
							
						?>">
                    </form>
                     
                </p>    
            </div>
        </div>
        
        <script>
        	function val(){
				var a  = document.forms["frmcalc"]["txta"].value;
				if(a==null||a==""){
					alert("Nilai Pertama tidak boleh kosong!")
					document.getElementById("txta").focus();
					return false;
				}
				
				var b  = document.forms["frmcalc"]["txtb"].value;
				if(b==null||b==""){
					alert("Nilai Kedua tidak boleh kosong!")
					document.getElementById("txtb").focus();
					return false;
				}
			}
        </script>
    </body>
</html>