<?php require_once './includes/database_conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Amarah's Corner - BF Resort Las Piñas</title>

    <style>
        body {
            background: url(./assets/images/background.png) no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div id="preloader"></div>

    <?php include './includes/navbar.php'; ?>

    <!-- BANNER SECTION -->
    <section class="banner" id="home">
        <img src="./assets/images/banner.jpg" alt="">
    </section>
    <!-- BRANCH NAME SECTION -->
    <section class="branch">
        <h1 class="branch">Amarah's Corner - BF Resort Las Piñas Branch</h1>
        <h5 class="desc">We aim to be one of the most competitive Pizza Place nationwide. By Serving one of the best
            pizza that will satisfy your cravings.</h5>
    </section>
    <!-- MENU SECTION -->
    <section class="menu" id="menu">
        <h3 class="title-header">Menu</h3>
        <div class="menu__container">
            <div class="menu__wrapper swiper mySwiper">
                <div class="menu__content swiper-wrapper">
                    <?php
                    $get_category = mysqli_query($conn, "SELECT * FROM category");

                    foreach($get_category as $category_row) {
                    ?>
                    <a href="catalog" class="menu__card swiper-slide">
                        <div class="menu__image">
                            <img src="./assets/images/<?php echo $category_row['categoty_thumbnail']; ?>" alt="">
                        </div>
                        <div class="menu__name">
                            <h3><?php echo ucwords($category_row['category_title']); ?></h3>
                        </div>
                    </a>
                    <?php 
                    }
                    ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <!-- UPDATES SECTION -->
    <section class="updates" id="updates">
        <h3 class="title-header">Updates</h3>
        <div class="row">
            <!-- UPDATE 1 -->
            <div class="col">
                <div class="image-cont">
                    <img src="./assets/images/2021-12-29.jpg" alt="">
                </div>
                <h4>Posted on Dec 29, 2021</h4>
                <h5>Let's continue the festivities with family and friends! Because food is more enjoyable when shared!
                    🤗 Tara na sa Amarah and enjoy our menu -- pizza, pasta, wings, milktea, fruit tea and frappe! See
                    youuuu, Katambay! 🤗💛</h5>
            </div>
            <!-- UPDATE 2 -->
            <div class="col">
                <div class="image-cont">
                    <img src="./assets/images/2021-12-28.jpg" alt="">
                </div>
                <h4>Posted on Dec 28, 2021</h4>
                <h5>Merry Christmas, Katambay!<3</h5> </div> <!-- UPDATE 3 -->
                        <div class="col">
                            <div class="image-cont">
                                <img src="./assets/images/2021-12-21.jpg" alt="">
                            </div>
                            <h4>Posted on Dec 21, 2021</h4>
                            <h5>Jumpstart your day with Amarah's ALL-DAY BREAKFAST MEALS! Calling all SILOG lovers out
                                there! Namnamin ang sarap ng almusal anytime of the day! 🤗 Tara na sa Amarahs,
                                Katambay! 💛 <br> #amarahscorner <br> #amarahscornerph <br> #katambay<3</h5> </div>
                                    </div> <div id="load-more">
                                    <input type="submit" class="load-more" value="LOAD MORE">
                        </div>
    </section>
    <!-- FEEDBACK SECTION -->
    <section class="feedbacks" id="feedbacks">
        <h3 class="title-header">FEEDBACKS</h3>
        <div class="feedbacks__cont">
            <!-- FEEDBACK 1 -->
            <div class="feedbacks__card">
                <div class="feedbacks__top">
                    <div class="feedbacks__user-profile">
                        <div class="feedbacks__user-profile__image">
                            <img class="img" src="./assets/images/B612_20220322_202642_720-min.jpg">
                        </div>
                        <div class="feedbacks__name-user">
                            <h4>Jennifer Sabado</h4>
                            <h5>@jennifer.sabado</h5>
                        </div>
                    </div>

                    <div class="feedbacks__rate">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                </div>
                <div class="feedbacks__comments">
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quos error reiciendis
                        pariatur
                        voluptate eos, mollitia sit explicabo corrupti dolores, fugiat saepe ad nulla ut!</h5>
                </div>
            </div>
            <!-- FEEDBACK 2 -->
            <div class="feedbacks__card">
                <div class="feedbacks__top">
                    <div class="feedbacks__user-profile">
                        <div class="feedbacks__user-profile__image">
                            <img class="img" src="./assets/images/Kaye.jpg">
                        </div>
                        <div class="feedbacks__name-user">
                            <h4>Kaye Billones</h4>
                            <h5>@kaye.billones</h5>
                        </div>
                    </div>

                    <div class="feedbacks__rate">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                </div>
                <div class="feedbacks__comments">
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quos error reiciendis
                        pariatur
                        voluptate eos, mollitia sit explicabo corrupti dolores, fugiat saepe ad nulla ut!</h5>
                </div>
            </div>
            <!-- FEEDBACK 3 -->
            <div class="feedbacks__card">
                <div class="feedbacks__top">
                    <div class="feedbacks__user-profile">
                        <div class="feedbacks__user-profile__image">
                            <img class="img" src="./assets/images/Mark.jpg">
                        </div>
                        <div class="feedbacks__name-user">
                            <h4>Mark Ryan Jancorda</strong>
                                <h5>@markryan.jancorda</h5>
                        </div>
                    </div>

                    <div class="feedbacks__rate">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                </div>
                <div class="feedbacks__comments">
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quos error reiciendis
                        pariatur
                        voluptate eos, mollitia sit explicabo corrupti dolores, fugiat saepe ad nulla ut!</h5>
                </div>
            </div>
            <!-- FEEDBACK 4 -->
            <div class="feedbacks__card">
                <div class="feedbacks__top">
                    <div class="feedbacks__user-profile">
                        <div class="feedbacks__user-profile__image">
                            <img class="img" src="./assets/images/Jovy.jpg">
                        </div>
                        <div class="feedbacks__name-user">
                            <h4>Jovelyn Ocampo</strong>
                                <h5>@jovelyn.ocampo</h5>
                        </div>
                    </div>

                    <div class="feedbacks__rate">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                </div>
                <div class="feedbacks__comments">
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quos error reiciendis
                        pariatur
                        voluptate eos, mollitia sit explicabo corrupti dolores, fugiat saepe ad nulla ut!</h5>
                </div>
            </div>
        </div>
        <div id="load-more-feedbacks">
            <input type="submit" class="load-more-feedbacks" value="LOAD MORE">
        </div>
    </section>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
    </script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js">
    </script>
    <script src="./assets/js/script.js"></script>
    <script>
        var loader = document.getElementById("preloader");

        window.addEventListener("load", function () {
            loader.style.display = "none";
        })
    </script>
</body>

</html>