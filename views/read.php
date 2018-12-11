<!DOCTYPE html>
<html>

<head>
    <title>Chapter 13- Dungeon Defense</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <link rel="stylesheet" type="text/css" href="/enovel/views/styles/header.css">
    <link rel="stylesheet" href="/enovel/views/styles/footer.css">
    <link rel="stylesheet" type="text/css" href="/enovel/views/styles/list_novel.css">
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
    <div class="container-fluid chapter-comic pb-4">
        <div class="row">
            <div class="col-12 heading-title">
                <div class="text-center">
                    <h2 class="text-white py-3">Dungeon Defense</h2>
                </div>
            </div>
            <h3 class="border-chapter">Chapter 18</h3>
            <div class="col-12 col-sm-10 offset-sm-1 pt-5">
                <div class="card">

                    <div class="card-header pt-5 bg-chapter text-center px-0">
                        <button class="btn btn-success text-white m-1" style="box-shadow: 2px 2px black;">Previous</button>
                        <a href="novel_info.php"><button class="btn btn-primary text-white m-1" style="box-shadow: 2px 2px black;">Chapter list</button></a>
                        <button class="btn btn-success text-white m-1" style="box-shadow: 2px 2px black;">Next</button>
                    </div>
                    <ul class="list-group list-group-flush content">
                        <li class="list-group-item">
                            <p>In front of the main gate of a large palace, many carriages were lined up. Without pause, refined ladies and gentlemen got off their carriages. Their appearances and outfits all varied in style but there was one thing that
                                they all had in common; they all had horns.</p>
                            <p>Dantalian was currently receiving the spotlight as the main character in a romance story. A man blinded by love. That was my image to the people. It was impossible to leave Lapis Lazuli and wander on my own at this point.</p>
                            <p>Furthermore, I had taken a liking to this concept. A fool who had indulged in his passion and had lost all of his rationality. Was this not appropriate? No one would be cautious around a fool like that.</p>
                            <p>Smart people would only scorn a dullard like me and do nothing more. Followed by coming to a misunderstanding that the true culprit was Lapis Lazuli. All suspicion would focus on Lapis Lazuli, while I was rejoicing my days
                                of freedom……</p>
                            <p>Thanks to the Black Death I had made an incredible amount of money, and now, the only thing I had left to do was to shut myself in my castle and live the rest of my life as a shut-in. The gate to Heaven was already right in
                                front of me.</p>
                            <p>“…… Your highness is making the same face your highness makes when thinking of something perverted.”</p>
                            <p>After 20 minutes had passed, the main gate became more vacant. It was then that we had departed from our carriage and entered the ballroom. We had waited until now because we did not want to deal with being harassed by other
                                people.
                            </p>
                            <p>Not being bothered by their gazes, I made my way to a corner of the ballroom and took my place there. The sound of people whispering around us could be heard. I was not able to hear what they were saying exactly, but I knew
                                it was not a favorable mood. It was close to the feeling of them being aghast by the fact that I had arrived at the ball actually accompanied by an outcast as a partner.</p>
                            <p>“Oh, Lazuli. Do not live so selfishly. We are currently the couple throwing around the hottest scandal on the continent. The people are demanding a spectacle from us. Can you not touch lips with the meaning of being a service
                                to the people? Demonstrate some sacrifice mentality for once.”</p>
                            <p>I had gone to see a stalactite cave before during a school trip before. From what I could see, the ceiling now was 2-3 times higher than that cave. It was so high up that I could just barely see the top. I couldn’t possibly
                                imagine how faraway the dark mouth of the cave was.</p>
                            <p>That’s why the kidnapping when I was in my third year of elementary school was serious. The motive then was to plainly obtain my body. I had to unconditionally keep my mouth shut. No reason whatsoever……</p>
                            <p>I wonder if it was because I had suddenly found myself in an unfamiliar environment, but I wasn’t paying attention to the smell until now. Now that I’ve realized it, the revolting smell was so intense that it felt like it got
                                past my nostril’s and shook my very brain.</p>
                            <p>I unintentionally let out a curse. I had to conclude that I couldn’t run or walk. The pain wasn’t ordinary. If the kidnapper approached now then it was impossible to escape. Perhaps they broke my ankle on purpose. Keeping safety
                                measures. This was probably why they didn’t use drugs.</p>
                            <p>Foolish. I don’t know about someone else, but the person currently leading our household was my second half little sister. She could manage the household with composure, although not as good as I did. You’ll get hurt if you
                                underestimate my sibling just because she’s young.</p>
                        </li>
                    </ul>
                    <div class="card-header pb-4 bg-chapter text-center px-0">
                        <button class="btn btn-success text-white m-1" style="box-shadow: 2px 2px black;">Previous</button>
                        <button class="btn btn-primary text-white m-1" style="box-shadow: 2px 2px black;">Chapter list</button>
                        <button class="btn btn-success text-white m-1" style="box-shadow: 2px 2px black;">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p class="mb-0">Assignment 1 - Web Programming - Fall 2018</p>
        <div id="goTop">
            <img src="images/top.svg" alt="top" style="width: 100%;" />
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