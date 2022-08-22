<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClientsInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('page_home_items', function (Blueprint $table) {
            $table->text('clients_title')->after("newsletter_status");
            $table->text('clients_subtitle')->after("newsletter_status");
            $table->text('clients_status')->after("newsletter_status");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('page_home_items', function (Blueprint $table) {
            $table->dropColumn('clients_title');
            $table->dropColumn('clients_subtitle');
            $table->dropColumn('clients_status');
        });
    }
}
