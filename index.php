<!-- Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.
Il database e la tabella non devono essere realmente creati. -->


<?php 
    include __DIR__ . '/classes/user.php';
    include __DIR__ . '/classes/person.php';
    
    $persons = [
        new Person("Tom", "Hiddleston", 40),
        new Person("Chris", "Evans", 39),
        new Person("Angela", "Gallo", 25),
        new Person ("Raffaele", "Baldassarre", 32),
        new Person ("Mariapia", "Gianguzzi", 31),
        new Person ("Antonio","Quattrocchi", 35)
    ];
    $users = [
        new User("Tom", "Hiddleston", 40, "tomhiddles", "tomhiddles@gmail.com"),
        new User("Chris", "Evans", 39, "Chris1820", "evans@gmail.com"),
        new User("Angela", "Gallo", 25, "angelayu", "angela@gmail.com"),
        new User("Raffaele", "Baldassarre", 32, "ginomitico", "raffa@gmail.com"),
        new User("Mariapia", "Gianguzzi", 31, "pia_oizys", "pia@gmail.com"),
        new User("Antonio","Quattrocchi", 35, "antoq", "antonio@gmail.com"),
        new User("Alessandro", "Internicola", 33, "interniculo", "aleint@gmail.com")
    ];
    

   /*  foreach ($users as $user) {
        var_dump($user->name, $user->lastName, $user->age, $user->username);
    } 
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>document</title>
</head>
<body>
    <div class=" container d-flex">
        <?php foreach($users as $value){?>
            <div class="card col-3">
                <p class="author"><?php echo $value->name?></p>
                <p class="genre"><?php echo $value->lastName?></p>
                <p class="year"><?php echo $value->age?></p>
                <p class="year"><?php echo $value->username?></p>
                <p class="year"><?php echo $value->email?></p>
            </div>
        <?php } ?>        
    </div>


    
</body>
</html>