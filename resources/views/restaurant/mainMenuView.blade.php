<x-app-layout>
   
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
  
        @include("restaurant.restaurantcss")
  
    </head>
    
    <body>
        <h1 style="padding-left: 20%; padding-top: 20px">Items in the Menu</h1>

        <div class="container">
        <form action="{{url('/search')}}" method="get"> 
            @csrf
            <input type="text" name="search" style="color:black; margin-left: 9%; margin-top: 1%">
            <input type="submit" value="search" class="btn btn-success">

            </form>
        </div>
        
        <div class="container-scroller">

            @include("restaurant.restaurantnav")


            <div style="position: relative; top: 100px; ">
                <div class="scroll-menu" style="overflow: scroll; height:600px;
                width:100%">  
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
                    <td >Rs.{{$data->price}}</td>
                    <td >{{$data->type}}</td>
                    <td >{{$data->description}}</td>
                    <td> <button class="btn btn-danger" value="save" style="margin-top: 7%"><a style="text-decoration: none; color: white;" href="{{url('/deletefooditem',$data->id)}}">Delete</a></button></td>
                </tr>
            </div>
                @endforeach

               
            </table>

        
                    

            </div>
        </div>

        @include("restaurant.restaurantscript")

      </body>
    </html>
    
    
  </x-app-layout>