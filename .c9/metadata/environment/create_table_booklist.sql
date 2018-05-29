{"filter":false,"title":"create_table_booklist.sql","tooltip":"/create_table_booklist.sql","undoManager":{"mark":12,"position":12,"stack":[[{"start":{"row":0,"column":0},"end":{"row":5,"column":0},"action":"insert","lines":["CREATE TABLE booklist.books (","    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,","    book_title VARCHAR(100),","    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP",");",""],"id":1}],[{"start":{"row":5,"column":0},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":6,"column":0},"end":{"row":22,"column":7},"action":"insert","lines":["<?php","    // MySQLサーバ接続に必要な値を変数に代入","    $username = 'root';","    $password = '';","","    // PDO のインスタンスを生成して、MySQLサーバに接続","    $database = new PDO('mysql:host=localhost;dbname=booklist;charset=UTF8;', $username, $password);","","    // ここにMySQLを使ったなんらかの処理を書く","","    // MySQLを使った処理が終わると、接続は不要なので切断する","    $database = null;","?>","<!DOCTYPE html>","<html lang=\"ja\">","<!-- 中略 -->","</html>"],"id":3}],[{"start":{"row":5,"column":0},"end":{"row":22,"column":7},"action":"remove","lines":["","<?php","    // MySQLサーバ接続に必要な値を変数に代入","    $username = 'root';","    $password = '';","","    // PDO のインスタンスを生成して、MySQLサーバに接続","    $database = new PDO('mysql:host=localhost;dbname=booklist;charset=UTF8;', $username, $password);","","    // ここにMySQLを使ったなんらかの処理を書く","","    // MySQLを使った処理が終わると、接続は不要なので切断する","    $database = null;","?>","<!DOCTYPE html>","<html lang=\"ja\">","<!-- 中略 -->","</html>"],"id":5}],[{"start":{"row":5,"column":0},"end":{"row":28,"column":7},"action":"insert","lines":["<?php","    // MySQLサーバ接続に必要な値を変数に代入","    $username = 'root';","    $password = '';","","    // PDO のインスタンスを生成して、MySQLサーバに接続","    $database = new PDO('mysql:host=localhost;dbname=booklist;charset=UTF8;', $username, $password);","","    // 実行するSQLを作成","    $sql = 'SELECT * FROM books ORDER BY created_at DESC'; ","    // SQLを実行する","    $statement = $database->query($sql);","    // 結果レコード（ステートメントオブジェクト）を配列に変換する","    $records = $statement->fetchAll();","","    // ステートメントを破棄する","    $statement = null;","    // MySQLを使った処理が終わると、接続は不要なので切断する","    $database = null;","?>","<!DOCTYPE html>","<html lang=\"ja\">","<!-- 中略 -->","</html>"],"id":6}],[{"start":{"row":4,"column":2},"end":{"row":28,"column":7},"action":"remove","lines":["","<?php","    // MySQLサーバ接続に必要な値を変数に代入","    $username = 'root';","    $password = '';","","    // PDO のインスタンスを生成して、MySQLサーバに接続","    $database = new PDO('mysql:host=localhost;dbname=booklist;charset=UTF8;', $username, $password);","","    // 実行するSQLを作成","    $sql = 'SELECT * FROM books ORDER BY created_at DESC'; ","    // SQLを実行する","    $statement = $database->query($sql);","    // 結果レコード（ステートメントオブジェクト）を配列に変換する","    $records = $statement->fetchAll();","","    // ステートメントを破棄する","    $statement = null;","    // MySQLを使った処理が終わると、接続は不要なので切断する","    $database = null;","?>","<!DOCTYPE html>","<html lang=\"ja\">","<!-- 中略 -->","</html>"],"id":7}],[{"start":{"row":4,"column":2},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":8}],[{"start":{"row":5,"column":0},"end":{"row":59,"column":7},"action":"insert","lines":["<?php","    // MySQLサーバ接続に必要な値を変数に代入","    $username = 'root';","    $password = '';","","    // PDO のインスタンスを生成して、MySQLサーバに接続","    $database = new PDO('mysql:host=localhost;dbname=booklist;charset=UTF8;', $username, $password);","","    // 実行するSQLを作成","    $sql = 'SELECT * FROM books ORDER BY created_at DESC';","    // SQL を実行する直前のステートメントを取得する","    $statement = $database->query($sql);","    // ステートメントから SQL を実行し、レコードを取得する","    $records = $statement->fetchAll();","","    // ステートメントを破棄する","    $statement = null;","    // MySQLを使った処理が終わると、接続は不要なので切断する","    $database = null;","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>","        <h1>Booklist</h1>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"post\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","<?php","            if ($records) {","                foreach ($records as $record) {","                    $book_title = $record['book_title'];","?>","                    <li><?php print $book_title; ?></li>","<?php","                }","            }","?>","        </ul>","    </body>","</html>"],"id":9}],[{"start":{"row":12,"column":0},"end":{"row":24,"column":5},"action":"insert","lines":["// フォームから書籍タイトルが送信されていればデータベースに保存する","    if ($_POST['book_title']) {","        // 実行するSQLを作成","        $sql = 'INSERT INTO books (book_title) VALUES(:book_title)';","        // ユーザ入力に依存するSQLを実行するので、セキュリティ対策をする","        $statement = $database->prepare($sql);","        // ユーザ入力データ($_POST['book_title'])をVALUES(?)の?の部分に代入する","        $statement->bindParam(':book_title', $_POST['book_title']);","        // SQL文を実行する","        $statement->execute();","        // ステートメントを破棄する","        $statement = null;","    }"],"id":10}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "],"id":11}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "],"id":12},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":0,"column":0},"end":{"row":71,"column":7},"action":"remove","lines":["CREATE TABLE booklist.books (","    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,","    book_title VARCHAR(100),","    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP",");","<?php","    // MySQLサーバ接続に必要な値を変数に代入","    $username = 'root';","    $password = '';","","    // PDO のインスタンスを生成して、MySQLサーバに接続","    $database = new PDO('mysql:host=localhost;dbname=booklist;charset=UTF8;', $username, $password);","    // フォームから書籍タイトルが送信されていればデータベースに保存する","        if ($_POST['book_title']) {","            // 実行するSQLを作成","            $sql = 'INSERT INTO books (book_title) VALUES(:book_title)';","            // ユーザ入力に依存するSQLを実行するので、セキュリティ対策をする","            $statement = $database->prepare($sql);","            // ユーザ入力データ($_POST['book_title'])をVALUES(?)の?の部分に代入する","            $statement->bindParam(':book_title', $_POST['book_title']);","            // SQL文を実行する","            $statement->execute();","            // ステートメントを破棄する","            $statement = null;","        }","    // 実行するSQLを作成","    $sql = 'SELECT * FROM books ORDER BY created_at DESC';","    // SQL を実行する直前のステートメントを取得する","    $statement = $database->query($sql);","    // ステートメントから SQL を実行し、レコードを取得する","    $records = $statement->fetchAll();","","    // ステートメントを破棄する","    $statement = null;","    // MySQLを使った処理が終わると、接続は不要なので切断する","    $database = null;","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>","        <h1>Booklist</h1>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"post\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","<?php","            if ($records) {","                foreach ($records as $record) {","                    $book_title = $record['book_title'];","?>","                    <li><?php print $book_title; ?></li>","<?php","                }","            }","?>","        </ul>","    </body>","</html>"],"id":13}],[{"start":{"row":0,"column":0},"end":{"row":68,"column":7},"action":"insert","lines":["<?php","    // MySQLサーバ接続に必要な値を変数に代入","    $username = 'root';","    $password = '';","","    // PDO のインスタンスを生成して、MySQLサーバに接続","    $database = new PDO('mysql:host=localhost;dbname=booklist;charset=UTF8;', $username, $password);","","    // フォームから書籍タイトルが送信されていればデータベースに保存する","    if ($_POST['book_title']) {","        // 実行するSQLを作成","        $sql = 'INSERT INTO books (book_title) VALUES(:book_title)';","        // ユーザ入力に依存するSQLを実行するので、セキュリティ対策をする","        $statement = $database->prepare($sql);","        // ユーザ入力データ($_POST['book_title'])をVALUES(?)の?の部分に代入する","        $statement->bindParam(':book_title', $_POST['book_title']);","        // SQL文を実行する","        $statement->execute();","        // ステートメントを破棄する","        $statement = null;","    }","","    // 実行するSQLを作成","    $sql = 'SELECT * FROM books ORDER BY created_at DESC';","    // SQL を実行する直前のステートメントを取得する","    $statement = $database->query($sql);","    // ステートメントから SQL を実行し、レコードを取得する","    $records = $statement->fetchAll();","","    // ステートメントを破棄する","    $statement = null;","    // MySQLを使った処理が終わると、接続は不要なので切断する","    $database = null;","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>","        <h1><a href=\"booklist.php\">Booklist</a></h1>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"post\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","<?php","            if ($records) {","                foreach ($records as $record) {","                    $book_title = $record['book_title'];","?>","                    <li><?php print htmlspecialchars($book_title, ENT_QUOTES, 'UTF-8'); ?></li>","<?php","                }","            }","?>","        </ul>","    </body>","</html>"],"id":14}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":68,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1526530994584,"hash":"f5f011e262c2b07e54076f0945faf366f448a88d"}