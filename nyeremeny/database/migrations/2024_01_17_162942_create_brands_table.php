<?php

use App\Models\Brand;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id('brand_id');
            $table->string('name');
            $table->string('country');
            $table->timestamps();
        });

        Brand::create([ 

            'name' => 'Ziala',  

            'country' => 'Poland',  
        ]); 

        Brand::create([ 

            'name' => 'Omorovicza',  

            'country' => 'Hungary',  
        ]);
        
        Brand::create([ 

            'name' => 'BB',  

            'country' => 'Hungary',  
        ]);

        Brand::create([ 

            'name' => 'ABC',  

            'country' => 'Hungary',  
        ]);

        Brand::create([ 

            'name' => 'CCC',  

            'country' => 'Hungary',  
        ]);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
