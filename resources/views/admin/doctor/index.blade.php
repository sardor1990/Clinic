@extends('layouts.admin_layout')
@section('title', 'All Posts')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">All Doctors</h1>
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
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('doctors.create') }}"> Create New Doctor</a>
    </div>
    <div class="card">
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 5%">
                        T/r
                    </th>
                    <th style="width: 30%">
                        Full Name
                    </th>
                    <th style="width: 20%">
                        Address
                    </th>
                    <th style="width: 5%">
                        ID
                    </th>
                    <th style="width: 15%">
                        Create_at
                    </th>

                </tr>
                </thead>
                <tbody>
                @foreach($doctors as $doctor)
                    <tr>
                        <td scope="row">
                        {{ ($doctors->currentpage()-1)*$doctors->perpage()+$loop->index+1 }}
                        </td>


                        <td>
                            <a href="{{ route('doctors.show', ['doctor' => $doctor -> id]) }}">{{ $doctor->name }}</a>
                        </td>
                        <td>
                            {{ $doctor['address'] }}
                        </td>
                        <td>
                            {{ $doctor['id'] }}
                        </td>
                        <td>
                            {{ $doctor['created_at'] }}
                        </td>

                        <td class="project-actions text-right">

                            <a class="btn btn-info btn-sm"
                               href="{{ route('doctors.edit', $doctor['id']) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <form action="{{ route('doctors.destroy', $doctor['id'])}}" method="POST"
                                  style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm delete-btn">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </button>
                            </form>

                        </td>
                    </tr>

                @endforeach
                {{ $doctors->links() }}
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->


@endsection

