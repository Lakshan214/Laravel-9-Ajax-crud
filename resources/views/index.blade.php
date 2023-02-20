<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ajaux crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  </head>
  <body>
    <div class="contaner">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2 class="my-5 text-center">Laravel 9 Ajax crud</h2>
                <a href="" class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#addModal">Add Product</a>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Acton</th>
                      
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th >1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>
                            <a href="" class="btn btn-success "><i class="las la-edit"></i></a>
                            <a href="" class="btn btn-danger"><i class="las la-trash"></i></a>
                        </td>
                      </tr>
                    
                    </tbody>
                  </table>




            </div>
        </div>
    </div>
         
   @include('addProduct')    
   @include('js')

</body>
</html>