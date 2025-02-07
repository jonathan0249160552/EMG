<!DOCTYPE html>
<html>
<head>
  <title>Ghana Emergency Contacts</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php require 'nav.php'; ?>
  <h1>Ghana Emergency Contacts</h1>
  <table>
    <thead>
      <tr>
        <th>Region</th>
        <th>Police</th>
        <th>Ambulance</th>
        <th>Fire Service</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Greater Accra</td>
        <td>191</td>
        <td>193</td>
        <td>192</td>
      </tr>
      <tr>
        <td>Ashanti</td>
        <td>191</td>
        <td>193</td>
        <td>192</td>
      </tr>
      <tr>
        <td>Central</td>
        <td>191</td>
        <td>193</td>
        <td>192</td>
      </tr>
      <!-- Add more rows for other regions with their respective emergency contacts -->
    </tbody>
  </table>
</body>
</html>
