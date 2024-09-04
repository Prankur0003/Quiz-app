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
    <div class="result-container">
        <h2>Your Answer:</h2>
        <p class="answer"><?php echo htmlspecialchars($selected_answer); ?></p>
        
        <h3>
            <?php
            if ($selected_answer === $correct_answer) {
                echo "Correct! The right answer is: <span class='correct-answer'>" . htmlspecialchars($correct_answer) . "</span>";
            } else {
                echo "That's Incorrect! The correct answer was: <span class='correct-answer'>" . htmlspecialchars($correct_answer) . "</span>";
            }
            ?>
        </h3>
        
        <button onclick="window.location.href='index.php'">Go Back to Quiz Start</button>
    </div>
</body>
</html>
