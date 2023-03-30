@extends('layouts.admin_layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">All Patients</h1>
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
            <section class="content">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('patient.create') }}">
                        <button class="btn btn-success" type="button">Bemor qo'shish</button>
                    </a>
                </div>
                <!-- Default box -->
                <div class="card">
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 5%">
                                    Id
                                </th>
                                <th style="width: 25%">
                                    Name
                                </th>
                                <th style="width: 30%">
                                    email
                                </th>
                                <th style="width: 25%">
                                    Phone number
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($patients as $patient)
                                <tr>
                                    <th scope="row">{{ ($patients->currentpage()-1)*$patients->perpage()+$loop->index+1 }}</th>
                                    <td>
                                        <a href="{{ route('patient.show', ['patient' => $patient -> id]) }}">{{ $patient->name }}</a>
                                    </td>
                                    <td>{{ $patient->email }}</td>
                                    <td>{{ $patient->phone }}</td>
                                    <td class="project-actions text-right">

                                        <a class="btn btn-info btn-sm"
                                           href="{{ route('patient.edit', ['patient' => $patient -> id]) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <form action="{{ route('patient.destroy', ['patient' => $patient -> id])}}" method="POST" style="display: inline-block">
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
                            {{ $patients->links() }}
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
        </div><!-- /.container-fluid -->
    </section>

@endsection