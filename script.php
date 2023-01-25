<?php
    require_once("db/connection.php");
    $student_id=$_POST['student_id'];
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $faculty=$_POST['faculty'];
    $phone_number=$_POST['phone_number'];
    $gender=$_POST['gender'];
    $status="Active";
   

    if($gender=="female"){
        $salutation="Ms";
    }else{
        $salutation="Mr";
    }
    
try{
    $sql=$conn->prepare("INSERT INTO user(student_id, name, surname, email, faculty, phone_number, gender)
                        values(?,?,?,?,?,?,?)");

                        
    $details=array($student_id,$name,$surname,$email,$faculty,$phone_number,$gender);
    if($sql->execute($details)){

        print(" STUDENT INFORMATION SYSTEM <br>");
        print("<br>");
        print("STUDENT ID   : $student_id      <br>");
        print("NAME         : $name            <br>");
        print("SURNAME      : $surname         <br>");
        print("EMAIL        : $email           <br>");
        print("FACULTY      : $faculty         <br>");
        print("PHONE NUMBER : $phone_number    <br>");
        print("GENDER       : $gender          <br>");

        print("<br>");
        print(" $salutation $surname's details are saved succesfully in the database..!! <br>");
    

    }
}catch(PDOException $m){
    print(" $salutation $name's account couldn't be created because of ".$m->getMessage());
}
?>