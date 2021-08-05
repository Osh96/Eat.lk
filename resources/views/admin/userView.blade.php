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

            <table bgcolor="grey" border="3px">
                <tr>
                    <th style="padding: 30px" bgcolor="green">Name</th>
                    <th style="padding: 30px" bgcolor="green">Email</th>
                    <th style="padding: 30px" bgcolor="green">Action</th>
                </tr>

                @foreach($data as $data)
                    
                     <tr>
                        <th style="padding: 30px">{{$data->name}}</th>
                     <th style="padding: 30px">{{$data->email}}</th>

                        <th style="padding: 30px"><a href="{{url('/deleteuser',$data->id)}}">Delete</a></th>
      
                     </tr>

                     @endforeach


            </table>
        </div>

        
           
            




        </div>
            
        
        @include("admin.admincss")
      </body>
    </html>
    
    
</x-app-layout>
