{"filter":false,"title":"yonbai.php","tooltip":"/yonbai.php","undoManager":{"mark":76,"position":76,"stack":[[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["v"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"remove","lines":["v"],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":37,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"UTF-8\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","        <title>かず課題</title>","        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">","    ","        ","    </head>","    <body>","        <ul class=\"nav nav-tabs\">","          <li class=\"active\">","              <a href=\"nibai.php\">2倍</a></li>","          <li><a href=\"sanbai.php\">３倍</a></li>","          <li><a href=\"yonbai.php\">4倍</a></li>","        </ul>","        <form action=\"a.php\" method=\"POST\">","            <div class=\"alert alert-info\" role=\"alert\">君は2倍にできるかな？？？</div>","            <span class=\"label label-default\">NEW!</span>","            <label>数字を入力してください: <input type=\"text\" name=\"target_number\" class=\"form-control\"></label>","            <button class=\"btn btn-danger\" type=\"submit\" value=\"送信\">送信</button>","        </form>","","    <p>","    <?php ","        print $_POST['target_number']; ","    ?>","    の２倍は ","    <?php print $_POST['target_number']*2;","    ?>","    です。</p>","","","","        ","    </body>","</html>"],"id":3}],[{"start":{"row":17,"column":22},"end":{"row":17,"column":23},"action":"remove","lines":["a"],"id":4}],[{"start":{"row":17,"column":22},"end":{"row":17,"column":23},"action":"insert","lines":["y"],"id":5},{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"insert","lines":["o"]},{"start":{"row":17,"column":24},"end":{"row":17,"column":25},"action":"insert","lines":["n"]},{"start":{"row":17,"column":25},"end":{"row":17,"column":26},"action":"insert","lines":["b"]},{"start":{"row":17,"column":26},"end":{"row":17,"column":27},"action":"insert","lines":["a"]},{"start":{"row":17,"column":27},"end":{"row":17,"column":28},"action":"insert","lines":["i"]}],[{"start":{"row":18,"column":57},"end":{"row":18,"column":58},"action":"remove","lines":["2"],"id":6}],[{"start":{"row":18,"column":57},"end":{"row":18,"column":58},"action":"insert","lines":["5"],"id":7}],[{"start":{"row":18,"column":57},"end":{"row":18,"column":58},"action":"remove","lines":["5"],"id":8}],[{"start":{"row":18,"column":57},"end":{"row":18,"column":58},"action":"insert","lines":["4"],"id":9}],[{"start":{"row":29,"column":40},"end":{"row":29,"column":41},"action":"remove","lines":["2"],"id":10}],[{"start":{"row":29,"column":40},"end":{"row":29,"column":41},"action":"insert","lines":["4"],"id":11}],[{"start":{"row":28,"column":5},"end":{"row":28,"column":6},"action":"remove","lines":["２"],"id":12}],[{"start":{"row":28,"column":5},"end":{"row":28,"column":6},"action":"insert","lines":["4"],"id":13}],[{"start":{"row":15,"column":14},"end":{"row":15,"column":38},"action":"insert","lines":["<li class=\"active\"></li>"],"id":14}],[{"start":{"row":15,"column":13},"end":{"row":15,"column":14},"action":"remove","lines":[">"],"id":15},{"start":{"row":15,"column":12},"end":{"row":15,"column":13},"action":"remove","lines":["i"]},{"start":{"row":15,"column":11},"end":{"row":15,"column":12},"action":"remove","lines":["l"]},{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"remove","lines":["<"]}],[{"start":{"row":12,"column":10},"end":{"row":12,"column":29},"action":"remove","lines":["<li class=\"active\">"],"id":16},{"start":{"row":12,"column":9},"end":{"row":12,"column":10},"action":"remove","lines":[" "]},{"start":{"row":12,"column":8},"end":{"row":12,"column":9},"action":"remove","lines":[" "]},{"start":{"row":12,"column":4},"end":{"row":12,"column":8},"action":"remove","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"remove","lines":["    "]},{"start":{"row":11,"column":33},"end":{"row":12,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":12,"column":14},"end":{"row":12,"column":18},"action":"insert","lines":["<li>"],"id":17}],[{"start":{"row":12,"column":13},"end":{"row":12,"column":14},"action":"remove","lines":[" "],"id":18},{"start":{"row":12,"column":12},"end":{"row":12,"column":13},"action":"remove","lines":[" "]},{"start":{"row":12,"column":8},"end":{"row":12,"column":12},"action":"remove","lines":["    "]}],[{"start":{"row":13,"column":8},"end":{"row":13,"column":9},"action":"remove","lines":[" "],"id":19},{"start":{"row":13,"column":8},"end":{"row":13,"column":9},"action":"remove","lines":[" "]}],[{"start":{"row":14,"column":8},"end":{"row":14,"column":9},"action":"remove","lines":[" "],"id":20},{"start":{"row":14,"column":8},"end":{"row":14,"column":9},"action":"remove","lines":[" "]}],[{"start":{"row":14,"column":31},"end":{"row":14,"column":32},"action":"remove","lines":[">"],"id":21},{"start":{"row":14,"column":30},"end":{"row":14,"column":31},"action":"remove","lines":["i"]},{"start":{"row":14,"column":29},"end":{"row":14,"column":30},"action":"remove","lines":["l"]},{"start":{"row":14,"column":28},"end":{"row":14,"column":29},"action":"remove","lines":["/"]},{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"remove","lines":["<"]}],[{"start":{"row":10,"column":10},"end":{"row":11,"column":8},"action":"insert","lines":["","        "],"id":22}],[{"start":{"row":11,"column":8},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":23},{"start":{"row":12,"column":0},"end":{"row":12,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":11,"column":8},"end":{"row":36,"column":6},"action":"insert","lines":["      <nav class=\"navbar navbar-default\">","  <div class=\"container-fluid\">","    <div class=\"navbar-header\">","      <!-- hamburger button which shows narrow width -->","      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\">","        <span class=\"icon-bar\"></span>","        <span class=\"icon-bar\"></span>","        <span class=\"icon-bar\"></span>","      </button>","","      <!-- link back to the home -->","      <a class=\"navbar-brand\" href=\"#\">KAZUKADAI</a>","    </div>","","    <!-- menu items -->","    <div id=\"navbar\" class=\"collapse navbar-collapse\">","      <ul class=\"nav navbar-nav\">","        <li class=\"active\"><a href=\"nibai.php\">2倍</a></li>","        <li><a href=\"sanbai.php\">3倍</a></li>","        <li><a href=\"yonbai.php\">4倍</a></li>","        <li class=\"dropdown\">","        </li>","      </ul>","    </div><!-- /.navbar-collapse -->","  </div><!-- /.container-fluid -->","</nav>"],"id":24}],[{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"remove","lines":[" "],"id":25},{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"remove","lines":[" "]},{"start":{"row":11,"column":8},"end":{"row":11,"column":12},"action":"remove","lines":["    "]},{"start":{"row":11,"column":4},"end":{"row":11,"column":8},"action":"remove","lines":["    "]}],[{"start":{"row":12,"column":2},"end":{"row":12,"column":6},"action":"insert","lines":["    "],"id":26}],[{"start":{"row":13,"column":4},"end":{"row":13,"column":8},"action":"insert","lines":["    "],"id":27}],[{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["<"],"id":28},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["!"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["-"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["-"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":[" "]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["h"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["a"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["m"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["b"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["u"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["r"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["g"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["e"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["r"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":[" "]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["b"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["u"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["t"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["t"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["o"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["n"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":[" "]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["w"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["h"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["i"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["c"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["h"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":[" "]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["s"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["h"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["o"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["w"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["s"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":[" "]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["n"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["a"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["r"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["r"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["o"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["w"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":[" "]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["w"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["i"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["d"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["t"]}],[{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["h"],"id":29},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":[" "]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["-"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["-"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":[">"]},{"start":{"row":14,"column":6},"end":{"row":15,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":[" "],"id":30},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":[" "]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":[" "]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":[" "]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":[" "]}],[{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":[" "],"id":31}],[{"start":{"row":14,"column":6},"end":{"row":14,"column":10},"action":"insert","lines":["    "],"id":32}],[{"start":{"row":14,"column":9},"end":{"row":14,"column":10},"action":"remove","lines":[" "],"id":33},{"start":{"row":14,"column":8},"end":{"row":14,"column":9},"action":"remove","lines":[" "]}],[{"start":{"row":18,"column":6},"end":{"row":18,"column":10},"action":"insert","lines":["    "],"id":34}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "],"id":35},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":18,"column":9},"end":{"row":18,"column":10},"action":"remove","lines":[" "],"id":36},{"start":{"row":18,"column":8},"end":{"row":18,"column":9},"action":"remove","lines":[" "]}],[{"start":{"row":20,"column":3},"end":{"row":20,"column":36},"action":"remove","lines":["   <!-- link back to the home -->"],"id":37},{"start":{"row":20,"column":2},"end":{"row":20,"column":3},"action":"remove","lines":[" "]},{"start":{"row":20,"column":1},"end":{"row":20,"column":2},"action":"remove","lines":[" "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":1},"action":"remove","lines":[" "]},{"start":{"row":19,"column":0},"end":{"row":20,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":18,"column":17},"end":{"row":19,"column":0},"action":"remove","lines":["",""],"id":38}],[{"start":{"row":18,"column":17},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":39},{"start":{"row":19,"column":0},"end":{"row":19,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":23,"column":3},"end":{"row":23,"column":23},"action":"remove","lines":[" <!-- menu items -->"],"id":40},{"start":{"row":23,"column":2},"end":{"row":23,"column":3},"action":"remove","lines":[" "]},{"start":{"row":23,"column":1},"end":{"row":23,"column":2},"action":"remove","lines":[" "]},{"start":{"row":23,"column":0},"end":{"row":23,"column":1},"action":"remove","lines":[" "]},{"start":{"row":22,"column":0},"end":{"row":23,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":31,"column":10},"end":{"row":31,"column":36},"action":"remove","lines":["<!-- /.navbar-collapse -->"],"id":41}],[{"start":{"row":32,"column":8},"end":{"row":32,"column":34},"action":"remove","lines":["<!-- /.container-fluid -->"],"id":42}],[{"start":{"row":25,"column":8},"end":{"row":25,"column":27},"action":"remove","lines":["<li class=\"active\">"],"id":43}],[{"start":{"row":27,"column":11},"end":{"row":27,"column":12},"action":"remove","lines":[">"],"id":44},{"start":{"row":27,"column":10},"end":{"row":27,"column":11},"action":"remove","lines":["i"]},{"start":{"row":27,"column":9},"end":{"row":27,"column":10},"action":"remove","lines":["l"]},{"start":{"row":27,"column":8},"end":{"row":27,"column":9},"action":"remove","lines":["<"]}],[{"start":{"row":27,"column":8},"end":{"row":27,"column":27},"action":"insert","lines":["<li class=\"active\">"],"id":45}],[{"start":{"row":25,"column":8},"end":{"row":25,"column":12},"action":"insert","lines":["<li>"],"id":46}],[{"start":{"row":3,"column":7},"end":{"row":8,"column":8},"action":"remove","lines":[" <meta charset=\"UTF-8\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","        <title>かず課題</title>","        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">","    ","        "],"id":47}],[{"start":{"row":3,"column":7},"end":{"row":14,"column":99},"action":"insert","lines":["<meta charset=\"utf-8\">","        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","        ","        <title>Bootstrap Template</title>","","        <!-- Bootstrap CSS-->","        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">","        <!-- jQuery -->","        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>","        <!-- Bootstrap JavaScript-->","        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>"],"id":48}],[{"start":{"row":7,"column":15},"end":{"row":7,"column":33},"action":"remove","lines":["Bootstrap Template"],"id":49}],[{"start":{"row":7,"column":15},"end":{"row":7,"column":16},"action":"insert","lines":["K"],"id":50},{"start":{"row":7,"column":16},"end":{"row":7,"column":17},"action":"insert","lines":["A"]},{"start":{"row":7,"column":17},"end":{"row":7,"column":18},"action":"insert","lines":["Z"]},{"start":{"row":7,"column":18},"end":{"row":7,"column":19},"action":"insert","lines":["U"]},{"start":{"row":7,"column":19},"end":{"row":7,"column":20},"action":"insert","lines":["K"]},{"start":{"row":7,"column":20},"end":{"row":7,"column":21},"action":"insert","lines":["A"]},{"start":{"row":7,"column":21},"end":{"row":7,"column":22},"action":"insert","lines":["D"]},{"start":{"row":7,"column":22},"end":{"row":7,"column":23},"action":"insert","lines":["A"]},{"start":{"row":7,"column":23},"end":{"row":7,"column":24},"action":"insert","lines":["I"]}],[{"start":{"row":9,"column":8},"end":{"row":9,"column":29},"action":"remove","lines":["<!-- Bootstrap CSS-->"],"id":51},{"start":{"row":9,"column":4},"end":{"row":9,"column":8},"action":"remove","lines":["    "]},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"remove","lines":["    "]},{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"remove","lines":["",""]},{"start":{"row":7,"column":32},"end":{"row":8,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":23},"action":"remove","lines":["        <!-- jQuery -->"],"id":52},{"start":{"row":8,"column":108},"end":{"row":9,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":10,"column":1},"end":{"row":10,"column":36},"action":"remove","lines":["       <!-- Bootstrap JavaScript-->"],"id":53},{"start":{"row":10,"column":0},"end":{"row":10,"column":1},"action":"remove","lines":[" "]},{"start":{"row":9,"column":97},"end":{"row":10,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":6,"column":4},"end":{"row":6,"column":8},"action":"remove","lines":["    "],"id":54},{"start":{"row":6,"column":0},"end":{"row":6,"column":4},"action":"remove","lines":["    "]},{"start":{"row":5,"column":76},"end":{"row":6,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "],"id":55}],[{"start":{"row":33,"column":2},"end":{"row":33,"column":6},"action":"insert","lines":["    "],"id":56}],[{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "],"id":57},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"insert","lines":["    "]},{"start":{"row":28,"column":0},"end":{"row":28,"column":4},"action":"insert","lines":["    "]},{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"insert","lines":["    "]},{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "]},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]},{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "],"id":58},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":37,"column":8},"end":{"row":39,"column":59},"action":"remove","lines":["<li><a href=\"nibai.php\">2倍</a></li>","        <li><a href=\"sanbai.php\">３倍</a></li>","        <li class=\"active\"><a href=\"yonbai.php\">4倍</a></li>"],"id":59}],[{"start":{"row":37,"column":8},"end":{"row":43,"column":13},"action":"insert","lines":["<ul class=\"nav nav-tabs\">","        <li><a href=\"nibai.php\">2倍</a></li>","        <li class=\"active\"><a href=\"sanbai.php\">３倍</a></li>","        <li><a href=\"yonbai.php\">4倍</a></li>","        <li><a href=\"waruni.php\">2で割る</a></li>","        <li><a href=\"warusan.php\">3で割る</a></li>","        </ul>"],"id":60}],[{"start":{"row":39,"column":8},"end":{"row":39,"column":27},"action":"remove","lines":["<li class=\"active\">"],"id":61}],[{"start":{"row":40,"column":8},"end":{"row":40,"column":27},"action":"insert","lines":["<li class=\"active\">"],"id":62}],[{"start":{"row":39,"column":8},"end":{"row":39,"column":12},"action":"insert","lines":["<li>"],"id":63}],[{"start":{"row":12,"column":5},"end":{"row":35,"column":8},"action":"remove","lines":["nav class=\"navbar navbar-default\">","      <div class=\"container-fluid\">","        <div class=\"navbar-header\">","        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\">","            <span class=\"icon-bar\"></span>","            <span class=\"icon-bar\"></span>","            <span class=\"icon-bar\"></span>","        </button>","        ","          <a class=\"navbar-brand\" href=\"#\">KAZUKADAI</a>","        </div>","","        <div id=\"navbar\" class=\"collapse navbar-collapse\">","          <ul class=\"nav navbar-nav\">","            <li><a href=\"nibai.php\">2倍</a></li>","            <li><a href=\"sanbai.php\">3倍</a></li>","            <li class=\"active\"><a href=\"yonbai.php\">4倍</a></li>","            <li class=\"dropdown\">","            </li>","          </ul>","        </div>","      </div>","    </nav>","        "],"id":64},{"start":{"row":12,"column":4},"end":{"row":12,"column":5},"action":"remove","lines":["<"]}],[{"start":{"row":12,"column":4},"end":{"row":51,"column":6},"action":"insert","lines":[" ","        <nav class=\"navbar navbar-default\">","  <div class=\"container-fluid\">","    <div class=\"navbar-header\">","      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\">","        <span class=\"icon-bar\"></span>","        <span class=\"icon-bar\"></span>","        <span class=\"icon-bar\"></span>","      </button>","      <a class=\"navbar-brand\" href=\"#\">KAZUKADAI</a>","    </div>","    <div id=\"navbar\" class=\"collapse navbar-collapse\">","      <ul class=\"nav navbar-nav\">","        <li class=\"active\"><a href=\"nibai.php\">2倍</a></li>","        <li><a href=\"sanbai.php\">3倍</a></li>","        <li><a href=\"yonbai.php\">4倍</a></li>","        <li class=\"dropdown\">","            <div class=\"dropdown\">","  <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">","    掛け算<span class=\"caret\"></span>","  </button>","  <ul class=\"dropdown-menu\">","    <li><a href=\"nibai.php\">2倍</a></li>","    <li><a href=\"sanbai.php\">3倍</a></li>","  </ul>","</div>","<div class=\"dropdown\">","  <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">","    割り算<span class=\"caret\"></span>","  </button>","  <ul class=\"dropdown-menu\">","    <li><a href=\"waruni.php\">2で割る</a></li>","    <li><a href=\"warusan.php\">3で割る</a></li>","  </ul>","</div>","        </li>","      </ul>","    </div>","  </div>","</nav>"],"id":65}],[{"start":{"row":27,"column":44},"end":{"row":28,"column":0},"action":"insert","lines":["",""],"id":66},{"start":{"row":28,"column":0},"end":{"row":28,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":28,"column":8},"end":{"row":28,"column":44},"action":"insert","lines":["<li><a href=\"yonbai.php\">4倍</a></li>"],"id":67}],[{"start":{"row":28,"column":26},"end":{"row":28,"column":27},"action":"remove","lines":["i"],"id":69},{"start":{"row":28,"column":25},"end":{"row":28,"column":26},"action":"remove","lines":["a"]},{"start":{"row":28,"column":24},"end":{"row":28,"column":25},"action":"remove","lines":["b"]},{"start":{"row":28,"column":23},"end":{"row":28,"column":24},"action":"remove","lines":["n"]},{"start":{"row":28,"column":22},"end":{"row":28,"column":23},"action":"remove","lines":["o"]},{"start":{"row":28,"column":21},"end":{"row":28,"column":22},"action":"remove","lines":["y"]}],[{"start":{"row":28,"column":21},"end":{"row":28,"column":28},"action":"insert","lines":["kaizyou"],"id":77}],[{"start":{"row":28,"column":35},"end":{"row":28,"column":36},"action":"remove","lines":["倍"],"id":78},{"start":{"row":28,"column":34},"end":{"row":28,"column":35},"action":"remove","lines":["4"]}],[{"start":{"row":28,"column":34},"end":{"row":28,"column":36},"action":"insert","lines":["階乗"],"id":86}],[{"start":{"row":59,"column":47},"end":{"row":60,"column":0},"action":"insert","lines":["",""],"id":87},{"start":{"row":60,"column":0},"end":{"row":60,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":60,"column":8},"end":{"row":60,"column":47},"action":"insert","lines":["<li><a href=\"warusan.php\">3で割る</a></li>"],"id":88}],[{"start":{"row":60,"column":37},"end":{"row":60,"column":38},"action":"remove","lines":["る"],"id":89},{"start":{"row":60,"column":36},"end":{"row":60,"column":37},"action":"remove","lines":["割"]},{"start":{"row":60,"column":35},"end":{"row":60,"column":36},"action":"remove","lines":["で"]},{"start":{"row":60,"column":34},"end":{"row":60,"column":35},"action":"remove","lines":["3"]}],[{"start":{"row":60,"column":34},"end":{"row":60,"column":36},"action":"insert","lines":["階乗"],"id":97}],[{"start":{"row":60,"column":27},"end":{"row":60,"column":28},"action":"remove","lines":["n"],"id":98},{"start":{"row":60,"column":26},"end":{"row":60,"column":27},"action":"remove","lines":["a"]},{"start":{"row":60,"column":25},"end":{"row":60,"column":26},"action":"remove","lines":["s"]},{"start":{"row":60,"column":24},"end":{"row":60,"column":25},"action":"remove","lines":["u"]},{"start":{"row":60,"column":23},"end":{"row":60,"column":24},"action":"remove","lines":["r"]},{"start":{"row":60,"column":22},"end":{"row":60,"column":23},"action":"remove","lines":["a"]},{"start":{"row":60,"column":21},"end":{"row":60,"column":22},"action":"remove","lines":["w"]}],[{"start":{"row":60,"column":21},"end":{"row":60,"column":28},"action":"insert","lines":["kaizyou"],"id":107}]]},"ace":{"folds":[],"scrolltop":681.6171875,"scrollleft":0,"selection":{"start":{"row":57,"column":28},"end":{"row":57,"column":28},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1527490407869,"hash":"b8fe3b33326d56522efec926fa45e917d4582b05"}