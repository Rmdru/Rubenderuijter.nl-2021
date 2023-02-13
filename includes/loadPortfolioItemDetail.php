<?php
//load config file
require "../../config.php";

//vars
$data = [];
$uuid = $_GET['uuid'];

//query with sort by
$query = "SELECT uuid, name, status, DATE_FORMAT(dateFinished, '%d-%m-%Y') AS dateFinishedFormatted, suitableForDesktop, suitableForMobile, schoolAssignment, groupAssignment, result, technicsAndSkillsUsed, description, linkType, link, githubLink, popupUrl FROM `portfolio` WHERE 1=1 AND visibility = 1 AND uuid = :uuid";

//execute query and encode to json
if ($stmt = $dbh->prepare($query)) {
    $stmt->bindParam(":uuid", $uuid);
    if ($stmt->execute()) {
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }

        //encode array to json
        echo json_encode($data);
    }
}