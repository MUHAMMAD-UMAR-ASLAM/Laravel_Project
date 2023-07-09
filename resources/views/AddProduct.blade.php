
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add product</title>
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
                    <form action="/add_product" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Product Name</label>
                            <input  class="form-control" name="title" placeholder="Boat Tail">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Discription</label>
                            <textarea class="form-control" name="Discription" rows="3"></textarea>
                        </div>
                        <select class="form-select mb-3" name="Category" aria-label="Default select example">
                            <option selected>Category</option>
                            @foreach ($categories as $category)
                                <option value={{$category['id']}}>{{$category['Category_Name']}}</option>
                            @endforeach
                        </select>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Price</label>
                            <input class="form-control" type="number" name="price">
                          </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" type="file" name="Image">
                          </div>
                    
                       
                        <button  class="btn btn-primary">Continue</button>
                    </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>

