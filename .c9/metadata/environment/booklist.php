{"filter":false,"title":"booklist.php","tooltip":"/booklist.php","undoManager":{"mark":13,"position":13,"stack":[[{"start":{"row":0,"column":0},"end":{"row":20,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <li>はじめてのWebアプリケーション</li>","            <li>かんたん！PHPプログラミング</li>","            <li>PHP+MySQLで作るWebアプリケーション</li>","        </ul>","    </body>","</html>"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":20,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <li>はじめてのWebアプリケーション</li>","            <li>かんたん！PHPプログラミング</li>","            <li>PHP+MySQLで作るWebアプリケーション</li>","        </ul>","    </body>","</html>"],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":21,"column":50},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>","We’ll add a loop to generate the list after gettin"],"id":3}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":49},"action":"remove","lines":["We’ll add a loop to generate the list after getti"],"id":4}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":1},"action":"remove","lines":["n"],"id":5}],[{"start":{"row":6,"column":10},"end":{"row":7,"column":8},"action":"insert","lines":["","        "],"id":6}],[{"start":{"row":7,"column":8},"end":{"row":13,"column":2},"action":"insert","lines":["<?php","    // フォームデータ送受信確認用コード（本番では削除）","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>"],"id":7}],[{"start":{"row":0,"column":0},"end":{"row":28,"column":0},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","        <?php","    // フォームデータ送受信確認用コード（本番では削除）","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>",""],"id":8}],[{"start":{"row":0,"column":0},"end":{"row":68,"column":7},"action":"insert","lines":["<?php","    // MySQLサーバ接続に必要な値を変数に代入","    $username = 'root';","    $password = '';","","    // PDO のインスタンスを生成して、MySQLサーバに接続","    $database = new PDO('mysql:host=localhost;dbname=booklist;charset=UTF8;', $username, $password);","","    // フォームから書籍タイトルが送信されていればデータベースに保存する","    if ($_POST['book_title']) {","        // 実行するSQLを作成","        $sql = 'INSERT INTO books (book_title) VALUES(:book_title)';","        // ユーザ入力に依存するSQLを実行するので、セキュリティ対策をする","        $statement = $database->prepare($sql);","        // ユーザ入力データ($_POST['book_title'])をVALUES(?)の?の部分に代入する","        $statement->bindParam(':book_title', $_POST['book_title']);","        // SQL文を実行する","        $statement->execute();","        // ステートメントを破棄する","        $statement = null;","    }","","    // 実行するSQLを作成","    $sql = 'SELECT * FROM books ORDER BY created_at DESC';","    // SQL を実行する直前のステートメントを取得する","    $statement = $database->query($sql);","    // ステートメントから SQL を実行し、レコードを取得する","    $records = $statement->fetchAll();","","    // ステートメントを破棄する","    $statement = null;","    // MySQLを使った処理が終わると、接続は不要なので切断する","    $database = null;","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>","        <h1><a href=\"booklist.php\">Booklist</a></h1>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"post\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","<?php","            if ($records) {","                foreach ($records as $record) {","                    $book_title = $record['book_title'];","?>","                    <li><?php print htmlspecialchars($book_title, ENT_QUOTES, 'UTF-8'); ?></li>","<?php","                }","            }","?>","        </ul>","    </body>","</html>"],"id":9}],[{"start":{"row":11,"column":54},"end":{"row":11,"column":55},"action":"remove","lines":[":"],"id":10}],[{"start":{"row":15,"column":31},"end":{"row":15,"column":32},"action":"remove","lines":[":"],"id":11}],[{"start":{"row":11,"column":54},"end":{"row":11,"column":55},"action":"insert","lines":[";"],"id":12}],[{"start":{"row":11,"column":54},"end":{"row":11,"column":55},"action":"remove","lines":[";"],"id":13}],[{"start":{"row":11,"column":54},"end":{"row":11,"column":55},"action":"insert","lines":[":"],"id":14}]]},"ace":{"folds":[],"scrolltop":44.3671875,"scrollleft":0,"selection":{"start":{"row":15,"column":31},"end":{"row":15,"column":31},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":2,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1526534020511,"hash":"4e6c10631a9029e7351d5966ba6ef384f9f3c26a"}