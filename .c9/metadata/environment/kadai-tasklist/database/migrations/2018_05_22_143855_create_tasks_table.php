{"filter":false,"title":"2018_05_22_143855_create_tasks_table.php","tooltip":"/kadai-tasklist/database/migrations/2018_05_22_143855_create_tasks_table.php","undoManager":{"mark":13,"position":13,"stack":[[{"start":{"row":16,"column":37},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":17,"column":0},"end":{"row":17,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":17,"column":12},"end":{"row":17,"column":13},"action":"insert","lines":["$"],"id":3},{"start":{"row":17,"column":13},"end":{"row":17,"column":14},"action":"insert","lines":["t"]},{"start":{"row":17,"column":14},"end":{"row":17,"column":15},"action":"insert","lines":["a"]},{"start":{"row":17,"column":15},"end":{"row":17,"column":16},"action":"insert","lines":["b"]},{"start":{"row":17,"column":16},"end":{"row":17,"column":17},"action":"insert","lines":["l"]},{"start":{"row":17,"column":17},"end":{"row":17,"column":18},"action":"insert","lines":["e"]}],[{"start":{"row":17,"column":18},"end":{"row":17,"column":19},"action":"insert","lines":["-"],"id":4},{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"insert","lines":[">"]}],[{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"insert","lines":["s"],"id":5},{"start":{"row":17,"column":21},"end":{"row":17,"column":22},"action":"insert","lines":["t"]},{"start":{"row":17,"column":22},"end":{"row":17,"column":23},"action":"insert","lines":["r"]},{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"insert","lines":["i"]},{"start":{"row":17,"column":24},"end":{"row":17,"column":25},"action":"insert","lines":["n"]},{"start":{"row":17,"column":25},"end":{"row":17,"column":26},"action":"insert","lines":["g"]}],[{"start":{"row":17,"column":26},"end":{"row":17,"column":28},"action":"insert","lines":["()"],"id":6}],[{"start":{"row":17,"column":27},"end":{"row":17,"column":29},"action":"insert","lines":["\"\""],"id":7}],[{"start":{"row":17,"column":27},"end":{"row":17,"column":29},"action":"remove","lines":["\"\""],"id":8}],[{"start":{"row":17,"column":27},"end":{"row":17,"column":29},"action":"insert","lines":["''"],"id":9}],[{"start":{"row":17,"column":28},"end":{"row":17,"column":29},"action":"insert","lines":["c"],"id":10},{"start":{"row":17,"column":29},"end":{"row":17,"column":30},"action":"insert","lines":["o"]},{"start":{"row":17,"column":30},"end":{"row":17,"column":31},"action":"insert","lines":["n"]},{"start":{"row":17,"column":31},"end":{"row":17,"column":32},"action":"insert","lines":["r"]}],[{"start":{"row":17,"column":31},"end":{"row":17,"column":32},"action":"remove","lines":["r"],"id":11}],[{"start":{"row":17,"column":31},"end":{"row":17,"column":32},"action":"insert","lines":["t"],"id":12},{"start":{"row":17,"column":32},"end":{"row":17,"column":33},"action":"insert","lines":["e"]},{"start":{"row":17,"column":33},"end":{"row":17,"column":34},"action":"insert","lines":["n"]},{"start":{"row":17,"column":34},"end":{"row":17,"column":35},"action":"insert","lines":["t"]}],[{"start":{"row":17,"column":37},"end":{"row":17,"column":38},"action":"insert","lines":[";"],"id":13}],[{"start":{"row":0,"column":0},"end":{"row":32,"column":0},"action":"remove","lines":["<?php","","use Illuminate\\Support\\Facades\\Schema;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Database\\Migrations\\Migration;","","class CreateTasksTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('tasks', function (Blueprint $table) {","            $table->increments('id');","            $table->string('content');","            $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('tasks');","    }","}",""],"id":14}],[{"start":{"row":0,"column":0},"end":{"row":31,"column":1},"action":"insert","lines":["<?php","","use Illuminate\\Support\\Facades\\Schema;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Database\\Migrations\\Migration;","","class CreateTasksTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('tasks', function (Blueprint $table) {","            $table->increments('id');","            $table->string('content');    // content add column","            $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('tasks');","    }","}"],"id":15}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":17},"end":{"row":13,"column":17},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1526968030905,"hash":"54ae94d7ca5e8884f8be2e928d65fdaaca63d4d6"}