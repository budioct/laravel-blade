<html>
<body>

<h3>While Looping</h3>
<ul>
    @while($i < 10)
        <li> The current value is {{ $i }} </li>
        @php
            //raw bisa memasukan code php di sini
            $i++
        @endphp
    @endwhile
</ul>
</body>
</html>
