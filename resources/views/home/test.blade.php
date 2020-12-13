<!DOCTYPE html>
<html>
<head>
    <title>Laravel Page</title>
</head>
<body>

<h1>Test Laravel</h1>
Id no: {{$id}}
<br>
Name: {{$name}}
<?php
 echo "Id Number : ", $id;
 echo "<br>Name : ", $name;
 ?>

<a href="{{route('home')}}">Ana Sayfa</a>

</body>
</html>
