<?php
class User {
    // Atribut (Properties)
    public $username;
    public $email;
    
    // Konstruktor untuk mengatur nilai awal
    public function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
    }
    
    // Metode (Method) untuk menampilkan informasi user
    public function displayInfo() {
        echo "Username: " . $this->username . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}
?>
