<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('filament_email_log', function (Blueprint $table) {
            $table->longText('raw_body')->nullable();
            $table->longText('sent_debug_info')->nullable();
        });
    }

    public function down()
    {
        Schema::dropColumns('filament_email_log', [
            'raw_body',
            'sent_debug_info',
        ]);
    }
};
