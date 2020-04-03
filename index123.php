

        <?php
       $conn="host=ec2-52-87-58-157.compute-1.amazonaws.com port=5432 dbname=d6ta5n5v2gcpl2 user=vbvfmzkrwcdhub password=8ba1bca82f6b4d577ab221c7b6b3705bccf4ed5e1085307c14c13a7b81c3a5b6";
       $cnn= pg_connect($conn);
        if($cnn){
                echo "ket noi thanh cong";
        } else {
                echo 'ket noi that bai';
        } 
       if(isset($_POST['txtuser'])){
          $usename=$_POST['txtuser'];
       }
       if(isset($_POST['txtpass'])){
          $pass=$_POST['txtpass'];
       }
       $result= pg_query($cnn,"select * from login where _use = '" . $username . "' and _pass = '" . $pass."'");

        if($result){
                echo "thanh cong";
        } else {
                echo 'that bai';
        } 
        ?>
  
