@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Portofolio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Portofolio</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Portofolio</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('portofolio.update', ['portodolio_id' => $portofolio->id] ) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{$portofolio->title}}">
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description">{{$portofolio->description}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" class="form-control" id="link" name="link" placeholder="Enter Link" value="{{$portofolio->link}}">
                  </div>
                  <div class="form-group">
                    <label for="client">Client</label>
                    <input type="text" class="form-control" id="client" name="client" placeholder="Enter Client" value="{{$portofolio->client}}">
                  </div>
                  <div class="form-group">
                    <label for="waktu_pengerjaan">Waktu Pengerjaan</label>
                    <input type="text" class="form-control" id="waktu_pengerjaan" name="waktu_pengerjaan" placeholder="Enter Waktu Pengerjaan" value="{{$portofolio->waktu_pengerjaan}}">
                  </div>
                  <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Enter Type" value="{{$portofolio->type}}">
                  </div>
                  <div class="form-group">
                    <label for="gif">Gif</label>
                    <input type="text" class="form-control" id="gif" name="gif" placeholder="Enter Gif" value="{{$portofolio->gif}}">
                  </div>
                  <div class="form-group">
                    <label for="image">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                      </div>
                    </div>
                  </div>                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('portofolio.index') }}" class="btn btn-danger">Back</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection