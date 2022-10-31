<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTarefasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('tarefas', function (Blueprint $table) {
   	
		 $table->unsignedBigInteger('userid');
		 $table->foreign('userid')->references('id')->on('logins');

	});    //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		$table->dropForeign('tarefas_userid_foreign');        //
		$table->dropColumn('userid');        //
    }
}
