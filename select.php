 <?php  
 $connect = mysqli_connect("127.0.0.1:3306", "root", "", "booking");  
 $output = array();  
 $query = "SELECT * FROM BookingLeadger";  
 $result = mysqli_query($connect, $query);  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
      echo json_encode($output);  
 }  
 ?>  
