<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Login to your Madame Glorious account">

    <meta name="author" content="Madame Glorious">

    <title>Login | Madame Glorious</title>

    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

    <div class="topbar">
        FREE SHIPPING ON ORDERS ABOVE ₹999 • NEW SEASON IS HERE
    </div>


    <nav class="navbar">

        <div class="container nav-inner">

            <a class="logo" href="index.php">
                MADAME GLORIOUS
                <span>WOMEN'S FOOTWEAR</span>
            </a>


            <div class="navlinks">

                <a href="index.php">
                    Home
                </a>

                <a href="shop.php">
                    Shop
                </a>

                <a href="category.php">
                    Categories
                </a>

                <a href="product-details.php">
                    Product Details
                </a>

                <a href="cart.php">
                    Cart
                </a>

                <a href="contact.php">
                    Contact
                </a>

            </div>


            <div class="navicons">

                <a href="login.php">
                    <i class="fa-solid fa-user"></i>
                </a>

                <a href="cart.php">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>

            </div>

        </div>

    </nav>


    <main>

        <section class="section">

            <div class="container">

                <div class="form-card">

                    <header class="text-center">

                        <h1>

                            <i class="fa-solid fa-right-to-bracket"></i>

                            Login

                        </h1>

                    </header>


                    <form id="loginForm">


                        <div class="form-group">

                            <label for="email">
                                Email
                            </label>

                            <input type="email"
                                id="email"
                                name="email"
                                placeholder="Enter email"
                                data-validation="required email">

                            <span class="error"
                                id="emailError"></span>

                        </div>


                        <div class="form-group">

                            <label for="password">
                                Password
                            </label>

                            <input type="password"
                                id="password"
                                name="password"
                                placeholder="Enter password"
                                data-validation="required">

                            <span class="error"
                                id="passwordError"></span>

                        </div>


                        <section class="form-submit">

                            <button type="submit"
                                class="btn"
                                name="loginbtn">

                                <i class="fa-solid fa-right-to-bracket"></i>

                                Login

                            </button>


                            <p class="form-login">

                                Don't have an account?

                                <a href="register.php">

                                    <i class="fa-solid fa-user-plus"></i>

                                    Register Now

                                </a>

                            </p>

                        </section>


                    </form>

                </div>

            </div>

        </section>

    </main>


    <footer class="footer">

        <div class="container footer-grid">


            <div>

                <a class="logo" href="index.php">

                    MADAME GLORIOUS

                    <span>
                        WOMEN'S FOOTWEAR
                    </span>

                </a>

                <p>
                    Elegant footwear designed for everyday confidence,
                    comfort and style.
                </p>

            </div>


            <div>

                <h3>
                    Shop
                </h3>

                <a href="shop.php">
                    All Footwear
                </a>

                <a href="category.php">
                    Heels
                </a>

                <a href="category.php">
                    Flats
                </a>

                <a href="category.php">
                    Sandals
                </a>

            </div>


            <div>

                <h3>
                    Help
                </h3>

                <a href="contact.php">
                    Contact
                </a>

                <a href="login.php">
                    Login
                </a>

                <a href="register.php">
                    Register
                </a>

                <a href="cart.php">
                    Cart
                </a>

            </div>


            <div>

                <h3>
                    Information
                </h3>

                <a href="index.php">
                    Home
                </a>

                <a href="shop.php">
                    Shop
                </a>

                <a href="category.php">
                    Categories
                </a>

                <a href="product-details.php">
                    Product Details
                </a>

            </div>


        </div>


        <div class="container copyright">

            © 2026 Madame Glorious. All Rights Reserved.

        </div>

    </footer>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="../assets/js/script.js"></script>


    <script>

        $(document).ready(function () {

            $("#loginForm").on("submit", function (e) {

                e.preventDefault();

                let email = $("#email").val().trim();

                let password = $("#password").val().trim();

                if (email !== "" && password !== "") {

                    window.location.href = "index.php";

                }

            });

        });

    </script>

</body>

</html>