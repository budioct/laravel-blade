<html>

<body>

<h2>Form Directive</h2>

<form action="">
    <input type="checkbox" @checked($user['premium']) value="Premium"/> <br/>
    <input type="text" value="{{$user['name']}}" @readonly(!$user['admin'])/> <br/>
</form>

</body>

</html>
