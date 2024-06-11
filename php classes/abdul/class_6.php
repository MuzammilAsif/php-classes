<?php
// if ($_REQUEST) {
//     foreach ($_REQUEST as $key => $value) {
//         echo $key . ': ' . $value;
//         echo "<br/>";
//     }
// }

if($_SERVER["REQUEST_METHOD"] == "POST"){
   if(isset($_FILES["fileupload"]["name"]) && $_FILES["fileupload"]["error"] == 0){
      $targetDir = "upload/";
      $targetFile = $targetDir. basename($_FILES["fileupload"]["name"]);
      if (file_exists($targetFile)) {
         echo "sorry file already exists";
      } else{
         if (move_uploaded_file($_FILES["fileupload"]["tmp_name"],$targetFile)) {
         echo "the file named " . $_FILES["fileupload"]["name"] . "uploaded succesfully";
      } else{
         echo "sorry, there was an error uploading your file";
         }
      }
   } else{
      "error: " . $_FILES["fileupload"]["error"];
   }
}
?>