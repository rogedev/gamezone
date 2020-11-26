<?php
class Order{
		private $firstName;
		private $lastName;
        private $email;
        private $address;
        private $payment;

		function __construct(){}

		public function getFirstName(){
		return $this->firstName;
		}

		public function setFirstName($firstName){
			$this->firstName = $firstName;
        }
        public function getLastName(){
            return $this->lastName;
            }

            public function setLastName($lastName){
                $this->lastName = $lastName;
            }

		public function getEmail(){
			return $this->email;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function getAddress(){
		return $this->address;
		}

		public function setAddress($address){
			$this->address = $address;
		}
		public function getPayment(){
			return $this->payment;
		}

		public function setId($payment){
			$this->payment = $payment;
		}
	}
?>