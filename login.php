<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>  
        <div class="header">
            <div class="logo">
            </div>
            <div class="toolbar">
                <table class="toolbar-table">
                    <tr>
                        <td><a href="home.php">Home</a></td>
                        <td><a href="aboutus.php">About Us</a></td>
                        <td><a href="ordernow.php">Menu</a></td>
                        <td><a href="login.php">Login</a></td>
                        <td><a href="contactus.php">Contact Us</a></td>
                    </tr>
                </table>
            </div>
        </div>  
        <div class="main">
        <div class="login-form">
                <form action="result.php" method="POST">
                    <table>
                        <tr>
                            <td colspan="2" align="center"><h3><b>Register Now</b></h3></td>
                        </tr>
                        <tr>
                            <td>Name:</td><td><input type="text" placeholder="Enter your Name" id="name" name="name"></td>
                        </tr>
                        <tr>
                            <td>Phone Number:</td><td><input type="text" placeholder="Enter your Number" id="phno" name="phno"></td>
                        </tr>
                        <tr>
                            <td>Email Id:</td><td><input type="mail" placeholder="Enter your Mailid" id="email" name="email"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><input type="submit" placeholder="confirm your order"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="footer">
        </div>
    </body>    
</html>