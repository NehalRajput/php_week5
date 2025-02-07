
// Question 1

echo "What is 2 + 2? ";
$userAnswer1 = trim(fgets(STDIN)); 
if ($userAnswer1 == "4") {
    echo "Correct!\n";
} else {
    echo "Incorrect. The answer is 4.\n";
}



// Question 2
echo "What is the capital of France? ";
$userAnswer2 = trim(fgets(STDIN)); // Get user input for question 2
if (strtolower($userAnswer2) == "paris") {
    echo "Correct!\n";
} else {
    echo "Incorrect. The answer is Paris.\n";
}

// Question 3
echo "What is 5 + 3? ";
$userAnswer3 = trim(fgets(STDIN)); // Get user input for question 3
if ($userAnswer3 == "8") {
    echo "Correct!\n";
} else {
    echo "Incorrect. The answer is 8.\n";
}

// Question 4
echo "What color is the sky on a clear day? ";
$userAnswer4 = trim(fgets(STDIN)); // Get user input for question 4
if (strtolower($userAnswer4) == "blue") {
    echo "Correct!\n";
} else {
    echo "Incorrect. The answer is Blue.\n";
}

// Question 5
echo "What programming language is known for its readability? ";
$userAnswer5 = trim(fgets(STDIN)); // Get user input for question 5
if (strtolower($userAnswer5) == "python") {
    echo "Correct!\n";
} else {
    echo "Incorrect. The answer is Python.\n";
}
?