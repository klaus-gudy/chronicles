<?php

$conn = mysqli_connect("localhost", "root", "", "devs");

if(!$conn){

    echo "no connection";
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $patient_name = $_POST["patient"];
    $symptom_1 = isset($_POST["symp1"]);
    $symptom_2 = isset($_POST["symp2"]);
    $symptom_3 = isset($_POST["symp3"]);
    $symptom_4 = isset($_POST["symp4"]);

    $query = "INSERT INTO symptoms (patient_name, symp_1, symp_2, symp_3, symp_4) VALUES('$patient_name', '$symptom_1', '$symptom_2', '$symptom_3', '$symptom_4')";

    $insertdata = mysqli_query($conn , $query);

    if(!$insertdata){
        echo "inserting data into the base failed";
    }else{
        echo "data accepted successfully";
    }

}

?>