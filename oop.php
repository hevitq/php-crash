<!-- PHP -->
<?php
  // Create a class called Person, to present a person object
  class Person {
    // Good practice
    // 1. Create private properties
    // 2. Create a public function to reach into

    /**
     * Properties { Attributes : Value}
     * 
     * Access Modifier
     * public: access from anywhere outside of the class. (Not good practice)
     * private: only access in this class. (Good practice)
     * protected: only access in this class and any extended classes
     */
    public $age;

    // Uncaught Error: Cannot access private property Person
    // private $age;
    
    private $name;
    private $email;

    // Use static to don't need instantiate the object to access
    public static $ageLimit = 40;

    // Create private static
    private static $ageMax = 120;

    /** 
     * Constructor
     * 
     * is a method that automatically runs when the object is created.
     * We can pass something into it.
     * We can set something there so for instance.
     * 
     * @method __construct
     * @param String $name - person name
     * @param String $email - person email
     */
    public function __construct($name, $email)
    {
      $this->name = $name;
      $this->email = $email;

      // Echo out class created, when create an instance
      echo __CLASS__ . ' created.<br>';
    }

    /**
     * Destructor
     */
    public function __destruct()
    {
      // Echo out class created, when create an instance
      echo __CLASS__ . ' destroyed.<br>';
    }

    /*
      Methods, just functions inside class

      Couple methods getters and setters
      `this` reference something from within the class,
      so can access properties as well as other function.
    */

    // Setter Name
    public function setName($name){
      $this->name = $name;
    }

    // Getter Name
    public function getName(){
      return $this->name;
    }

    // Setter Email
    public function setEmail($email){
      $this->email = $email;
    }

    // Getter Email
    public function getEmail(){
      return $this->email;
    }

    /**
     * Static method
     * 
     * we dont use $this->
     * we use self::
     */
    public static function getAgeMax(){
      return self::$ageMax;
    }
  }

  // Create an instance of Person object without construct
  // $person1 = new Person;

  // Create an instance of Person object with construct
  // $person1 = new Person('John Doe', 'jdoe@gmail.com');

  // Directly access to the public properties in the Person class
  // and set that to the new value
  // NOTE: -> is hyphen and greater than. (Same as JS persion1.name). Short call arrow
  // $person1->age = 30;

  // Echo out person1 name
  // echo $person1->age . '<br>';

  // Set a name to person1 object
  // $person1->setName('John Doe');

  // Get a name from person1 object
  // echo $person1->getName() . '<br>';

  // Get an email from person1 object
  // echo $person1->getEmail() . '<br>';
  

  /**
   * Customer extends from Person class
   * 
   * Taking params in the Person class
   * Geting created and destroyed
   */
  class Customer extends Person {
    private $balance;

    // Create a constructor to pass balance
    public function __construct($name, $email, $balance)
    {
      // Invoke parent constructor
      parent::__construct($name, $email, $balance);

      $this->balance = $balance;

      // Echo out
      echo 'A new ' . __CLASS__ . ' has been created.<br>';
    }

    // Setter Balance
    public function setBalance($balance){
      $this->balance = $balance;
    }

    // Getter Balance
    public function getBalance(){
      return $this->balance;
    }
  }

  // Create an instance of customers
  $customer1 = new Customer('Hieu Phong', 'hieuphong@gmailcom', 300);

  echo $customer1->getBalance() . '<br>';


  # Static props and method
  // Access to the public static property
  echo Person::$ageLimit . '<br>';

  // Access to the private static property
  echo Person::getAgeMax() . '<br>';
?>


<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP | OOP</title>
</head>
<body>
  
</body>
</html>