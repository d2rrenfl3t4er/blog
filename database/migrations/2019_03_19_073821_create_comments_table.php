<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
			// Атрибут с первичным ключом.
            $table->bigIncrements('id');
			
			//Атрибут с текстом комметария.
			$table->text('content');
			

			
			$table->bigInteger('user_id') 
			->unsigned(); 
			
			$table->foreign('user_id')
			->references('id') 
			->on('users') 
			->onDelete('CASCADE') 
			->onUpdate('RESTRICT');

			
			
			
			//Метки времени;
			//время создания и последнего изменения кортежа
            $table->timestamps();
        }
		);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
