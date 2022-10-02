<html>
<head><meta charset ="utf-8"></head>
<body>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();
?>
<?php
while ($row = $stmt->fetch()) {
?>
    <a href = "detail.php?username=<?=$row["username"]?>">
    <img src='member_photo/<?=$row["username"]?>.jpg'>
    </a><br>
    <h2><?=$row["name"]?></h2>
    <hr><br>
    <?php } ?>

</body>
</html>
