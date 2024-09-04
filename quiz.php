<?php
// Retrieve the question and options from the POST data
$question = $_POST['question'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];
$option4 = $_POST['option4'];
$correct_answer = $option1; // Assuming Option 1 is the correct answer
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuizApp - Quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="answer.php" method="POST">
        <h2><?php echo htmlspecialchars($question); ?></h2>
        
        <label>
            <input type="radio" name="answer" value="<?php echo htmlspecialchars($option1); ?>" required>
            <?php echo htmlspecialchars($option1); ?>
        </label><br>
        
        <label>
            <input type="radio" name="answer" value="<?php echo htmlspecialchars($option2); ?>" required>
            <?php echo htmlspecialchars($option2); ?>
        </label><br>
        
        <label>
            <input type="radio" name="answer" value="<?php echo htmlspecialchars($option3); ?>" required>
            <?php echo htmlspecialchars($option3); ?>
        </label><br>
        
        <label>
            <input type="radio" name="answer" value="<?php echo htmlspecialchars($option4); ?>" required>
            <?php echo htmlspecialchars($option4); ?>
        </label><br>
        
        <input type="hidden" name="correct_answer" value="<?php echo htmlspecialchars($correct_answer); ?>"> <!-- Hidden field for correct answer -->
        
        <button type="submit"><b>Submit Answer</b></button>
    </form>
</body>
</html>
