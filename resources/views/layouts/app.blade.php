<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    
    <title>@yield('title') | Landing Page</title>

    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" href="" type="image/x-icon">

    @stack('before-style')

        @include('includes.style')

    @stack('after-style')

</head>
<body>

    @include('includes.header')

        @yield('content')
        
    @include('includes.footer')

    @stack('before-script')

        @include('includes.script')
    
    @stack('after-script')

    
</body>
</html>