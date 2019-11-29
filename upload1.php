<!DOCTYPE html>
<head>
 <meta charset="UTF-8">
 <title>Files upload form</title>
</head>
<body>
 <form action="upload_2.php" method="post" enctype="multipart/form-data">
 <h2>Upload files</h2>
   <label for="fileselect">Filename</label>
   <input type="file" name="photo" id="fileselect">
   <input type="submit" name="submit" value="upload">
   <p><strong>Note:</strong>Only .jpg .ipeg .gif .png formats allowed to a max size of 5 MB.

</form>


  



</body>



</html>