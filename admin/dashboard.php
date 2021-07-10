<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="index_admin.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="../font/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoM Admin Pannel..</title>
    <link rel="icon" href="../img/images/moma.png">
</head>


<header class="header">
  
    <?php include "header.php"; ?>

</header>

<body>

    <div class="container">
        <!-- this is first div part where quick link is available -->
        <div class="first_div">
            <ul class="ul_list" id="myDIV">
                <a href="dashboard.php">
                    <li class="li_list active"><i class="fas fa-tachometer-alt"></i> Dashboard</li>
                </a>
                <a href="../admin/html/frontliner.php">
                    <li class="li_list"><i class="fas fa-user-md"></i> Doctors</li>
                </a>
                <a href="html/diesease/diesease.php">
                    <li class="li_list "><i class="fas fa-allergies"></i> Diesease</li>
                </a>
                <a href="../admin/html/medicines/medicine.php">
                    <li class="li_list"><i class="fas fa-pills"></i> Medicine</li>
                </a>
                <a href="../html/diesease/diesease.html">
                    <li class="li_list"><i class="fas fa-clinic-medical"></i> Hospital</li>
                </a>
                <a href="../html/diesease/diesease.html">
                    <li class="li_list"><i class="fab fa-accessible-icon"></i> Patients</li>
                </a>
                <a href="html/post/post.php">
                    <li class="li_list"><i class="fas fa-blog"></i> Post</li>
                </a>
                <a href="../html/diesease/diesease.html">
                    <li class="li_list"><i class="far fa-address-book"></i> Contact</li>
                </a>
                <a href="../html/diesease/diesease.html"></a>
                <li class="li_list"><i class="fas fa-cog"></i> Settings</li></a>


            </ul>
        </div>


        <div class="second_div">
            <div class="dasboard_container">


                <a href="../admin/html/frontliner.php">
                    <div class="dashboard_div divi">
                        <i id="icon_div" class="fas fa-user-md" height="50px" width="50px"></i>

                        <div class="div_holder">
                            <div class="point">580</div>

                            <h2 class="name_div">Frontliner</h2>
                        </div>

                    </div>
                </a>


                <a href="../admin/html/diesease/diesease.php">
                    <div class="dashboard_div divi">
                        <i id="icon_div" class="fas fa-allergies"></i></i>
                        <div class="div_holder">
                            <div class="point">1280</div>

                            <h2 class="name_div">Diesease</h2>
                        </div>

                    </div>
                </a>

                <a href="../admin/html/medicines/medicine.php">
                    <div class="dashboard_div divi">
                        <i id="icon_div" class="fas fa-pills"></i>
                        <div class="div_holder">
                            <div class="point">5920</div>

                            <h2 class="name_div">Medicines</h2>
                        </div>

                    </div>
                </a>


                <div class="dashboard_div divi">
                    <i id="icon_div" class="fas fa-clinic-medical"></i>
                    <div class="div_holder">
                        <div class="point">80</div>

                        <h2 class="name_div">Hospitals</h2>
                    </div>

                </div>


                <div class="dashboard_div divi">
                    <i id="icon_div" class="fab fa-accessible-icon"></i>
                    <div class="div_holder">
                        <div class="point">5180</div>

                        <h2 class="name_div">Patients</h2>
                    </div>

                </div>


                <div class="dashboard_div divi">
                    <i id="icon_div" class="fas fa-blog"></i>
                    <div class="div_holder">
                        <div class="point">480</div>

                        <h2 class="name_div">Posts</h2>
                    </div>

                </div>


                <div class="dashboard_div divi">
                    <i id="icon_div" class="far fa-address-book"></i>
                    <div class="div_holder">
                        <div class="point">320</div>

                        <h2 class="name_div">Contacts</h2>
                    </div>

                </div>



            </div>
        </div>
    </div>
</body>
<script>
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