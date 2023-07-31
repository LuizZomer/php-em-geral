<?php 
    class Contact {
        public $name;
        public $email;
        public $phone;

        public function getName(){
            return $this->name;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getPhone(){
            return $this->phone; 
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setPhone($phone){
            $this->phone = $phone;
        }
    }

    $luiz = new Contact;
    $luiz->name = "Luiz";
    
?>