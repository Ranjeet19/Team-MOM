<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- fontawesome css link -->
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css" />
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/brands.css" />
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/solid.css" />
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/fontawesome.css" />

    <!-- custom css -->
    <link rel="stylesheet" href="css/doctors-list.css" />

    <title>MOM | Doctors</title>
</head>

<body class='container'>
    <h2 style="text-align: center;" class="alert alert-primary" role="alert">
        Our Featured Doctors
    </h2>
    <div class="all-doctors">

    <?php
        $con=mysqli_connect("localhost","root","","mom");

        $sql ="SELECT * FROM doctors";

        $query= mysqli_query($con, $sql)or die("Querry Failed!!");

        while($row=mysqli_fetch_array($query)){
    ?>

        <div class="each-doctor">
            <div class="img-div">
                <a href="doctor-details.html">
                    <img src="../../admin/html/upload/<?php echo $row['photo']; ?>" alt="" />
                </a>
            </div>
            <div class="about-doctor">
                <a href="doctor-details.html">
                    <h2 style="font-size:26px;"><?php echo $row['name']; ?></h2>
                </a>
                <p style="margin-left:8px;"><?php echo $row['specialist']; ?></p>
                <i class="fas fa-map-marker-alt"></i>
                <em><?php echo $row['address']; ?></em>
                <a href="appointment.html"><p style="font-size:16px;" class="appoint">Appoint for Online Consult</p></a>
            </div>
        </div>

    <?php } ?>

    </div>
</body>

</html>