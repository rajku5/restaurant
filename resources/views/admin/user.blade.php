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


      <table class="table ">

          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Action</th>
          </tr>

          @foreach ($data as $item)


          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>
                @if ($item->usertype=="0")
                <div class="row">
                </div>
                    <div class="col">
                        <a href="{{url('/deleteuser',$item->id)}}">
                            <button class="btn btn-danger">delete</button>
                        </a>
                    </div>
                </div>

                @else
                    <div class="col-2"><button class="btn btn-primary">Not Allowed</button></div>

                @endif

            </td>
          </tr>

          @endforeach

      </table>

      </div>

        @include('admin.adminjs')

  </body>
</html>

