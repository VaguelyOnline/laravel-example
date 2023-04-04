<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('calculator.calculate') }}" method="POST">
        <!-- CSRF? see: https://laravel.com/docs/10.x/csrf#preventing-csrf-requests  -->
        <input name="num1" type="number">
        <button>Submit!</button>
    </form>

</body>
</html>