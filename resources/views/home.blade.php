<!DOCTYPE html>
<html lang="en">

<head>
    @include("layout.head")
</head>

<body class="bg-light">

    @include("layout.navbar")

    <div class="container ps-5 pe-5">
        <div class="row">
            <div class="col-12 p-2 text-center mt-4 mb-4 border-bottom-black" >
                <h1>Welcome to my Blog</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, id!</p>
            </div>
        </div>
    </div>
    <script src="{{ asset("js/app.js") }}"></script>
</body>

</html>