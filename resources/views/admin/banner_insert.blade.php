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
                                <h1 class="text-center h3">Please,Insert banner image only</h1>
                            </div>
                            <div class="card-body">
                                <form action="{{url('/banner_insert')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="" class="form-label">Image 1</label>
                                        <input type="file" name="image1" class="form-control text-white" required>
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

            <!-- show food-->

      </div>

        @include('admin.adminjs')

  </body>
</html>

