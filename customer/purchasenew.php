<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Theme</title>
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div id ="md">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Customer</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Purchase <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">New</a></li>
                    <li><a href="#">Cancel Purchase Order</a></li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Rent <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">New</a></li>
                    <li><a href="#">Cancel Rent</a></li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Purchase</a></li>
                    <li><a href="#">Rent</a></li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Delivery <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Request</a></li>
                    <li><a href="#">View</a></li>
                    <li><a href="#">Cancel Request</a></li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Setting <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Change Username</a></li>
                    <li><a href="#">Change Password</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="index.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
    </div>
</nav>
</div>
</br></br>
<div id ="lol"></div>
<div id="main">
    <div id="header">
        <img src="images/4p-banner-buyer.jpg">
    </div>

    <div id="menu">
        <h1>Table here</h1>
        <div class="box">
            <a class="button" href="#popup1">Let me Pop up</a>
        </div>

        <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Conform Item</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    <form method="post">
                        <table border="2">
                            <tr>
                                <td>Item id :</td>
                                <td><input type="text"> </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="content">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>
</body>
</html>
