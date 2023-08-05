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
            <th scope="col">Phone no</th>
            <th scope="col">Number_guests</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Message</th>
            <th scope="col">Action</th>
          </tr>

          @foreach ($data as $item)


          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->number_guests}}</td>
            <td>{{$item->date}}</td>
            <td>{{$item->time}}</td>
            <td>{{$item->message}}</td>
            <td>
                <a href="{{url('/delete_reservation',$item->id)}}">
                    <button class="btn btn-danger">delete</button>
                </a>
            </td>
          </tr>

          @endforeach

      </table>

      </div>

        @include('admin.adminjs')

  </body>
</html>

