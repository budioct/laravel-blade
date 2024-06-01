<html>

<head>
    <title>Nama Aplikasi - @yield('title')</title>
</head>

<body>

@section('header')
    <h1>Default Header</h1>
@show

@section('content')
    <p>Default Content</p>

    {{-- @show akan memangil di child view
    @section("content")
    <p>Ini adalah halaman utama</p>
@endsection
    --}}
@show

</body>

</html>
