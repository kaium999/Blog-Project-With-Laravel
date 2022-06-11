<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

li {
  display: inline;
}
</style>
</head>
<body>

<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="/Addpost">AddPost</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="logout">Log Out</a></li>
  <li><a href="postshow">Your PostShow</a></li>
  <li><a href="Allpostshow">PostShow</a></li>
</ul>
<h1>{{session('username')}}</h1>
<h2>{{session('logid')}}</h2>
</body>
</html>


