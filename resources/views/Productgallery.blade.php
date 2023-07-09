
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <p class="h1 text-center">Gallery</p>
                        <div class="d-flex p-2 row align-items-start">
                       
                        @foreach ($images as $image)
      
                        <div class="card m-4" style="width: 18rem">
                            <img class="card-img-top" style="height: 18rem;" src='{{ asset("storage/Product/".$image['Image'])}}' alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">{{$image['title']}}</h5>
                              <p class="card-text">{{$image['Discription']}}</p>
                              <form action="/gallery" method="POST">
                                @csrf
                                  <input type="hidden" name="id" value={{$image['id']}}>
                                  <button type="submit" style="background-color: blue" class="btn btn-primary">Order</button>
                              </form>
                            </div>
                          </div>
                             {{-- <img class="rounded mx-auto img-thumbnail" src='{{ asset("storage/Product/".$image['Image'])}}' alt="Image"> --}}
                        @endforeach
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>

