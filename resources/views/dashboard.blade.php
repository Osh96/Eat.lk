<x-app-layout>
   
    
    <!DOCTYPE html>
    <html lang="en">
      <head>

       @include("admin.admincss")

      </head>
      <body>
        
        <h1 style="padding-left: 30%; padding-top: 100px">Welcome {{ Auth::user()->name }}</h1>
        @include("admin.adminnav")

        @include("admin.adminscript")
      </body>
    </html>
    
    
</x-app-layout>
