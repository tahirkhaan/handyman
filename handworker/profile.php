<!DOCTYPE html>
<html>
<head>
<?php include "links.php"; ?>
    <title>Handworker at your door step</title>
</head>
<body style="font-family: 'Lato', sans-serif; margin: 0px;">
<div class="row">
<?php include "navigation.php"; ?>
<?php



if(isset($_POST["up"])){
 // include_once "config.php";
  $img = $_FILES['img'];

if(!empty($img))
{
    $img_desc = reArrayFiles($img);
    //print_r($img_desc);
    
    foreach($img_desc as $val)
    {
        $newname = date('YmdHis',time()).mt_rand().'.jpg';
        move_uploaded_file($val['tmp_name'],'./upload_portfolio/'.$newname);
        if( $img_desc !='' ) {
          $insert_s = "INSERT INTO `handworker_job_photos`( `user_id`, `book_id`, `photos`) VALUES ('".$row["user_id"]."','1', '".$newname."')";
          mysqli_query($db,$insert_s);
        }

    }
}


     mysqli_query($db,'UPDATE user SET `user_email`="'.$_POST["user_email"].'" , `user_contact`= "'.$_POST["contact"].'", `user_address`="'.$_POST["address"].'" WHERE `user_id`="'.$row["user_id"].'"');
    /* $query_user = mysql_query('SELECT * FROM handworker_job_photos where user_id = '.$row["user_id"]);
     if(mysql_num_rows($query) > 0){
         mysql_query($db,'UPDATE handworker_job_photos SET photos = '.$img_desc .' where user_id = '.$row["user_id"]);
     }
     else{
          mysql_query($db,"INSERT INTO handworker_job_photos (user_id,photos) values ('".$row["user_id"]."', '".$img_desc."')");
     } */

     $query = mysqli_query($db,'SELECT * FROM handworker_job_photos where user_id = '.$row["user_id"]);
     //$arr_str  = implode(",",$img);
     //$data = json_encode($newname);
     //echo $data;
     //if(mysqli_num_rows($query) > 0){
      //if( $img_desc !='' ) {

         //mysqli_query($db,'UPDATE handworker_job_photos SET photos = '.$data.' where user_id = '.$row["user_id"]);
      //}
        
    // }
    // else{
    //  if( $img_desc !='' ) {
      //    mysqli_query($db,"INSERT INTO handworker_job_photos (user_id,photos) values ('".$row["user_id"]."', '".$data."')");
      //  }
    // }
}




function reArrayFiles($file)
{
    $file_ary = array();
    $file_count = count($file['name']);
    $file_key = array_keys($file);
    
    for($i=0;$i<$file_count;$i++)
    {
        foreach($file_key as $val)
        {
            $file_ary[$i][$val] = $file[$val][$i];
        }
    }
    return $file_ary;
} ?>




    </div>

   <div class="container" style="padding-bottom: 20px;">
      <div class="row">
      <div class="col-md-2">
         
      </div>
      <div class="col-md-8">
         <h1 style="padding-bottom: 48px; font-weight: bold; font-size: 50px;">Edit Profile</h1>
        
         




    <form action="" method="post" multipart="" enctype="multipart/form-data" class="form-inline" style="line-height: 38px;">

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="name" name="user_name" class="form-control" value="<?php echo $row["user_name"]; ?>" id="name" disabled>
  </div>
  <br>
    <div class="form-group">
    <label for="name">Email:</label>
    <input type="name" name="user_email" class="form-control" value="<?php echo $row["user_email"]; ?>" id="name">
  </div>
  <button class="btn info">Edit Info</button>
  <br>
  <?php /*
  <div class="form-group">
    <label for="pwd">Category:</label>
    <!--input type="Category" class="form-control" id="cat"-->
    <select name="cat" class="form-control" id="cat">
      <option value="1" <?=$row['category_id'] == '1' ? ' selected="selected"' : '';?>>Electrician</option>
      <option value="2" <?=$row['category_id'] == '2' ? ' selected="selected"' : '';?>>Carpanter</option>
      <option value="3" <?=$row['category_id'] == '3' ? ' selected="selected"' : '';?>>Beautician</option>
    </select>
  </div>
  <br>


  <div class="form-group">
    <label for="name">Sub-category:</label>
    <input type="Category" class="form-control" id="scat">
  </div>
  <button class="btn info">Edit Info</button>
  <br>
*/ ?>
  <div class="form-group">
    <label for="name">Location:</label>
    <input type="Location" name="address" class="form-control" id="loc" value="<?php echo $row["user_address"]; ?>">
  </div>
  <button class="btn info">Edit Info</button>
  <br>

  <div class="form-group">
    <label for="name">Phone Num:</label>
    <input type="Contact" name="contact" class="form-control" id="Num" value="<?php echo $row["user_contact"]; ?>">
  </div>
  <button class="btn info">Edit Info</button>
  <br>

  <h2 style="font-weight: bold;">Handworker Skills</h2>
  <div class="form-group">
      <label for="skills">Skills:
      </label>
      <?php 
     if(isset($_POST["skills"])) {
       $input = $_POST["skills"];
       $data = preg_split("/[\r\n,]+/", $input, -1, PREG_SPLIT_NO_EMPTY);
       //$data;

         foreach ($data as $datas) {
           
         }

        }    ?>
      <textarea type="text" class="form-control" id="message"
     name="skills" placeholder="Your Message here" style="height: 120px; width: 100%;">
     <?php 
      $user_id = $row['user_id'];
     $select_skill= mysqli_query($db,"SELECT * FROM handworker_skills WHERE user_id='$user_id'");
            
            while ($row_skills = mysqli_fetch_array($select_skill,MYSQLI_ASSOC)) {
              echo $row_skills["skills"].' ,';
            }

     ?>
    </textarea>
   </div><br>

   <div class="row">
    <div class="portfolio">
    <h2 style="font-weight: bold;">ADD PORTFOLIO</h2>
   </div>
   </div>

<input type="file" name="img[]" multiple>
<input type="submit" name="up" class="btn btn-default"><br>

</form>

      </div>
     
      </div>
   </div>
<div class="container-fluid" style="background-color: #323232; ">
<?php include "footer.php"; ?>
    
</div>

</body>
</html

