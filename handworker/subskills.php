<?php

    include "conn.php";

$sql ="SELECT * FROM `handworker_skills` where user_id = ".$hw_id;
    
    $result = mysqli_query($conn, $sql);
   
    ?>
<div class="subskills">
    	<?php

         if (mysqli_num_rows($result) > 0) 
    {
        while($row = mysqli_fetch_assoc($result)) 
        {
            
        ?>

        <div class="col-md-4" style="padding-left: 25px;">
    		<h4 style="color: currentColor;"><?php echo $row['skills']; ?></h4>
    		<p><?php echo $row['detail']; ?></p>
    	</div>
    	
             <?php
        }
        } else {
            echo "0 results";
        }
        mysqli_close($conn);

    ?>
    	</div>
        </div>