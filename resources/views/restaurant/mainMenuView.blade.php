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
            <input  class="form-control me-2" type="search" name="search"  placeholder="Search by package name" aria-label="Search" style="margin-left: 9%; ">
            <button class="btn btn-primary" type="submit">Search</button>

            </form>
        </div>

        {{-- <form class="d-flex" action="{{ route('manage.package.index') }}" method="GET" role="search">
            <input class="form-control me-2" type="search" placeholder="Search by package name"
                aria-label="Search" name="search-text" id="search-text">
            <button class="btn btn-outline-primary" type="submit">Search</button>
        </form> --}}
        
        <div class="container-scroller">

            @include("restaurant.restaurantnav")


            {{-- <div style="position: relative; top: 100px; ">
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

               
            </table> --}}


            <div class="card-body" style="position: relative; color:white;">
                <table class="table">
                    <thead>
                        <tr style= "color: gold">
                            <th scope="col">Image</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Type</th>
                            <th scope="col">Ingredient</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                            <tr>
                                <td><img src="/foodimage/{{$data->image}}"></td>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->foodname }}</td>
                                <td>Rs.{{$data->price}}</td>
                                <td> {{$data->type}}</td>
                                <td>{{$data->description}}</td>
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