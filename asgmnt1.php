<?php
//find percentage of 3 numbers
function findPercentage(int $totalMarks, int $a, int $b, int $c)
{
    $marks = ($a + $b + $c);
    $percentage = ($marks / $totalMarks) * 100;
    echo "percentage: $percentage";
};

findPercentage(300, 85, 50, 70);
?>