<?php include_once 'SEMCMS_Top_include.php'; ?>
    <body class="rgithbd">
        <div class="divtitle"><img src="SC_Page_Config/Image/icons/house.png" align="absmiddle" /> <a href="SEMCMS_Middle.php">后台首页</a> > <a href="SEMCMS_language.php">综合管理</a> > 用户管理 <span class="srs"><a href="javascript:history.go(-1);"><img src="SC_Page_Config/Image/icons/Return.png" align="absmiddle" /> 返回 </a></span> <span class="srs"><a href="javascript:myrefresh();"><img src="SC_Page_Config/Image/icons/refresh.png" align="absmiddle" /> 刷新 </a></span></div>


<table width="98%" class="table" cellpadding="0" cellspacing="0">
      <tr>
          <td colspan="8"  class="tdsbg"><img src="SC_Page_Config/Image/icons/coins.png" align="absmiddle" />  <span class="red">会员管理</span> <span id="uploads" class="sr"></span> </td>
  </tr>
  <tr>
      <td width="5%" align="center"><strong>序号</strong></td> 
      <td><strong>账号</strong></td> 
      <td><strong>姓名</strong></td> 
      <td><strong>电话</strong></td>
      <td><strong>邮箱</strong></td>
      <td><strong>Facebook ID</strong></td>
      <td><strong>订单号</strong></td>
      <td width="12%" align="center"><strong>注册时间</strong>       
  </tr>
   <?php 
    $sql=mysql_query("select * from sc_member");     
    $all_num=mysql_num_rows($sql); //总条数

    $page_num=10; //每页条数

    $page_all_num = ceil($all_num/$page_num); //总页数

    $page=empty($_GET['page'])?1:$_GET['page']; //当前页数

    $page=(int)$page; //安全强制转换

    $limit_st = ($page-1)*$page_num; //起始数
    
    
    
    $sql="select  * from  sc_member  limit $limit_st,$page_num ";
    $query=mysql_query($sql);
    Panduans(mysql_num_rows($query));
    $js=1;
    while($row=mysql_fetch_array($query)){
        
        
        
        
   ?>
  <tr>
    <td align="center"><?php echo $js; ?></td>  
    <td> <?php echo $row['account'] ?> </td>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['tel'] ?></td> 
    <td><?php echo $row['email'];?> </td>
    <td><?php echo $row['facebookid'];?> </td>
    <td><?php echo $row['OrderNumber'];?> </td>
    <td><?php echo $row['resgisetTime'];?> </td>
    </tr>
       
   <?php
        $js=$js+1;
    }
   ?>
  <tr><td colspan="8"><span style="float: left;">
      <span class="sr2">总共  <?php echo $all_num; ?> 条记录 <?php show_page($all_num,$page,$page_num);   ?></span></td></tr>
  
</table>

<?php 
include_once 'SEMCMS_bot.php'; 
?>
 <script type="text/javascript">
function views(str,id){TINY.box.show("SEMCMS_Fenpei.php?uid="+id+"&st="+str,1,700,400,1)}
</script>
</body>
</html>
