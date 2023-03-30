<div class="page-section bg-light">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Latest News</h1>
        <div class="row mt-5">
            <div class="col-lg-12 ">

                <div class="card mt-3 ">
                    @foreach($posts as $post)
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('img/' . $post->img) }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post['title'] }}</h5>
                                    <p class="card-text">{{ $post['text'] }}</p>
                                    <p class="card-text"><small class="text-muted">{{ $post['created_at'] }}</small></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
