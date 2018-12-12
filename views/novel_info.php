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
                            <a class="dropdown-item" href="/enovel/views/list_novel.php">Hot picks</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/enovel/views/list_novel.php">New entries</a>
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
                        <img src="images/data/Cover-1.png" alt="failed to load">
                        <div class="wrapper">
                            <div class="btn-group-vertical">
                                <input name="submit" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Add to list">
                                <button type="button" class="btn btn-info">First chapter</button>
                                <button type="button" class="btn btn-warning">Lasted chapter</button>
                            </div>
                        </div>
                    </div>

                    <div class="new-story__block new-story__right col-md-9">
                        <h3 class="text-center">
                            Dungeon Defense
                        </h3>
                        <p>Do you know how this world ends? <br> Become the hero and defeat the 72 Demon Lords. The game that boasted as the absolute hardest strategy game, Dungeon Defense<br> I used to be the ‘hero’ that had accomplished everything in this
                            game, but after answering a suspicious survey, I found myself in the game as the weakest Demon Lord, Dantalian.<br> With only my eloquent tongue and my memories of conquest as a hero—.<br> In order to survive as Dantalian.
                            I shall tear this world apart.</p>
                        <div class="new-story__tags">
                            <table class="table table-borderless table-hover">
                                <tbody>
                                    <tr>
                                        <td class="line">Author</td>
                                        <td>Yoo Heonhwa</td>
                                    </tr>
                                    <tr>
                                        <td class="line">Genres</td>
                                        <td>Romance, Psychological, Mature, Fantasy,Comedy.</td>
                                    </tr>
                                    <tr>
                                        <td class="line">Status</td>
                                        <td>Ongoing</td>
                                    </tr>
                                    <tr>
                                        <td class="line">Views</td>
                                        <td>1230</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="full-story">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="story-list">
                        <h2 class="title col-lg-11">
                            Chapter List
                        </h2>
                        <table class="table table-striped col-lg-11">
                            <tbody>
                                <tr>
                                    <td><a href="read.php">Chapter 18</a></td>
                                    <td><a href="read.php">31/12/2017</a></td>
                                </tr>
                                <tr>
                                    <td><a href="read.php">Chapter 17</a></td>
                                    <td><a href="read.php">31/12/2017</a></td>
                                </tr>
                                <tr>
                                    <td><a href="read.php">Chapter 16</a></td>
                                    <td><a href="read.php">31/12/2017</a></td>
                                </tr>
                                <tr>
                                    <td><a href="read.php">Chapter 14</a></td>
                                    <td><a href="read.php">31/12/2017</a></td>
                                </tr>
                                <tr>
                                    <td><a href="read.php">Chapter 13</a></td>
                                    <td><a href="read.php">31/12/2017</a></td>
                                </tr>
                                <tr>
                                    <td><a href="read.php">Chapter 12</a></td>
                                    <td><a href="read.php">31/12/2017</a></td>
                                </tr>
                                <tr>
                                    <td><a href="read.php">Chapter 11</a></td>
                                    <td><a href="read.php">31/12/2017</a></td>
                                </tr>
                                <tr>
                                    <td><a href="read.php">Chapter 10</a></td>
                                    <td><a href="read.php">31/12/2017</a></td>
                                </tr>
                                <tr>
                                    <td><a href="read.php">Chapter 9</a></td>
                                    <td><a href="read.php">31/12/2017</a></td>
                                </tr>
                                <tr>
                                    <td><a href="read.php">Chapter 8</a></td>
                                    <td><a href="read.php">31/12/2017</a></td>
                                </tr>
                                <tr>
                                    <td><a href="read.php">Chapter 7</a></td>
                                    <td><a href="read.php">31/12/2017</a></td>
                                </tr>
                                <tr>
                                    <td><a href="read.php">Chapter 6</a></td>
                                    <td><a href="read.php">31/12/2017</a></td>
                                </tr>
                                <tr>
                                    <td><a href="read.php">Chapter 5</a></td>
                                    <td><a href="read.php">31/12/2017</a></td>
                                </tr>
                                <tr>
                                    <td><a href="read.php">Chapter 4</a></td>
                                    <td><a href="read.php">31/12/2017</a></td>
                                </tr>
                                <tr>
                                    <td><a href="read.php">Chapter 3</a></td>
                                    <td><a href="read.php">31/12/2017</a></td>
                                </tr>
                                <tr>
                                    <td><a href="read.php">Chapter 2</a></td>
                                    <td><a href="read.php">31/12/2017</a></td>
                                </tr>
                                <tr>
                                    <td><a href="read.php">Chapter 1</a></td>
                                    <td><a href="read.php">31/12/2017</a></td>
                                </tr>
                                <tr>
                                    <td><a href="read.php">Prologue</a></td>
                                    <td><a href="read.php">31/12/2017</a></td>
                                </tr>
                                </tr>
                                <td colspan="3">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item"><a class="page-link" href="#">First</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Last</a></li>
                                    </ul>
                                </td>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories">
                        <h2 class="title col-lg-12">
                            <a href="list_novel.php">Similar</a>
                        </h2>
                        <table class="table table-striped col-lg-12 menu">
                            <tbody>
                                <tr>
                                    <td><a href="info-story.php">Kuro no Maou</a></td>
                                </tr>
                                <tr>
                                    <td><a href="info-story.php">Release That Witch</a></td>
                                </tr>
                                <tr>
                                    <td><a href="info-story.php">I've Been Reincarnated!</a></td>
                                </tr>
                                <tr>
                                    <td><a href="info-story.php">Goblin Kingdom</a></td>
                                </tr>
                                <tr>
                                    <td><a href="info-story.php">God of Crime</a></td>
                                </tr>
                                <tr>
                                    <td><a href="info-story.php">Harmony</a></td>
                                </tr>
                                <tr>
                                    <td><a href="info-story.php">Hidan no Aria</a></td>
                                </tr>
                                <tr>
                                    <td><a href="info-story.php">Parasite in Love</a></td>
                                </tr>
                                <tr>
                                    <td><a href="info-story.php">Magi's Grandson</a></td>
                                </tr>
                                <tr>
                                    <td><a href="info-story.php">Please don't eat me</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="categories">
                        <h2 class="title col-lg-12">
                            <a href="../list-chapter/list_comics.php">Genres</a>
                        </h2>
                        <table class="table table-striped col-lg-12 genre">
                            <tbody>
                                <tr>
                                    <td><a href="../list-chapter/list_comics.php">Action</a></td>
                                    <td><a href="../list-chapter/list_comics.php">Adventure</a></td>
                                </tr>
                                <tr>
                                    <td><a href="../list-chapter/list_comics.php">Adult</a></td>
                                    <td><a href="../list-chapter/list_comics.php">Comedy</a></td>
                                </tr>
                                <tr>
                                    <td><a href="../list-chapter/list_comics.php">Drama</a></td>
                                    <td><a href="../list-chapter/list_comics.php">Ecchi</a></td>
                                </tr>
                                <tr>
                                    <td><a href="../list-chapter/list_comics.php">Fantasy</a></td>
                                    <td><a href="../list-chapter/list_comics.php">Gender Bender</a></td>
                                </tr>
                                <tr>
                                    <td><a href="../list-chapter/list_comics.php">Harem</a></td>
                                    <td><a href="../list-chapter/list_comics.php">Historical</a></td>
                                </tr>
                                <tr>
                                    <td><a href="../list-chapter/list_comics.php">Horror</a></td>
                                    <td><a href="../list-chapter/list_comics.php">Martial arts</a></td>
                                </tr>
                                <tr>
                                    <td><a href="../list-chapter/list_comics.php">Mature</a></td>
                                    <td><a href="../list-chapter/list_comics.php">Mystery</a></td>
                                </tr>
                                <tr>
                                    <td><a href="../list-chapter/list_comics.php">Psychological</a></td>
                                    <td><a href="../list-chapter/list_comics.php">Romance</a></td>
                                </tr>
                                <tr>
                                    <td><a href="../list-chapter/list_comics.php">School Life</a></td>
                                    <td><a href="../list-chapter/list_comics.php">Science Fiction</a></td>
                                </tr>
                                <tr>
                                    <td><a href="../list-chapter/list_comics.php">Sports</a></td>
                                    <td><a href="../list-chapter/list_comics.php">Supernatural</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <p>Assignment 1 - Web Programming - Fall 2018</p>
            <div id="goTop">
                <img src="images/top.svg" alt="top" />
            </div>
        </footer>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) $('#goTop').fadeIn();
            else $('#goTop').fadeOut();
        });
        $('#goTop').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 'slow');
        });
    });
</script>

</html>