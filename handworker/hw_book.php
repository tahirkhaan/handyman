
<?php  include "navigation.php";
    if(!isset($login_session)) {

    header("location:customer_login.php");
    
}

 ?>

	</div>
</div>
<?php include "logo.php"; ?>
         </div>

</div>
<div class="container-fluid back">

<h2 style="font-weight: 900;
    padding-bottom: 30px;
    padding-left: 18px;
     color: cadetblue; text-align: center;">Handworker Jobs</h2>
    <div class="container">

    <form class="form-inline" method="POST" action="insert_book_hw.php" style="text-align: center;">
<!-- `customer_id`, `handworker_id`, `subcategory_id`, `workplace`, `date`, `time`, -->
   <div class="form-group" style="padding-bottom: 20px;">
       
        <br>
        <label>customer_id</label>
         <input style="margin: 10px 10px;" type="text" name="customer_id" value="<?php echo  $customer_id; ?>">
        <br>
        
      <label>subcategory_id</label>
        <select id="sub_cat" name="subcategory_id">
            <option value="">Select subcategory</option>
            <?php
                //include "config.php";
                $sql = "SELECT sc.*, c.category_name FROM `sub_category` sc INNER JOIN category c on c.category_id = sc.category_id";
                $result = mysqli_query($db, $sql);
                if (mysqli_num_rows($result)>0) 
                {
                    while ($row = mysqli_fetch_object($result)) 
                    {
                        echo "<option value='".$row->sub_category_id."'>" .$row->category_name.' - '.$row->sub_category_name. "</option>";
                    }
                }
            ?>
        </select>
        <br>

        <label style="padding-right: 20px;">handworker</label>
        <select id="handworker_id" name="handworker_id" style="margin: 10px 10px;" >
            <option value="0" style="color: black;">Select handworker</option>
        </select>
        <br>
        <label>workplace</label>
        <input style="margin: 10px 10px;" type="text" name="workplace">
        <br>
        <label>date</label>
        <input style="margin: 10px 10px;" type="text" name="date">
        <br>
        <label>time</label>
        <input style="margin: 10px 10px;" type="text" name="time">
        <br>
        <input type="submit" value="book"></input>
       
</div>
    </form>


</div>

<div class="container-fluid" style="background-color: #323232;">
<?php include "footer.php"; ?>
	<script type="text/javascript" src="js/gethwofcategories.js"></script>
</div>

</body>
</html>