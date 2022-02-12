<?php
include("./connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Contact Web Form</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            height: 100vh;
            font-size: 16px;
        }
        .main {
            width: 90%;
        }
    </style>
</head>
<body>
    
    <div class="main">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Issue</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = $con->prepare("SELECT * FROM `contactform` ORDER BY `user_id` ASC");
                $query->execute();
                $count = $query->rowCount();
                if($count > 0) {
                    while($fetch = $query->fetch()) {
                ?>
                    <tr>
                        <td><?php echo $fetch["user_name"]; ?>
                        <td><?php echo $fetch["user_email"]; ?>
                        <td><?php echo $fetch["user_issue"]; ?>
                        <td><?php echo $fetch["user_message"]; ?>
                    </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
        <a href="./"> Back to form </a>
    </div>
    
</body>
</html>