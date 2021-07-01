<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User Update</title>
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
            .bigbox div form div {
                width: 100%;
                display: flex;
                justify-content: space-between;
            }
            .bigbox div form div span {
                margin-right: 25px;
            }
        </style>

    <body>
        <div class="bigbox">
            <div>
                <form action="" method="GET">
                    <div>
                        <span>User username:</span>
                        <input type="text" name="username" value="{{ $user->username }}">
                    </div>
                    <div>
                        <span>User Password:</span>
                        <input type="text" name="password" value="{{ $user->password }}">
                    </div>
                    <div>
                        <span>User Email:</span>
                        <input type="text" name="email" value="{{ $user->email }}">
                    </div>
                    <div>
                        <span>User Type:</span>
                        <input type="text" name="type" value="{{ $user->type }}">
                    </div>
                    <div>
                        <input type="submit" name="updateUser">
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>
