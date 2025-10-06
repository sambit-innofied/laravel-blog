<!DOCTYPE html>
<html lang="en">

<head>
    @include("layout.head")
</head>

<body class="bg-light">

    @include("layout.navbar")

    <div class="container ps-5 pe-5">
        <div class="row">
            <div class="col-12 p-2 text-center mt-4 mb-4 border-bottom-black">
                <h1>Welcome to my Blog</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, id!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-12">
                @foreach ($blogs as $blog)
                    <div class="row mt-4 mb-4 blog-card border rounded">
                        <div class="col-lg-4 col-12 p-0 m-0">
                            <img class="rounded w-100 h-100" src="{{ $blog['image_url_potrait'] }}" alt="">
                        </div>
                        <div class="col-lg-8 col-12 p-lg-5">
                            <div class="row h-100 pt-4 align-item-center">
                                <div class="col-12 mx-auto">
                                    <small class="text-muted fs-8">{{$blog['date']}}</small>
                                    <br>
                                    @foreach (explode(",", $blog['tags']) as $tag)
                                        <span class="text primary fw-bolder gs-6 pe-1">{{$tag}}</span>

                                        @if ($loop->iteration < count(explode(",", $blog['tags'])))

                                            <span class="text primary fw-bolder gs-6 pe-1">&#x2022;</span>
                                        @endif
                                    @endforeach
                                    <h2 class='fw-lighter fs-2 '>{{$blog['title']}}</h2>
                                    <p class='text-muted'>{{$blog['description']}}</p>
                                    <p>
                                        <img class="rounded-circle" src="{{ $blog['author_image_url'] }}" alt="Author Image"
                                            height=35 width=35>
                                        <span class="ps-1">{{$blog['author']}}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
            <div class="col-lg-1 col-0"></div>
            <div class="col-lg-3 col-12 mt-5 ps-lg-4">
                <div class="row">
                    <div class="col-12 pb-4 g-0 border-bottom-black">
                        <p class="text-muted fs-5"> What's Trending</p>
                        @foreach ($trending as $trend)
                            <div class="card p-0 mt-4  ">
                                <img src="{{ $trend['image_url_landscape'] }}" alt="" class="w-100 h-100 card-img"
                                    style="opacity: 0.5">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">{{$trend['title']}}</h5>
                                    <p class="card-text">{{$trend['date']}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-12 pt-3 pb-4 g-0 border-bottom-black">
                        <p class="text-muted fs-5"> Recently Written</p>
                        @foreach ($trending as $trend)
                            <div class="card p-0 mt-4  ">
                                <img src="{{ $trend['image_url_landscape'] }}" alt="" class="w-100 h-100 card-img"
                                    style="opacity: 0.5">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">{{$trend['title']}}</h5>
                                    <p class="card-text">{{$trend['date']}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset("js/app.js") }}"></script>
</body>

</html>