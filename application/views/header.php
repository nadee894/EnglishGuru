<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <!--  <a class="navbar-brand" href="#">WebSiteName</a>1-->
    </div>
    <ul class="nav navbar-nav">
      <li id="home" class="active"><a href="<?php echo site_url('home/index')?>">HOME</a></li>
      <li id="spell" class=""><a href="<?php echo site_url('home/checkSpell')?>">SPELL CHECKER</a></li>

      <li  id="grammar"><a href="<?php echo site_url('home/grammarChecker')?>">GRAMMAR CHECKER</a></li>
      <li id="tts"><a href="<?php echo site_url('home/tts')?>">TEXT TO SPEECH</a></li>
      <li id="sst"><a href="<?php echo site_url('home/stt')?>">  SPEECH TO TEXT</a></li>

    </ul>
  </div>
</nav>

