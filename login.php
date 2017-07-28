<div align = center><h1>SYSINTG</h1></div>

<?php
session_start();

/*if (isset($_SESSION['badlogin'])){
if ($_SESSION['badlogin']>=3)
       header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/blocked.php");
}

IDK WHY???????? 
*/


if (isset($_POST['submit'])){
require_once('../mysql_connect.php');
$message=NULL;

 if (empty($_POST['username'])){
  $_SESSION['username']=FALSE;/*can remove*/
  $message.='<p>You forgot to enter your username!';
 } else {
  $_SESSION['username']=$_POST['username']; 
 }

 if (empty($_POST['password'])){
  $_SESSION['password']=FALSE;
  $message.='<p>You forgot to enter your password!';
 } else {
  $_SESSION['password']=$_POST['password']; 
 }

$sql = "SELECT * FROM users"; /*select usertype where username & password ==*/
$qry = mysqli_query($dbc, $sql);
	while ($row = mysqli_fetch_array($qry))
	{
	  

	  if ($row['username'] == $_SESSION['username'] && $row['password'] == $_SESSION['password'] ) 
	  {
		 header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/home.php");
	  }


	}

/*
if ($_SESSION['username']=="SalesMarketing" &&   $_SESSION['password']=="pass123!")
{      $_SESSION['usertype']=102;
       header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/salesmain.php");

} else {
 $message.='<p>Please try again';
 if (isset($_SESSION['badlogin']))
  $_SESSION['badlogin']++;
else
  $_SESSION['badlogin']=1;
}

if ($_SESSION['username']=="Operations" &&   $_SESSION['password']=="pass123!")
{      $_SESSION['usertype']=102;
       header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/operations.php");

} else {
 $message.='<p>Please try again';
if (isset($_SESSION['badlogin']))
  $_SESSION['badlogin']++;
else
  $_SESSION['badlogin']=1;
}
*/
 
}/*End of main Submit conditional*/

if (isset($message)){
 echo '<font color="red">'.$message. '</font>';
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<fieldset><legend>Please login below: </legend>

<p>User Name: <input type="text" name="username" size="20" maxlength="30" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>"/>
<p>Password: <input type="password" name="password" size="20" maxlength="20" />
<div align="center"><input type="submit" name="submit" value="Login" /></div>

</form>

