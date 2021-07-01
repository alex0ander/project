<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Users List</title>
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
                    @foreach ($users as $user)
                        <span>
                            {{ $user->type }} Username: <b><a href="/user/{{ $user->id }}/info">{{ $user->username }}</a></b>
                            ----
                            <a href="/user/{{ $user->id }}/update">Düzenle</a>
                            ----
                            <a href="/user/{{ $user->id }}/delete">Sil</a>
                        </span>
                        <br>
                    @endforeach
                    <a href="user/create">Ekle</a>
                </div>
            </div>

        </body>
    </html>
