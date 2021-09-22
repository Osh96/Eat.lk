<x-app-layout>
   
    
    <!DOCTYPE html>
    <html lang="en">
      <head>

       @include("admin.admincss")

      </head>
      <body>

        <div class="container-scroller">

        @include("admin.adminnav")

        <div class="card-body" style="position: relative; color:white;">
          <table class="table">
              <thead>
                  <tr>
                      <th scope="col"style="color:gold">Name</th>
                      <th scope="col"style="color:gold">Email</th>
                      <th scope="col"style="color:gold">Action</th> 
                  </tr>
              </thead>
              <tbody>
                  @foreach ($data as $data)
                      <tr>
                          <td style="color:white">{{$data->name}}</td>
                          <td style="color:white">{{$data->email}}</td>
                          @if($data->usertype=='0')
                          <td> <button class="btn btn-danger" value="save" style="margin-top: 7%"><a style="text-decoration: none; color: white;" href="{{url('/deleteuser',$data->id)}}">Delete</a></button>
                        @endif
                      </tr>
                   @endforeach
              </tbody>
          </table>
          
      </div>

        </div>
            
        @include("admin.admincss")
      </body>
    </html>
    
    
</x-app-layout>
