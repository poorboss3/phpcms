<?php
$action=$_GET["action"];
   if($action=="login")
   {
       login();
   }
   elseif($action=="loginout")
   {
       loginOut();
   }
   elseif($action=="Register")
   {
       Register();
   }
   function test_input($data) { //表单验证
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data,ENT_QUOTES);
	   return $data;
   }
   function login()
   {
    $US=test_input($_POST['UserName']);
    $PS=test_input($_POST['UserPass']);
    if(empty($US) || empty($PS) ){
        echo "<script language='javascript'>alert('account or password can not be null.');history.go(-1);</script>";
    }else{
        $PS=md5($PS);
       $sql="select * from sc_member where account='$US' and pwd='$PS'";
       $result=mysql_query($sql);
       $row = mysql_fetch_array($result,MYSQL_ASSOC);

       if (!mysql_num_rows($result))
           {

			   echo "<script language='javascript'>alert('Sorry, the account with this keycode was not found.');history.go(-1);</script>";

           }
       else
           {

             setcookie("username", $row['user_name'],time()+3600*24,"/");
             setcookie("user", $row['user_ps'],time()+3600*24,"/");//设定时间为2个小时
             setcookie("userqx", $row['user_qx'],time()+3600*24,"/");//设定时间为2个小时
             header("Location:index.php");
           }
   }
}
function loginOut()
{
    setcookie("username", "",time()-3600*24,"/");
    setcookie("user", "", time()-3600*24,"/");
    setcookie("userqx", "",time()-3600*24,"/");
    header("Location:index.html");
}

function Register()
{
    $account=test_input($_POST['account']);
    $pwd=test_input($_POST['password']);
    $name=test_input($_POST['Name']);
    $email=test_input($_POST['email']);
    $tel=test_input($_POST['tel']);
    $facebook=test_input($_POST['facebookID']);
    if(empty($account))
    {
        echo "<script language='javascript'>alert('Please Enter Account.');history.go(-1);</script>";
    }
    elseif(empty($pwd))
    {
        echo "<script language='javascript'>alert('Please Enter Password.');history.go(-1);</script>";
    }
    elseif(empty($name))
    {
        echo "<script language='javascript'>alert('Please Enter Name.');history.go(-1);</script>";
    }
    elseif(empty($tel))
    {
        echo "<script language='javascript'>alert('Please Enter Phone Number.');history.go(-1);</script>";
    }
	elseif(empty($email))
    {
        echo "<script language='javascript'>alert('Please Enter E_mail.');history.go(-1);</script>";
    }
    elseif(empty($facebook))
    {
        echo "<script language='javascript'>alert('Please Enter FacebookID.');history.go(-1);</script>";
    }
	else{
		$sql="select * from sc_member where account='$account'";
		$result=mysql_query($sql);
		if(mysql_num_rows($result))
		{
			echo "<script language='javascript'>alert('The Account has already existed.');history.go(-1);</script>";
		}
		else
		{
			$Password=md5($pwd);
			mysql_query("INSERT INTO sc_member(account,pwd,name,tel,email,facebookid,resgisetTime) VALUES ('$account','$Password','$name','$tel','$email','$facebook',NOW())");
			echo "<script language='javascript'>alert('Successful.');location.href='/login.php';</script>";
		}
	}
}
?>