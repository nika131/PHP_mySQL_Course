<?php
    include "questions.php";

    echo "<pre>";
    print_r($questions);
    echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="lecturer.php" method="post">
        <table id="questionTable">
            <tr>
                <th>Questions</th>
                <th>Answer</th>
                <th>Max Point</th>
            </tr>
            <?php foreach ($questions as $index => $q): ?>
                <tr>
                    <td><?php echo $q["question"]; ?></td>
                    <td>
                        <input type="text" name="answers[<?php echo $index; ?>]">
                    </td>
                    <td><?php echo $q["max_points"]; ?></td>
                </tr>
            <?php endforeach; ?>
                        <tr>
                <td colspan="3">
                    Student: 
                    <input type="text" placeholder="name" name="firstname">
                    <input type="text" placeholder="last name" name="lastname">
                    <button>send</button>
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>