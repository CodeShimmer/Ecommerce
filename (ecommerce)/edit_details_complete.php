<?php //session_start();

include("connection.php");
/*$_SESSION['color']=$_POST['color'];
$_SESSION['size']=$_POST['size'];
$_SESSION['width']=$_POST['width'];

$_SESSION['price']=$_POST['price'];
$_SESSION['sex']=$_POST['sex'];
$_SESSION['brand']=$_POST['brand'];
$color=$_SESSION['color'];
$size=$_SESSION['size'];
$width=$_SESSION['width'];
$price=$_SESSION['price'];
$sex=$_SESSION['sex'];
$brand=$_SESSION['brand'];
*/

		   

//$idd = $_SESSION['id'];

$pid=$_REQUEST['auto_id'];
$product=$_POST['product'];
$size=$_POST['size'];
$price=$_POST['price'];

$color=$_POST['color'];
$description=$_POST['description'];
$catagory=$_POST['catagory'];
$style=$_POST['style'];

$brand=$_POST['brand'];
$count=$_POST['count'];
$image=$_POST['image'];



$query="SELECT * FROM ecommerce";
		   $rs=mysql_query($query);
		   while($res1=mysql_fetch_array($rs))
		   {
		   $id=$res1['id'];}
						  /* $color=$res1['color'];
						   $size=$res1['size'];
						   $width=$res1['width'];
						   $price=$res1['price'];
						   $sex=$res1['sex'];
						   $brand=$res1['brand'];*/
		   

		   //$saledate=$row['auto_saledate'];
	
    


$qry1 = "UPDATE ecommerce SET product = '".$product."', size= '".$size."', price= '".$price."', color='".$color."', description='".$description."', catagory= '".$catagory."',style = '".$style."', brand= '".$brand."', count= '".$count."'  WHERE id='".$pid."'" or die(mysql_error());

if(mysql_query($qry1))
 
	  echo($idd);echo $idd;
	


?>






<!--DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Welcome to AutoBuyPlus Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
<!--
.style1 {color: #333333}
.style2 {color: #FF0000}
-->
<!--/style>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top" class="body_bg"><table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top"><table width="758" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="top" class="main_table"><table width="756" border="0" align="center" cellpadding="0" cellspacing="0" class="inside_table">
              <tr>
                <td align="left" valign="top"><table width="756" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="left" valign="top" class="header-image"></td>
                  </tr>
                  <tr>
                    <td align="left" valign="top"><table width="756" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="1" align="left" valign="top"><img src="images/menu_left.gif" alt="" width="1" height="34" /></td>
                          <td align="left" valign="top" class="menu_bg"><table width="350" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                               
                                <td width="32" align="center" valign="middle">&nbsp;</td>
                                <td width="32" align="center" valign="middle">&nbsp;</td>
                                <td width="33" align="center" valign="middle">&nbsp;</td>
                              </tr>
                          </table></td>
                          <td width="120" align="left" valign="top"><a href="signout.php" style="text-decoration:none"><img src="images/menu_right.gif" alt="" width="120" height="34" border="0" /></a></td>
                        </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center" valign="top"><table width="758" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="top" class="main_table"><table width="756" border="0" cellpadding="0" cellspacing="0" class="inside_table">
              <tr>
                <td align="left" valign="top"><table width="756" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="left" class="body_padding"><table width="736" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="180" align="left" valign="top"><table width="180" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td align="left" valign="top"><table width="180" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td align="left" valign="top"><img src="images/menu_top.gif" alt="" width="180" height="5" /></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="middle" class="menu_title_bg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td height="1" align="left" valign="top"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
                                          </tr>
                                          
                                      </table></td>
                                    </tr>
                                    <tr>
                                    
                                    
                                    
                                    
                                    <td align="left" valign="middle" class="left_menu_bg"><a href="one.html" class="left_menu_link">Insert details</a></td>
                                    </tr>
                                   <!-- <tr>
                                    
                                    
                                    
                                    
                                    
                                      <td align="left" valign="middle" class="left_menu_bg"><a href="home.php" class="left_menu_link"></a></td>
                                    </tr>-->
                                    <!--tr>
                                      <td align="left" valign="top" class="left_menu_bg"><a href="reviewdetails.php" class="left_menu_link" >Review Product Details </a></td>
                                    </tr>
                                    <tr>
                                    
                                    
                                    
                                    
                                    <td align="left" valign="top" class="left_menu_bg"><a href="userdetails.php" class="left_menu_link" >Review User Details </a></td>
                                    </tr>
                                    
                                    
                                     <tr> 
                                    <td align="left" valign="top" class="left_menu_bg"><a href="stockdetails.php" class="left_menu_link" >Stock Details </a></td>
                                    </tr>
                                    
                                    
                                       
                                     <td align="left" valign="top" class="left_menu_bg"><a href="offerdetails.html" class="left_menu_link" >Insert offer details </a></td>
                                    </tr>
                                    <tr>
                                     
                                     
                          </table></td>
                              <tr>
                                <td align="left" valign="top">&nbsp;</td>
                              </tr>
                              <tr>
                                <td align="center" valign="top"><a href="#download.html"></a></td>
                              </tr>
                          </table></td>
                          <td width="10" align="left" valign="top">&nbsp;</td>
                          <td align="left" valign="top">
                          
                          <div  style=" border:#000000; width:550px;  height:290px; overflow:auto">
                          <table width="544" border="0" >
						  <tr bgcolor="#F2E7E1"-->
						  
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Welcome to AutoBuyPlus Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
<!--
.style1 {color: #333333}
.style2 {color: #FF0000}
-->
</style>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top" class="body_bg"><table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top"><table width="758" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="top" class="main_table"><table width="756" border="0" align="center" cellpadding="0" cellspacing="0" class="inside_table">
              <tr>
                <td align="left" valign="top"><table width="756" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="left" valign="top" class="header-image"></td>
                  </tr>
                  <tr>
                    <td align="left" valign="top"><table width="756" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="1" align="left" valign="top"><img src="images/menu_left.gif" alt="" width="1" height="34" /></td>
                          <td align="left" valign="top" class="menu_bg"><table width="350" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                               
                                <td width="32" align="center" valign="middle">&nbsp;</td>
                                <td width="32" align="center" valign="middle">&nbsp;</td>
                                <td width="33" align="center" valign="middle">&nbsp;</td>
                              </tr>
                          </table></td>
                          <td width="120" align="left" valign="top"><a href="signout.php" style="text-decoration:none"><img src="images/menu_right.gif" alt="" width="120" height="34" border="0" /></a></td>
                        </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center" valign="top"><table width="758" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="top" class="main_table"><table width="756" border="0" cellpadding="0" cellspacing="0" class="inside_table">
              <tr>
                <td align="left" valign="top"><table width="756" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="left" class="body_padding"><table width="736" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="180" align="left" valign="top"><table width="180" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td align="left" valign="top"><table width="180" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td align="left" valign="top"><img src="images/menu_top.gif" alt="" width="180" height="5" /></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="middle" class="menu_title_bg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td height="1" align="left" valign="top"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
                                          </tr>
                                          
                                      </table></td>
                                    </tr>
                                    <tr>
                                    
                                    
                                    
                                    
                                    <td align="left" valign="middle" class="left_menu_bg"><a href="one.html" class="left_menu_link">Insert details</a></td>
                                    </tr>
                                   <!-- <tr>
                                    
                                    
                                    
                                    
                                    
                                      <td align="left" valign="middle" class="left_menu_bg"><a href="home.php" class="left_menu_link"></a></td>
                                    </tr>-->
                                    <tr>
                                      <td align="left" valign="top" class="left_menu_bg"><a href="reviewdetails.php" class="left_menu_link" >Review Product Details </a></td>
                                    </tr>
                                    <tr>
                                    
                                    
                                    
                                    
                                    <td align="left" valign="top" class="left_menu_bg"><a href="userdetails.php" class="left_menu_link" >Review User Details </a></td>
                                    </tr>
                                    
                                    
                                     <tr> 
                                    <td align="left" valign="top" class="left_menu_bg"><a href="stockdetails.php" class="left_menu_link" >Stock Details </a></td>
                                    </tr>
                                    
                                    
                                       
                                     <td align="left" valign="top" class="left_menu_bg"><a href="offerdetails.html" class="left_menu_link" >Insert offer details </a></td>
                                    </tr>
                                    <tr>
                                     
                                     
                          </table></td>
                              <tr>
                                <td align="left" valign="top">&nbsp;</td>
                              </tr>
                              <tr>
                                <td align="center" valign="top"><a href="#download.html"></a></td>
                              </tr>
                          </table></td>
                          <td width="10" align="left" valign="top">&nbsp;</td>
                          <td align="left" valign="top">
                          
                          <div  style=" border:#000000; width:550px;  height:290px; overflow:auto">
                          <table width="544" border="0" >
						  <tr bgcolor="#F2E7E1">
    <td height="28"><span class="style1"></span></td>
    
    
       <!--td><span class="style1">id</span></td>
     <td><span class="style1">product</span></td>
    <td><span class="style1">size</span></td>
    <td><span class="style1">price</span></td>
    <td><span class="style1">color</span></td>
    <td><span class="style1">description</span>
    <td><span class="style1">catagory</span></td>
    <td><span class="style1">style</span></td>
    <td><span class="style1">brand</span>
    <td><span class="style1">count</span></td>
    <td><span class="style1">image</span></td>
    <td><span class="style1">option</span></td><span class="style1"></span></td>
    </tr-->
	
<!--/table>
</div>
</td>
                        </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="780" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="22" align="left" valign="top"><img src="images/footer_left.gif" alt="" width="22" height="29" /></td>
            <td align="left" valign="middle" bgcolor="#505050" style="border-top:1px solid #CC0000; padding-left:12px;"><br />
              � Srishi Innovative Computer Systems.</td>
            <!--
We request you retain the full web design copyright notice below including the link to http://www.sarkis-webdesign.com
This not only gives respect to the large amount of time given freely by the designer but also helps build interest, traffic and use of template. If you cannot (for good reason) retain the full design copyright we request you at least leave in place the image Web designer - Sarkis, with linked to http://www.sarkis-webdesign.com. Good luck!

Web designer Sarkis
// -->
            <!--td width="156" align="left" valign="top"><a href="http://www.sarkis-webdesign.com" title="Website Design" target="_blank"><img src="images/website-design.gif" alt="Website Design" width="156" height="29" border="0" /></a></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html-->
