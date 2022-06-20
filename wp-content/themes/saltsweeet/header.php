<!DOCTYPE html>
<html lang="ja">
<?php
global $template_url;
global $home_url;
global $page_type;
global $title;
global $keywords;
global $description;
?>

<head>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width">
  <title><?php echo $title ?></title>
  <meta name="keywords" content="<?= $keywords; ?>">
  <meta name="description" content="<?= $description; ?>">
  <meta name="google-site-verification" content="tkVoJNP5fwvBnufG2kPRXkon_PjdvNAVUlI7Wu_Jrcw" />
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DotGothic16&family=Poppins:wght@300;400;600;700;900&family=Shippori+Mincho&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= $template_url; ?>/assets/css/top.css">
  <link rel="stylesheet" type="text/css" href="<?= $template_url; ?>/assets/css/swiper-bundle.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <?php wp_head(); ?>
</head>

<body>
  <div class="wrapper">