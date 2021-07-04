<head>
    <link rel="stylesheet" href="stylepro.css">
</head>
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">
            <h6 class="px-5">
                <i class="fas fa-shopping-basket"></i> Best Products Form Best Sellers
            </h6>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-6 cart float-right">
                        ________________________________________________________________________________________________<i class="fas fa-shopping-cart "></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])) {
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-dark bg-light\" style=\"border-radius:1rem\">$count</span>";
                        } else {
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\" style=\"border-radius:3rem\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>

    </nav>
</header>