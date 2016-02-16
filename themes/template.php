<!DOCTYPE html>
<html lang="en">
<head><!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$title?>/title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-GHW2S7IZAQe8+YkyL99LyDj1zdWXSPOG+JZafCtKiSc= sha512-vxM32w6T7zJ83xOQ6FT4CEFnlasqmkcB0+ojgbI0N6ZtSxYvHmT7sX2icN07TqEqr5wdKwoLkmB8sAsGAjCJHg==" crossorigin="anonymous">
    <link href="/styles.css" rel="stylesheet">
</head>
<body class="<?=$class?>">

<nav class="navbar navbar-inverse navbar-static-top">
    <a class="navbar-brand" href="/">Thomas Redstone</a>
    <?=$this->insert('templates::menu', ['menu' => $menu])?>
</nav>
<div class="container">
    <!-- Example row of columns -->
    <div class="content">
        <?=$this->section('content')?>
    </div>

    <hr>

    <footer>
        <p>&copy; Thomas Redstone <?=date('Y')?></p>
    </footer>
</div> <!-- /container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js" integrity="sha256-+h0g0j7qusP72OZaLPCSZ5wjZLnoUUicoxbvrl14WxM= sha512-0z9zJIjxQaDVzlysxlaqkZ8L9jh8jZ2d54F3Dn36Y0a8C6eI/RFOME/tLCFJ42hfOxdclfa29lPSNCmX5ekxnw==" crossorigin="anonymous"></script>
<script src="/js/jquery.matchHeight.js" type="text/javascript"></script>
<script src="/js/scripts.js" type="text/javascript"></script>
</body>
</html>