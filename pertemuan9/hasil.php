<?php
class User {
    public $username;
    public $email;

    // Konstruktor untuk menginisialisasi parameter objek saat dibuat
    public function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
    }

    // Method untuk menampilkan informasi user
    public function displayInfo() {
        echo "Username: " . $this->username . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}

// Membuat objek dari kelas User
$user1 = new User("Nabila", "nabila@gmail.com");
$user1->displayInfo();
?>
