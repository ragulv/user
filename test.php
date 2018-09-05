<?php
require_once('connect.php');
$user_id=$_SESSION['SESS_MEMBER_ID'];
$result3 = mysqli_query($mysqli,"SELECT * FROM user where user_id='$user_id'");
while($row3 = mysqli_fetch_array($result3))
{ 
  $name=$_row3['name'];
  $company=$_row3['company'];
  $address1=$_row3['address1'];
  $address2=$_row3['address2'];
  $state=$_row3['state'];
  $city=$_row3['city'];
  $pin_code=$_row3['pin_code'];
  $phone_no=$_row3['phone_no'];
  $email=$_row3['email'];
  $username=$_row3['username'];
  $password=$_row3['password'];
}
?>
<table width="398" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2">Your Profile Information </td>
	<td><div align="right"><a href="index.php">logout</a></div></td>
  </tr>
  <tr>
    <td width="82" valign="top"><div align="left">name:</div></td>
    <td width="165" valign="top"><?php echo $name ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">company:</div></td>
    <td valign="top"><?php echo $company ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">address1:</div></td>
    <td valign="top"><?php echo $address1 ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">address2:</div></td>
    <td valign="top"><?php echo $address2 ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">state: </div></td>
    <td valign="top"><?php echo $state ?></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">city: </div></td>
    <td valign="top"><?php echo $city ?></td>
  </tr> 
  <tr>
    <td valign="top"><div align="left">pin_code: </div></td>
    <td valign="top"><?php echo $pin_code ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">phone_no: </div></td>
    <td valign="top"><?php echo $phone_no ?></td>
  </tr>
    <tr>
    <td valign="top"><div align="left">email: </div></td>
    <td valign="top"><?php echo $email ?></td>
  </tr>
</table>
<p align="center"><a href="index.php"></a></p>