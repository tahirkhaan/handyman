<?php
$sql ="SELECT * FROM view_handworkerwithcats where user_id = ".$hw_id;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) 
    {
        while($row = mysqli_fetch_assoc($result)) 
        {
    ?>

<div class="subprofile">
<div class="container">

	<div class="row"><div class="col-md-12">
	<h3 style="font-weight: 900;
    font-size: 26px;color: cadetblue;padding-left: 15px;padding-top: 10px;
    padding-bottom: 10px;">Handworker Photo</h3>
</div></div>
	<div class="container">
    <div class="row">
    <div class="col-sm-3 col-xs-6">
		<img src="dal/uploads/<?php echo $row['user_image']; ?>" style="max-width: 100%; height: auto;">
	</div>
	<div class="col-sm-9 col-xs-12">
	<p style="font-family: 'Titillium Web', sans-serif;font-size: 40px;
    font-weight: 900; "><?php echo $row['user_name']; ?></p>

	<p style="background: rgba(0, 128, 0, 0.72);
    color: white;
    display: inline-block;
    padding: 10px;"><?php echo $row['category_name']; ?></p>
    <p style="background: rgba(0, 128, 0, 0.72);
    color: white;
    display: inline-block;
    padding: 10px;"><?php echo $row['sub_category_name']; ?></p>
    <p style="margin-top: 15px;"><i class="fa fa-map-marker" aria-hidden="true"></i><b style="padding-left: 5px;">Location</b> <?php echo $row['user_address']; ?></p>


    <p style="    margin-top: 15px;"> <b style=" 
    font-family: 'Pacifico', cursive; floafont-size: 23px;color: darkcyan;"><i style="    background-color: cadetblue;
    color: aliceblue;
    padding: 6px;
    border-radius: 7px;
    margin-right: 9px;" class="fa fa-phone" aria-hidden="true"></i><?php echo $row['user_contact']; ?></b></p>

    <p style="    margin-top: 15px;"> <b style=" 
    font-family: 'Pacifico', cursive; floafont-size: 23px;color: darkcyan;"><i style="    background-color: cadetblue;
    color: aliceblue;
    padding: 6px;
    border-radius: 7px;
    margin-right: 9px;" class="fa fa-envelope-open-o" aria-hidden="true"></i><?php echo $row['user_email']; ?></b></p>


<!-- if handworker is logged in show wellcome -->
<?php if(!isset($login_session)){ ?>
    <a style="    margin-top: 15px;" class="btn btn-primary" href="handworker_my_job.php?hw_id=<?php echo $_GET["hw_id"]; ?>">Handworker my booking</a>
  <?php } ?>
  
   
  

   
    <?php
        }
        } else {
            echo "0 results";
        }
        mysqli_close($conn);

    ?>
</div>
</div>
</div>
</div>
</div>