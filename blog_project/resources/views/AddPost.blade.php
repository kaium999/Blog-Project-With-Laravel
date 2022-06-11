<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This is Add Post Page</h1>

    <form action="/Addpostdata" method="POST">
        @csrf
        <label>Add Your Post Title:</label><br>
        <input type="text"  name="postTitle" ><br>
        <label for="lname">Add Your Post Description:</label><br>
        <input type="text"  name="PostDescription"><br>
        <label for="lname">Add Your Post Details:</label><br>
        <input type="text"  name="PostDetails"><br>
        
        <input type="submit" name="submit" value="submit">
      </form>

      <h2>{{session('logid')}}</h2>




</body>
</html>