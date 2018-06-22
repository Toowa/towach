{"filter":false,"title":"2018_06_05_160504_create_user_favorite_table.php","tooltip":"/microposts/database/migrations/2018_06_05_160504_create_user_favorite_table.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":38,"column":0},"action":"remove","lines":["<?php","","use Illuminate\\Support\\Facades\\Schema;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Database\\Migrations\\Migration;","","class CreateUserFavoriteTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('user_favorite', function (Blueprint $table) {","            $table->increments('id');","            $table->integer('user_id')->unsigned()->index();","            $table->integer('favorite_id')->unsigned()->index();","            $table->timestamps();","            ","            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');","            $table->foreign('favorite_id')->references('id')->on('users')->onDelete('cascade');","        ","            $table->unique(['user_id', 'favorite_id']);","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('user_favorite');","    }","}",""],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":36,"column":1},"action":"insert","lines":["<?php","","use Illuminate\\Support\\Facades\\Schema;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Database\\Migrations\\Migration;","","class CreateFavoritesTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('favorites', function (Blueprint $table) {","            $table->increments('id');","            $table->integer('user_id')->unsigned()->index();","            $table->integer('favorite_id')->unsigned()->index();","            $table->timestamps();","          ","            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');","            $table->foreign('favorite_id')->references('id')->on('microposts')->onDelete('cascade');","            ","            $table->unique(['user_id', 'favorite_id']);","        });","    }","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('user_favorite');","    }","}"],"id":3}]]},"ace":{"folds":[],"scrolltop":130,"scrollleft":0,"selection":{"start":{"row":11,"column":19},"end":{"row":11,"column":19},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":8,"state":"php-doc-start","mode":"ace/mode/php"}},"timestamp":1528249703297,"hash":"2ef862d4be5a3473199b357697f7ee8167f655a0"}