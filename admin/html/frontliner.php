<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../index_admin.css">
    <link rel="stylesheet" href="frontliner.css">
    <link rel="stylesheet" href="../../font/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoM Admin Pannel..</title>
    <link rel="icon" href="../img/images/moma.png">
</head>


<header class="header">
    <div class="logo">
        <img class="img_logo" src="../../img/moma.jpg">
        <div class="logo_title">
            <h2 class="logo_name">Mind Of Medical</h2>
            <p class="logo_room">Admin Room</p>
        </div>

    </div>


    <div class="nav">
        <ul class="ul_nav">
            <li class="ul_nav_li"><i class="far fa-bell"></i></li>
            <li class="ul_nav_li"><i class="far fa-comments"></i></li>


        </ul>

        <div class="admin">
            <img class="admin_img" src="../../img/ran.jpg">
            <p class="admin_name">Admin</p>
        </div>
    </div>


</header>

<body>

    <div class="container">
        <!-- this is first div part where quick link is available -->
        <div class="first_div">
            <ul class="ul_list" id="myDIV">
                <a href="../../admin/index.html">
                    <li class="li_list"><i class="fas fa-tachometer-alt"></i> Dashboard</li>
                </a>
                <a href="frontliner.php">
                    <li class="li_list active"><i class="fas fa-user-md"></i> Doctors</li>
                </a>
                <a href="diesease/diesease.php">
                    <li class="li_list"><i class="fas fa-allergies"></i> Diesease</li>
                </a>
                <a href="medicines/medicine.php">
                    <li class="li_list"><i class="fas fa-pills"></i> Medicine</li>
                </a>
                <a href="../html/diesease/diesease.html">
                    <li class="li_list"><i class="fas fa-clinic-medical"></i> Hospital</li>
                </a>
                <a href="../html/diesease/diesease.html">
                    <li class="li_list"><i class="fab fa-accessible-icon"></i> Patients</li>
                </a>
                <a href="post/post.php">
                    <li class="li_list"><i class="fas fa-blog"></i> Post</li>
                </a>
                <a href="../html/diesease/diesease.html">
                    <li class="li_list"><i class="far fa-address-book"></i> Contact</li>
                </a>
                <a href="../html/diesease/diesease.html"></a>
                <li class="li_list"><i class="fas fa-cog"></i> Settings</li></a>


            </ul>
        </div>



        <!-- this is second div where actual dashboard is available -->
        <div class="second_div">



            <div class="add_doctor">
                <h2 class="dashboard_name">Frontliner</h2>
                <a href="add_frontliner.php">
                    <div class="add_post_btn"><i class="fas fa-plus"></i> Add Doctors</div>
                </a>
            </div>

            <div class="dasboard_container">


                <?php
                include "connection.php";
                $sql = "SELECT * FROM doctors ORDER BY id DESC";
                $query = mysqli_query($con, $sql) or die("Query Failed");
                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)) {
                ?>
                        <div class="dashboard_div divi">
                            <div class="img_edit_delete_div">
                                <img class="doc_img" src="upload/<?php echo $row['photo']; ?>">
                                <div id="edit_delete">
                                    <a href="edit_frontliner.php?id=<?php echo $row['id']; ?>">
                                        <li class="delete"><i class="fas fa-pencil-alt"></i> </li>
                                    </a>
                                    <a href="delete_frontliner.php?id=<?php echo $row['id']; ?>">
                                        <li class="delete"> <i class="far fa-trash-alt"></i> </li>
                                    </a>
                                </div>
                            </div>

                            <h2 class="doc_name"><?php echo $row['name']; ?></h2>
                            <p class="doc_field"><?php echo $row['specialist']; ?></p>
                            <p class="doc_address"><i class="fas fa-map-marker-alt"></i> <?php echo $row['address']; ?></p>
                        </div>

                <?php }
                } else {
                    echo "no data found";
                }
                ?>








            </div>

        </div>
    </div>
</body>

<script>
    // this jabascript is for edit delete on doctor details

    function myFun() {
        var edit_delete = document.getElementById("edit_delete");

        if (edit_delete) {
            var edit_delete = document.getElementById("edit_delete").style.display = "block";
        }
    }




    // Add active class to the current button (highlight it)
    var header = document.getElementById("myDIV");
    var btns = header.getElementsByClassName("li_list");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>

</html>