
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('title', 20);
            $table->string('comment', 200);
            $table->foreignId('user_id', 200)->constrained('users');
            $table->boolean('handmake');
            $table->string('image_url')->nullable(); //画像投稿しなくてもおk「
            $table->string('price');
            $table->string('age');
            $table->string('relationship');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
