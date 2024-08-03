<?php

function calculateExperience($startDate)
{
    $currentDate = new DateTime();
    $startDate = new DateTime($startDate);
    $interval = $currentDate->diff($startDate);

    return $interval->m + ($interval->y * 12) . " months";
}

function endorseSkill($skill, $level)
{
    $funnyEndorsements = [
        "Master of Pixels",
        "CSS Wizardry",
        "Tailwind Guru",
        "JavaScript Magician",
        "PHP Sorcerer",
        "Frontend Alchemist",
        "UI/UX Virtuoso",
        "Code Whisperer",
        "Pixel Perfectionist",
        "Responsive Design Specialist"
    ];

    $randomEndorsement = $funnyEndorsements[array_rand($funnyEndorsements)];

    return "$skill: $randomEndorsement in $level skills";
}


$name = "Vaibhav Vishwkarma";
$title = "Frontend Web Developer";
$startDate = "2024-07-01";  
$skills = ["HTML", "CSS", "Tailwind CSS", "JavaScript", "PHP"];

$experience = calculateExperience($startDate);

echo "LinkedIn Profile of $name<br>";
echo "Title: $title<br>";
echo "Experience: $experience<br>";
echo "Skills and Endorsements:<br>";

foreach ($skills as $skill) {
    echo endorseSkill($skill, "amazing") . "<br>";
}

?>
