<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-3"></div>
                <div class="col-lg">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h1 class="text-center h3">Please,Update the food details only</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{url('/updatefood/'.$data->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="" class="form-label">Title</label>
                                    <input type="text" name="title" value="{{$data->title}}" class="form-control text-white" required>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Price</label>
                                    <input type="number" name="price" value="{{$data->price}}" class="form-control text-white" required>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">New Image</label>
                                    <input type="file" name="image" class="form-control text-white" required>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Old Image</label>
                                    <img src="/foodimage/{{$data->image}}" height="150" width="150" alt="">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Description</label>
                                    <input type="text" name="description" value="{{$data->description}}" class="form-control text-white" required>
                                </div>
                                <div class="mb-3 form-check">
                                  <input type="checkbox" class="form-check-input" >
                                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <input type="submit" class="btn btn-primary" value="save">
                            </form>
                        </div>
                      </div>

                </div>
                <div class="col-lg-3"></div>
            </div>

        </div>

      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.adminjs')
    <!-- End custom js for this page -->
  </body>
</html>
