<x-app-layout>
   
    
    <!DOCTYPE html>
    <html lang="en">
      <head>

       @include("admin.admincss")

      </head>
      <body>

        <div class="container-scroller">

        @include("admin.adminnav")

        <div style="position: relative; top: 100px; right: -160px">


                <table class="table" >
                  <tr style= "color: gold" >
                      <th style="padding: 30px" bgcolor="green">Name</th>
                      <th style="padding: 30px"bgcolor="green">Email</th>
                      <th style="padding: 30px"bgcolor="green">Action</th>
                  </tr>

                @foreach($data as $data)
                    
                  <tr style="align: center; color:white">
                      <th style="padding: 30px">{{$data->name}}</th>
                      <th style="padding: 30px">{{$data->email}}</th>

                    @if($data->usertype=='0')
                      <td> <button class="btn btn-danger" value="save" style="margin-top: 7%"><a style="text-decoration: none; color: white;" href="{{url('/deleteuser',$data->id)}}">Delete</a></button>
                    @endif
                  </tr>

                     @endforeach

            </table>
        </div>

        </div>
            
        @include("admin.admincss")
      </body>
    </html>
    
    
</x-app-layout>
