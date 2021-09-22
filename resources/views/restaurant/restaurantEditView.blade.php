<x-app-layout>
   
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
  
       @include("restaurant.restaurantcss")
  
      </head>
      <body>
        
        <div class="container-scroller">

        @include("restaurant.restaurantnav")

        {{-- <div style="position: relative; top: 100px; right: -250px">

          
          <form action="{{url('/uploadEditRestaurant')}}" method="post" enctype="multipart/form-data" style="margin: 20%;">

            @csrf
            <div> --}}
              {{-- <label style="font-family: sans-serif; font-size: 25px">{{ Auth::user()->name }}</label> --}}
              {{-- <label>Name</label>
              <input style="color: black" type="text" name="title" placeholder="Enter the name" required>
              
          </div>
            <div>
                <label>Description</label>
                <input style="color: black" type="text" name="description" placeholder="Enter a description" required>
            </div>
            <div>
                <label>Image</label>
                <input type="file" name="image"  required>
            </div>
            <div>
                <button  type="submit" class="btn btn-primary" value="save" style="margin-top: 7%" >Submit</button>
            </div>
        </form>
        
            
            
        </div> --}}


        <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header" >Add your Restaurant view</div>
      
                      <div class="card-body" >
                          <form action="{{url('/uploadEditRestaurant')}}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group col">
                                  <label  class="col-md-6 col-form-label text-md-left">Name<span
                                          class="text-danger"> *</span></label>
                                  <div class="col-md-6">
                                      <input style="color: white" type="text" step="0.01" class="form-control" placeholder="Enter the name" name="title" >
                                  </div>
                              </div>
      
                              <div class="form-group col">
                                  <label  class="col-md-6 col-form-label text-md-left">Description<span
                                          class="text-danger"> *</span></label>
                                  <div class="col-md-6">
                                      <input style="color: white" step="0.01" class="form-control" placeholder="Enter a description" type="text" name="description" >
                                  </div>
                              </div>
      
                              <div class="form-group col">
                                  <label required >Image<span> *</span></label>
                                  <div class="col-md-6">
                                      <input class="form-control"type="file" name="image" required>
                                  </div>
                              </div>
      
                              <br>
      
                              <div class="form-group col">
                                  <div class="col-md-6">
                                    <button  type="submit" class="btn btn-primary" value="save" style="margin-top: 7%" >Submit</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>


  
        </div>

        @include("restaurant.restaurantscript")

      </body>
    </html>
    
    
  </x-app-layout>