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
            @include("home.blog")
        </div>
        <div class="col-lg-1 col-0"></div>
        <div class="col-lg-3 col-12 mt-5 ps-lg-4">
            <div class="row">
                @include("home.trending")
                @include("home.recent")
                @include("home.tags")
            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset("js/app.js") }}"></script>
    
</body>

</html>