<?php
    // Assignment variables
    $yourName = "Hunter Lovan";
    $assignmentName = "PHP, HTML, and Javascript Integration Assignment";
    $number1 = 7;
    $number2 = 13;
    $total = $number1 + $number2;
    $techArray = ['PHP', 'HTML', 'Javascript'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $assignmentName; ?></title>
</head>
<body>
    <h1><?php echo $assignmentName; ?></h1>
    <h2><?php echo $yourName; ?></h2>
    <p>Number 1: <?php echo $number1; ?></p>
    <p>Number 2: <?php echo $number2; ?></p>
    <p>Total: <?php echo $total; ?></p>

    <h3>Technologies Array (from PHP to Javascript):</h3>
    <ul id="tech-list"></ul>

    <script>
        const techArray = <?php echo json_encode($techArray); ?>;
        const techList = document.getElementById('tech-list');
        techArray.forEach(function(item) {
            const li = document.createElement('li');
            li.textContent = item;
            techList.appendChild(li);
        });
    </script>