<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Novel details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/enovel/views/styles/info.css">
    <link rel="stylesheet" href="/enovel/views/styles/footer.css">
    <link rel="stylesheet" href="/enovel/views/styles/header.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="text-white" href="/enovel/views/home.php">
                <p class="mb-0 d-flex justify-content-center"><i class="fas fa-book-open fa-2x pr-2"></i><span id="title" class="d-flex flex-column justify-content-center">Everywhere Novel</span></p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto pr-3">
                    <li class="dropdown nav-item pr-3">
                        <a href="#" class="nav-link dropdown-toggle menu" data-toggle="dropdown"><i class="fas fa-list-ul"></i> Genre <b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row item">
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="/enovel/novel/list?filter=y&theloai=action">Action</a></li>
                                        <li><a href="/enovel/novel/list?filter=y&theloai=adventure">Adventure</a></li>
                                        <li><a href="/enovel/novel/list?filter=y&theloai=comedy">Comedy</a></li>
                                        <hr class="my-1">
                                        <li><a href="/enovel/novel/list?filter=y&theloai=drama">Drama</a></li>
                                        <hr class="my-1">
                                        <li><a href="/enovel/novel/list?filter=y&theloai=fantasy">Fantasy</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="/enovel/novel/list?filter=y&theloai=historical">Historical</a></li>
                                        <li><a href="/enovel/novel/list?filter=y&theloai=horror">Horror</a></li>
                                        <li><a href="/enovel/novel/list?filter=y&theloai=martialarts">Martial arts</a></li>
                                        <hr class="my-1">
                                        <li><a href="/enovel/novel/list?filter=y&theloai=mature">Mature</a></li>
                                        <hr class="my-1">
                                        <li><a href="/enovel/novel/list?filter=y&theloai=mystery">Mystery</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="/enovel/novel/list?filter=y&theloai=psychological">Psychological</a></li>
                                        <li><a href="/enovel/novel/list?filter=y&theloai=romance">Romance</a></li>
                                        <li><a href="/enovel/novel/list?filter=y&theloai=sports">Sports</a></li>
                                        <hr class="my-1">
                                        <li><a href="/enovel/novel/list?filter=y&theloai=supernatural">Supernatural</a></li>
                                        <hr class="my-1">
                                        <li><a href="/enovel/novel/list?filter=y&theloai=tragedy">Tragedy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown pr-3">
                        <a class="nav-link dropdown-toggle menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-list-ul"></i> Novel list
                        </a>
                        <div class="dropdown-menu dropdown-menu-right item" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"></a>
                            <a class="dropdown-item" href="/enovel/novel/list/">Hot picks</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/enovel/novel/list/">New entries</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 search-input pr-3">
                    <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" placeholder="Search" style="width: 300px;">
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-alt"></i> User area
                        </a>
                        <div class="dropdown-menu dropdown-menu-right item" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"></a>
                            <a class="dropdown-item" href="user/login.php">Login</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="user/edit_account.php">Edit Account</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="user/register.php">Register Account</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="user/logout.php">Logout</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="user/list_subscipt.php">List Subsript</a>

                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="head1"></div>
    <div class="new-story">
        <div class="container">
            <div class="new-story__body">
                <div class="row m-0">
                    <div class="new-story__block col-md-3">
                        <img src="