<html>
<head><meta charset ="utf-8"></head>
<body>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare("SELECT * FROM member WHERE username =?");
$stmt->bindParam(1,$_GET["username"]);
$stmt->execute();
$row = $stmt->fetch();
?>
<div style="display:flex">
<img src='member_photo/<?=$row["username"]?>.jpg'>
   <?=$row ["name"]?><br>
    ที่อยู่:<?=$row ["address"]?><br>
    email:<?=$row ["email"]?><br>
    
    <br>
</div>

</body>
</html>
