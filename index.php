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
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
            font-size: 16px;
        }

        form {
            width: 400px;
            height: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            row-gap: 15px;
            padding: 25px;
            background: #efefef;
        }
    </style>
</head>
<body>
    
    <form action="datas.php" method="POST">
        <div class="form-group">
            <input type="text" placeholder="User Name" id="userName" name="userName" required class="form-control">
        </div>
        <div class="form-group">
            <input type="email" placeholder="User Email" id="userEmail" name="userEmail" required class="form-control">
        </div>
        <div class="form-group">
            <select id="userIssue" name="userIssue" required class="form-control">
                <option value="">Select Issue</option>
                <option value="Feedback">Feedback</option>
                <option value="Compliant">Compliant</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <textarea name="userTxt" id="userTxt" cols="30" rows="10" placeholder="(optional message)" class="form-control"></textarea>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary btn-block">Submit Form</button>
        </div>

        <?php
        include("./connection.php");
        
        $q = $con->prepare("SELECT * FROM `contactform`");
        $q->execute();
        $c = $q->rowCount();
        if($c > 0) {
            echo '<a href="./records.php">All Records</a>';
        }

        ?>
    </form>

</body>
</html>