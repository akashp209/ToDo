<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<html>
    <head>
    <link rel="stylesheet" href="main.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>
      <div>
      
      </div>
    <div class="wrapper">
  <div class="wrapper_container">
  <!-- start content -->
    <div class="site-wrapper active" id="target">
      <div class="site-wrapper_left-col">
        <a href="#" class="logo">Logo</a>
        <div class="left-nav">
          <a href="#"><i class="fa fa-home"></i>Home</a>
          <a href="#"><i class="fa fa-pie-chart"></i>Dashboard</a>
          <a href="#" class="active"><i class="fa fa-user"></i>Profile</a>
          <a href="#"><i class="fa fa-comment"></i>About</a>
          <a href="#"><i class="fa fa-cog"></i>Settings</a>
          <a href="index.php?logout='1'"><i class="fa fa-sign-out"></i>Logout</a>
        </div>
      </div>
      <div class="site-wrapper_top-bar">
        <a href="#" id="toggle"><i class="fa fa-bars"></i></a>
      </div>
      <!-- inner content -->
      <div class="row">
        <div class="col-1">
          <div class="user-item">
            <div class="user-item_photo">
              <img src="http://cs627618.vk.me/v627618825/c092/8fhljOvdiEs.jpg" alt="myphoto" />
            </div>
            <div class="user-item_info">
              <p class="name"><?php if(isset($_SESSION['username'])) : ?><?php echo $_SESSION['username'];?><?php endif ?></p>
              <p class="sub">Front-End developer</p>
              <div class="controls">
                <a href="#"><i class="fa fa-camera"></i></a>
                <a href="#"><i class="fa fa-pencil"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-2">
            <div class="chat">
              <div class="head">
                <i class="fa fa-comment"></i>
                Message
              </div>
              <div class="chat_inner">
                <div class="chat_inner-item">
                  <div class="photo">
                    <img src="http://cs627618.vk.me/v627618825/c092/8fhljOvdiEs.jpg" alt="myphoto" />
                  </div>
                  <div class="message">
                    Hello
                  </div>
                </div>
                <div class="chat_inner-item right">
                  <div class="message">
                    Hello
                  </div>
                  <div class="photo">
                    <img src="http://cs627618.vk.me/v627618825/c092/8fhljOvdiEs.jpg" alt="myphoto" />
                  </div>
                </div>
                <div class="chat_inner-item">
                  <div class="photo">
                    <img src="http://cs627618.vk.me/v627618825/c092/8fhljOvdiEs.jpg" alt="myphoto" />
                  </div>
                  <div class="message">
                    How can i help you?
                  </div>
                </div>
              </div>
              <div class="footer">
                <input type="text" placeholder="Your Message">
                <button><i class="fa fa-paper-plane"></i></button>
              </div>
            </div>
          </div>
      </div>
      <!-- end inner content -->
    </div>  
  <!-- end content -->
  </div>
</div>
<script>
$(function(){
  $('#toggle').click(function(){
    $('#target').toggleClass('active');
  });
});
</script>
    </body>
</html>