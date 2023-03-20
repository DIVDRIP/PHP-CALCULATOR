<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('links.php'); ?>
    <style>
        <?php include('style.css'); ?>
    </style>
</head>
<body>
    <div class="main-div">
        <h1>List of Candidates for Web Developer Jobs</h1>

        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>DEGREE</th>
                            <th>MOBILE</th>
                            <th>E-mail</th>
                            <th>REFERRED BY</th>
                            <th>POST</th>
                            <th colspan = "2">OPERATION</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        include 'connection.php';

                        $selectquery = "SELECT * FROM `registration form`";

                        $query = mysqli_query($conn, $selectquery);

                        $nums = mysqli_num_rows($query);

                        while($res = mysqli_fetch_array($query)){
                        
                        ?>
                                <tr>
                                    <td><?php echo $res['Id']; ?></td>
                                    <td><?php echo $res['Name']; ?></td>
                                    <td><?php echo $res['Degree']; ?></td>
                                    <td><?php echo $res['Mobile']; ?></td>
                                    <td><span class="email-style"><?php echo $res['E-mail']; ?></span></td>
                                    <td><?php echo $res['Referred By']; ?></td>
                                    <td><?php echo $res['Post']; ?></td>
                                    <td><a href="update.php?id=<?php echo $res['Id'];?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Update"><i class= "fa fa-edit"><i/></a></td>
 
                                    <td><a href="delete.php?id=<?php echo $res['Id'];?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class= "fa fa-trash"><i/></a></td>
                                    
                                </tr>
                        <?php
                        }
                        ?>

                        

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
</html>