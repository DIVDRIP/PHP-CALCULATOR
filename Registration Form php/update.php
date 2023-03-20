

<!doctype html>
<html lang="en">
  <head>
    <title>Registration Form</title>
    <?php include 'links.php'; ?>
    <style>
      <?php include 'style.css'; ?>
    </style>
  </head>
  <body>
    <div class="hero">
        <img src="https://drive.google.com/uc?export=download&id=1m7eBA1TRmNkRJYRVm5zyc2RBmtuKshYL" alt="">
        <div class="section-main">
            <h2>Welcome</h2>
            <p>please fill all the details <br> carefully. This form can <br>change your life.</p>
            <a href="display.php"><input class="btn btn-primary" type="submit" value="Check Form" name="Check Form"></a>
        </div>
        <div class="section-form">
            <section class="form">
                <h2>Apply for Web Developer Post</h2>
                <form action="" method="POST">

                <?php
                  include 'connection.php';
              

                  $ida = $_GET['id'];

                  $showquery = "SELECT * FROM `registration form` WHERE `id`='$ida'";

                  $showdata = mysqli_query($conn,$showquery);
                  $nums = mysqli_num_rows($showdata);

                  $arrdata = mysqli_fetch_array($showdata);
                  // $fet = mysqli_fetch_array($showdata);


                  if(isset($_POST['submit'])){

                    $idupdate = $_GET['id'];
                    $name = $_POST['user'];
                    $degree = $_POST['degree'];
                    $mobile = $_POST['mobile'];
                    $email = $_POST['email'];
                    $reference = $_POST['reference'];
                    $post = $_POST['post'];

                    // $insertquery = "INSERT into `registration form`(`Name`, `Degree`, `Mobile`, `E-mail`, `Referred By`, `Post`) VALUES ('$name','$degree','$mobile','$email','$reference','$post')";

                    $query = "UPDATE `registration form` SET `Id`='$idupdate',`Name`='$name',`Degree`='$degree',`Mobile`='$mobile',`E-mail`='$email',`Referred By`='$reference',`Post`='$post' WHERE `id` = '$idupdate'";

                    $res = mysqli_query($conn,$query);

                    if($res){
                      ?>
                      <script>
                        alert ("Data inserted successfully");
                      </script>
                      <?php
                    }
                    else{
                      ?>
                      <script>
                        alert ("Data not inserted");
                      </script>
                      <?php
                    }
                  }


                  ?>
                  
                  <input type="text" placeholder="enter your name" name="user" required value="<?php echo $arrdata['Name']; ?>"><span>*</span>
                  <input type="text" placeholder="enter your qualification" name="degree" value="<?php echo $arrdata['Degree']; ?>"><br>
                  <input type="text" placeholder="mobile number" name="mobile" required value="<?php echo $arrdata['Mobile']; ?>"><span>*</span>
                  <input type="text" placeholder="email id" name="email" value="<?php echo $arrdata['E-mail']; ?>"><span>*</span><br>
                  <input type="text" placeholder="Any references" name="reference" value="<?php echo $arrdata['Referred By']; ?>">
                  <input type="text" placeholder="Web Developer" name="post" value = "Web Developer" readonly><br>
                  <input class="btn btn-primary" type="submit" value="Update" name="submit">
                  
                </form>          

            </section>
        </div>
    </div>
  </body>
</html>

