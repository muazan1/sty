<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>

        <form action="{{ route('create.joiner') }}" method="POST">
            @csrf
            <input type="text" name="name">
            <br>
            <input type="email" name="email">
            <br>
            <input type="text" name="phone">
            <br>
            <button>Create Joiner</button>
        </form>
    </div>
</body>

</html>
