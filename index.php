<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuizApp</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="quiz.php" method="POST"> <!-- Use POST method to securely send data -->
        <label for="question"><b>Question</b></label>
        <input type="text" id="question" name="question" placeholder="Write your question" required>
        
        <label for="option1"><b>Option 1</b></label>
        <input type="text" id="option1" name="option1" required>
        
        <label for="option2"><b>Option 2</b></label>
        <input type="text" id="option2" name="option2" required>
        
        <label for="option3"><b>Option 3</b></label>
        <input type="text" id="option3" name="option3" required>
        
        <label for="option4"><b>Option 4</b></label>
        <input type="text" id="option4" name="option4" required>
        
        <button type="submit"><b>Submit</b></button>
    </form>
</body>
</html>
