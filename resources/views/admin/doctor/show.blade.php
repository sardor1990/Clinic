@extends('layouts.admin_layout')
@section('title', 'Doctor')
@section('content')
    <div class="d-grid gap-2 d-md-flex justify-content-md-start m-2">
        <a href="{{ route('doctors.index') }}">
            <button class="btn btn-outline-primary" type="button"><-Orqaga</button>
        </a>
    </div>
    <div class="row d-flex justify-content-center align-items-center">
        <!-- /.col -->
        <div class="col-md-8">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user shadow">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-info">
                    <h3 class="widget-user-username">{{ $doctor['name'] }}</h3>
                    <h5 class="widget-user-desc">{{ $doctor['address'] }} </h5>
                </div>
                <div class="widget-user-image">
                    <img class="img-circle elevation-2" src="{{ asset('img/' . $doctor->image) }}" alt="User Avatar">
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-3 border-right">
                            <div class="description-block">
                                <h5 class="description-header">Mutaxasisligi</h5>
                                <span class="description-text">{{ $doctor['specialists'] }}</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 border-right">
                            <div class="description-block">
                                <h5 class="description-header">Phone number</h5>
                                <span class="description-text">{{ $doctor['phone'] }}</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3">
                            <div class="description-block">
                                <h5 class="description-header">Tamomlagan Oliy </h5>
                                <span class="description-text">{{ $doctor['Graduated_university'] }}</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <!-- /.col -->
                        <div class="col-sm-3">
                            <div class="description-block">
                                <h5 class="description-header"> ISh tajribasi </h5>
                                <span class="description-text">{{ $doctor['experience'] }}</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        <div class="col-md-8">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user shadow">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-12 border-right">
                            <div class="description-block">
                                <h5 class="description-header">Biography</h5>
                                <p class="">John was born in a small town in the midwestern United States. He grew up in a family of
                                    farmers and spent his childhood working on the farm and attending school. Despite his humble beginnings,
                                    John was a bright student and excelled academically.

After graduating from high school, John attended a local university where he studied business and economics. He graduated with honors
                                    and landed a job at a large accounting firm in the city.

Over the next few years, John worked his way up the corporate ladder and became a senior executive at the firm.
                                    But he was not satisfied with his career and felt a deep sense of emptiness in his life.

So John decided to take a break from his job and travel the world. He spent a year backpacking through Europe, Asia, and Africa,
                                    experiencing new cultures and meeting new people.

During his travels, John discovered a passion for photography and decided to pursue it as a career. He returned to the United
                                    States and enrolled in a photography school, where he honed his skills and developed a unique style.

Today, John is a successful freelance photographer, specializing in nature and landscape photography. His work has been featured
                                    in magazines and exhibitions around the world, and he continues to travel and explore new places,
                                    always seeking inspiration for his art.</p>
                            </div>
                            <!-- /.description-block -->
                        </div>

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.widget-user -->
        </div>
    </div>
    </div>


@endsection
