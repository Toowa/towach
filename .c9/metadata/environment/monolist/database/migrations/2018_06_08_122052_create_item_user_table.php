{"filter":false,"title":"2018_06_08_122052_create_item_user_table.php","tooltip":"/monolist/database/migrations/2018_06_08_122052_create_item_user_table.php","undoManager":{"mark":5,"position":5,"stack":[[{"start":{"row":15,"column":8},"end":{"row":18,"column":11},"action":"remove","lines":["Schema::create('item_user', function (Blueprint $table) {","            $table->increments('id');","            $table->timestamps();","        });"],"id":2}],[{"start":{"row":15,"column":8},"end":{"row":25,"column":11},"action":"insert","lines":["Schema::create('item_user', function (Blueprint $table) {","            $table->increments('id');","            $table->integer('user_id')->unsigned()->index();","            $table->integer('item_id')->unsigned()->index();","            $table->string('type')->index();","            $table->timestamps();","","            // Foreign key settings","            $table->foreign('user_id')->references('id')->on('users');","            $table->foreign('item_id')->references('id')->on('items');","        });"],"id":3}],[{"start":{"row":8,"column":4},"end":{"row":12,"column":7},"action":"remove","lines":["/**","     * Run the migrations.","     *","     * @return void","     */"],"id":4}],[{"start":{"row":24,"column":4},"end":{"row":28,"column":7},"action":"remove","lines":["/**","     * Reverse the migrations.","     *","     * @return void","     */"],"id":5}],[{"start":{"row":15,"column":12},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":16,"column":0},"end":{"row":16,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":16,"column":8},"end":{"row":16,"column":12},"action":"remove","lines":["    "],"id":7},{"start":{"row":16,"column":4},"end":{"row":16,"column":8},"action":"remove","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"remove","lines":["    "]},{"start":{"row":15,"column":12},"end":{"row":16,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":107.5,"scrollleft":0,"selection":{"start":{"row":27,"column":21},"end":{"row":27,"column":21},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":6,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1528428196283,"hash":"c9652629e48493dedf39505a13a217adc42e591a"}