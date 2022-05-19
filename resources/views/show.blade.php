<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    <div align="center">
        <h1>Display data from database</h1>
        <!-- search-->
        <div>
            <form action="{{route('search')}}" method="GET">
                <input type="search" name="search" placeholder="search for something">
                <input type="submit" value="search">
            </form>
            <br>
        </div>
        <!-- search-->

        <!-- show-->
        <div>
            <table border="1px">
                <tr>
                    <td>帳號</td>
                    <td>電話</td>
                    <td>圖片</td>
                    <td>刪除</td>
                    <td>修改</td>
                </tr>
                @foreach($data as $datas)<!-- 因為有多筆資料所以這邊要用foreach來拿資料-->
                <tr>
                    <td>{{$datas->username}}</td>
                    <td>{{$datas->telephone}}</td>
                    <td><img src="file/{{$datas->image}}" width="150" heigh="150"></td><!-- 圖片路徑在file底下-->
                    <td><a href="{{route('delete',$datas->user_id)}}">delete</a></td><!--刪除每筆資料的user_id-->
                    <td><a href="{{route('update_show',$datas->user_id)}}">update</a></td><!--修改每筆資料的user_id-->
                </tr>
                @endforeach
            </table>
        </div>
        <!-- show-->
    </div>
</body>
</html>