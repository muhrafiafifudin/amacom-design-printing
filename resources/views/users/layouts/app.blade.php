<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> @yield('title') </title>
    <!-- Standard Favicon -->
    <link href="favicon.ico" rel="shortcut icon">
    <!-- Base Google Font for Web-app -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <!-- Google Fonts for Banners only -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">

    <!-- Style -->
    @include('users.includes.style')
    <!-- Style /- -->
</head>

<body>

<!-- app -->
<div id="app">
    <!-- Header -->
    @include('users.includes.header')
    <!-- Header /- -->

    <!-- Content -->
    @yield('content')
    <!-- Content /- -->

    <!-- Footer -->
    @include('users.includes.footer')
    <!-- Footer /- -->
</div>

<!-- NoScript -->
<noscript>
    <div class="app-issue">
        <div class="vertical-center">
            <div class="text-center">
                <h1>JavaScript is disabled in your browser.</h1>
                <span>Please enable JavaScript in your browser or upgrade to a JavaScript-capable browser to register for Groover.</span>
            </div>
        </div>
    </div>
    <style>
    #app {
        display: none;
    }
    </style>
</noscript>

<!-- Script -->
@include('users.includes.script')
<!-- Script /- -->

</body>
</html>
