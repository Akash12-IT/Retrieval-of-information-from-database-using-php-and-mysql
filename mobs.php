<head>
    <link rel="stylesheet" href="style.css">
</head>
<?php
//session
session_start();

require_once('component.php');
require_once('db.php');

//create instance
$database = new Createdb("digipro", "product");
if (isset($_POST['add'])) {
    //print_r($_POST['product_id']);
    if (isset($_SESSION['cart'])) {
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        print_r($item_array_id);

        if (in_array($_POST['product_id'], $item_array_id)) {
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'mobs.php'</script>";
        } else {
            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );
            $_SESSION['cart'][$count] = $item_array;
        }
    } else {

        $item_array = array(
            'product_id' => $_POST['product_id']
        );
        //new session
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="stylepro.css">
    <title>DigiPro</title>
</head>

<body>
    <?php
    require_once("cnav.php");
    ?>
    <div class="container">
        <div class="row text-center py-5">
            <?php
            $result = $database->getData();
            while ($row = mysqli_fetch_assoc($result)) {
                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Footer start-->
    <footer class="page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left bg-dark">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <br>
                    <h5 class="text-uppercase" style="font-family:Verdana, Geneva, Tahoma, sans-serif; text-align:center ; color:blanchedalmond"><b>
                            Digipro </b> </h5>
                    <br>
                    <p style="font-family:Verdana, Geneva, Tahoma, sans-serif ; color:cornsilk">DigiPro inc ,Online shopping site in India - Shop Online for men, women and kids fashion,
                        home décor and furnishings, kitchen apppliances, health and sports products at a affordable
                        price which connected even in rural areas...</b> </p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase" style="color:cornsilk">Know US</h5>

                    <ul class="list-unstyled" style="color:cornsilk;border-radius:10px">
                        <li>
                            <a href="#!">About US</a>
                        </li>
                        <li>
                            <a href="#!">Careers</a>
                        </li>
                        <li>
                            <a href="#!">Press Releases</a>
                        </li>
                        <li>
                            <a href="#!">DigiPro</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase" style="color:cornsilk">Connect With US</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Instagram</a>
                        </li>
                        <li>
                            <a href="#!">Twitter</a>
                        </li>
                        <li>
                            <a href="#!">Instagram</a>
                        </li>
                        <li>
                            <a href="#!">Youtube</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 bg-dark" style="color:cornsilk">© 2021 Copyright:
            <a href="#">DigiPro.inc</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer end -->
</body>

</html>