<?php
$studentGrades = [
    ['Math' => 85, 'English' => 92, 'Science' => 78],
    ['Math' => 90, 'English' => 88, 'Science' => 95],
    ['Math' => 75, 'English' => 80, 'Science' => 85]
];

function calculateAverageGrades($grades) {
    foreach ($grades as $student => $subjects) {
        $total = array_sum($subjects);
        $count = count($subjects);
        $average = $total / $count;
        
        echo "Student " . ($student + 1) . " - Average Grade: " . number_format($average, 2) . "\n";
    }
}


calculateAverageGrades($studentGrades);
?>
