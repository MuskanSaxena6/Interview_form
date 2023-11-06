 <?php 

// print_r($_POST);

if (isset($_POST['fname'])  && isset($_POST['pnumber']) && isset($_POST['mail']) && isset($_POST['position']) ) {
    include 'db_conn.php';

    // function validate($data){
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    // }

    $fname = $_POST['fname'];
    // $midname = $_POST['midname'];
    // $lname = $_POST['lname'];
    $pnumber = $_POST['pnumber'];
    $mail = $_POST['mail'];
    $position = $_POST['position'];
    print_r ($pnumber);
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // if (empty($position) || empty($mail) || empty($pnumber) || empty($fname)) {
    //     header("Location: index.html");
    // }else {
        $sql = "INSERT INTO Candidates(candidate_name,mobile_no,email,position) VALUES('$fname', '$pnumber','$mail','$position')";

        $res = mysqli_query($conn,$sql);

        if ($res) {
            echo "Your message was sent successfully!";
        }
        else { 
            echo "Your message could not be sent!"  . mysqli_error($conn);
        }
    // }


}else {
    header("Location: index.html");
}

mysqli_close($conn);
?>