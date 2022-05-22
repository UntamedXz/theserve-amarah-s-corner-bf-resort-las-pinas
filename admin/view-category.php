<?php 
session_start(); 
require_once '../includes/database_conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.jqueryui.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#table_id').DataTable({
                "scrollY": "45vh",
                "scrollX": true,
                "scrollCollapse": true,
                "paging": false
            });
        });
    </script>

    <style>
        .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody::-webkit-scrollbar {
            width: 0px;
        }

        .dataTables_wrapper .dataTables_info {
            color: #ffaf08 !important;
        }

        .dataTables_filter {
            margin-bottom: 10px;
        }

        .dataTables_filter label {
            color: #ffaf08;
        }

        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid #ffaf08;
            color: #ffaf08;
        }

        table.dataTable thead {
            border-radius: 5px !important;
        }

        table.dataTable thead tr {
            background-color: #ffaf08;
            color: #070506;
            white-space: nowrap;
        }
    </style>
    <title>Admin Panel</title>
</head>

<body>
    <!-- EDIT -->
    <div id="popup-outer" class="popup-outer  edit-modal">
        <div id="popup-box" class="popup-box">
            <div class="top">
                <h3>Edit Category</h3>
                <div id="modalClose" class="fa-solid fa-xmark"></div>
            </div>
            <hr>
            <form action="">
                <div class="form-group">
                    <span>Category Title</span>
                    <input type="text" id="category_title" name="">
                </div>
                <div class="form-group">
                    <span>Select Category Image</span>
                    <input type="file" accept=".jpg, .jpeg, .png" class="file" name="category_thumbnail" id="category_thumbnail">
                </div>
            </form>
            <hr>
            <div class="bottom">
                <div class="buttons">
                    <button id="modalClose" type="button" class="cancel">CANCEL</button>
                    <button type="button" class="save">SAVE CHANGES</button>
                </div>
            </div>
        </div>
    </div>

    <!-- VIEW -->
    <div id="popup-outer" class="popup-outer view-modal">
        <div id="popup-box" class="popup-box">
            <div class="top">
                <h3>View Category</h3>
                <div id="modalClose" class="bx bxs-x-square"></div>
            </div>
            <hr>
            <form class="view-form" action="">

            </form>
            <hr>
            <div class="bottom">
                <div class="buttons">
                    <button id="modalClose" type="button" class="close">CLOSE</button>
                </div>
            </div>
        </div>
    </div>

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
        <h1 class="title">View Category</h1>
        <ul class="breadcrumbs">
            <li><a href="index">Home</a></li>
            <li class="divider">/</li>
            <li><a href="view-category" class="active">View Category</a></li>
        </ul>
        <section class="view-category">

            <div class="wrapper">
                <table id="table_id">
                    <thead>
                        <tr>
                            <th>Category Title</th>
                            <th>Category Thumbnail</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $get_category = mysqli_query($conn, "SELECT * FROM category");

                        foreach($get_category as $category_row) {
                        ?>
                        <tr>
                            <td class="category_title"><?php echo $category_row['category_title'] ?></td>
                            <td><?php echo $category_row['categoty_thumbnail'] ?>
                            </td>
                            <td>
                                <a href="#" class="view"><i class="fa-solid fa-eye"></i></a>
                                <a href="#" id="editModal" class="edit"><i class="fa-solid fa-pen-to-square "></i></a>
                                <a href="#" class="delete"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- AJAX -->
        <script>
            $(document).ready(function () {
                $('.view').click(function(e)  {
                    e.preventDefault();

                    var category_title = $(this).closest('tr').find('.category_title').text();

                    $.ajax({
                        type: "POST",
                        url: "./processing.php",
                        data: {
                            'checkingViewBtn': true,
                            'category_title': category_title,
                        },
                        success: function(response) {
                            $('.view-form').html(response)
                        }
                    });
                });
            });
        </script>

        <!-- MODAL -->
        <script>
            const edit_modal_btn = document.querySelectorAll('.edit');
            const view_modal_btn = document.querySelectorAll('.view');
            const close_modal = document.querySelectorAll('#modalClose');
            const edit_modal = document.querySelector('.edit-modal');
            const view_modal = document.querySelector('.view-modal');

            // EDIT MODAL
            edit_modal_btn.forEach(item => {
                item.addEventListener('click', event => {
                    edit_modal.classList.toggle('active');
                })
            })

            // VIEW MODAL
            view_modal_btn.forEach(item => {
                item.addEventListener('click', event => {
                    view_modal.classList.toggle('active');
                })
            })

            close_modal.forEach(close => {
                close.addEventListener('click', event => {
                    view_modal.classList.remove('active');
                    edit_modal.classList.remove('active');
                })
            })
        </script>
        <!-- ALERT -->
        <script>
            let alertbox = document.querySelector('.alert');

            document.querySelector('#close-alert').onclick = () => {
                alertbox.style.display = 'none';
            }
        </script>
        <?php include 'bottom.php' ?>

</body>

</html>