<html>
<head><meta charset ="utf-8"></head>
<body>
    <form>
        <input type="text" name="keyword" >
        <input type="submit" value ="ค้นหา">
</form>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE ?");
if(!empty($_GET))
    $value = '%'.$_GET["keyword"].'%';

$stmt->bindParam(1,$value);
$stmt->execute();
?>
<?php
while ($row = $stmt->fetch()) {
    ?>
    ชื่อสมาชิก:<?=$row ["name"]?><br>
    ที่อยู่:<?=$row ["address"]?><br>
    email:<?=$row ["email"]?><br>
    <img src='member_photo/<?=$row["username"]?>.jpg'>
    <hr><br>
    <?php } ?>

</body>
</html>
