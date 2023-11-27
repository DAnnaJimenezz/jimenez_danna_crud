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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->enum('doc_type', ['C.C','T.I']);
            $table->string('doc_num', 255);
            $table->string('name',255);
            $table->string('last_name',255);
            $table->string('phone',50);
            $table->string('user_name',50)->unique();
            $table->string('email',255)->unique();
            $table->string('password');
            $table->foreignID('role_id')->constrained('roles')->onDelete('cascade');
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
};
