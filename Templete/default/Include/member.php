<?php 
   $action=$_GET["action"]
   if($action=="login")
   {
       login();
   }
   elseif($account=="loginout")
   {
       loginOut();
   }
   elseif($account=="register")
   {
       Register();
   }
   function login()
   {
    $US=test_input($_POST['UserName']);
    $PS=test_input($_POST['UserPass']);
    if(empty($US) || empty($PS) ){ 
        echo "<script language='javascript'>alert('account or password can't be null.');</script>";
    }else{
        $PS=md5($PS);
       $sql="select * from sc_member where account='$US' and pwd='$PS'"; 
       $result=mysql_query($sql); 
       $row = mysql_fetch_array($result,MYSQL_ASSOC); 

       if (!mysql_num_rows($result)) 
           { 

     echo "<script language='javascript'>alert('Sorry, the account with this keycode was not found.');</script>";

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
    $pwd=test_input($_POST['Password']);
    $name=test_input($_POST['UserName']);
    $email=test_input($_POST['Email']);
    $tel=test_input($_POST['Telephone']);
    $facebook=test_input($_POST['facebookID']);
    if(empty($account))
    {
        echo "<script language='javascript'>alert('Account can't be null.);</script>";
        return;
    }
    if(empty($Password))
    {
        echo "<script language='javascript'>alert('Password can't be null.);</script>";
        return;
    }
    if(empty($name))
    {
        echo "<script language='javascript'>alert('Name can't be null.);</script>";
        return;
    }
    if(empty($tel))
    {
        echo "<script language='javascript'>alert('Telephpone can't be null.);</script>";
        return;
    }
    if(empty($facebook))
    {
        echo "<script language='javascript'>alert('FacebookID can't be null.);</script>";
        return;
    }
    $sql="select * from sc_member where account='$account'"; 
    $result=mysql_query($sql); 
    $row = mysql_fetch_array($result,MYSQL_ASSOC); 
    if(!mysql_num_rows($result))
    {
        echo "<script language='javascript'>alert('The Account has already existed.);</script>";
        return;
    }
    $Password=md5($Password);
    mysql_query("INSERT INTO sc_member(account,pwd,name,tel,email,facebookid,resgisetTime)"
         . "VALUES ('$account','$Password','$name','$tel','$facebook',NOW())");
    echo "<script language='javascript'>alert('Successful.);</script>";
          header("Location: Login.php");     
}
?>