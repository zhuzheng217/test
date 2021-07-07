<?php 

echo  '<pre>';
print_r($_FILES);

move_uploaded_file($_FILES['myfile']['tmp_name'],'D:/php/linux1.io/upload/1.jpg');


 ?>