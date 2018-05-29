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
        
        <form action="aa.php" method="POST">
            <label>数字を入力してください: 
            <input type="text" name="target_number1" class="form-control">
            <input type="text" name="target_number2" class="form-control">
            </label>
            <button class="btn btn-danger" type="submit" value="送信">送信</button>
        </form>
        
        <p>
            ①
            <?php 
                print $_POST['target_number1']; 
            ?>
            ×
            <?php print $_POST['target_number2'];
            ?>
            =
            <?php print $_POST['target_number1']*$_POST['target_number2'];
            ?>
            です。
        </p>
        <p>
            ②
            <?php 
                print $_POST['target_number1']; 
            ?>
            の
            <?php print $_POST['target_number2'];
            ?>
            乗は
            <?php   $suuzi=$_POST['target_number1'];
                    $zyou=$_POST['target_number2'];;
                    $answer=$suuzi;
                    for($i=1;$i<=$zyou-1;$i++){
                        $answer=$answer*$suuzi;
                    }
                    print $answer;
            ?>
            です。
        </p>
        
        