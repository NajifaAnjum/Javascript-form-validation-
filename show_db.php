
<div id="main-content">
    <h2>All User</h2>
    <?php
    $db = mysqli_connect("localhost","root","","practise") or die(mysqli_error());
    $fetch_query = "SELECT * FROM user_validation";
    $result = mysqli_query($db,$fetch_query) or die(mysqli_error()); 
    if (mysqli_num_rows($result) > 0) {
       
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
         <th>Email</th>
        <th>Password</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php 
            while ($eachdata =mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $eachdata['Id']; ?></td>
                <td><?php echo $eachdata['Name']; ?></td>
                <td><?php echo $eachdata['Email']; ?></td>
                <td><?php echo $eachdata['Password']; ?></td>
                <td>
                    <a href="edittrainer.php?tid=<?php echo $eachdata['Id']; ?>">Edit</a>
                    <a href="deletetrainer.php?trainer_id=<?php echo $eachdata['Id']; ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } ?>
</div>
</div>
<?php
include 'footer.php';
?>
