<x-app-layout>
   
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
  
       @include("restaurant.restaurantcss")
  
      </head>
      <body>
        
        <div class="container-scroller">

        @include("restaurant.restaurantnav")

        <div style="position: relative; top: 100px; right: -250px">

          
          <form action="{{url('/uploadEditRestaurant')}}" method="post" enctype="multipart/form-data" style="margin: 20%;">

            @csrf
            <div>
              {{-- <label style="font-family: sans-serif; font-size: 25px">{{ Auth::user()->name }}</label> --}}
              <label>Name</label>
              <input style="color: black" type="text" name="title" placeholder="Enter the name" required>
              
          </div>
            <div>
                <label>Description</label>
                <input style="color: black" type="text" name="description" placeholder="Enter a description" required>
            </div>
            <div>
                <label>Image</label>
                <input type="file" name="image"  required>
            </div>
            <div>
                <button  type="submit" class="btn btn-primary" value="save" style="margin-top: 7%" >Submit</button>
            </div>
        </form>
        
            
            
        </div>
  
        </div>

        @include("restaurant.restaurantscript")

      </body>
    </html>
    
    
  </x-app-layout>