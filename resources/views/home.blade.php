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
                        <div class="col-lg-8 col-12">
                            <div class="row h-100 pt-4 align-item-center">
                                <div class="col-12 mx-auto">
                                    <small class="text-muted fs-8">{{$blog['date']}}</small>
                                    <br>
                                    @foreach (explode(",", $blog['tags']) as $tag)
                                        <span class="text primary fw-bolder gs-6 pe-1">{{$tag}}</span>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
    <script src="{{ asset("js/app.js") }}"></script>
</body>

</html>