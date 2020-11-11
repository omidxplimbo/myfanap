 # install laravel 6 or 7
     1-composer create-project laravel/laravel="7.*" ProjectName
      

2 - composer require omid/fanap

# publish vendor in artisan
  
  php artisan vendor:publish --provider=Dev\Main\FanapServiceProvider --force
