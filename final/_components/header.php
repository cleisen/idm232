<?php

// if $page_title variable doesn't exist, create a default one
if (!isset($page_title)) {
    $page_title = '🚨 Missing Title 🚨';
}
$site_title = 'Lemon & Basil';
$document_title = $page_title . ' | ' . $site_title; // Home | JAWN Clips

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="<?php echo site_url(); ?>/images/lemon.png">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/style.css">
  <link rel="stylesheet" href="https://use.typekit.net/xqu1ubt.css">
  <title><?php echo $document_title ; ?></title>
</head>

<body>
  <!-- Main Content Begins -->

  <header class="header">
    <div class="header__cont">
        <div class="logo">
        <a class="logo-text" href="<?php echo site_url(); ?>/index.php">lemon & basil</a>
        </div>
        <div class="login">
        <a class="" href="<?php echo site_url(); ?>/admin/recipes/index.php">ADMIN</a>
        </div>
    </div>
</header>