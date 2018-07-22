<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->string('address1');
            $table->string('address2');
            $table->string('postcode');
            $table->date('DOB')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->char('subscription', 1);
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
        // Schema::table('members', function (Blueprint $table) {
        //     $table->dropForeign('members_user_id_foreign');
        // });

        Schema::dropIfExists('members');
    }
}
