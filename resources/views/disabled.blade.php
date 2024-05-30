<html>
<body>
{{--@ akan mengabaikan, tidak akan di tampilkan / render--}}
<h1>Hello @{{ $name }} </h1>

{{--@verbatim akan mengabaikan, tidak akan di tampilkan / render--}}
@verbatim
    <p>
        Hello {{ $name }}
        Hello {{ $name }}
        Hello {{ $name }}
        Hello {{ $name }}
    </p>
@endverbatim
</body>
</html>
