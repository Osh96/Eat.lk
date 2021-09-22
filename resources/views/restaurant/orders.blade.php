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
        
          <div class="card-body" style="color:rgb(255, 255, 255)">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"style="color:gold">Name</th>
                        <th scope="col"style="color:gold">Address</th>
                        <th scope="col"style="color:gold">Food Name</th>
                        <th scope="col"style="color:gold">Price</th>
                        <th scope="col"style="color:gold">Quantity</th>
                        <th scope="col"style="color:gold">Total Price</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                        <tr>
                            <td style="color:white">{{ $data->name }}</td>
                            <td style="color:white">{{ $data->address }}</td>
                            <td style="color:white">{{ $data->foodname }}</td>
                            <td style="color:white"> Rs.{{ $data->price }}</td>
                            <td style="color:white">{{ $data->quantity}}</td>
                            <td style="color:white">Rs.{{$data->price*$data->quantity}}.00</td>
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