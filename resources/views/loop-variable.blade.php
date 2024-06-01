<html>
<body>

<h3>Loop Variable</h3>
<ul>
    @foreach($hobbies as $hobby)
        iteration: ({{ $loop->iteration }}) {{ $hobby }}<br>
    @endforeach
    <br>
    @foreach($hobbies as $hobby)
        index: ({{ $loop->index }}) {{ $hobby }}<br>
    @endforeach
    <br>
    @foreach($hobbies as $hobby)
        remaining: ({{ $loop->remaining }})- {{ $hobby }}<br>
    @endforeach
    <br>
    @foreach($hobbies as $hobby)
        count: ({{ $loop->count }}) {{ $hobby }}<br>
    @endforeach
    <br>
    @foreach($hobbies as $hobby)
        first: ({{ $loop->first }}) {{ $hobby }}<br>
    @endforeach
    <br>
    @foreach($hobbies as $hobby)
        last: ({{ $loop->last }}) {{ $hobby }}<br>
    @endforeach
    <br>
    @foreach($hobbies as $hobby)
        even: ({{ $loop->even }}) {{ $hobby }}<br>
    @endforeach
    <br>
    @foreach($hobbies as $hobby)
        odd: ({{ $loop->odd }}) {{ $hobby }}<br>
    @endforeach
    <br>
    @foreach($hobbies as $hobby)
        depth: ({{ $loop->depth }}) {{ $hobby }}<br>
    @endforeach
    <br>@foreach($hobbies as $hobby)
        parent: ({{ $loop->parent }}) {{ $hobby }}<br>
    @endforeach
</ul>
</body>
</html>
