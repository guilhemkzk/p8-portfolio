<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('url');
            $table->string('url_img')->nullable();
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
