<?php
include './conn.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Book Readers</title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        caption {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <table>
        <caption>Book Readers</caption>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>NIC</th>
        </tr>

        <?php

        $sql = "SELECT * FROM personal_info";

        $personalResult = Database::search($sql);
        $personalNum = $personalResult->num_rows;

        for ($x = 0; $x < $personalNum; $x++) {
            $personalData = $personalResult->fetch_assoc();
        ?>
            <tr>
                <td><?php echo $personalData['name']; ?></td>
                <td><?php echo $personalData['gender']; ?></td>
                <td><?php echo $personalData['dateofbirth']; ?></td>
                <td><?php echo $personalData['nic']; ?></td>
            </tr>
        <?php
        }
        ?>

    </table>

</body>

</html>