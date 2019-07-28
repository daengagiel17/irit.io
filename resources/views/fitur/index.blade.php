@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fitur Portofolio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Fitur Portofolio</li>
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
                <h3 class="card-title">List of Fitur Portofolio {{$portofolio_id}} </h3>
                <div class="card-tools">
                  <a href="{{ route('portofolio.index') }}" class="btn btn-sm btn-danger"><i class="fas fa-chevron-left"></i> Back</a>
                  <a href="{{ route('fitur.create', ['portofolio_id' => $portofolio_id]) }}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Create</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                  </tr>
                  @foreach ($fiturs as $fitur)
                    <tr>
                      <td>{{$fitur->id}}</td>
                      <td>{{$fitur->name}}</td>
                      <td>
                        <a class="btn btn-sm btn-danger" href="{{ route('fitur.destroy', ['portofolio_id' => $portofolio_id, 'id' => $fitur->id]) }}"
                            onclick="event.preventDefault();
                                          document.getElementById('destroy-form-{{$fitur->id}}').submit();">
                            <i class="fas fa-trash"></i>
                        </a>
                        <form id="destroy-form-{{$fitur->id}}" action="{{ route('fitur.destroy', ['portofolio_id' => $portofolio_id, 'id' => $fitur->id]) }}" method="POST" style="display: none;">
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