<?php 
require_once('config.php');
if(isset($_POST['upload'])){
	//echo "Upload clicked";

	$file_name_all = "";
for($i=0; $i<count($_FILES['certificate']['name']); $i++) 
    {
        $tmpFilePath = $_FILES['certificate']['tmp_name'][$i];    
        if ($tmpFilePath != "")
        {    
           $path = "uploads/"; // create folder 
           $name = $_FILES['certificate']['name'][$i];
           $size = $_FILES['certificate']['size'][$i];

           list($txt, $ext) = explode(".", $name);
           $file= time().substr(str_replace(" ", "_", $txt), 0);
           $info = pathinfo($file);
           $filename = $file.".".$ext;
           if(move_uploaded_file($_FILES['certificate']['tmp_name'][$i], $path.$filename)) 
           { 
              $file_name_all.= $filename."*";

              header("location:myuploads.php");
           }

       }
       $file = "uploads/" . $filename ;

	$upload_date = date('Ymd').time();        
        $insert_certificate = $conn->prepare("INSERT INTO `certificates`(`certificate`,`upload_date`) VALUES (?,?)");


       $insert_certificate->bind_param("ss",$file,$upload_date );
       if($insert_certificate->execute())
            {
              echo "Inserted";

            }

     }

}

?>