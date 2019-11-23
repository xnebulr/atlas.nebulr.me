<?php
$url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>

<!-- Basic -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="/assets/css/base.css" type="text/css" rel="stylesheet"/>

<!-- External -->
<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/8119fd0658.js" crossorigin="anonymous"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<?php if (strpos($url,'/twitter') !== false) {echo "<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>";}?>

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-68526906-4"></script>
<script src="/assets/js/gtag.js"></script>

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="/assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="/assets/img/favicon/safari-pinned-tab.svg" color="#e14748">
<link rel="shortcut icon" href="/assets/img/favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#e14748">
<meta name="msapplication-config" content="assets/img/favicon/browserconfig.xml">
<meta name="theme-color" content="#e14748">