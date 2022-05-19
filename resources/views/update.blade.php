<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center">
    <h1>Update</h1>
    <form action="{{route('update',$data->user_id)}}" method="POST" enctype="multipart/form-data"> <!--路由到要修改的user_id-->
        @csrf

        @if($message = Session::get('message'))
            <script>
                alert('{{$message}}')
            </script>
        @endif
        <div>
            <div style="padding: 10px;">
                <label>Username</label>
                <input type = "text" name="username" value="{{$data->username}}"> <!--顯示舊資料-->
            </div>
            <div style="padding: 10px;">
                <label>Telephone</label>
                <input type = "text" name="telephone" value="{{$data->telephone}}"> <!--顯示舊資料-->
            </div>
            <div style="padding: 10px;">
                <label>Image</label>
                <img src="/file/{{$data->image}}" width="150" height="150">
            </div>
            <div style="padding: 10px;">
                <label>Change Image</label>
                <input type = "file" name="image" >
            </div>
            <div style="padding: 10px;">
                <input type = "submit" value="submit">
            </div>
        </div>
    </form>
</body>
</html>