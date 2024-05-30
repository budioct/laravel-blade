<html>
<body>

<h3>Hobby</h3>
@foreach($hobbies as $data)
    <p>
        @if(count($hobbies) == 1)
            I have one hobby!
            <b>{{ $data }}</b>
        @elseif(count($hobbies) > 1)
            I have multiple hobbies!
            <b>{{ $data }}</b>
        @else
            I don't have any hobbies!
        @endif
    </p>
@endforeach

</body>
</html>
