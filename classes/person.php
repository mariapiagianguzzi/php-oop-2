<?php 
    include_once __DIR__ . '/person.php';

    class User extends Person 
    {
        public $username;
        public $email;
        public $password;
        public function __construct( string $name, string $lastName, int $age){

            parent:: __construct($name, $lastName, $age);

            
            
    
        }
    }


    $alessandro = new User("Alessandro", "Internicola", 33);
    $alessandro->username = "aleinter";
    $alessandro->email = "alessandro@gmail.com";
    $alessandro->password = "password";
    
?>
    
