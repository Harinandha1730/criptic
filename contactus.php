<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
  <body>
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
    <div class="container-fluid">
      <br>
      <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3886.4004448987425!2d80.2100326!3d13.0737886!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5266a2b44ea549%3A0x24732a5af8f16afd!2sDwaraka%20Doss%20Goverdhan%20Doss%20Vaishnav%20College!5e0!3m2!1sen!2sin!4v1671439414465!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
      <div class="col-lg-3"></div>
      </div>
      <br>
      <div class="row">
        <div class="col-lg-1">
        <a href="https://www.google.com/maps/place/Dwaraka+Doss+Goverdhan+Doss+Vaishnav+College/@13.0737886,80.2100326,17z/data=!4m12!1m6!3m5!1s0x3a5266a2b44ea549:0x24732a5af8f16afd!2sDwaraka+Doss+Goverdhan+Doss+Vaishnav+College!8m2!3d13.0737886!4d80.2122213!3m4!1s0x3a5266a2b44ea549:0x24732a5af8f16afd!8m2!3d13.0737886!4d80.2122213"><img src="images/location.jpg" height="20px"></a>
        </div>
        <div class="col-lg-2">
          Address:
        </div>
        <div class="col-lg-3">
          Corporate Office Address
          No. 12, Cavin Ville,
          Cenotaph Road, Teynampet,
          Chennai - 600018
        </div>
        <div class="col-lg-1">
          <a href="https://www.instagram.com/harinandha_official/"><img src="images/insta.jpg" height="20px"></a>
        </div>
        <div class="col-lg-2">
          Instagram:
        </div>
        <div class="col-lg-3">
         @harinandha_official
        </div>
      </div>
      <div class="row">
        <div class="col-lg-1">
          <a href="https://accounts.snapchat.com/accounts/snapcodes"><img src="images/snapchat.jpg" height="20px"></a>
        </div>
        <div class="col-lg-2">
          Snapchat:
        </div>
        <div class="col-lg-3">
          @harinandha1730
        </div>
        <div class="col-lg-1">
          <a href="https://www.facebook.com/harinandha.harinandha.92"><img src="images/fb.jpg" height="20px"></a>
        </div>
        <div class="col-lg-2">
          Facebook:
        </div>
        <div class="col-lg-3">
         @harinandha2003
        </div>

      </div>
    </div>
    <script>
      var myIndex = 0;
      carousel();

      function carousel() {
        var i;
        var x = document.getElementsByClassName("gallery-img");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 2000); // Change image every 2 seconds
      }
    </script>
  </body>
</html>
