<?
require_once(__DIR__ . "/config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SHORT_SITE_NAME?> | Landing Zone</title>
    <link rel="stylesheet" href="./css.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo BASE_URL; ?>" />
    <meta property="og:title" content="<?php echo SHORT_SITE_NAME; ?>" />
    <meta property="og:description" content="<?php echo ABOUT_ME; ?> | Home">
    <meta name="theme-color" content="<?php echo MAIN_COLOUR; ?>">

    <link rel="shortcut icon" href="./assets/images/favicon.png" />

    <style>
        nav ul li a:hover{
            color: <?php echo MAIN_COLOUR ?>
        }

        footer {
        background: <?php echo FOOTER_COLOUR; ?>;
        color: <?php echo FOOTER_LETTERING_COLOUR; ?>;
        padding: 15px 50px;
        text-align: center;
        text-decoration: none;
}
    </style>

</head>
<body>
  <header>
    <div class="logo"><?php echo SHORT_SITE_NAME; ?></div>
    
    <nav>
      <ul>
    	<li><a href="#">Home</a></li>
        <li><a href="<?php echo DISCORD_INVITE; ?>">Discord</a></li>
        <li><a href="<?php echo CONTACT_URL; ?>">Contact</a></li>
      </ul>
    </nav>
  </header>
    
  <div class="banner">
  	<img src="logo.png" alt="">
  </div>
  
  <div class="content">
    <p><?php echo ABOUT_ME; ?></p>
  </div>
  
  
  <footer>
    <p><?php echo COPYRIGHT; ?> | Made By <a href="https://discord.gg/43akmun7Qd">H4r1eyDev</p>
  </footer>

</body>
</html>
