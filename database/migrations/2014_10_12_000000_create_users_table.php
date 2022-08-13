<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('last_name')->nullable();
            $table->string('photo')->nullable();
            $table->string('phone')->nullable();
            $table->string('areacode')->nullable();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('status')->default(1)->nullable();
            $table->rememberToken();
            $table->softDeletes();

            $table->timestamps();
        });
        DB::table('users')->insert([
            'email' => 'raulhernandezing@gmail.com',
            'username' => '4422263267',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            //'remember_token' => str_random(10),
            'name' => 'Raul Hernandez',
            'photo' => '/images/users/1/profile.jpg', 
'areacode' => '+1'
    
    
            ]);

            DB::table('users')->insert([
                'email' => 'pablo@gmail.com',
                'username' => '6307476705',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                //'remember_token' => str_random(10),
                'name' => 'Pablo Alcantara ',
                'photo' => '/images/users/2/profile.jpg', 
'areacode' => '+1'
        
        
                ]);

                DB::table('users')->insert([
                    'email' => 'elias@gmail.com',
                    'username' => '6308021795',
                    'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                    //'remember_token' => str_random(10),
                    'name' => 'Elias Quintana ',
                    'photo' => '/images/users/3/profile.jpg', 
'areacode' => '+1'
            
            
                    ]);

                    
                    DB::table('users')->insert([
                        'email' => 'ismaeltorrijos@gmail.com',
                        'username' => '6304785867',
                        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                        //'remember_token' => str_random(10),
                        'name' => 'Ismael torrijos ',
                        'photo' => '/images/users/4/profile.jpg', 
'areacode' => '+1'
                
                
                        ]);


                        DB::table('users')->insert([
                            'email' => 'cuper@gmail.com',
                            'username' => '6304793915',
                            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                            //'remember_token' => str_random(10),
                            'name' => 'Cuper Quintana ',
                            'photo' => '/images/users/5/profile.jpg', 
'areacode' => '+1'
                    
                    
                            ]);


                            DB::table('users')->insert([
                                'email' => 'ismael.quintana@gmail.com',
                                'username' => '630546961',
                                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                                'name' => 'Ismael Quintana', 
                                'photo' => '/images/users/6/profile.jpg', 
'areacode' => '+1'                       
                                                        ]);
                            DB::table('users')->insert([
                                'email' => 'luis.alcantara@gmail.com',
                                'username' => '6303624165',
                                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                                'name' => 'Luis Alcantara',  
                                'photo' => '/images/users/7/profile.jpg', 
'areacode' => '+1'                                     
                                                        ]);

                                                        
                                                        DB::table('users')->insert([
                                                            'email' => 'juan.alcantara@gmail.com',
                                                            'username' => '6302091705',
                                                            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                                                            'name' => 'Juan Alcantara',  
                                                            'photo' => '/images/users/8/profile.jpg', 
'areacode' => '+1' 
                                                                                   
                                                                                    ]);
 DB::table('users')->insert([
      'email' => 'evelyn.hernandez@gmail.com',
  'username' => '3313851141',
   'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
   'name' => 'Evelyn Hernandez',  
   'photo' => '/images/users/9/profile.jpg', 
'areacode' => '+1'                                     
   ]);   
   
   



   DB::table('users')->insert([
    'email' => 'alvaro.perez@gmail.com',
'username' => '6302352381',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'Alcaro Perez',  
 'photo' => '/images/users/10/profile.jpg', 
'areacode' => '+1'                                     
 ]);   
                            


    
 DB::table('users')->insert([
    'email' => 'alfredo.quintana@gmail.com',
'username' => '6303332410',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'Alfredo Quintana',  
 'photo' => '/images/users/11/profile.jpg', 
'areacode' => '+1'                                     
 ]);   
                            


 DB::table('users')->insert([
'email' => 'erick.pacheco@gmail.com',
'username' => '6306775592',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'Erick Pacheco',  
 'photo' => '/images/users/12/profile.jpg', 
'areacode' => '+1'                                     
 ]);   
                            


 DB::table('users')->insert([
    'email' => 'efren.perez@gmail.com',
'username' => '6309351137',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'Efren Perez',  
 'photo' => '/images/users/13/profile.jpg', 
'areacode' => '+1'                                     
 ]);   
                            


 DB::table('users')->insert([
    'email' => 'antonio.gonzalez@gmail.com',
'username' => '6308854458',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'Antonio Gonzalez',  
 'photo' => '/images/users/14/profile.jpg', 
'areacode' => '+1'                                     
 ]);   

 
 DB::table('users')->insert([
    'email' => 'leonardo.perez@gmail.com',
'username' => '6306732857',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'Leonardo Perez',  
 'photo' => '/images/users/15/profile.jpg', 
'areacode' => '+1'                                     
 ]);   

 
 DB::table('users')->insert([
    'email' => 'memo.gonzalez@gmail.com',
'username' => '6308658893',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'Guillermo Gonzalez',  
 'photo' => '/images/users/16/profile.jpg', 
'areacode' => '+1'                                     
 ]);   

 

 DB::table('users')->insert([
    'email' => 'mario.quintana@gmail.com',
'username' => '6305462385',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'MArio Quintana',  
 'photo' => '/images/users/17/profile.jpg', 
'areacode' => '+1'                                     
 ]);   

 
 DB::table('users')->insert([
    'email' => 'julio.alcantara@gmail.com',
'username' => '3312188178',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'MArio Quintana',  
 'photo' => '/images/users/18/profile.jpg', 
'areacode' => '+1'                                     
 ]);   
 
 DB::table('users')->insert([
    'email' => 'jesus.miranda@gmail.com',
'username' => '6305428093',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'Jesus Miranda',  
 'photo' => '/images/users/19/profile.jpg', 
'areacode' => '+1'                                     
 ]);   

 
 DB::table('users')->insert([
    'email' => 'jesus.chuy@gmail.com',
'username' => '8159190120',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'Jesus Chuy',  
 'photo' => '/images/users/20/profile.jpg', 
'areacode' => '+1'                                     
 ]);   

 
 DB::table('users')->insert([
    'email' => 'clemente.gonzalez@gmail.com',
'username' => '6308542206',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'Clemente Gonzalez',  
 'photo' => '/images/users/21/profile.jpg', 
'areacode' => '+1'                                     
 ]);   

 
                            

 DB::table('users')->insert([
    'email' => 'chely.perez@gmail.com',
'username' => '6307770935',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'Chely Perez',  
 'photo' => '/images/users/22/profile.jpg', 
'areacode' => '+1'                                     
 ]);   

 
         
 DB::table('users')->insert([
    'email' => 'abel.hernandez@gmail.com',
'username' => '6307790935',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'Abel HErnandez',  
 'photo' => '/images/users/23/profile.jpg', 
'areacode' => '+52'
 ]);   


         
 DB::table('users')->insert([
    'email' => 'hilda.perez@gmail.com',
'username' => '7121327950',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'Hilda Perez',  
 'photo' => '/images/users/24/profile.jpg', 
'areacode' => '+52'
 ]);   

 DB::table('users')->insert([
    'email' => 'lucy.perez@gmail.com',
'username' => '7225147176',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'Lucy Perez',  
 'photo' => '/images/users/25/profile.jpg', 
'areacode' => '+52'
 ]);   



 DB::table('users')->insert([
    'email' => 'adan.qu9intana@gmail.com',
'username' => '630789454635',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'Adan Quintana',  
 'photo' => '/images/users/26/profile.jpg', 
'areacode' => '+52'
 ]);   


 

 DB::table('users')->insert([
    'email' => 'julio.martinez@gmail.com',
'username' => '6307894123635',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'Julio MArtinezs',  
 'photo' => '/images/users/27/profile.jpg', 
'areacode' => '+52'
 ]);   


 
 DB::table('users')->insert([
    'email' => 'remel.perez@gmail.com',
'username' => '7223990062',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'Remel Perez',  
 'photo' => '/images/users/28/profile.jpg', 
'areacode' => '+52'
 ]);   


 
 DB::table('users')->insert([
    'email' => 'abel.perez@gmail.com',
'username' => '7121349501',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'Abel Perez',  
 'photo' => '/images/users/29/profile.jpg', 
'areacode' => '+52'
 ]);   


 DB::table('users')->insert([
    'email' => 'jackie.hernandez@gmail.com',
'username' => '7221000355',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'JAckie Hernandez',  
 'photo' => '/images/users/30/profile.jpg', 
'areacode' => '+52'
 ]);   



 
 
 DB::table('users')->insert([
    'email' => 'teresa.alcantara@gmail.com',
'username' => '7121349992',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'Teresa Alcantara',  
 'photo' => '/images/users/31/profile.jpg', 
'areacode' => '+52'
 ]);   


 

 
 
 DB::table('users')->insert([
    'email' => 'boniperez.alcantara@gmail.com',
'username' => '7222519689',
 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
 'name' => 'Boni Perez',  
 'photo' => '/images/users/32/profile.jpg', 
'areacode' => '+52'
 ]);   



 

 
         
 
                            


    
    

        
  
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
}
