<?php

use App\Models\Categories;
use App\Models\Picture;
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
        Schema::create('category_pictures', function (Blueprint $table) {     
            $table->id();
            $table->foreignIdFor(Picture::class)->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(Categories::class)->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_pictures');
    }
};
