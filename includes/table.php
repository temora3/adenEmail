<?php
    require_once "includes/dbConnect.php"; 

    $spot_users = "SELECT * FROM `userDetails` LEFT JOIN `roles` USING (`roleId`) ORDER BY userDetails.userName ASC";
    $users_res = $conn->query($spot_users);

    $sn=1;
    if ($users_res->num_rows > 0) {
    // output data of each row
    while($user_row = $users_res->fetch_assoc()) {
    ?>
    <tr class="active-row">
                <td><?php print $sn; $sn++; ?>.</td>
                <td><?php print $user_row["userName"]; ?></td>
                <td><?php print $user_row["userEmail"]; ?></td>
                <td><?php print $user_row["role"]; ?></td>
                <td><?php print $user_row["regDate"]; ?></td>
                <td>[ <a href="edit.php?userID=<?php print $user_row["userID"]; ?>" style="text-decoration: none; color:crimson" title="Edit <?php print $user_row["userName"]; ?>">Edit</a> ] [ <a href="database/del.php?userID=<?php print $user_row["userID"]; ?>" OnClick="return confirm('Are you sure you want to delete <?php print $user_row["userName"]; ?> from the database?')" style="text-decoration: none; color:crimson" title="Delete <?php print $user_row["userName"]; ?>">Del</a> ]</td>
            </tr>
    <?php
        }
    } else {
    echo "0 results";
    }
?>