<!DOCTYPE html>
<html>

<head>
	<meta name="Generator" content="CmsEasy 6_0_0_20180404_UTF8" />
	<title>RegistrationUser</title>
	<meta name="renderer" content="webkit" />
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
	<script src="<?php echo $web_url;?>/Templete/default/Js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script language="javascript">
		$(function () {
			if (window.PIE) {
				$('.rounded').each(function () {
					PIE.attach(this);
				});
			}
		});
	</script>
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

        /* ͨ�� */

        .blank5,
        .blank10,
        .blank20,
        .blank30,
        .blank50,
        .blank60 {
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
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            color: #888;
        }

            .login input:focus {
                border-color: #66afe9;
                outline: 0;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
            }

        .login #username {
            border-radius: 3px 3px 0px 0px;
        }

        .login #password {
            border-top: none;
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


        .input,
        #select,
        .form-control {
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


	<script type="text/javascript" language="javascript">
		function checkEmail(e_mail) {
			//�Ե����ʼ�����֤
			var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
			return myreg.test(e_mail);
		}

		function isMobile(tel) {
			return /^1([0-9]+){5,}$/g.test(tel);
		}

		function check() {
			if (document.login_form.account.value.length == 0) {
				alert("Please Enter Acount.");
				document.login_form.account.focus();
				return false;
			}

			if (document.login_form.password.value.length == 0) {
				alert("Please Enter A Password.");
				document.login_form.password.focus();
				return false;
			}
			if (document.login_form.password2.value.length == 0||document.login_form.password2.value!=document.login_form.password.value) {
				alert("Please Enter The Confirmation Password.");
				document.login_form.password2.focus();
				return false;
			}
			if (document.login_form.Name.value.length == 0) {
				alert("Please Enter Your Name.");
				document.login_form.Name.focus();
				return false;
			}
			if (document.login_form.email.value.length == 0 || !checkEmail(document.login_form.email.value)) {
				alert("Please Enter A Valid E_mail.");
				document.login_form.email.focus();
				return false;
			}
			if (document.login_form.tel.value.length == 0) {
				alert("Please Enter A Valid Phone Number.");
				document.login_form.tel.focus();
				return false;
			}
			if (document.login_form.facebookID.value.length == 0) {
				alert("Please Enter A Valid facebookID.");
				document.login_form.facebookID.focus();
				return false;
			}
			return true;
		}
		function set_question(value) {
			document.getElementById("question").value = value;
			document.getElementById("question").focus();
		}
	</script>
	<script type="text/javascript"></script>

</head>

<body>

	<div class="login">
		<center>
			<img id="logo" src="/Images/default/18041710270438.jpg" />
		</center>
		<div style="clear:both;height:30px;"></div>

		<form id="login_form" name="login_form" method="post" action="member.php?action=Register" onsubmit="return check()">

			<strong style="font-size:14px;color:red;"></strong>
			<input type="text" class="form-control" placeholder="Please Enter Account" data-errortxt="Please Enter Account" name="account"
				id="account" tabindex="1" />
			<div class="blank10"></div>
			<input type="password" class="form-control" placeholder="Please Enter Password" data-errortxt="Please EnterPassword" name="password"
				id="password" tabindex="2" />
			<div class="blank10"></div>
			<input type="password" class="form-control" name="password2" id="password2" placeholder="Please EnterPassword Confirmation"
				data-errortxt="Please EnterPassword Confirmation" tabindex="3" />
			<div class="blank10"></div>

			<input type="text" class="form-control" placeholder="Please Enter Name"
				 data-errortxt="Please Enter Name" name="Name"
				id="Name" tabindex="1" />
			<div class="blank10"></div>
			<input type="text" class="form-control" placeholder="Please Enter E_mail"
				 data-errortxt="Please Enter E_mail" name="email"
				id="email" tabindex="1" />
			<div class="blank10"></div>
			<input type="text" class="form-control"  placeholder="Please Enter Phone Number" 
				 data-errortxt="Please Enter Phone Number" name="tel"
				id="tel" tabindex="1" />
			<div class="blank10"></div>
			<input type="text" class="form-control" placeholder="Please Enter FacebookID" 
				    data-errortxt="Please Enter FacebookID" name="facebookID"
				id="facebookID" tabindex="1" />
			<div class="blank10"></div>
			<input id="reg" type="submit" name="submit" value="Submit" class="register_btn" />
			<input name="btn_login" type="button" id="btn_reg" value="Sing In" onclick="location.href='/login.php'" />

		</form>

		<div style="clear:both;height:30px;"></div>
	</div>
</body>

</html>