<x-app-layout>
   
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
  
        @include("restaurant.restaurantcss")
  
    </head>
    <body>
        <div class="container-scroller">

            @include("restaurant.restaurantnav")

            <div style="position: relative; top: 100px; ">

            <table class="table" >
                <tr style= "color: gold" >
                    <th style="padding: 30px">Image</th>
                    <th style="padding: 30px">Item Name</th>
                    <th style="padding: 30px">Price</th>
                    <th style="padding: 30px">Type</th>
                    <th style="padding: 30px">Ingredient</th>
                    <th style="padding: 30px">Action</th>
                </tr>


                @foreach ($data as $data)
                    
                
                <tr style="align: center; color:white">
                    <td ><img style="height: 90px; width: 90px"  src="/foodimage/{{$data->image}}"></td>
                    <td >{{$data->title}}</td>
                    <td >{{$data->price}}</td>
                    <td >{{$data->type}}</td>
                    <td >{{$data->description}}</td>
                    <td> <button class="btn btn-danger" value="save" style="margin-top: 7%"><a style="text-decoration: none; color: white;" href="{{url('/deletefooditem',$data->id)}}">Delete</a></button></td>
                </tr>

                @endforeach

               
            </table>

            
                    

            </div>
        </div>

        @include("restaurant.restaurantscript")

      </body>
    </html>
    
    
  </x-app-layout>