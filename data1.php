<?php
$host = "localhost";
$username = "root";
$password ="";
$database ="project";
$conn = mysqli_connect($host,$username,$password,$database);
$result = $conn->query("SELECT * FROM feedback");

?>

<?php while ($data = $result->fetch_assoc()): ?>

    <tr>
        <td><?php echo $data['Name_']; ?></td>
        <td><?php echo $data['DoB']; ?></td>
        <td><?php echo $data['Phone']; ?></td>
        <td><?php echo $data['Feedback']; ?></td>
    </tr>

<?php endwhile; ?>