<html>
<head><meta charset ="utf-8"></head>
<style>
    table,th,td,tr
    {
        border: 1px solid black;"

    }
</style>
<body>
<?php
    $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("SELECT * FROM product");
    $stmt->execute();
?>
<table >
    <tr>
        <th>รหัสสินค้า</th>
        <th>ชื่อสินค้า</th>
        <th>รายละเอียดสินค้า</th>
        <th>ราคา</th>
    </tr>
   <?php while ($row = $stmt->fetch()) 
    { ?>
    <tr>
        <td>
            <?=$row["pid"]?><br>
        </td>
        <td>
        <?=$row["pname"]?><br>
        </td>
        <td>
        <?=$row["pdetail"]?><br>
        </td>
        <td>
        <?=$row["price"]?><br>
        </td>
    </tr>
<?php } ?>
    </table>
</body>
</html>