<?php 

include '../connection.php';


// select_subject

function subjects(){
    global $con;

    $sql = "SELECT * FROM `journal_subjects`";
    $result = mysqli_query($con, $sql);

    while($row = mysqli_fetch_assoc($result)){

        $subjectName = $row['subject_name'];

        echo "
        <h3>$subjectName</h3>
        ";
        
    }

    
}

?>



