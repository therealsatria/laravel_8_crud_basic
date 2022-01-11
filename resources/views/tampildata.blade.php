@extends('layout.main')

@section('isi')
<main class="container">
<p>/home/{{ Route::currentRouteName() }}</p>
    <div class="row justify-content-center" >
        <div class="col-6">
        <div class="card">
        <div class="card-body">
            <form action="{{ url(''); }}/updatedata/{{$data->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" value="{{$data->nama}}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">JK</label>
                <select class="form-select" name="jk" aria-label="Default select example">
                <option selected>{{$data->jk}}</option>
                <option value="1">L</option>
                <option value="2">P</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Telp</label>
                <input type="text" name="telp" value="{{$data->telp}}" class="form-control">
            </div>
            <a href="{{ url(''); }}/pegawai" type="button" class="btn btn-primary"><<</a>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
        </div>
    </div>
</div>

</main>
@endsection

