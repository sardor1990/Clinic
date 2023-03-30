@extends('layouts.admin_layout')
@section('title', 'Update Posts')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update Posts: {{ $post['title'] }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <h4><i class="icon fa fa-check"></i>{{ session()->get('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <form action="{{ route('post.update', $post['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" value="{{ $post['title'] }}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Post name" required>
                                </div>
                                <div class="form-group">
                                    <label>Select Category</label>
                                    <select name="category_id" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{ $category['id'] }}" @if($category['id'] == $post['category_id']) selected @endif>{{ $category['title'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea name="text" class="editor">{{ $post['text'] }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="feature_image">Post Image</label>
                                    <img src="{{ $post['img'] }}" alt="" class="img-uploaded" style="display: block; width: 200px;">
                                    <input class="form-control" value="{{ $post['img'] }}" name="img" type="text"  id="feature_image" name="feature_image" readonly>
                                    <a href=""  class="popup_selector" data-inputid="feature_image">Select Image</a>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update posts</button>
                                </div>
                        </form>
                    </div>
                </div>

            </div>

        </div><!-- /.container-fluid -->
    </section>
@endsection



