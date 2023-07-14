<?php
require_once("config.php");

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest')
{
    if (isset($_POST['email'])) {
        $fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
        $lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);
        $mobile_no = mysqli_real_escape_string($mysqli, $_POST['mobile_no']);
        $gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
        $country = mysqli_real_escape_string($mysqli, $_POST['country']);
        $state = mysqli_real_escape_string($mysqli, $_POST['state']);
        $city = mysqli_real_escape_string($mysqli, $_POST['city']);
        $img = mysqli_real_escape_string($mysqli, $_POST['img']);
        $name = $fname." ".$lname;
        $file_name = '';
        if(isset($_FILES['img'])){
            $file_name = $_FILES['img']['name'];
            $file_size = $_FILES['img']['size'];
            echo $file_tmp = $_FILES['img']['tmp_name'];
            $file_type = $_FILES['img']['type'];
            //  $file_ext=strtolower(end(explode('.',$_FILES['img']['name'])));
            
            // $extensions= array("jpeg","jpg","png");
            // if(in_array($file_ext,$extensions)=== false){
            //     $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            //  }
             
             if($file_size > 2097152) {
                $errors[]='File size must be excately 2 MB';
             }
             
             if(empty($errors)==true) {
                 move_uploaded_file($file_tmp,"./assets/images/".$file_name);
                //echo "Success";
            }
        }
        if (empty($name) || empty($mobile_no) || empty($email)|| empty($gender)|| empty($country)|| empty($state)|| empty($city)) {
            if (empty($name)) {
                echo "Name field is empty";
            }
            
            if (empty($mobile_no)) {
                echo "Mobile_no field is empty.";
            }
            
            if (empty($email)) {
                echo "Email field is empty.";
            }
            if (empty($country)) {
                echo "Country field is empty.";
            }
           exit;
        }else { 
            // If all the fields are filled (not empty) 
            // Insert data into database
            $created_at = date('Y-m-d-H:i:s');
            $result = mysqli_query($mysqli, "INSERT INTO users (`name`, `email`,`mobile_no`, `gender`, `country`, `state`, `city`, `img`, `created_at`) VALUES ('$name', '$email', '$mobile_no', '$gender', '$country', '$state', '$city', '$file_name','$created_at')");
            print_r($$result);
            // Display success message
            echo "<p><font color='green'>Data added successfully!</p>";
            echo "<a href='index.php'>View Result</a>";
        }

        echo 'form submited'; 
     }
     if($_GET['name'] == 'country'){
         echo getcontry();
         exit;
     }
     if($_GET['name']=='state'){
         echo getstate();
         exit;
     }
     if($_GET['name']=='city'){
     
         echo getcity();
         exit;
     }
     if($_GET['name']==''){
     
         echo 'Somthing went wrong';
          exit;
     }
       
}else{
   
    echo "<center><h2>404 Not Found</h2><center>";
    exit;
}


function getcontry()
{
    $countrydata=array('1' => 'India','2' => 'US'); 
    $html = '<option value="">Select Country</option>';
        foreach ($countrydata as $key => $a) {

            // if ($id == $a['state']) {
              $html .= '<option value="' . $key . '">' . $a . '</option>';
            //}

        }
   return $html;
}
function getstate()
{
    global $mysqli;
    $sql = "SELECT * FROM users";
    $result = $mysqli->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "<br>";
      }
    } else {
      echo "0 results";
    }

    $statedata=array('1' => 'Maharastra','2' => 'Gujrath'); 
    $html = '<option value="">Select State</option>';
        foreach ($statedata as $key => $a) {

            // if ($id == $a['state']) {
              $html .= '<option value="' . $key . '">' . $a . '</option>';
            //}

        }
   return $html;
}
function getcity()
{
    $citydata=array('1' => 'Nashik','2' => 'Pune'); 
    $html = '<option value="">Select City</option>';
        foreach ($citydata as $key => $a) {

            // if ($id == $a['state']) {
              $html .= '<option value="' . $key . '">' . $a . '</option>';
            //}

        }
   return $html;
}
    
?>