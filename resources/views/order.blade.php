
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <p class="h1 text-center">CheckOut</p>
            <div class="mb-3">
              <label for="FirstName" class="form-label"></label>
              <input  class="form-control" name="FirstName" placeholder="FirstName">
            </div>
            <div class="mb-3">
              <label for="LastName" class="form-label"></label>
              <input  class="form-control" name="LastName" placeholder="LastName">
            </div>
            <div class="mb-3">
              <label for="Address" class="form-label">Address</label>
              <input  class="form-control" name="Address" placeholder="Address">
            </div>
            <div class="mb-3">
              <label for="Address" class="form-label">Address</label>
              <input  class="form-control" name="Address" placeholder="Address">
            </div>
            <div class="mb-3">
              <p class="display-6">Products</p>
              
              @foreach ($order as $ordr)
              <div class="mb-3">

              <p >Name {{$ordr['title']}}</p>
              <p >Price {{$ordr['Price']}}</h1>
            
              </div>


              @endforeach
             <button type="submit" style="background-color: blue" class="btn btn-primary">Pay</button>
            </div>
            

            

        </x-slot>
    
       
    </x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>

