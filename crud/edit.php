<?php
include_once("config.php");

$id= $_GET['id'];

$sql ="SELECT * FROM users WHERE id=:id";

$prep = $connect->prepare($sql);

$prep->bindParam(':id', $id);

$data = $prep->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <for action="" method=POST>
     <input type="hidden" name="id" value="<? echo $data['id'] ?>"><br>
     <input type="hidden" name="name" value="<? echo $data['name'] ?>"><br>
     <input type="hidden" name="userame" value="<? echo $data['username'] ?>"><br>
     <input type="hidden" name="email" value="<? echo $data['email'] ?>"><br>
     <button type="submit" name="update">update</button>
</form>
</body>
</html>