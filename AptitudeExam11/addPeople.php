<?php
if(isset($_POST['save'])){
    require_once('classAddPeople.php');
    $addUser = new registration();
    $addUser->setFullName($_POST['fullname']);
    $addUser->setEmail($_POST['email']);
    $addUser->setMobile($_POST['mobile']);
    $addUser->setDob($_POST['dob']);
    $addUser->setAge($_POST['age']);
    $addUser->setGender($_POST['gender']);
    $addUser->addNewRecord();
    echo "<script>alert('New Record Addeded to the Database➕✅');document.location='index.php'</script>";
}
?>
