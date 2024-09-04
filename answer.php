<?php
$selected_answer = $_POST['answer'];
$correct_answer = $_POST['correct_answer'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuizApp - Answer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>You selected: <?php echo htmlspecialchars($selected_answer); ?></h2>
    <h3>
        <?php
        if ($selected_answer === $correct_answer) {
            echo "Correct! The right answer is: " . htmlspecialchars($correct_answer);
        } else {
            echo" (That's Incorrect!) The correct answer was: "  . htmlspecialchars($correct_answer);
        }
        ?>
    </h3>
    <button onclick="window.location.href='index.php'">Go Back to Quiz Start</button>
</body>
</html>
