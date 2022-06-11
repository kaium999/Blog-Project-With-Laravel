<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/edit" method="POST">
        @csrf
        <div>
            <input type="hidden" name="id" value="{{$data->id}}" >
        </div>
        <div>
            <input type="name" name="postTitle" value="{{$data->postTitle}}" >
        </div>
        <div>
        <input type="name" name="PostDescription" value="{{$data->PostDescription}}" >
        </div>
        <div>
            <input type="name" name="PostDetails" value="{{$data->PostDetails}}" >
        </div>
       
        <div>
            <input type="submit" value="update data" >
        </div>
    </form>
</body>
</html>





