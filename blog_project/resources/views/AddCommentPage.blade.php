<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>You can Submit Your Comment in this page</h1>

    
    <form action="/AddComment" method="POST">
        @csrf
        <div>
            <input type="hidden" name="id" value="{{$data->id}}" >
        </div>
        <label>Add Your Comment:</label><br>
        <input type="text"  name="addComment" ><br>
        <input type="submit" name="submit" value="submit">
      </form>
      
      <a href="{{"ShowComment/".$data->id}}">CommentShow</a>
</html>