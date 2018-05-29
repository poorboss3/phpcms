<!DOCTYPE html>
<html>
<head>
    <meta name="Generator" content="CmsEasy 6_0_0_20180404_UTF8" />
    <title>UserLanding</title>
    <meta name="renderer" content="webkit">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <meta name="author" content="CmsEasy Team" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
	<script src="<?php echo $web_url;?>/Templete/default/Js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <style type="text/css">
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            line-height: 180%;
            padding-bottom: 40px;
            background-color: #fff;
            font-size: 1.0em;
            color: #333;
        }

        a {
            transition: 0.5s;
            -webkit-transition: 0.5s;
            -moz-transition: 0.5s;
            color: #333;
            text-decoration: none;
        }

            a:hover {
                text-decoration: none;
            }

        /* 通用 */

        .blank5, .blank10, .blank20, .blank30, .blank50, .blank60 {
            clear: both;
            height: 5px;
            overflow: hidden;
        }

        .blank10 {
            height: 10px;
        }

        .blank20 {
            height: 20px;
        }

        .blank30 {
            height: 30px;
        }

        .blank50 {
            height: 50px;
        }

        .blank60 {
            height: 60px;
        }

        .login input {
            width: 268px;
            height: 26px;
            line-height: 26px;
            padding: 6px 15px;
            border: 1px solid #ccc;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            color: #888;
        }

            .login input:focus {
                border-color: #66afe9;
                outline: 0;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
                box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
            }

        .login #username {
            border-radius: 3px 3px 0px 0px;
        }

        .login #password {
            border-top: none;
            margin-bottom: 30px;
            border-radius: 0px 0px 3px 3px;
        }



        .copyright {
            padding-top: 55px;
            text-align: center;
            font-size: 10px;
            color: #888;
        }

        .login {
            width: 300px;
            margin: 0px auto;
        }

        #reg,
        #btn_reg {
            width: 300px;
            height: 46px;
            line-height: 46px;
            margin-top: 30px;
            text-align: center;
            color: white;
            border: none;
            background: #337ab7;
            border-radius: 3px;
        }

            #reg:hover {
                background: #286090;
            }

        #btn_reg {
            line-height: 36px;
            margin-top: 8px;
            background: white;
            border: 1px solid #ccc;
            color: #333;
        }

            #btn_reg:hover {
                background: #e6e6e6;
            }

        #frmLogin #u_loginname {
            border-radius: 3px 3px 0px 0px;
        }

        #frmLogin #u_loginpwd {
            border-top: none;
            border-radius: 0px 0px 0px 0px;
        }

        #frmLogin #u_loginpwd1 {
            border-top: none;
            border-radius: 0px 0px 3px 3px;
        }


        .copyright {
            padding-top: 55px;
            text-align: center;
            font-size: 10px;
            color: #888;
        }


        .input, #select, .form-control {
            width: 298px;
            height: 30px;
            line-height: 30px;
            padding: 0px 10px;
            border: 1px solid #ccc;
            font-weight: bold;
            font-size: 12px;
            border-radius: 3px 3px 3px 3px;
        }

        #select {
            width: 320px;
        }



        #mobilenum {
            float: left;
            width: 140px;
            border: 1px solid #ccc;
            height: 38px;
            line-height: 38px;
            padding: 0px 10px;
            border-radius: 3px 3px 3px 3px;
        }

        #btm_sendMobileCode {
            float: right;
            width: 130px;
            border: 1px solid #ccc;
            height: 40px;
            line-height: 40px;
            padding: 0px 10px;
            border-radius: 3px 3px 3px 3px;
        }


        #checkcode {
            float: left;
            margin: 10px 0px;
        }

        #verify {
            float: left;
            width: 208px;
            height: 28px;
            line-height: 28px;
            margin: 10px 0px;
            padding: 0px 15px;
            border: 1px solid #ccc;
            border-radius: 3px 0px 0px 3px;
        }

            #verify:hover {
                border: 1px solid #A5C7FE;
                -moz-box-shadow: 0px 0px 10px #A5C7FE;
                -webkit-box-shadow: 0px 0px 10px #A5C7FE;
                box-shadow: 0px 0px 10px #A5C7FE;
            }

        img#logo {
            max-width: 300px;
        }


        @media (max-width: 468px) {
            body {
                padding-top: 20px;
            }
        }
    </style>




</head>
<body>

    <div class="login">
        <center>
            <img id="logo" src="https://glteck.com/Images/default/18041412581894.png" />
        </center>
        <div style="clear:both;height:30px;"></div>

		<form id="loginform" name="loginform" method="post" action="member.php?action=login">
			<input type="text" class="form-control"  placeholder="Please EnterUser Name"  data-errortxt="Please EnterUser Name" name="username" id="username" required autofocus />
			<div class="blank10"></div>
			<input type="password" class="form-control"placeholder="Please EnterPassword"  data-errortxt="Please Enter Password" name="password" id="password" required />
			<div class="blank10"></div>
            <input type="submit" name="submit" value="Login" id="reg" class="register_btn" />
			<input name="btn_login" type="button" id="btn_reg" value="Sing Up" onclick="location.href='register.php'" />
			<div class="blank20"></div>
		</form>
        <div style="clear:both;height:30px;"></div>
    </div>


</body>
</html>