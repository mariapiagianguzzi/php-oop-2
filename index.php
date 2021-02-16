<!-- Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.
Il database e la tabella non devono essere realmente creati. -->


<?php 
    include __DIR__ . '/classes/user.php';
    include __DIR__ . '/classes/person.php';
    
    $users = [
        new Person("Tom", "Hiddleston", 40),
        new Person("Chris", "Evans", 39),
        new Person("Angela", "Gallo", 25),
        new Person ("Raffaele", "Baldassarre", 32),
        new Person ("Mariapia", "Gianguzzi", 31),
        new Person ("Antonio","Quattrocchi", 35)
    ];

    foreach ($users as $user) {
        var_dump($user->name, $user->lastName, $user->age);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>


    
</body>
</html>