@extends('layout.main')

@section('isi')
<main class="container">
    <p>/home/{{ Route::currentRouteName() }}</p>

    <a href="{{ url(''); }}/tambahpegawai" type="button" class="btn btn-primary">Tambah +</a>
    <a href="{{ url('/exportpdf'); }}" type="button" class="btn btn-info">Export PDF</a>
    <div class="row g-3 align-items-center mt-2">
        <div class="col-auto">
            <form action="{{ url(''); }}/pegawai" method="GET">
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
                    <a href="{{ url(''); }}/delete/{{$row->id}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                    <a href="{{ url(''); }}/tampilkandata/{{$row->id}}" type="button" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
        </table>
        {{ $data->links() }}
    </div>
    <hr>
    sign in as <a href="{{ url(''); }}/logout">{{ Auth::user()->name }}</a>
</main>
@endsection

