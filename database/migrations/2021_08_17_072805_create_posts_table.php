<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('content');
            $table->timestamps();
        });
        Schema::create('comments',function(Blueprint $table){
            $table->id(); //1 Column : id
            $table->mediumText('content'); // 1 Column : content
            $table->timestamps(); // 2 Columns : created_at, updated_at
            $table->foreignId('post_id') // 1 Column : post_id
                ->constrained('posts')//tablename
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
        Schema::dropIfExists('posts');
    }
}
