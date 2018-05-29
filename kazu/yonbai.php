<!DOCTYPE html>
<html lang="ja">
    <head>
       <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KAZUKADAI</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
     
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">KAZUKADAI</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="nibai.php">2倍</a></li>
        <li><a href="sanbai.php">3倍</a></li>
        <li><a href="yonbai.php">4倍</a></li>
        <li><a href="kaizyou.php">階乗</a></li>
        <li class="dropdown">
            <div class="dropdown">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    掛け算<span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="nibai.php">2倍</a></li>
    <li><a href="sanbai.php">3倍</a></li>
  </ul>
</div>
<div class="dropdown">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    割り算<span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="waruni.php">2で割る</a></li>
    <li><a href="warusan.php">3で割る</a></li>
  </ul>
</div>
        </li>
      </ul>
    </div>
  </div>
</nav>
        <ul class="nav nav-tabs">
        <ul class="nav nav-tabs">
        <li><a href="nibai.php">2倍</a></li>
        <li><a href="sanbai.php">３倍</a></li>
        <li class="active"><li><a href="yonbai.php">4倍</a></li>
        <li><a href="waruni.php">2で割る</a></li>
        <li><a href="warusan.php">3で割る</a></li>
        <li><a href="kaizyou.php">階乗</a></li>
        </ul>
        </ul>
        <form action="yonbai.php" method="POST">
            <div class="alert alert-info" role="alert">君は4倍にできるかな？？？</div>
            <span class="label label-default">NEW!</span>
            <label>数字を入力してください: <input type="text" name="target_number" class="form-control"></label>
            <button class="btn btn-danger" type="submit" value="送信">送信</button>
        </form>

    <p>
    <?php 
        print $_POST['target_number']; 
    ?>
    の4倍は 
    <?php print $_POST['target_number']*4;
    ?>
    です。</p>



        
    </body>
</html>