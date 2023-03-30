@extends('layouts.app')
@section('title', 'Blogs')
@section('content')
    <div class="container">
        <!-- Navigation bar with social media icons -->


        <!-- w3-content defines a container for fixed size centered content,
        and is wrapped around the whole page content, except for the footer in this example -->
        <div class="w3-content" style="max-width:1600px">

            <!-- Header -->
            <header class="w3-container w3-center w3-padding-48 w3-white">
                <h1 class="w3-xxxlarge"><span class="text-primary">Doctor-B</span><b> Najot BLOGLIFE</b></h1>
                <h4>Welcome to the blog of <span class="w3-tag">Doctor-B najot</span></h4>
            </header>

            <!-- Image header -->
            <header class="w3-display-container w3-wide" id="home">
                <img class="w3-image" src="../assets/img/bg_image_1.jpg" alt="Fashion Blog" width="1600" height="1060">
                <div class="w3-display-left w3-padding-large">
                    <h1 class="w3-text-white"><span class="text-primary">Doctor-B</span>Najot</h1>
                    <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>OUR BLOG</b></h1>
                    <h5 class="w3-button w3-white w3-padding-large w3-large w3-opacity w3-hover-opacity-off"> Bu yerda
                        bizning clinika yangiliklari haqida bilib borishingiz mumkin</h5>
                </div>
            </header>

            <!-- Grid -->
            <div class="w3-row w3-padding w3-border">

                <!-- Blog entries -->
                <div class="w3-col l8 s12">

                    <!-- Blog entry -->
                    <div class="w3-container w3-white w3-margin w3-padding-large">
                        @foreach($posts as $post)
                            <div class="w3-center">
                                <h3><a href="">{{ $post['title'] }}</a>
                                </h3>
                                <h5>Written on: <span class="w3-opacity"></span>{{ $post['created_at'] }}</h5>
                            </div>

                            <div class="w3-justify">
                                <img src="{{ asset('img/' . $post->img) }}" alt="Girl Hat"
                                     style="width:300px; height: 350px;" class="w3-padding-16">

                            </div>
                            <p class="w3-left">
                                <button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i
                                            class="fa fa-thumbs-up"></i> Like</b></button>
                            </p>
                            <p class="w3-right">
                                <button class="w3-button w3-black" onclick="myFunction('demo2')"><b>Replies  </b> <span
                                        class="w3-tag w3-white">2</span></button>
                            </p>
                            <p class="w3-clear"></p>
                        @endforeach

                    </div>
                    <hr>
                    <!-- END BLOG ENTRIES -->
                </div>

                <!-- About/Information menu -->
                <div class="w3-col l4">
                    <!-- About Card -->
                    <div class="w3-white w3-margin">
                        <img src="../img/IMG_20210615_143523.jpg" alt="Jane" style="width:100%" class="w3-grayscale">
                        <div class="w3-container w3-black">
                            <h4>My Name is Sardor</h4>
                            <p>I am a new programmer. I want to share my work with you... I want to share my world with
                                you.</p>
                        </div>
                    </div>
                    <hr>

                    <!-- Posts -->
                    <div class="w3-white w3-margin">
                        <div class="w3-container w3-padding w3-black">
                            <h4>Popular Posts</h4>
                        </div>
                        <ul class="w3-ul w3-hoverable w3-white">
                            @foreach($posts as $post)
                                <li class="w3-padding-16">
                                    <img src="{{ asset('img/' . $post->img) }}" alt="Image"
                                         class="w3-left w3-margin-right" style="width:50px">
                                    <span class="w3-large"><a
                                            href="/posts/{{ $post->id }}">{{ $post->title }}</a>  </span>
                                    <br>
                                    <span>Written on:{{ $post->created_at }}</span>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <hr>

                    <!-- Advertising -->
                    <div class="w3-white w3-margin">
                        <div class="w3-container w3-padding w3-black">
                            <h4>Reklama</h4>
                        </div>
                        <div class="w3-container w3-white">
                            <div class="w3-container w3-display-container w3-light-grey w3-section"
                                 style="height:200px">
                                <span class="w3-display-middle">Your AD Here</span>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <!-- Tags -->
                    <div class="w3-white w3-margin">
                        <div class="w3-container w3-padding w3-black">
                            <h4>Tags</h4>
                        </div>
                        <div class="w3-container w3-white">
                            <p>
                                <span class="w3-tag w3-black w3-margin-bottom">Leasing</span> <span
                                    class="w3-tag w3-light-grey w3-small w3-margin-bottom">Tashkent</span> <span
                                    class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
                                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Cars</span> <span
                                    class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sedan</span> <span
                                    class="w3-tag w3-light-grey w3-small w3-margin-bottom">Hummer</span>
                                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Tractor</span> <span
                                    class="w3-tag w3-light-grey w3-small w3-margin-bottom">Jeep</span> <span
                                    class="w3-tag w3-light-grey w3-small w3-margin-bottom">Lambargine</span>
                                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Combine</span> <span
                                    class="w3-tag w3-light-grey w3-small w3-margin-bottom">Hetchback</span> <span
                                    class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ferrari</span>
                                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Trucks</span> <span
                                    class="w3-tag w3-light-grey w3-small w3-margin-bottom">Cabraliet</span>
                            </p>
                        </div>
                    </div>
                    <hr>

                    <!-- Inspiration -->
                    <div class="w3-white w3-margin">
                        <div class="w3-container w3-padding w3-black">
                            <h4>Our Skills</h4>
                        </div>
                        <div class="w3-row-padding w3-white">
                            <div class="w3-col s6">
                                <p><img src="../img/IMG_20210615_143523.jpg" alt="" style="width:100%"></p>
                                <p><img src="../img/photo_2021-09-23_12-08-41.jpg" alt="" style="width:100%"></p>
                            </div>
                            <div class="w3-col s6">
                                <p><img src="../img/IMG_20210615_121926.jpg" alt="Men in Hats" style="width:100%"
                                        class="w3-grayscale"></p>
                                <p><img src="../img/IMG_20210615_142844.jpg" alt="Jeans" style="width:100%"></p>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="w3-white w3-margin">
                        <div class="w3-container w3-padding w3-black">
                            <h4>Follow Me</h4>
                        </div>
                        <div class="w3-container w3-xlarge w3-padding">
                            <i class="fa fa-facebook-official w3-hover-opacity"></i>
                            <i class="fa fa-instagram w3-hover-opacity"></i>
                            <i class="fa fa-snapchat w3-hover-opacity"></i>
                            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                            <i class="fa fa-twitter w3-hover-opacity"></i>
                            <i class="fa fa-linkedin w3-hover-opacity"></i>
                        </div>
                    </div>
                    <hr>

                    <!-- Subscribe -->
                    <div class="w3-white w3-margin">
                        <div class="w3-container w3-padding w3-black">
                            <h4>Subscribe</h4>
                        </div>
                        <div class="w3-container w3-white">
                            <p>Enter your e-mail below and get notified on the latest blog posts.</p>
                            <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"
                                      style="width:100%"></p>
                            <p>
                                <button type="button"
                                        onclick="document.getElementById('subscribe').style.display='block'"
                                        class="w3-button w3-block w3-red">Subscribe
                                </button>
                            </p>
                        </div>
                    </div>

                    <!-- END About/Intro Menu -->
                </div>

                <!-- END GRID -->
            </div>

            <!-- END w3-content -->
        </div>

        <!-- Subscribe Modal -->
        <div id="subscribe" class="w3-modal w3-animate-opacity">
            <div class="w3-modal-content" style="padding:32px">
                <div class="w3-container w3-white">
                    <i onclick="document.getElementById('subscribe').style.display='none'"
                       class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
                    <h2 class="w3-wide">SUBSCRIBE</h2>
                    <p>Join my mailing list to receive updates on the latest blog posts and other things.</p>
                    <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
                    <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom"
                            onclick="document.getElementById('subscribe').style.display='none'">Subscribe
                    </button>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="w3-container w3-dark-grey" style="padding:32px">
            <a href="#" class="w3-button w3-black w3-padding-large w3-margin-bottom"><i
                    class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
            <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
        </footer>

        <script>
            // Toggle between hiding and showing blog replies/comments
            document.getElementById("myBtn").click();

            function myFunction(id) {
                var x = document.getElementById(id);
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }

            function likeFunction(x) {
                x.style.fontWeight = "bold";
                x.innerHTML = "✓ Liked";
            }
        </script>

@endsection
