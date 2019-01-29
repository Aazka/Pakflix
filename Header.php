<?php
session_start();
?>
<div id="header">
    <header class="header">
        <!--  NavBar Area -->
        <nav class="navbar navbar-expand-md navbar-dark navbar-fixed-top websiteheader " style="background:currentColor " >
            <div>
                <img src="image/pakflix1.png" alt="logo" style="width: 75px;height:75px">
            </div>
            <span class=" navbar-text navbar-left d-inline websiteheader2 ">
          <a class="websitename" href="Index.html" style="color: red; font-size: xx-large; font-family: cursive;
    font-weight: bold;"> PakFlix </a>
        </span>
            <button class="navbar-toggler navbar-right navbarbutton" type="button" data-toggle="collapse" data-target="#collapse_target"  >
                <span class="sr-only">Togggle navigation</span>
                <div  class="fa fa-align-justify fa-2x nav navbar-right" ></div>
            </button>
            <div class=" collapse navbar-collapse" id="collapse_target">
                <ul class= "nav navbar-nav navbar-right navbarcolumn"  >

                    <li ><a href="index.php"><i class="fa fa-sign-in-alt"></i><label style="font-size: medium; font-family: cursive;
    font-weight: bold;"> Home</label> </a></li>
                    <li></i> <a href="about.php" class="fa fa-user" ><label style="font-size: medium; font-family: cursive;
    font-weight: bold;"> About</label></a></li>
                    <li><a href="contact.php" class="fa fa-envelope"> <label style="font-size: medium; font-family: cursive;
    font-weight: bold;"> Contact</label></a></li>
                  <?php
                    if(!isset($_SESSION['useremail']))
                    {
                        echo "  <li> <a href='login.php' class='fa fa-sign-in-alt'><label style='font-size: medium; font-family: cursive;
    font-weight: bold;'> Login</label></a></li>";
                    }
                    else
                    {
                        echo "  <li> <a href='logout.php' class='fa fa-sign-in-alt'><label style='font-size: medium; font-family: cursive;
    font-weight: bold;'> Logout</label></a></li>";
                    }

                  ?>


                </ul>
            </div>

        </nav>
    </header>
</div>