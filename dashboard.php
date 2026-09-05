<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Account | Madame Glorius</title>

    <!-- Bootstrap 5 CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    

    <style>

        /*  MADAME GLORIUS - DASHBOARD */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #fffaf7;
            color: #292020;
            font-family: "Poppins", sans-serif;
            font-size: 14px;
        }

        a {
            text-decoration: none;
        }

        /* TOP SHIPPING BAR*/

        .shipping-bar {
            background: #292122;
            color: white;
            text-align: center;
            padding: 8px 10px;
            font-size: 12px;
            letter-spacing: 0.3px;
        }

        /*HEADER */

        .main-header {
            background: #ffffff;
            border-bottom: 1px solid #eee4e1;
            min-height: 115px;
            display: flex;
            align-items: center;
        }

        .logo-area {
            line-height: 1;
        }

        .logo {
            font-family: "Playfair Display", serif;
            color: #9a3e58;
            font-size: 28px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .logo-subtitle {
            color: #c28745;
            font-size: 10px;
            letter-spacing: 4px;
            margin-top: 7px;
            margin-left: 46px;
        }

        .main-menu {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 28px;
        }

        .main-menu a {
            color: #251d1d;
            font-size: 14px;
            transition: 0.3s;
        }

        .main-menu a:hover {
            color: #9a3e58;
        }

        .header-icons {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-left: 25px;
        }

        .header-icons a {
            color: #211a1a;
            font-size: 17px;
        }

        .header-icons a:hover {
            color: #9a3e58;
        }

        /*PAGE TITLE */

        .page-title {
            background: #f3e3e4;
            padding: 50px 0;
            text-align: center;
        }

        .breadcrumb-text {
            color: #8d5361;
            font-size: 13px;
            margin-bottom: 12px;
        }

        .page-title h1 {
            font-family: "Playfair Display", serif;
            font-size: 42px;
            font-weight: 500;
            margin-bottom: 10px;
            color: #241d1d;
        }

        .page-title p {
            color: #7a6262;
            margin: 0;
            font-size: 14px;
        }

        /*DASHBOARD SECTION */

        .dashboard-section {
            padding: 55px 0 80px;
        }

        /*SIDEBAR */

        .account-sidebar {
            background: #ffffff;
            border: 1px solid #eadfdb;
        }

        .account-user {
            background: #f3e3e4;
            padding: 25px 20px;
            text-align: center;
            border-bottom: 1px solid #eadfdb;
        }

        .user-icon {
            width: 65px;
            height: 65px;
            background: #9a3e58;
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 27px;
            margin: 0 auto 12px;
        }

        .account-user h5 {
            font-family: "Playfair Display", serif;
            margin-bottom: 4px;
            font-size: 20px;
        }

        .account-user span {
            color: #866f6f;
            font-size: 12px;
        }

        .account-menu {
            list-style: none;
            padding: 12px 0;
            margin: 0;
        }

        .account-menu li a {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 14px 20px;
            color: #4c3c3c;
            border-left: 3px solid transparent;
            transition: 0.3s;
        }

        .account-menu li a i {
            font-size: 16px;
            width: 20px;
        }

        .account-menu li a:hover {
            background: #fff5f4;
            color: #9a3e58;
        }

        .account-menu li a.active {
            background: #fff1f2;
            color: #9a3e58;
            border-left-color: #9a3e58;
            font-weight: 500;
        }

        .logout-link {
            color: #a4435c !important;
        }

        /*DASHBOARD WELCOME*/

        .dashboard-heading {
            margin-bottom: 25px;
        }

        .dashboard-heading h2 {
            font-family: "Playfair Display", serif;
            font-size: 30px;
            margin-bottom: 7px;
        }

        .dashboard-heading p {
            color: #766767;
            margin: 0;
        }

        /*STAT CARDS */

        .stat-card {
            background: #ffffff;
            border: 1px solid #eadfdb;
            padding: 24px;
            height: 100%;
            transition: 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(70, 40, 40, 0.07);
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            background: #f3e3e4;
            color: #9a3e58;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-bottom: 17px;
        }

        .stat-card h3 {
            font-size: 25px;
            margin-bottom: 4px;
            font-weight: 600;
        }

        .stat-card p {
            color: #806f6f;
            margin: 0;
            font-size: 13px;
        }

        /*COMMON BOX*/

        .dashboard-box {
            background: #ffffff;
            border: 1px solid #eadfdb;
            margin-top: 30px;
        }

        .box-header {
            padding: 20px 23px;
            border-bottom: 1px solid #eee2df;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .box-header h4 {
            font-family: "Playfair Display", serif;
            font-size: 22px;
            margin: 0;
        }

        .view-all {
            color: #9a3e58;
            font-size: 13px;
        }

        .view-all:hover {
            color: #702a3e;
        }

        /*ORDERS TABLE */

        .orders-table {
            width: 100%;
            margin: 0;
        }

        .orders-table th {
            background: #fff8f6;
            color: #654f4f;
            font-weight: 500;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 15px 20px;
            border-bottom: 1px solid #eee2df;
        }

        .orders-table td {
            padding: 17px 20px;
            border-bottom: 1px solid #f0e7e4;
            vertical-align: middle;
            color: #514242;
        }

        .orders-table tr:last-child td {
            border-bottom: none;
        }

        .order-number {
            color: #9a3e58;
            font-weight: 500;
        }

        .status {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 30px;
            font-size: 11px;
        }

        .status-delivered {
            background: #e9f5e8;
            color: #4e8050;
        }

        .status-processing {
            background: #fff1d9;
            color: #9a6d2d;
        }

        .status-shipped {
            background: #e5eef8;
            color: #547397;
        }

        /* PROFILE BOX */

        .profile-content {
            padding: 25px;
        }

        .profile-row {
            display: flex;
            margin-bottom: 18px;
        }

        .profile-row:last-child {
            margin-bottom: 0;
        }

        .profile-label {
            width: 130px;
            color: #806e6e;
            font-size: 13px;
        }

        .profile-value {
            color: #312727;
            font-weight: 500;
        }

        .edit-button {
            border: 1px solid #9a3e58;
            color: #9a3e58;
            padding: 8px 18px;
            font-size: 12px;
            background: transparent;
            transition: 0.3s;
        }

        .edit-button:hover {
            background: #9a3e58;
            color: #ffffff;
        }

        /*QUICK LINKS */

        .quick-link {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 18px 22px;
            border-bottom: 1px solid #eee4e1;
            color: #403333;
            transition: 0.3s;
        }

        .quick-link:last-child {
            border-bottom: none;
        }

        .quick-link:hover {
            background: #fff8f6;
            color: #9a3e58;
        }

        .quick-link-icon {
            width: 40px;
            height: 40px;
            background: #f3e3e4;
            color: #9a3e58;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .quick-link-text {
            flex: 1;
        }

        .quick-link-text strong {
            display: block;
            font-size: 13px;
            margin-bottom: 2px;
        }

        .quick-link-text span {
            color: #8b7777;
            font-size: 11px;
        }

        /* FOOTER */

        .footer {
            background: #292122;
            color: #ffffff;
            padding: 40px 0;
            margin-top: 20px;
        }

        .footer-logo {
            font-family: "Playfair Display", serif;
            font-size: 24px;
            color: #ffffff;
            margin-bottom: 8px;
        }

        .footer p {
            color: #cdbfc0;
            font-size: 12px;
            margin: 0;
        }

        .footer-links {
            text-align: right;
        }

        .footer-links a {
            color: #d9cdcd;
            margin-left: 20px;
            font-size: 12px;
        }

        .footer-links a:hover {
            color: #ffffff;
        }

        /*MOBILE MENU*/

        .mobile-menu-button {
            display: none;
            border: none;
            background: transparent;
            font-size: 24px;
            color: #292122;
        }

        /*RESPONSIVE DESIGN */

        @media (max-width: 991px) {

            .main-menu {
                display: none;
            }

            .mobile-menu-button {
                display: block;
            }

            .header-icons {
                margin-left: auto;
            }

            .dashboard-section {
                padding: 40px 0 60px;
            }

            .account-sidebar {
                margin-bottom: 30px;
            }

        }

        @media (max-width: 767px) {

            .main-header {
                min-height: 90px;
            }

            .logo {
                font-size: 23px;
            }

            .logo-subtitle {
                font-size: 8px;
                letter-spacing: 3px;
                margin-left: 34px;
            }

            .page-title {
                padding: 38px 15px;
            }

            .page-title h1 {
                font-size: 32px;
            }

            .dashboard-heading h2 {
                font-size: 26px;
            }

            .orders-table {
                min-width: 650px;
            }

            .orders-wrapper {
                overflow-x: auto;
            }

            .profile-row {
                display: block;
            }

            .profile-label {
                width: auto;
                margin-bottom: 3px;
            }

            .footer-links {
                text-align: left;
                margin-top: 20px;
            }

            .footer-links a {
                margin-left: 0;
                margin-right: 18px;
            }

        }

    </style>

</head>


<body>


<!-- SHIPPING BAR -->

<div class="shipping-bar">
    FREE SHIPPING ON ORDERS ABOVE ₹999 • NEW SEASON IS HERE
</div>


<!-- HEADER-->

<header class="main-header">

    <div class="container">

        <div class="row align-items-center">

            <!-- LOGO -->

            <div class="col-6 col-lg-4">

                <div class="logo-area">

                    <a href="#" class="logo">
                        MADAME GLORIUS
                    </a>

                    <div class="logo-subtitle">
                        WOMEN'S FOOTWEAR
                    </div>

                </div>

            </div>


            <!-- NAVIGATION -->

            <div class="col-lg-8">

                <div class="d-flex justify-content-end align-items-center">

                    <nav class="main-menu">

                        <a href="#">Home</a>

                        <a href="#">Shop</a>

                        <a href="#">Categories</a>

                        <a href="#">Offers</a>

                        <a href="#">About</a>

                        <a href="#">Contact</a>

                    </nav>


                    <!-- HEADER ICONS -->

                    <div class="header-icons">

                        <a href="#" title="Search">
                        </a>

                        <a href="#" title="Account"></a>

                        <a href="#" title="Cart"></a>

                    </div>


                    <!-- MOBILE MENU -->

                    <button
                        class="mobile-menu-button ms-3"
                        onclick="showMobileMessage()"
                    >
                        <i class="bi bi-list"></i>
                    </button>

                </div>

            </div>

        </div>

    </div>

</header>


<!-- PAGE TITLE -->

<section class="page-title">

    <div class="container">

        <div class="breadcrumb-text">
            Home / My Account
        </div>

        <h1>
            My Account
        </h1>

        <p>
            Welcome back to your Madame Glorius account.
        </p>

    </div>

</section>


<!-- DASHBOARD-->

<section class="dashboard-section">

    <div class="container">

        <div class="row">


            <!-- LEFT SIDEBAR-->

            <div class="col-lg-3">


                <div class="account-sidebar">


                    <!-- USER -->

                    <div class="account-user">

                        <div class="user-icon">
                            <i class="bi bi-person"></i>
                        </div>

                        <h5>
                            xyz
                        </h5>

                        <span>
                            xyz@example.com
                        </span>

                    </div>


                    <!-- MENU -->

                    <ul class="account-menu">

                        <li>
                            <a
                                href="#dashboard"
                                class="active"
                                onclick="changeMenu(this)"
                            >
                                <i class="bi bi-grid"></i>
                                Dashboard
                            </a>
                        </li>

                        <li>
                            <a
                                href="#orders"
                                onclick="changeMenu(this)"
                            >
                                <i class="bi bi-bag"></i>
                                My Orders
                            </a>
                        </li>

                        <li>
                            <a
                                href="#profile"
                                onclick="changeMenu(this)"
                            >
                                <i class="bi bi-person"></i>
                                My Profile
                            </a>
                        </li>

                        <li>
                            <a
                                href="#wishlist"
                                onclick="changeMenu(this)"
                            >
                                <i class="bi bi-heart"></i>
                                Wishlist
                            </a>
                        </li>

                        <li>
                            <a
                                href="#addresses"
                                onclick="changeMenu(this)"
                            >
                                <i class="bi bi-geo-alt"></i>
                                Addresses
                            </a>
                        </li>

                        <li>
                            <a
                                href="#settings"
                                onclick="changeMenu(this)"
                            >
                                <i class="bi bi-gear"></i>
                                Account Settings
                            </a>
                        </li>

                        <li>
                            <a
                                href="#"
                                class="logout-link"
                                onclick="logoutMessage()"
                            >
                                <i class="bi bi-box-arrow-right"></i>
                                Logout
                            </a>
                        </li>

                    </ul>

                </div>

            </div>


            <!-- RIGHT CONTENT-->

            <div class="col-lg-9">


                <!-- WELCOME -->

                <div class="dashboard-heading">

                    <h2>
                        Hello!
                    </h2>

                    <p>
                        Here's a quick overview of your account.
                    </p>

                </div>


                <!-- STAT CARDS-->

                <div class="row g-3">


                    <!-- ORDERS -->

                    <div class="col-md-4">

                        <div class="stat-card">

                            <div class="stat-icon">
                                <i class="bi bi-bag"></i>
                            </div>

                            <h3>
                                12
                            </h3>

                            <p>
                                Total Orders
                            </p>

                        </div>

                    </div>


                    <!-- WISHLIST -->

                    <div class="col-md-4">

                        <div class="stat-card">

                            <div class="stat-icon">
                                <i class="bi bi-heart"></i>
                            </div>

                            <h3>
                                8
                            </h3>

                            <p>
                                Wishlist Items
                            </p>

                        </div>

                    </div>


                    <!-- REWARDS -->

                    <div class="col-md-4">

                        <div class="stat-card">

                            <div class="stat-icon">
                                <i class="bi bi-gift"></i>
                            </div>

                            <h3>
                                250
                            </h3>

                            <p>
                                Reward Points
                            </p>

                        </div>

                    </div>

                </div>


                <!-- RECENT ORDERS-->

                <div
                    class="dashboard-box"
                    id="orders"
                >

                    <div class="box-header">

                        <h4>
                            Recent Orders
                        </h4>

                        <a
                            href="#"
                            class="view-all"
                            onclick="viewOrders()"
                        >
                            View All
                        </a>

                    </div>


                    <div class="orders-wrapper">

                        <table class="orders-table">

                            <thead>

                                <tr>

                                    <th>
                                        Order
                                    </th>

                                    <th>
                                        Date
                                    </th>

                                    <th>
                                        Items
                                    </th>

                                    <th>
                                        Total
                                    </th>

                                    <th>
                                        Status
                                    </th>

                                </tr>

                            </thead>


                            <tbody>


                                <tr>

                                    <td>
                                        <span class="order-number">
                                            #MG1025
                                        </span>
                                    </td>

                                    <td>
                                        02 Sep 2026
                                    </td>

                                    <td>
                                        2 Items
                                    </td>

                                    <td>
                                        ₹2,499
                                    </td>

                                    <td>
                                        <span class="status status-delivered">
                                            Delivered
                                        </span>
                                    </td>

                                </tr>


                                <tr>

                                    <td>
                                        <span class="order-number">
                                            #MG1024
                                        </span>
                                    </td>

                                    <td>
                                        28 Aug 2026
                                    </td>

                                    <td>
                                        1 Item
                                    </td>

                                    <td>
                                        ₹1,799
                                    </td>

                                    <td>
                                        <span class="status status-processing">
                                            Processing
                                        </span>
                                    </td>

                                </tr>


                                <tr>

                                    <td>
                                        <span class="order-number">
                                            #MG1023
                                        </span>
                                    </td>

                                    <td>
                                        20 Aug 2026
                                    </td>

                                    <td>
                                        3 Items
                                    </td>

                                    <td>
                                        ₹3,899
                                    </td>

                                    <td>
                                        <span class="status status-shipped">
                                            Shipped
                                        </span>
                                    </td>

                                </tr>


                                <tr>

                                    <td>
                                        <span class="order-number">
                                            #MG1022
                                        </span>
                                    </td>

                                    <td>
                                        14 Aug 2026
                                    </td>

                                    <td>
                                        1 Item
                                    </td>

                                    <td>
                                        ₹1,299
                                    </td>

                                    <td>
                                        <span class="status status-delivered">
                                            Delivered
                                        </span>
                                    </td>

                                </tr>


                            </tbody>

                        </table>

                    </div>

                </div>


                <!-- PROFILE + QUICK LINKS -->

                <div class="row">


                    <!-- PROFILE -->

                    <div
                        class="col-md-7"
                        id="profile"
                    >

                        <div class="dashboard-box">

                            <div class="box-header">

                                <h4>
                                    My Profile
                                </h4>

                                <button
                                    class="edit-button"
                                    onclick="editProfile()"
                                >
                                    Edit Profile
                                </button>

                            </div>


                            <div class="profile-content">


                                <div class="profile-row">

                                    <div class="profile-label">
                                        Full Name
                                    </div>

                                    <div class="profile-value">
                                        xyz
                                    </div>

                                </div>


                                <div class="profile-row">

                                    <div class="profile-label">
                                        Email
                                    </div>

                                    <div class="profile-value">
                                        xyz@example.com
                                    </div>

                                </div>


                                <div class="profile-row">

                                    <div class="profile-label">
                                        Phone
                                    </div>

                                    <div class="profile-value">
                                        +91 98765 43210
                                    </div>

                                </div>


                                <div class="profile-row">

                                    <div class="profile-label">
                                        Member Since
                                    </div>

                                    <div class="profile-value">
                                        January 2026
                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>


                    <!-- QUICK LINKS -->

                    <div class="col-md-5">

                        <div class="dashboard-box">

                            <div class="box-header">

                                <h4>
                                    Quick Links
                                </h4>

                            </div>


                            <a
                                href="#wishlist"
                                class="quick-link"
                                onclick="quickMessage('Wishlist')"
                            >

                                <div class="quick-link-icon">
                                    <i class="bi bi-heart"></i>
                                </div>

                                <div class="quick-link-text">

                                    <strong>
                                        My Wishlist
                                    </strong>

                                    <span>
                                        8 saved products
                                    </span>

                                </div>

                                <i class="bi bi-chevron-right"></i>

                            </a>


                            <a
                                href="#addresses"
                                class="quick-link"
                                onclick="quickMessage('Addresses')"
                            >

                                <div class="quick-link-icon">
                                    <i class="bi bi-geo-alt"></i>
                                </div>

                                <div class="quick-link-text">

                                    <strong>
                                        My Addresses
                                    </strong>

                                    <span>
                                        Manage delivery addresses
                                    </span>

                                </div>

                                <i class="bi bi-chevron-right"></i>

                            </a>


                            <a
                                href="#settings"
                                class="quick-link"
                                onclick="quickMessage('Account Settings')"
                            >

                                <div class="quick-link-icon">
                                    <i class="bi bi-gear"></i>
                                </div>

                                <div class="quick-link-text">

                                    <strong>
                                        Settings
                                    </strong>

                                    <span>
                                        Manage your account
                                    </span>

                                </div>

                                <i class="bi bi-chevron-right"></i>

                            </a>

                        </div>

                    </div>

                </div>


            </div>

        </div>

    </div>

</section>


<!-- FOOTER -->

<footer class="footer">
    <div class="container footer-grid">
        <div><a class="logo" href="index.php">MADAME GLORIUS<span>WOMEN'S FOOTWEAR</span></a>
        <p>Elegant footwear designed for everyday confidence, comfort and style.</p>
    </div>
    <div><h3>Shop</h3>
    <a href="shop.php">All Footwear</a>
    <a href="category.php">Heels</a>
    <a href="category.php">Flats</a>
    <a href="category.php">Sandals</a>
</div>
<div>
    <h3>Help</h3>
    <a href="faq.php">FAQ</a>
    <a href="shipping-policy.php">Shipping</a>
    <a href="return-policy.php">Returns</a>
    <a href="contact.php">Contact</a>
</div>
<div>
    <h3>Information</h3>
    <a href="about.php">About Us</a>
    <a href="privacy-policy.php">Privacy Policy</a>
    <a href="terms.php">Terms</a>
</div>
</div>
<div class="container copyright">© 2026 Madame Glorius. Frontend template.</div>
</footer>


<!-- BOOTSTRAP JS -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


<!-- CUSTOM JAVASCRIPT-->

<script>

    /*SIDEBAR ACTIVE MENU*/

    function changeMenu(element) {

        // Remove active class from all menu items
        const menuItems = document.querySelectorAll(".account-menu a");

        menuItems.forEach(function(item) {

            item.classList.remove("active");

        });


        // Add active class to clicked item
        element.classList.add("active");

    }


    /* LOGOUT MESSAGE */

    function logoutMessage() {

        alert(
            "This is a static dashboard.\n\nLogout functionality will be added when PHP and database are connected."
        );

    }


    /*EDIT PROFILE*/

    function editProfile() {

        alert(
            "Edit Profile\n\nThis is currently a static page. You can connect this button to your PHP profile page later."
        );

    }


    /*VIEW ORDERS */

    function viewOrders() {

        alert(
            "My Orders page will open here when you create the orders page."
        );

    }


    /* QUICK LINK MESSAGE */

    function quickMessage(pageName) {

        alert(
            pageName + " page is currently static."
        );

    }


    /*MOBILE MENU */

    function showMobileMessage() {

        alert(
            "Mobile navigation menu can be connected here."
        );

    }

</script>


</body>

</html>