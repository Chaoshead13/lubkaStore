@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать Продукт</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Категории</li>
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
                <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("patch")
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Название" value="{{ $product->title}}">
                        @error('title')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <input type="number" name="price" class="form-control" placeholder="Цена" value="{{$product->price}}">
                      </div>
                      <div class="form-group">
                        <input type="number" name="count" class="form-control" placeholder="Кол-во">
                      </div>
                      <div class="form-group">
                        <div class="w-50 mb-2">
                          <img src="{{asset("storage/" . $product->preview_image)}}" alt="preview_image" class="w-50">
                      </div>
                        <div class="input-group">
                          <div class="custom-file">
                            <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Загрузка</span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <select name="category_id" class="form-control select2" style="width: 100%;">
                          <option selected="selected" disabled>Выберите категорию</option>
                          @foreach ($categories  as $category)
                          <option value="{{$category->id}}"
                            {{ $category->id == $product->category_id ? "selected" : ""}}                 
                            >{{$category->title}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <input type="submit"  class="btn btn-primary" value="обновить">
                      </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
