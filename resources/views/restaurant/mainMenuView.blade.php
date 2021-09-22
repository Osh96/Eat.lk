<x-app-layout>
   
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
  
        @include("restaurant.restaurantcss")
  
    </head>
    
    <body>
        <h1 style="padding-left: 20%; padding-top: 20px">Items in the Menu</h1>

        <div class="container">
        <form class="d-flex" action="{{url('/search')}}" method="get" role="search"> 
            @csrf
            <input  class="form-control me-2"  type="search" name="search"  placeholder="Search by food name" aria-label="Search" style="margin-left: 9%; color: white">
            <button class="btn btn-primary" type="submit">Search</button>

            </form>
        </div>
        
        <div class="container-scroller">

            @include("restaurant.restaurantnav")


            <div class="card-body" style="position: relative; color:white;">
                <table class="table">
                    <thead>
                        <tr style= "color: gold">
                            <th scope="col"style="color:gold">Image</th>
                            <th scope="col"style="color:gold">Item Name</th>
                            <th scope="col"style="color:gold">Price</th>
                            <th scope="col"style="color:gold">Type</th>
                            <th scope="col"style="color:gold">Ingredient</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                            <tr>
                                <td><img src="/foodimage/{{$data->image}}"></td>
                                <td style="color:white">{{ $data->title }}</td>
                                <td style="color:white">{{ $data->foodname }}</td>
                                <td style="color:white">Rs.{{$data->price}}</td>
                                <td style="color:white"> {{$data->type}}</td>
                                <td style="color:white">{{$data->description}}</td>
                                <td><button class="btn btn-danger" value="save" style="margin-top: 7%"><a style="text-decoration: none; color: white;" href="{{url('/deletefooditem',$data->id)}}">Delete</a></button></td>
                            </tr>
                         @endforeach
                    </tbody>
                </table>
                
            </div>


        
                    

            </div>
        </div>

        @include("restaurant.restaurantscript")

      </body>
    </html>
    
    
  </x-app-layout>