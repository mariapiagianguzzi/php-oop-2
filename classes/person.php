<?php 
    include_once __DIR__ . '/user.php';

    class User extends Person 
    {
        public $username;
        public $email;
        public $password;
        public function __construct( string $name, string $lastName, int $age, string $username, string $email){

            parent:: __construct($name, $lastName, $age);
            $this->username = $username;
            $this->email = $email;

            
            
    
        }
    }

/* 
    $alessandro = new User("Alessandro", "Internicola", 33);
    $alessandro->username = "aleinter";
    $alessandro->email = "alessandro@gmail.com";
    $alessandro->password = "password";
    var_dump($alessandro); */
    
?>
    
