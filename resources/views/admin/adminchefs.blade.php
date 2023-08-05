<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.navbar')
      <!-- partial -->
      <div class="container">
        <div class="row mt-5">
            <div class="col-lg-3"></div>
            <div class="col-lg">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h1 class="text-center h3">Please,Insert the Chef details only</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/insertchefs')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Enter Chef Name</label>
                                <input type="text" name="name" class="form-control text-white" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Chef spacial for food</label>
                                <input type="text" name="foodspacial" class="form-control text-white" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Image</label>
                                <input type="file" name="chefimage" class="form-control text-white" required>
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
        {{-- <div class="row mt-5">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Food Name</th>
                        <th>Food Price</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th class="text-center">Action</th>
                    </tr>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>₹ {{$item->price}}</td>
                        <td><img src="/foodimage/{{$item->image}}"></td>
                        <td>{{$item->description}}</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a href="{{url('/deletemenu',$item->id)}}"><i style = "color:red;" class="bi bi-trash3"></i></a>
                                </div>
                                <div class="col">
                                    <a href="{{url('/editfood',$item->id)}}"><i style = "color:rgb(255, 255, 255);" class="bi bi-pencil"></i></a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </div> --}}
    </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.adminjs')
    <!-- End custom js for this page -->
  </body>
</html>
