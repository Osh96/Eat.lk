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
            
            <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data" style="margin: 20%">

                @csrf

                <div>
                    <label>Title</label>
                    <input style="color: black" type="text" name="title" placeholder="Enter a title" required>
                </div>
                <div>
                    <label>Price</label>
                    <input style="color: black" type="num" name="price" placeholder="Enter the price" required>
                </div>
                <div>
                    <label>Description</label>
                    <input style="color: black" type="text" name="description" placeholder="Enter a description" required>
                </div>
                <div>
                    <label>Type</label>
                    <input style="color: black" type="text" name="type" placeholder="Enter the food type" required>
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