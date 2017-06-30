<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("messages",function (Blueprint $table){
            $table->increments("id");
            $table->string("title");
            $table->string("content");
            $table->string("remarks");
            $table->integer("media_id")->unsigned();
            $table->integer("admin_id")->unsigned();
            $table->integer("status_id")->unsigned();
            $table->integer("type_id")->unsigned();
            $table->foreign("admin_id")->references("id")->on('admins');
            $table->foreign("status_id")->references("id")->on('message_statuses');
            $table->foreign("media_id")->references("id")->on('media');
            $table->foreign("type_id")->references("id")->on('message_types');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("messages");
    }
}
