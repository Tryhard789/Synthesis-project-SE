<?php
$host = "localhost";
$username = "root";
$password ="";
$database ="project";
$conn = mysqli_connect($host,$username,$password,$database);
$result = $conn->query("SELECT * FROM infors");

?>

<?php while ($data = $result->fetch_assoc()): ?>

    <tr>
        <td><?php echo $data['Name_']; ?></td>
        <td><?php echo $data['Email']; ?></td>
        <td><?php echo $data['Phone']; ?></td>
        <td><?php echo $data['Bank_AccountNumber']; ?></td>
        <td><?php echo $data['Expired']; ?></td>
        <td><?php echo $data['Bill']; ?></td>
    </tr>

<?php endwhile; ?>