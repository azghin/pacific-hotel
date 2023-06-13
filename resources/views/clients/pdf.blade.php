<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Download</title>
</head>
<body>
    <div>
        <h1>username : {{ $user->username }}</h1>
        <h3>email : {{ $user->email }}</h3>

        <h4>hhahahhahahahhaha</h4>

        <img src="{{ $qrcodeDataUri }}" alt="QR Code">
    </div>
</body>
</html>