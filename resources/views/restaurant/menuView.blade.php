<x-app-layout>
   
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
  
       @include("restaurant.restaurantcss")
  
      </head>
      <body>
        
        <div class="container-scroller">

        @include("restaurant.restaurantnav")


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" >Add New FoodItem</div>
        
                        <div class="card-body" >
                            <form action="{{url('/uploadfood')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col">
                                    <label  class="col-md-6 col-form-label text-md-left">Title<span
                                            class="text-danger"> *</span></label>
                                    <div class="col-md-6">
                                        <input style="color: white" type="text" step="0.01" class="form-control" placeholder="Enter a title" name="title" min=0
                                             required autofocus>
                                    </div>
                                </div>
        
                                <div class="form-group col">
                                    <label  class="col-md-6 col-form-label text-md-left">Price<span
                                            class="text-danger"> *</span></label>
                                    <div class="col-md-6">
                                        <input style="color: white" step="0.01" class="form-control" placeholder="Enter the price" type="num" name="price" min=0
                                             required autofocus>
                                    </div>
                                </div>
        
                                <div class="form-group col">
                                    <label  class="col-md-6 col-form-label text-md-left">Description<span
                                            class="text-danger"> *</span></label>
                                    <div class="col-md-6">
                                        <input style="color: white" step="0.01" class="form-control" type="text" name="description" placeholder="Enter a description" min=0
                                             required autofocus>
                                    </div>
                                </div>
        
                                <div class="form-group col">
                                    <label  class="col-md-6 col-form-label text-md-left">Type<span
                                            class="text-danger"> *</span></label>
                                    <div class="col-md-6">
                                        <input style="color: white" step="0.01" class="form-control" type="text" name="type" placeholder="mains,speciality,salads,starters," min=0
                                             required autofocus>
                                    </div>
                                </div>
        
                                <div class="form-group col">
                                    <label required >Image<span> *</span></label>
                                    <div class="col-md-6">
                                        <input class="form-control"type="file" name="image" name="type">
                                    </div>
                                </div>
        
                                <br>
        
                                <div class="form-group col">
                                    <div class="col-md-6">
                                        <button  type="submit" value="save" class="btn btn-primary btn-sm">Submit</button>
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




  