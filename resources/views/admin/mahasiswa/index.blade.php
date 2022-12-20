@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.mahasiswa.actions.index'))

@section('body')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <div class="row">
    <div class="container">
        <h2 class="text-center my-5">Upload File</h2>
    <div class="col-lg-8 mx-auto my-5">
        @if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        {{ $error }} <br/>
        @endforeach
    </div>
        @endif
    <form action="/upload/proses" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
    <div class="form-group">
        <b>File Gambar</b><br>
        <input type="file" name="file">
    </div>
    <br>
    <div class="form-group">
        <b>Keterangan</b>
        <br>
        <textarea class="form-control" name="keterangan"></textarea>
    </div>
    <br>
        <input type="submit" value="Upload" class="btn btn-primary">
    </form>
    </div>
    </div>
    </div>

@endsection