<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages Section</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body {
            background-color: rgb(17, 29, 25);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-bottom: 10em;
        }

        .container {
            background-color: beige;
            height: auto;
            width: 50rem;
            margin-top: 5em;

            padding: 2rem;
            font-family: 'itim', cursive;
            border-radius: 5px;
        }

        .container::after {
            content: "";
            height: 20px;
            width: 20px;
            background: beige;
            z-index: 100;
            position: absolute;
            margin-top: 22px;
            transform: rotate(45deg);
        }
    </style>
</head>


<body>

    <?php $con=mysqli_connect("localhost","root","","mom");
    
    $sql="SELECT * FROM message ";

    $query=mysqli_query($con,$sql)or die("Querry Failed");

    while ($rows = mysqli_fetch_array($query)) {

        ?>
    
    

    <div class="container">
        <p class="name"><b>Name:- </b><?php echo $rows['m_name'] ?> </p>
        <p class="cotact_no"><b>Contact:-</b> <?php echo $rows['m_contact'] ?></p>
        <p class="email"><b>Email:- </b><?php echo $rows['m_email'] ?></p>
        <p class="email"><b>Message:-</b></p>
        <p class="message"><?php echo $rows['m_message'] ?></p>

    </div>

    <?php  } ?>



</body>

</html>