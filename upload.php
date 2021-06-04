<?php
print_r($_FILES); //this will print out the received name, temp name, type, size, etc.


$size = $_FILES['audio_data']['size']; //the size in bytes
$input = $_FILES['audio_data']['tmp_name']; //temporary name that PHP gave to the uploaded file
$output = $_FILES['audio_data']['name'].".wav"; //letting the client control the filename is a rather bad idea





$arr = explode('_',$_FILES['audio_data']['name'],2);
$username = $arr[1];
// $output = $username.".wav"; //letting the client control the filename is a rather bad idea
$transcriptNo = $arr[0];
// echo $username;
// echo $transcriptNo;
$dir = './audio/' . $transcriptNo .'/'; 
// echo $dir;
if(is_dir($dir)){
    if(file_exists($dir . $output)){
        echo "File already exists";
    }
    else{
        if(move_uploaded_file($input,$dir . $output)){
            echo "Upload successful";
        }
        else{
            echo "Upload unsuccessful";
        } 
    }
     
}
else{
    if(mkdir($dir, 0777, true)){
        if(move_uploaded_file($input,$dir . $output)){
            echo "Upload successful";
        }
        else{
            echo "Upload unsuccessful";
        }
    }
    else{
        echo "Failed to create directory ";    
    }
}


// move the file from temp name to local folder using $output name
// move_uploaded_file($input, $output)
?>