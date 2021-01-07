<?php
include '../includes/common.php';
if($_COOKIE['Autive'] == "")exit("<script language='javascript'>window.location.href='./login.php';</script>");
$admin = admin($_COOKIE['Autive']);
?>
<!DOCTYPE html>
<html lang="zh">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="AIcTeam,为团队而生！">
  <meta name="author" content="LingXI">
  <title>AicTeam后台管理</title>
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="">
  <!--  Social tags      -->
  <link rel="icon" id="icon" type="image/png" href="https://autive.cn/favicon.ico" />
  <meta name="keywords" content="AicTeam,Autive,LingXI">
  <meta name="description" content="AIcTeam,为团队而生！">
  <!-- Icons -->
  <link rel="stylesheet" href="vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="css/argon.min-1.2.0.css" type="text/css">
  <style>
  .product-buyer-name {

max-width: 110px;

overflow: hidden;

text-overflow: ellipsis;

white-space: nowrap;

}


  </style>
</head>

<body>