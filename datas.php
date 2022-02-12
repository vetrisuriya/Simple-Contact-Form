<?php

include("./connection.php");

if(isset($_REQUEST)) {
    
    $userName = ($_REQUEST["userName"] != "") ? $_REQUEST["userName"] : "";
    $userEmail = ($_REQUEST["userEmail"] != "") ? $_REQUEST["userEmail"] : "";
    $userIssue = ($_REQUEST["userIssue"] != "") ? $_REQUEST["userIssue"] : "";
    $userTxt = ($_REQUEST["userTxt"] != "") ? $_REQUEST["userTxt"] : "";

    $query = $con->prepare("INSERT INTO `contactform`(`user_name`, `user_email`, `user_issue`, `user_message`) VALUES (:userName, :userEmail, :userIssue, :userTxt)");
    $query->execute([
        "userName" => $userName,
        "userEmail" => $userEmail,
        "userIssue" => $userIssue,
        "userTxt" => $userTxt
    ]);

    header("location: ./index.php");
}
?>