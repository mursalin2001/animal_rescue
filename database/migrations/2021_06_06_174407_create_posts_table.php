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
            $table->foreignId('user_id')->constrained('users');
            $table->string('animal_type');
            $table->string('animal_age');
            $table->string('animal_condition');
            $table->string('animal_number');
            $table->string('upazila');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('contact_number')->nullable();
            $table->text('description');
            $table->string('exact_location')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('posts', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
