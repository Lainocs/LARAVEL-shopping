<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {

        $table->char('title', 30);
        $table->text('image');
        $table->longText('description');
        $table->integer('price');
        $table->integer('quantity');
        $table->foreignId('user_id')->constrained('users');
        $table->dateTime('publication_date');
        $table->boolean('published');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {

            $table->dropColumn([
                'title',
                'image',
                'description',
                'price',
                'quantity',
                'publication_date',
                'published',
            ]);

            $table->dropConstrainedForeignId('user_id');

        });

    }
}
