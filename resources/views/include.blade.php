<html>

<body>

{{--header adalah child view yang cakup oleh view include --}}
{{--@include('header')--}}

{{--semua data yang dikirim ke template utama akan dikirim ke template yang kita @include--}}
{{--kita juga bisa menambahnya ketika menggunakan directive @include(template, data)--}}
@include('header', ["description" => "Selamat Data di Website Kami"])
<p>Selamat datang Broo!</p>

</body>
</html>
