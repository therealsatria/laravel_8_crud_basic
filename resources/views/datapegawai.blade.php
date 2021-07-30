<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Pegawai</title>
  </head>
  <body>
    <h1 class='text-center mb-4'>Data Pegawai</h1>

<div class="container">
    <hr>
    <a href="/tambahpegawai" type="button" class="btn btn-primary">Tambah +</a>
    <div class="row g-3 align-items-center mt-2">
        <div class="col-auto">
            <form action="/pegawai" method="GET">
                <input type="search" id="inputPassword6" name="search" placeholder="search here" class="form-control" aria-describedby="passwordHelpInline">
            </form>
          </div>
    </div>

    <hr>

    <div class="row">
        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{$message}}
        </div>
        @endif
        <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">JK</th>
                <th scope="col">Telp</th>
                <th scope="col">Dibuat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @php
            $no = 1;
        @endphp
        @foreach ($data as $index => $row)
            <tr>
                <th scope="row">{{ $index + $data->firstItem() }}</th>
                <td>{{$row->nama}}</td>
                <td>{{$row->jk}}</td>
                <td>{{$row->telp}}</td>
                <td>{{$row->created_at->diffForHumans() }}</td>
                <td>
                    <a href="/delete/{{$row->id}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                    <a href="/tampilkandata/{{$row->id}}" type="button" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
        </table>
        {{ $data->links() }}
    </div>
    <hr>
    sign in as <a href="/logout">{{ Auth::user()->name }}</a>
</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
