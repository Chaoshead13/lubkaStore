@extends('layouts.main')

@section('content')
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Продукты</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Продукты</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-12" bis_skin_checked="1">
                <div class="card" bis_skin_checked="1">
                <div class="card-header" bis_skin_checked="1">
                    <a href="{{route("admin.products.create")}}" class="btn btn-primary">Добавить</a>
                </div>
                
                <div class="card-body table-responsive p-0" bis_skin_checked="1">
                <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                <th>ID</th>
                <th>Title</th>
                </tr>
                </thead>
                <tbody>
               
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td><a href="{{route("admin.products.show", $product->id)}}">{{$product->title}}</a></td>
                         </tr>
                    @endforeach
                

               
                
                </tbody>
                </table>
                </div>
                
                </div>
                
                </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection