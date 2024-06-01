{{--
@extends("parent") akan include view parent di dalam view child nyaa
--}}
@extends("parent")

@section("title", "Halaman Utama")

@section("header")
    @parent
    <h1>Deskripsi Header</h1>
@endsection

@section("content")
    {{-- @parent akan memangil di parent view, dengan syarat kita harus menyertakan @section("content") sama di view parent nya
    @section('content')
    <p>Default Content</p>
    @show
    --}}
    @parent
    <p>Ini adalah halaman utama</p>
@endsection
