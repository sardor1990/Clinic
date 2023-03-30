@extends('layouts.app')
@section('content')
    <h1>Bu bemorlar sahifasi</h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('patients.create') }}">
            <button class="btn btn-success" type="button">Bemor qo'shish</button>
        </a>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">T/R</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($patients as $patient)
            <tr>
                <th scope="row">{{ ($patients->currentpage()-1)*$patients->perpage()+$loop->index+1 }}</th>
                <td>
                    <a href="{{ route('patients.show', ['patient' => $patient -> id]) }}">{{ $patient->name }}</a>
                </td>
                <td>{{ $patient->email }}</td>
                <td>{{ $patient->phone }}</td>
                <td>
                    <a href="{{ route('patients.edit', ['patient' => $patient -> id]) }}" class="btn btn-info"><i
                            class="bi bi-pencil-square"></i></a>
                    <form action="{{ route('patients.destroy', ['patient' => $patient -> id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i
                                class="bi bi-trash-fill"></i></button>
                    </form>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $patients->links() }}
@endsection
