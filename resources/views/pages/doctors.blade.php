@extends('layouts.app')
@section('title', 'Bosh sahifa')
@section('content')
    <div class="page-section">
        <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>
            <div class="row">
                @foreach($doctors as $doctor)
                    <div class="card mb-3" ">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('img/' . $doctor->image) }}" class="img-fluid rounded-start"
                                     alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $doctor->name }}</h5>
                                    <span class="text-sm text-grey">{{$doctor->specialists}}</span>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">{{$doctor->created_at}}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>


    </div>
    </div>
@endsection
