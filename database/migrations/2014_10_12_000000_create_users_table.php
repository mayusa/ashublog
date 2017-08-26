<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name')->unique();
            $table->string('nickname')->nullable();
            $table->string('real_name')->nullable();
            $table->text('avatar')->nullable();
            $table->string('confirm_code', 64)->unique()->nullable();
            $table->string('openid')->nullable();
            $table->string('github_id')->nullable();
            $table->string('github_name')->nullable();
            $table->string('github_url')->nullable();
            $table->string('weibo_name')->nullable();
            $table->string('weibo_link')->nullable();
            $table->string('website')->nullable();
            $table->string('description')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->tinyInteger('status')->default(false);
            $table->enum('email_notify_enabled', ['yes',  'no'])->default('yes')->index();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
