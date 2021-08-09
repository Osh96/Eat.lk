<x-app-layout>
   
    
  <!DOCTYPE html>
  <html lang="en">
    <head>

     @include("restaurant.restaurantcss")

    </head>
    <body>
      
      <h1 style="padding-left: 30%; padding-top: 100px">Welcome {{ Auth::user()->name }}</h1>
      @include("restaurant.restaurantnav")

      @include("restaurant.restaurantscript")
    </body>
  </html>
  
  
</x-app-layout>