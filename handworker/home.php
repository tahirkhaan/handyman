
   <?php include "navigation.php"; ?>
</div>
</div>

<?php include "logo.php"; ?>
         </div>

</div>

<div class="container-fluid slider" style= "background-position: center;background-size:cover;">
  <div class="container">
     <div class="row" style="padding-bottom: 20px; padding-top: 30px;">
     <div class="col-md-1"></div>

<style type="text/css">
   
.box-skill:hover{
         background-color: #00BCE1;
         }
         .box-skill p:hover{
           color: cadetblue;
         }
         .box-skills-cs {
    width: 60%;
    /* height: auto; */
    margin-bottom: 97px;
}
</style>
          <div class="col-md-5 col-sm-10" style="height: auto; background-color: transparent; border: 2px solid white; border-radius: 50px; padding-bottom: 20px;">
           <div class="logo" style="padding-top: 15px;">
              <center><h1 style="font-size: 36px; font-weight: bolder; color: white;">Handworker at Your Door Step</h1>
              <p style="font-weight: bold; font-style: italic; color: white;">The new way to Hire Handworker </p></center>
           </div>

               <div class="row">
                  <div class="col-md-12">
                    
                      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "handwork";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql ="SELECT * FROM `category` ORDER by category_id ASC LIMIT 3";
$result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

      ?>
                       <center><div class="box-skills-cs" style="padding-top: 5px;">
                     <div class="col-md-12 box-skill" style="border: 1px solid white;border-radius: 10px; padding-top: 15px;">
                      <a href="List_of_Handworkers.php?cat_id=<?php echo $row['category_id'] ?>">
                      <?php
                       switch ($row["category_name"]) {
                        case 'Electrician':
                          echo '<i class="fa fa-lightbulb-o fa-3x" style="color: white;"></i> ';
                          break;
                        case 'Carpanter':
                           echo '<i class="fa fa-car fa-3x" style="color: white;"></i> ';
                          break;
                        case 'Beautician':
                           echo '<i class="fa fa-paint-brush fa-3x" style="color: white;"></i> ';
                          break;                          

                      }
                      ?>
                      <p  style="font-size: 15px; color: white;"><?php echo $row["category_name"]; ?></p></a>
                     </div>
                 
                     </div></center>
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


         <!-- <div class="col-md-6 col-sm-12">
            <img src="img/workers.png" style="width: 100%">
         </div> -->
        </div>


            <div class="row">
            <div class="col-md-1">
               
            </div>
              <div class="col-md-6">
                  <h4 style="color: white; font-weight: bold;">
                  I found a good Handworker on HWDS.com, Now I dont need to work myself.....</h4>
                  <p style="color:white;font-size: 14px; float: center;">Tasadduq Mughal</p>
               </div>
            </div>
      
     </div>
  </div> 

<div class="container-fluid" style="background-color: white;">
   <div class="container" style="padding-bottom: 80px;">
      <div class="row" style="padding-top: 80px; padding-bottom: 60px;">
      <center><p style="font-size: 25px;">WHat We Offer</p></center>
      </div>
      <div class="row">
                         <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "handwork";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql ="SELECT * FROM `category`";
$result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

      ?>
       <div class="cat"> 
         <div class="col-md-4 cata">
         <center> <a href="List_of_Handworkers.php?cat_id=<?php echo $row['category_id'] ?>"><img src="img/2.png "class="img-responsive" width="100" height="100" style="padding-top: 20px;"></a></center>
         <center><p style="font-size: 20px; font-weight: bold;"><?php echo $row["category_name"]; ?></p></center>

      </div>
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
</div>



<div class="container-fluid" style="background-color:black;">
   <div class="container" style="padding-bottom: 30px;">
      <div class="row">
         <div class="col-md-12" style="padding-top: 70px; padding-bottom: 40px;">
            <center><h3 style="color: #ffffff; font-size: 28px;text-align: center;position: relative; font-weight: bold;">OVER THOUSANDS OF HANDWORKERS ARE AVAILABLE TO BE HIRED</h3></center>
         </div>

         <div class="row" style="padding-bottom: 70px;">
         <div class="box">
            <div class="col-md-4">
               <center><img src="img/masjid.jpg" class="img-circle" class="img-responsive" width="220" height="220" style="margin-top: 18px;"></center>
            </div>

            <div class="col-md-4"> 
               <center><img src="img/ayub.jpg" class="img-circle" class="img-responsive" width="220" height="220" style="margin-top: 18px;"></center>
            </div>

            <div class="col-md-4">
               <center><img src="img/chh.jpg" class="img-circle" class="img-responsive" width="220" height="220" style="margin-top: 18px;"></center>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
   <div class="col-md-12 col-sm-12">
      <center><h1 style="color: #ffffff; font-weight: bold; letter-spacing: 25px; width: auto;">ABBOTTABAD</h1></center>
   </div>
   </div>
   </div>
</div>

<style type="text/css">
   .thumbnails{
            width: 100%;
            overflow: hidden;
            }
            img{
            -webkit-transition:all 0.3s ease;
            }
            img:hover{
            transform: scale(1.10);
            }

.cata:hover{
   background-color:cadetblue;
}
</style>

<div class="container-fluid" style="background-color: white;">
<div class="container" style="padding-top: 90px; padding-bottom: 60px;">
  <div class="row">
    <div class="col-md-6">
      <h1 style="font-weight: bolder; color: #17202A; letter-spacing: 10px; font-size: 30px;">Abbottabad City</h1>
      <hr style="border: 1px solid #2980B9;">
      <p style="justify-content: center; font-family: cabin; font-size: 16px; font-weight: 400;">Abbottabad was founded and named after Major James Abbott in January 1853 as the headquarters of Hazara District during the British Raj after the annexation of Punjab. He remained the first Deputy Commissioner of the Hazara district from 1849 until April 1853. Major Abbott is noted for having written a poem titled "Abbottabad", before his return to Britain, in which he wrote of his fondness for the town and his sadness at having to leave it. In the early 20th century, Abbottabad became an important military cantonment and sanatorium, serving as the headquarters of a brigade in the Second Division of the Northern Army Corps.The garrison consisted of four battalions of native infantry, of the Frontier Force (including the 5th Gurkha Rifles) and two native mountain batteries.</p>
    </div>

    <div class="col-md-6">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105627.88753375036!2d73.16589806711947!3d34.175203280593834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38de3111557ac517%3A0x6e59a635b12e952c!2sAbbottabad%2C+Pakistan!5e0!3m2!1sen!2sus!4v1494504890417" width="570" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>


  </div>
</div>
</div>



<div class="container-fluid" style="background-color: #323232; padding-top: 20px;">
<?php include "footer.php"; ?>
 
</div>


</body>
</html>
<script type="text/javascript" src="js/jquery.chocolate.js"></script>
<script type="text/javascript">
  $('.slider').chocolate({
  images    : ['img/fag.jpg', 'img/khan.jpg' , 'img/pasa.jpg' , 'img/cut.jpg'],
  interval : 3000,
  speed : 3000

});
</script>