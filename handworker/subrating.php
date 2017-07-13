  <?php

    include "conn.php";

$sql ="SELECT * FROM `handworker_rating` where user_id = ".$hw_id;
    
    $result = mysqli_query($conn, $sql);
    
   
    ?>

  <div class="subrating">
  
    <h3 style="    padding-left: 20px;
    color: rgba(2, 24, 88, 0.68);
    font-weight: 900;
    padding-bottom: 40px;
    padding-top: 40px;
    font-size: -webkit-xxx-large;">Handworker Rating</h3>
 <?php

         if (mysqli_num_rows($result) > 0) 
    {
        while($row = mysqli_fetch_assoc($result))

        {
            
        ?>
<h3 style="padding-left: 15px;"><?php echo $row['total_rate']; ?><span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span> </h3>

<ul class="list-inline">
    <li><?php echo $row['comments']; ?></li>
</ul>
 

</div>
 <?php
        }
        } else {
            echo "0 results";
        }
        mysqli_close($conn);

    ?>