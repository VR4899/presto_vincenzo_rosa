<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>

    <x-navbar/>
    <header class="masthead">
  <div class="container-fluid masthead ">
    <div class="row h-75 align-items-center justify-content-center  ">
      <div class="col-12 text-center">
        <h1 class="fw-light titleFonts">{{$title}}</h1>
   
      </div>
    </div>
    
  </div>
</header>


    <div class="min-vh-100">

        {{ $slot }}
        
    </div>


    <x-footer/>

</body>
</html>