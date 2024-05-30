<html>
<body>

<h2>isset()</h2>
{{--@isset digunakan untuk mengecek apakah sebuah variable ada dan tidak bernilai null--}}
@isset($name)
    Hello, my name is {{ $name }}
@endisset

<h2>empty()</h2>
{{--@empty digunakan untuk mengecek apakah sebuah variable merupakan array kosong--}}
@empty($hobbies)
    I don't have hobbies.
@endempty
</body>
</html>
