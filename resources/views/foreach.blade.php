<html>
<body>

<h3>Foreach Looping</h3>
My Hobbies:
<ul>
    @foreach($hobbies as $hobby)
        <li> {{$hobby}} </li>
    @endforeach
</ul>
</body>
</html>
