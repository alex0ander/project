<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User Info</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background: black;
                color: white;
                padding: 0;
                margin: 0;
            }
            .bigbox {
                width: 100%;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>

    <body>
        
        <div class="bigbox">

            <div>
                @foreach ($user as $user)
                <span>
                    User Id: <b>{{ $user->id }}</b>
                </span>
                <br>
                <span>
                    User Username: <b>{{ $user->username }}</b>
                </span>
                <br>
                <span>
                    User Password: <b>{{ $user->password }}</b>
                </span>
                <br>
                <span>
                    User Email: <b>{{ $user->email }}</b>
                </span>
                <br>
                <span>
                    User Type: <b>{{ $user->type }}</b>
                </span>
                <br>
                <span>
                    <a href="/user/{{$user->id}}/update">Düzenle</a>
                </span>
                @endforeach
            </div>

        </div>

    </body>
</html>
