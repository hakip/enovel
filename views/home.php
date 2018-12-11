<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Everywhere Novel - Access your bookshelf everywhere! - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <link rel="stylesheet" href="/enovel/views/styles/home.css">
    <link rel="stylesheet" href="/enovel/views/styles/footer.css">
    <link rel="stylesheet" href="/enovel/views/styles/header.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
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
                                        <li><a href="/enovel/views/list_novel.php">Action</a></li>
                                        <li><a href="/enovel/views/list_novel.php">Adventure</a></li>
                                        <li><a href="/enovel/views/list_novel.php">Comedy</a></li>
                                        <hr class="my-1">
                                        <li><a href="/enovel/views/list_novel.php">Drama</a></li>
                                        <hr class="my-1">
                                        <li><a href="/enovel/views/list_novel.php">Fantasy</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="/enovel/views/list_novel.php">Historical</a></li>
                                        <li><a href="/enovel/views/list_novel.php">Horror</a></li>
                                        <li><a href="/enovel/views/list_novel.php">Martial arts</a></li>
                                        <hr class="my-1">
                                        <li><a href="/enovel/views/list_novel.php">Mature</a></li>
                                        <hr class="my-1">
                                        <li><a href="/enovel/views/list_novel.php">Mystery</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="/enovel/views/list_novel.php">Psychological</a></li>
                                        <li><a href="/enovel/views/list_novel.php">Romance</a></li>
                                        <li><a href="/enovel/views/list_novel.php">Sports</a></li>
                                        <hr class="my-1">
                                        <li><a href="/enovel/views/list_novel.php">Supernatural</a></li>
                                        <hr class="my-1">
                                        <li><a href="/enovel/views/list_novel.php">Tragedy</a></li>
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
            <h2 class="title">
                <a href="/enovel/novel/list/">New entry >></a>
            </h2>
            <div class="new-story__body">
                <div class="row m-0">
                    <div class="new-story__block col-md-3">
                        <img src="/enovel/views/images/data/Cover-1.png" alt="">
                    </div>
                    <div class="new-story__block new-story__right col-md-9 description">
                        <h3 class="text-center">
                            <a href="/enovel/views/novel_info.php">Dungeon Defense</a>

                        </h3>
                        <p>Do you know how this world ends?</p>
                        <p>Become the hero and defeat the 72 Demon Lords. The game that boasted as the absolute hardest strategy game, ?Dungeon Defense?</p>
                        <p>I used to be the ‘hero’ that had accomplished everything in this game, but after answering a suspicious survey, I found myself in the game as the weakest Demon Lord, ?Dantalian?.</p>
                        <p>With only my eloquent tongue and my memories of conquest as a hero—.</p>
                        <p>In order to survive as Dantalian. I shall tear this world apart.</p>
                        <div class="new-story__tags genrelink">
                            Genres: Romance, Psychological, Mature, Fantasy, Comedy
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-primary">
                        <<</a>
                            <a href="#" class="btn btn-primary">>></a>
                </div>
            </div>
        </div>
    </div>
    <div class="story-list">
        <div class="container">
            <h2 class="title">
                <a href="/enovel/views/list_novel.php">Lasted Updates >></a>
            </h2>
            <div class="story-list__box">
                <div class="row">
                    <div class="col-lg col-md-4">
                        <div class="story-list__item mb-4">
                            <img src="/enovel/views/images/data/2.jpg" alt="">
                            <div class="story-list__name">
                                <a href="/enovel/views/novel_info.php">Pursuing Immortality</a>
                                <p>Chapter 330</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-4">
                        <div class="story-list__item mb-4">
                            <img src="/enovel/views/images/data/3.jpg" alt="">
                            <div class="story-list__name">
                                <a href="/enovel/views/novel_info.php">Bungaku Shoujo</a>
                                <p>Chapter 20</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-4">
                        <div class="story-list__item mb-4">
                            <img src="/enovel/views/images/data/4.jpg" alt="">
                            <div class="story-list__name">
                                <a href="/enovel/views/novel_info.php">.hack//Cell</a>
                                <p>Chapter 2018</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-4">
                        <div class="story-list__item mb-4">
                            <img src="/enovel/views/images/data/5.jpg" alt="">
                            <div class="story-list__name">
                                <a href="/enovel/views/novel_info.php">(Um, Sorry) I’ve Been Reincarnated!</a>
                                <p>Chapter 28</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-4">
                        <div class="story-list__item mb-4">
                            <img src="/enovel/views/images/data/6.jpg" alt="">
                            <div class="story-list__name">
                                <a href="/enovel/views/novel_info.php">A Tale of Two Phoenixes</a>
                                <p>Chapter 22</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-4 d-lg-none">
                        <div class="story-list__item mb-4">
                            <img src="/enovel/views/images/data/7.jpg" alt="">
                            <div class="story-list__name">
                                <a href="/enovel/views/novel_info.php">Adolescent Adam</a>
                                <p>Chapter 122</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg col-md-4">
                        <div class="story-list__item mb-4">
                            <img src="/enovel/views/images/data/8.jpg" alt="">
                            <div class="story-list__name">
                                <a href="/enovel/views/novel_info.php">Alchemist’s Nirvana</a>
                                <p>Chapter 111</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-4">
                        <div class="story-list__item mb-4">
                            <img src="/enovel/views/images/data/9.jpg" alt="">
                            <div class="story-list__name">
                                <a href="/enovel/views/novel_info.php">Battle Royale</a>
                                <p>Chapter 234</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-4">
                        <div class="story-list__item mb-4">
                            <img src="/enovel/views/images/data/10.jpg" alt="">
                            <div class="story-list__name">
                                <a href="/enovel/views/novel_info.php">Black Lagoon</a>
                                <p>Chapter 35</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-4">
                        <div class="story-list__item mb-4">
                            <img src="/enovel/views/images/data/11.jpeg" alt="">
                            <div class="story-list__name">
                                <a href="/enovel/views/novel_info.php">Carefree Path of Dreams</a>
                                <p>Chapter 11</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-4">
                        <div class="story-list__item mb-4">
                            <img src="/enovel/views/images/data/12.jpg" alt="">
                            <div class="story-list__name">
                                <a href="/enovel/views/novel_info.php">Chihaya Furu</a>
                                <p>Chapter 120</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-4 d-lg-none">
                        <div class="story-list__item mb-4">
                            <img src="/enovel/views/images/data/13.jpg" alt="">
                            <div class="story-list__name">
                                <a href="/enovel/views/novel_info.php">Dragon Maken War</a>
                                <p>Chapter 32</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-primary">
                        << </a>
                            <a href="#" class="btn btn-primary">>></a>
                </div>
            </div>
        </div>
    </div>
    <div class="full-story">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="story-list">
                        <h2 class="title">
                            <a href="/enovel/views/list_novel.php">Completed Novels>></a>
                        </h2>
                        <div class="story-list__box">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="story-list__item mb-4">
                                        <img src="/enovel/views/images/data/14.jpg" alt="">
                                        <div class="story-list__name">
                                            <a href="/enovel/views/novel_info.php">Etsusa Bridge</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="story-list__item mb-4">
                                        <img src="/enovel/views/images/data/15.jpg" alt="">
                                        <div class="story-list__name">
                                            <a href="/enovel/views/novel_info.php">Every Day the Protagonist</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="story-list__item mb-4">
                                        <img src="/enovel/views/images/data/16.jpg" alt="">
                                        <div class="story-list__name">
                                            <a href="/enovel/views/novel_info.php">Evil God Average</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="story-list__item mb-4">
                                        <img src="/enovel/views/images/data/17.jpg" alt="">
                                        <div class="story-list__name">
                                            <a href="/enovel/views/novel_info.php">Evil-like Duke Household</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="story-list__item mb-4">
                                        <img src="/enovel/views/images/data/18.jpg" alt="">
                                        <div class="story-list__name">
                                            <a href="/enovel/views/novel_info.php">Expelled From Paradise</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="story-list__item mb-4">
                                        <img src="/enovel/views/images/data/19.jpg" alt="">
                                        <div class="story-list__name">
                                            <a href="/enovel/views/novel_info.php">Fake Cinderella</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="story-list__item mb-4">
                                        <img src="/enovel/views/images/data/20.jpg" alt="">
                                        <div class="story-list__name">
                                            <a href="/enovel/views/novel_info.php">Fate/Strange Fake</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="story-list__item mb-4">
                                        <img src="/enovel/views/images/data/21.jpg" alt="">
                                        <div class="story-list__name">
                                            <a href="/enovel/views/novel_info.php">Fate/Zero</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary">
                                    << </a>
                                        <a href="#" class="btn btn-primary">>></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h2 class="title">
                        <a href="/enovel/views/list_novel.php">Genre</a>
                    </h2>
                    <div class="categories">
                        <div class="genre">
                            <a href="/enovel/views/list_novel.php">Action</a><br>
                            <a href="/enovel/views/list_novel.php">Adventure</a><br>
                            <a href="/enovel/views/list_novel.php">Adult</a><br>
                            <a href="/enovel/views/list_novel.php">Comedy</a><br>
                            <a href="/enovel/views/list_novel.php">Drama</a><br>
                            <a href="/enovel/views/list_novel.php">Ecchi</a><br>
                            <a href="/enovel/views/list_novel.php">Fantasy</a><br>
                            <a href="/enovel/views/list_novel.php">Gender Bender</a><br>
                            <a href="/enovel/views/list_novel.php">Harem</a><br>
                            <a href="/enovel/views/list_novel.php">Historical</a><br>
                            <a href="/enovel/views/list_novel.php">Horror</a><br>
                            <a href="/enovel/views/list_novel.php">Martial arts</a><br>
                            <a href="/enovel/views/list_novel.php">Mature</a><br>
                            <a href="/enovel/views/list_novel.php">Mystery</a><br>
                            <a href="/enovel/views/list_novel.php">Psychological</a><br>
                            <a href="/enovel/views/list_novel.php">Romance</a><br>
                            <a href="/enovel/views/list_novel.php">School Life</a><br>
                            <a href="/enovel/views/list_novel.php">Science Fiction</a><br>
                            <a href="/enovel/views/list_novel.php">Slice of Life</a><br>
                            <a href="/enovel/views/list_novel.php">Sports</a><br>
                            <a href="/enovel/views/list_novel.php">Supernatural</a><br>
                            <a href="/enovel/views/list_novel.php">Tragedy</a><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>Assignment 1 - Web Programming - Fall 2018</p>
        <div id="goTop">
            <img src="/enovel/views/images/top.svg" alt="top" />
        </div>
    </footer>
</body>
<script src="scripts/jquery.min.js" type="text/javascript"></script>
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