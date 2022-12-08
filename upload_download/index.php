<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    
</body>
</html>
<form method="POST" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="file" class="btn btn-light">
    <input type="submit" value="Upload" class="btn btn-light">
</form>
<br>
<br>
<?php
 
// This will return all files in that folder
$files = scandir("uploads");
 
// If you are using windows, first 2 indexes are "." and "..",
// if you are using Mac, you may need to start the loop from 3,
// because the 3rd index in Mac is ".DS_Store" (auto-generated file by Mac)
for ($a = 2; $a < count($files); $a++)
{
    ?>
    <p>
        <!-- Displaying file name !-->
        <?php echo $files[$a]; ?>
 
        <!-- href should be complete file path !-->
        <!-- download attribute should be the name after it downloads !-->
        <a href="uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>" class="btn btn-primary">
            Download
        </a>
        <a href="delete.php?name=uploads/<?php echo $files[$a];?>" style="color:red;" class="btn btn-warning">delete</a>
    </p>
    <?php
}
?>