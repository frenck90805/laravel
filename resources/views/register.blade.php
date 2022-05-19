<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div align="center">
        <h1>Register data to database</h1>
        <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
            
            @csrf

            <!--跳出訊息-->
            @if ($status = Session::get('status'))
                <script>
                    alert('{{$status}}')
                </script>
            @endif
            <!--跳出訊息-->

            <div style="padding: 10px;">
                <label>Username</label>
                <input type = "text" name="username">
            </div>
            <div style="padding: 10px;">
                <label>Password</label>
                <input type = "text" name="password">
            </div>
            <div style="padding: 10px;">
                <label>Telephone</label>
                <input type = "text" name="telephone">
            </div>
            <div style="padding: 10px;">
                <label>Image</label>
                <input type = "file" name="image">
            </div>
            <div style="padding: 10px;">
                <input type = "submit" value="submit">
            </div>
        </form>
    </div>
</body>
</html>