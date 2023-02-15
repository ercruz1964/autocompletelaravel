<!DOCTYPE html>
<html>
<head>
    <title>Autocomplete Search using jQuery UI in Laravel 9</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <form action="{{route('employee.store')}}" method="post">
        @csrf
        <input type="text" name = 'name' id='name' placeholder="Name Employee">
        <input type="text" name = 'email' id='email' placeholder="E-mail Employee">
        <input type="submit" value="Enviar">

    </form>
</body>

</html>