<html>
<head>
<?php
include ("../config/database.php");
?>
</head>
<body>
<div id="login">
    <div id="frm">
        <form method="post">
            <table border="0" align="center">
                <tr>
                    <td align="center" colspan="2"><b><h3>Login Here!</h3></b></td>
                </tr>
                <tr>
                    <td>Username :</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr align="center">
                    <td colspan="2"><input type="submit" name="login" value="Login"></td>
                </tr>
        </form>
</body>
<?php
session_start();
if(isset($_POST['login']))
{
    $name=$_POST['username'];
    $pwd=$_POST['password'];
    if($name!=''&&$pwd!='')
    {
        $sql = "select * from customer where username='".$name."' and password='".$pwd."'";
        $query=mysqli_query($conn,$sql) or die("Not user found");
        $res=mysqli_fetch_row($query);
        if($res)
        {
            $_SESSION['name']=$name;
            header('location:index.php');
        }
        else
        {
            echo'You entered username or password is incorrect';
        }
    }
    else
    {
        echo'Enter both username and password';
    }
}
?>
</html>