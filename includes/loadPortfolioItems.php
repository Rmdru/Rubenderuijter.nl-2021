<?php
//load config file
require "../../config.php";

//vars
$data = [];
$sortBy = $_GET['sortBy'];

//query with sort by
$query = "SELECT uuid, name, shortDescription, DATE_FORMAT(dateFinished, '%d-%m-%Y') AS dateFinishedFormatted, dateFinished, result, popupUrl FROM `portfolio` WHERE 1=1 AND visibility = 1";
if ($sortBy == "dateDesc") {
    $query .= " ORDER BY dateFinished DESC";
} else if ($sortBy == "dateAsc") {
    $query .= " ORDER BY dateFinished ASC";
} else if ($sortBy == "nameAsc") {
    $query .= " ORDER BY name ASC";
} else if ($sortBy == "nameDesc") {
    $query .= " ORDER BY name DESC";
}

//execute query and encode to json
if ($stmt = $dbh->prepare($query)) {
    if ($stmt->execute()) {
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }

        //encode array to json
        echo json_encode($data);
    }
}