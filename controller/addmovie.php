<?php

session_start();

include_once 'connectdb.php';

$title = $_POST['title'];
$realisator = $_POST['realisator'];
$category = $_POST['category'];
$time = $_POST['time'];
$price = $_POST['price'];
$url = $_POST['lien'];
$new = $_POST['new'];
$fileTmpPath = $_FILES['file']['tmp_name'];
$fileName = $_FILES['file']['name'];
$fileSize = $_FILES['file']['size'];
$fileType = $_FILES['file']['type'];
$fileNameCmps = explode(".", $fileName);
$fileExtension = strtolower(end($fileNameCmps));
$newFileName = md5(time() . $fileName . '.' . $fileExtension);

$destination = $_SERVER['DOCUMENT_ROOT'] . '/tp2_films/pochettes/' . $newFileName;

@move_uploaded_file($fileTmpPath, $destination);

$stmt = $conn->prepare("INSERT INTO films values(0,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssidssi", $title, $realisator, $category, $time, $price, $newFileName, $url, $new);

$stmt->execute();

header('location: ../admin/index.php#success');

$stmt->close();
