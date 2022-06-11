<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Clint Registration Page</h1>

    <form action="/addClint" method="POST">
        @csrf
        <label>Enter Your Name:</label><br>
        <input type="text"  name="name" ><br>
        <label for="lname">Enter Your Email:</label><br>
        <input type="text"  name="email"><br>
        <label for="lname">Enter Your Password:</label><br>
        <input type="text"  name="Password"><br>
        <input type="submit" name="submit" value="submit">
      </form>

</body>
</html>