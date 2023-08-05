<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>


    @include('admin.admincss')
  </head>
  <body>


    <div class="container-scroller">
      @include('admin.navbar')

            <!-- food menu work-->
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-3"></div>
                    <div class="col-lg">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h1 class="text-center h3">Please,Insert the food details only</h1>
                            </div>
                            <div class="card-body">
                                <form action="{{url('/foodmenu')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control text-white" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Price</label>
                                        <input type="number" name="price" class="form-control text-white" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Image</label>
                                        <input type="file" name="image" class="form-control text-white" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Description</label>
                                        <input type="text" name="description" class="form-control text-white" required>
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
                <div class="row mt-5">
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
                </div>
            </div>

            <!-- show food-->

      </div>

        @include('admin.adminjs')

  </body>
</html>

