<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php include 'functions.php'; ?>

    <h1>Обработка строк</h1>

    <h2>Фамилия, имя, отчество в отдельных строках</h2>
    <?php
    getPartsFromFullname($personID);
    echo $fullname['surname'].'<br/>';
    echo $fullname['name'].'<br/>';
    echo $fullname['patronomyc'];
    ?>

    <h2>Фамилия, имя, отчество в одной строке</h2>
    <?php
    $surname = $fullname['surname'];
    $name = $fullname['name'];
    $patronomyc = $fullname['patronomyc'];
    getFullnameFromParts ($surname, $name, $patronomyc);
    echo $person;
    ?>

    <h2>Имя, фамилия сокращенное</h2>
    <?php
    getShortName($personID);
    echo $reduction;
    ?>

    <h2>Определение пола(1 мужской,-1 женский, 0 неопределен) </h2>
    <?php
    getGenderFromName($fullname);
    echo $genderID;
    ?>

    
</body>

</html>