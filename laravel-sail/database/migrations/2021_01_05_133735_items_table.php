<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Item;


class ItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function(Blueprint $table)
        {

            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('content');
            $table->timestamps();
        });

        for ($i=0 ; $i < 10 ; $i++)
        {
            Item::create([
                'title' => 'title' . $i,
                'slug' => 'slug' . $i,
                'content' => 'content' . $i,
            ]);
        }
        
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('items');
    }
}
