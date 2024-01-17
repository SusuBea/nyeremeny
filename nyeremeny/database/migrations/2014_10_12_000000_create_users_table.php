<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('member');
            $table->rememberToken();
            $table->timestamps();
        });


        User::create([ 

            'name' => 'Gizi',  

            'email' => 'gizi@mail.com',  

            'password' => 'gizike2005', 

            'member' => true, 
            
            
        ]); 


        User::create([ 

            'name' => 'tibi',  

            'email' => 'tibike2008@mail.com',  

            'password' => 'szeretlekgizike', 

            'member' => true, 
            
            
        ]); 






    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
