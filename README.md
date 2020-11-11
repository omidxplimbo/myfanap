 # install laravel 6 or 7
     1-composer create-project laravel/laravel="7.*" ProjectName
      
 
 # Composer Require

    1 - composer require omid/fanap

# publish vendor in artisan
  
  php artisan vendor:publish --provider=Dev\Main\FanapServiceProvider --force
  

# set server
 
 php artisan serv
 

# route

 Route::get('/', 'FanapController@lists');
 
 this route call api and gets 5 custom post list in business
 
