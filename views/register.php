<?php
session_start();
include_once "../models/user_model.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Register</title>
    <link rel="stylesheet" href="views/styles/home.css">
    <link rel="stylesheet" href="views/styles/footer.css">
    <link rel="stylesheet" href="views/styles/header.css">
    <link rel="stylesheet" href="views/styles/register.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="text-white" href="views/home.php">
                <p class="mb-0 d-flex justify-content-center"><i class="fas fa-book-open fa-2x pr-2"></i><span id="title" class="d-flex flex-column justify-content-center">Everywhere Novel</span></p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto pr-3">
                    <li class="dropdown nav-item pr-3">
                        <a href="list_novel.php" class="nav-link dropdown-toggle menu" data-toggle="dropdown"><i class="fas fa-list-ul"></i> Genre <b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row item">
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="list_novel.php">Action</a></li>
                                        <li><a href="list_novel.php">Adventure</a></li>
                                        <li><a href="list_novel.php">Comedy</a></li>
                                        <hr class="my-1">
                                        <li><a href="list_novel.php">Drama</a></li>
                                        <hr class="my-1">
                                        <li><a href="list_novel.php">Fantasy</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="list_novel.php">Historical</a></li>
                                        <li><a href="list_novel.php">Horror</a></li>
                                        <li><a href="list_novel.php">Martial arts</a></li>
                                        <hr class="my-1">
                                        <li><a href="list_novel.php">Mature</a></li>
                                        <hr class="my-1">
                                        <li><a href="list_novel.php">Mystery</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="list_novel.php">Psychological</a></li>
                                        <li><a href="list_novel.php">Romance</a></li>
                                        <li><a href="list_novel.php">Sports</a></li>
                                        <hr class="my-1">
                                        <li><a href="list_novel.php">Supernatural</a></li>
                                        <hr class="my-1">
                                        <li><a href="list_novel.php">Tragedy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown pr-3">
                        <a class="nav-link dropdown-toggle menu" href="list_novel.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-list-ul"></i> Novel list
                        </a>
                        <div class="dropdown-menu dropdown-menu-right item" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"></a>
                            <a class="dropdown-item" href="list_novel.php">Hot picks</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="list_novel.php">New entries</a>
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
                            <a class="dropdown-item" href="login.php">Login</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="edit_account.php">Edit Account</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="register.php">Register Account</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="head1"></div>
    <div class="container">
        <h1>Register Form</h1>
    </div>
    <div class="container">
        <form action="" method="POST">
            <div class="form-row" action="" method="POST">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">Full Name</label>
                    <input type="text" name="fullname" class="form-control" id="inputAddress" placeholder="Johnson Baby">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>