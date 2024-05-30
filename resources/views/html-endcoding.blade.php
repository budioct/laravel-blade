<html>
<head>
    <title>HTML Encoding</title>
</head>

<body>

{{-- cara cetak variable mudah kena serangan XSS --}}
{{--{!! $name !!} --}}

{{-- cara cetak variable tidak akan kena serangan XSS --}}
{{-- karna di tangani oleh function htmlspecialchars(data) --}}
{{ $name }}
</body>
</html>
