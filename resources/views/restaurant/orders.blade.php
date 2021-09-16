<x-app-layout>
   
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
  
       @include("restaurant.restaurantcss")
  
      </head>
      <body>
        <h1 style="padding-left: 20%; padding-top: 20px">Customer Orders</h1>
        <div class="container-scroller">

        @include("restaurant.restaurantnav")
          
          {{-- <div style="position: relative; top: 100px; ">
            <div class="scroll-menu" style="overflow: scroll; height:600px;
                width:250%">  
          <table style="margin-left: 10%">
            <tr align="center" style= "color: gold">
                <td style="padding:20px">Name</td>
                <td style="padding:20px">Address</td>
                <td style="padding:20px">Food Name</td>
                <td style="padding:20px">Price</td>
                <td style="padding:20px">Quantity</td>
                <td style="padding:20px">Total Price</td>
            </tr>

            @foreach ($data as $data)
  
            <tr align="center" style="background-color: black">
                <td style="padding: 30px;">{{$data->name}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->foodname}}</td>
                <td>Rs.{{$data->price}}</td>
                <td>{{$data->quantity}}</td>
                <td>Rs.{{$data->price*$data->quantity}}.00</td>
            </tr>
            @endforeach
            </div>

          </table>
          </div> --}}
        
          <div class="card-body" style="color:rgb(255, 255, 255)">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Food Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Price</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                        <tr>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->address }}</td>
                            <td>{{ $data->foodname }}</td>
                            <td>Rs.{{ $data->price }}</td>
                            <td>{{ $data->quantity}}</td>
                            <td>Rs.{{$data->price*$data->quantity}}.00</td>
                            <td>
                            </td>
                        </tr>
                     @endforeach
                </tbody>
            </table>
            
        </div>
            
     
  
        </div>

        @include("restaurant.restaurantscript")

      </body>
    </html>
    
    
  </x-app-layout>