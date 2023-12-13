<?php
//исходный массив
$example_persons_array = [
    [
        'fullname' => 'Иванов Иван Иванович',
        'job' => 'tester',
    ],
    [
        'fullname' => 'Степанова Наталья Степановна',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Пащенко Владимир Александрович',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Громов Александр Иванович',
        'job' => 'fullstack-developer',
    ],
    [
        'fullname' => 'Славин Семён Сергеевич',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Цой Владимир Антонович',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Быстрая Юлия Сергеевна',
        'job' => 'PR-manager',
    ],
    [
        'fullname' => 'Шматко Антонина Сергеевна',
        'job' => 'HR-manager',
    ],
    [
        'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Бардо Жаклин Фёдоровна',
        'job' => 'android-developer',
    ],
    [
        'fullname' => 'Шварцнегер Арнольд Густавович',
        'job' => 'babysitter',
    ],
];

//выбираем ФИО из массива случайным образом
$personID = $example_persons_array[random_int(0, count($example_persons_array) - 1)]['fullname'];//это строка

//функция для вывода ФИО в новый массив
function getPartsFromFullname ($personID) {
    
    $arrayPersonFullName = explode(" ", $personID);
    global $fullname;
    $fullname = ['surname' => $arrayPersonFullName[0], 'name' => $arrayPersonFullName[1], 'patronomyc' => $arrayPersonFullName[2]];
    return $fullname;
}

//функция для вывода ФИО одной строкой
function getFullnameFromParts ($surname, $name, $patronomyc) {
    global $person;
    $person = $surname . ' ' . $name . ' ' . $patronomyc;
    return $person;
}

//функция для сокращения ФИО
function getShortName($personID)
{
    $x = getPartsFromFullname($personID);
    global $reduction;
    $reduction = $x['name'] . " " . mb_substr($x['surname'], 0, 1) . ".";
    return $reduction;
}

//Функция для определения пола
function getGenderFromName($fullname) {
    $genderDef = 0;
    $surname = $fullname['surname'];
    $name = $fullname['name'];
    $patronomyc = $fullname['patronomyc'];
    if (mb_substr($surname, -2) == 'ва') {
        $genderDef--;
    }
    if (mb_substr($name, -1) == 'а') {
        $genderDef--;
    }
    if (mb_substr($patronomyc, -3) == 'вна') {
        $genderDef--;
    }
    if (mb_substr($surname, -1) == 'в') {
        $genderDef++;
    }
    if (mb_substr($name, -1) == 'й' || mb_substr($name, -1) == 'н') {
        $genderDef++;
    }
    if (mb_substr($patronomyc, -2) == 'ич') {
        $genderDef++;
    }
    global $genderID;
    $genderID = $genderDef <=> 0;
    return $genderID;
}




