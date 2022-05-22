<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <title>Admin Panel</title>
</head>

<body>
    <?php 
    if(isset($_SESSION['status']) && $_SESSION['status'] == 'empty field') {
    echo '<div class="alert">
        <span class="fa-solid fa-circle-exclamation"></span>
        <span class="msg">All fields are required!</span>
        <span class="close-btn" id="close-alert">
            <span class="fas fa-times"></span>
        </span>
    </div>';
    unset($_SESSION['status']);
    }
    if(isset($_SESSION['status']) && $_SESSION['status'] == 'empty category title') {
    echo '<div class="alert">
        <span class="fa-solid fa-circle-exclamation"></span>
        <span class="msg">Input category title!</span>
        <span class="close-btn" id="close-alert">
            <span class="fas fa-times"></span>
        </span>
    </div>';
    unset($_SESSION['status']);
    }
    if(isset($_SESSION['status']) && $_SESSION['status'] == 'image does not exist') {
    echo '<div class="alert">
        <span class="fa-solid fa-circle-exclamation"></span>
        <span class="msg">Upload category thumbnail!</span>
        <span class="close-btn" id="close-alert">
            <span class="fas fa-times"></span>
        </span>
    </div>';
    unset($_SESSION['status']);
    }
    if(isset($_SESSION['status']) && $_SESSION['status'] == 'invalid img ext') {
    echo '<div class="alert">
        <span class="fa-solid fa-circle-exclamation"></span>
        <span class="msg">File not supported!</span>
        <span class="close-btn" id="close-alert">
            <span class="fas fa-times"></span>
        </span>
    </div>';
    unset($_SESSION['status']);
    }
    if(isset($_SESSION['status']) && $_SESSION['status'] == 'too large') {
    echo '<div class="alert">
        <span class="fa-solid fa-circle-exclamation"></span>
        <span class="msg">Image size is too large!</span>
        <span class="close-btn" id="close-alert">
            <span class="fas fa-times"></span>
        </span>
    </div>';
    unset($_SESSION['status']);
    }
    if(isset($_SESSION['status']) && $_SESSION['status'] == 'Successfully added!') {
    echo '<div class="alert">
        <span class="fa-solid fa-circle-exclamation"></span>
        <span class="msg">Successfully added!</span>
        <span class="close-btn" id="close-alert">
            <span class="fas fa-times"></span>
        </span>
    </div>';
    unset($_SESSION['status']);
    }
    if(isset($_SESSION['status']) && $_SESSION['status'] == 'Something went wrong!') {
    echo '<div class="alert">
        <span class="fa-solid fa-circle-exclamation"></span>
        <span class="msg">Something went wrong!</span>
        <span class="close-btn" id="close-alert">
            <span class="fas fa-times"></span>
        </span>
    </div>';
    unset($_SESSION['status']);
    }
    ?>

    <?php include 'top.php'; ?>

    <!-- MAIN -->
    <main>
        <h1 class="title">Insert Category</h1>
        <ul class="breadcrumbs">
            <li><a href="index">Home</a></li>
            <li class="divider">/</li>
            <li><a href="#" class="active">Insert Category</a></li>
        </ul>
        <section class="insert-category">
            <div class="wrapper">
                <div class="form-container">
                    <h1>Insert Category</h1>
                    <form action="./processing.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <span>Category Title</span>
                            <input type="text" name="category_title">
                        </div>
                        <div class="form-group">
                            <span>Select Category Image</span>
                            <input type="file" accept=".jpg, .jpeg, .png" class="file" name="category_thumbnail">
                        </div>
                        <input type="submit" name="category" value="Insert Category">
                    </form>
                </div>
            </div>
        </section>
        <script>
            let alertbox = document.querySelector('.alert');

            document.querySelector('#close-alert').onclick = () => {
                alertbox.style.display = 'none';
            }
        </script>
        <?php include 'bottom.php' ?>
        
</body>

</html>