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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Portofolio</h3>
                <div class="card-tools">
                  <a href="{{ route('portofolio.create') }}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Create</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Client</th>
                    <th>Type</th>
                    <th>List Gambar</th>
                    <th>List Fitur</th>
                    <th>Action</th>
                  </tr>
                  @foreach ($portofolios as $portofolio)
                    <tr>
                      <td>{{$portofolio->id}}</td>
                      <td>
                        <img src="{{ asset($portofolio->image) }}" alt="" width="80">
                      </td>
                      <td>{{$portofolio->title}}</td>
                      <td>{{$portofolio->client}}</td>
                      <td>{{$portofolio->type}}</td>
                      <td>
                          <a href="{{ route('gambar.index', ['id_portofolio' => $portofolio->id]) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i> Detail</a>
                      </td>
                      <td>
                          <a href="{{ route('fitur.index', ['id_portofolio' => $portofolio->id]) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i> Detail</a>
                      </td>
                      <td>
                        <a href="{{ route('portofolio.show', ['id' => $portofolio->id]) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('portofolio.edit', ['id' => $portofolio->id]) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="{{ route('portofolio.destroy', ['id' => $portofolio->id]) }}"
                            onclick="event.preventDefault();
                                          document.getElementById('destroy-form-{{$portofolio->id}}').submit();">
                            <i class="fas fa-trash"></i>
                        </a>
                        <form id="destroy-form-{{$portofolio->id}}" action="{{ route('portofolio.destroy', ['id' => $portofolio->id]) }}" method="POST" style="display: none;">
                            @csrf @method('DELETE')
                        </form>
                      </td>
                    </tr>                      
                  @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection