<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tester</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
    />
    <style>
        h1 {
            text-align: center;
            margin: 1rem;
        }
    </style>
</head>
<body>
<h1> List of items </h1>

<table class="table table-striped" >
    <thead>
    <tr>
        <th scope="col">#id</th>
        <th scope="col">size</th>
        <th scope="col">quantity</th>
        <th scope="col">delete</th>

    </tr>
    </thead>

    <tbody id="tableBody">

    </tbody>
</table>
<script src="renderRecords.js"></script>
</body>
</html>