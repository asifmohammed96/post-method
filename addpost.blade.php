<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Post</title>
</head>
<body>
    <form action="{{route('save.post')}}" method="post">
     Post : <br>  <input type="text" name="name" value=""><br>
     Description : <br><textarea name="description"></textarea>
     <input type="Submit" value="Submit">
    </form>
</body>
</html>
