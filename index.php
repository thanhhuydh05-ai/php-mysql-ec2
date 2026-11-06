<?php
require_once "db.php";

$sql = "SELECT * FROM sinhvien";
$stmt = $conn->query($sql);
?>

<h1>QUAN LY SINH VIEN</h1>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Ho ten</th>
    <th>Email</th>
</tr>

<?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['hoten']; ?></td>
    <td><?php echo $row['email']; ?></td>
</tr>
<?php } ?>

</table><?php
echo "<h1>WEBSITE PHP THANH CONG</h1>";
echo "<p>Ubuntu Local Server</p>";
echo "<p>PHP Version: " . phpversion() . "</p>";
?>

