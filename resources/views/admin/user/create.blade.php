@extends('layouts.main')

@section('content')
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Добавить пользователя</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Пользователь</li>
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
            <form action="{{ route("admin.users.store")}}" method="POST">
              @csrf
              <div class="form-group">
                <input type="text" value="{{ old("name")}}" name="name" class="form-control" placeholder="Имя">
              </div>
              <div class="form-group">
                <input type="text" value="{{ old("email")}}" name="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" value="{{ old("password")}}" name="password" class="form-control" placeholder="password">
              </div> 
              <div class="form-group">
                <input type="text" value="{{ old("password_confirmation")}}" name="password_confirmation" class="form-control" placeholder="password_confirmation">
              </div> 
              <div class="form-group">
                <input type="submit"  class="btn btn-primary" value="создать">
              </div>
            </form>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection