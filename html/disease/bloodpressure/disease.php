<?php

$disease_id = $_GET['id'];
include "connection.php";

$sql = "SELECT * FROM disease where disease_id ={$disease_id}";
$query = mysqli_query($con, $sql) or die("Querry Failed");

while ($rows = mysqli_fetch_array($query)) {


?>

    <html>

    <head>
        <link rel="stylesheet" href="asthma.css">

        <link rel="stylesheet" href="../../../font/css/all.css">
        <link rel="stylesheet" href="mediadisease.css">
        <title>
            <?php echo $rows['disease_name']; ?>
        </title>
    </head>


    <body>

        <section>
            <h2 class="heading-mom">
                Mind of Medical
            </h2>
            <a href="../../../index.php">
                <div class="back">
                    <p class="go-para">Go-Back!</p>
                </div>
            </a>
        </section>





        <div class="box">
            <div class="second">

                <h4> <?php echo $rows['disease_name']; ?>
                    <hr>
                </h4>

                <style>
                    .admin_date {
                        display: flex;
                        justify-content: space-between;
                        font-size: 16px;
                        padding: 0px 10px;
                        font-family: 'itim', cursive;
                        margin: -10px 65px 0px 50px;
                    }
                </style>

                <div class="admin_date">
                    <p class="admin"> <?php echo $rows['author_name']; ?></p>
                    <p class="date"> <?php echo $rows['post_date']; ?></p>
                </div>

                <p class="main-paragraph">
                    <?php echo $rows['description']; ?>
                </p>

                <img class="img-part" src="hbpp.webp">

            </div>



            <!-- symptoms -->
            <div class="container">
                <h2 class="sub-heading">
                    Symptoms.
                </h2>

                <p class="sub-paragraph">
                    <?php echo $rows['symptoms']; ?></p>

            </div>



            <!-- Medicines -->
            <div class="container">
                <div class="medicine-part">


                    <div>
                        <h2 class="sub-heading">

                            Medicines.

                        </h2>
                        <p class="sub-paragraph">
                            <?php echo $rows['medicines']; ?>
                        </p>
                    </div>

                    <img class="medicine-img" src="hygroton-25.jpg">
                </div>


            </div>

            <!-- Diagnosis -->
            <div class="container">
                <h2 class="sub-heading">
                    Diagnosis

                </h2>
                <p class="sub-paragraph">
                    <?php echo $rows['diagnosis']; ?>
                </p>


            </div>


            <!-- Causes -->
            <div class="container">
                <h2 class="sub-heading">
                    Causes

                </h2>
                <p class="sub-paragraph">
                    <?php echo $rows['triggers']; ?>
                </p>


            </div>

            <!-- Prevention -->
            <div class="container">
                <h2 class="sub-heading">
                    Prevention
                </h2>

                <p class="sub-paragraph">
                    <?php echo $rows['prevention']; ?>
                </p>
            </div>



            <!-- Treatment -->
            <div class="container">
                <h2 class="sub-heading">

                    Treatments and Home Remedies..

                </h2>
                <p class="sub-paragraph">
                    <?php echo $rows['tratment']; ?>
                </p>

            </div>


            <!-- Extra Section -->
            <div class="container" style="background:none;">

                <h2 class="sub-heading">

                    <?php echo $rows['extra_title']; ?>

                </h2>
                <p class="sub-paragraph">
                    <?php echo $rows['extra_description']; ?>

                </p>


            </div>

        </div>




        </div>
    <?php } ?>

    <footer>
        All copyrights &copy; 2020 reserved to MOM.
    </footer>




    </body>

    </html>