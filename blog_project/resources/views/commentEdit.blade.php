<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/commnetEdit" method="POST">
        @csrf
        <div>
            <input type="hidden" name="id" value="{{$data->id}}" >
        </div>
        <div>
            <input type="name" name="editComment" value="{{$data->comment_name}}" >
        </div>
       
       
        <div>
            <input type="submit" value="update comment" >
        </div>
    </form>
</body>
</html>





