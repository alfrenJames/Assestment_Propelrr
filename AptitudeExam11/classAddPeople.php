<?php
require_once('lib/database.php');
class registration{
    //define properties
    private $id;
    private $fullname;
    private $email;
    private $mobile;
    private $dob;
    private $age;
    private $gender;
    protected $dbCon;
    //constructor 

    public function __construct($id=0, $fullname="", $email="",$mobile="",$dob="",$age="",$gender="")
    {
        $this-> id = $id;
        $this-> fullname = $fullname;
        $this-> email = $email;
        $this-> mobile = $mobile;
        $this-> dob = $dob;
        $this-> dob = $age;
        $this-> dob = $gender;

        $this->dbCon = new PDO(
            DB_TYPE.
            ":host=".DB_HOST.
            ";dbname=".DB_NAME,
            DB_USER,DB_PWD,[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
        );
    }
 
    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setFullName($fullname){
        $this->fullname = $fullname;
    }
    public function getFullName(){
        return $this->fullname;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setMobile($mobile){
        $this->mobile = $mobile;
    }
    public function getMobile(){
        return $this->mobile;
    }
    public function setDob($dob){
        $this->dob = $dob;
    }
    public function getDob(){
        return $this->dob;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function getAge(){
        return $this->age;
    }
    public function setGender($gender){
        $this->gender = $gender;
    }
    public function getGender(){
        return $this->gender;
    }

    public function addNewRecord(){
        try {
            $sqlStament = $this->dbCon->prepare("INSERT INTO people(fullname,email,mobile,dob,age,gender) VALUES(?,?,?,?,?,?)");
            $sqlStament->execute([$this->fullname,$this->email,$this->mobile,$this->dob,$this->age,$this->gender]);
            // echo "<script>
            // alert('New Record Addeded to the Database➕✅');
            // document.location='index.php';
            // </script>";
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
  
}
?>
