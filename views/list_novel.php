<!DOCTYPE html>
<html>

<head>
    <title>Novel list</title>
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/enovel/views/styles/header.css">
    <link rel="stylesheet" type="text/css" href="/enovel/views/styles/list_novel.css">
    <link rel="stylesheet" href="enovel/views/styles/footer.css">
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
    <div class="container-fluid list-comics">
        <div class="row">
            <div class="col-12 heading-title">
                <div class="text-center">
                    <h1 class="text-white py-3">Novel list</h1>
                </div>
            </div>
            <div class="col-12 bg-filter-letter fillter-label mb-3">
                <div class="row pt-2" id="filter-letter">
                    <div class="m-1">
                        <label for="radio-choice-all" class="checked">All</label>
                        <input type="radio" name="filter-word" checked id="radio-choice-all" class="d-none" tabindex="2" value="all" />
                    </div>
                    <div class="m-1">
                        <label for="radio-choice-none">#</label>
                        <input type="radio" name="filter-word" id="radio-choice-none" class="d-none" tabindex="2" value="none" />
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-3 pl-md-5 pt-md-4 col-12">
                        <div class="collapse-wrapper">
                            <h5><a data-toggle="collapse" href="#collapse-state" aria-expanded="true">Status</a></h5>
                            <div class="collapse show item" id="collapse-state">
                                <p class="mb-0"> <input checked type="checkbox" name="complete" id="complete"><label class="pl-2" for="complete">Completed</label></p>
                                <p> <input type="checkbox" checked name="pending" id="pending"><label class="pl-2" for="pending">Ongoing</label></p>
                            </div>
                        </div>
                        <div class="collapse-wrapper">
                            <h5><a data-toggle="collapse" href="#collapse-type" aria-expanded="true"> Genre </a></h5>
                            <div class="collapse show item" id="collapse-type">
                                <p class="mb-0">Action</p>
                                <p class="mb-0">Adventure</p>
                                <p class="mb-0">Comedy</p>
                                <p class="mb-0">Drama</p>
                                <p class="mb-0">Fantasy</p>
                                <p class="mb-0">Historical</p>
                                <p class="mb-0">Horror</p>
                                <p class="mb-0">Martial arts</p>
                                <p class="mb-0">Mature</p>
                                <p class="mb-0">Mystery</p>
                                <p class="mb-0">Psychological</p>
                                <p class="mb-0">Romance</p>
                                <p class="mb-0">Sports</p>
                                <p>Supernatural</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-12">
                        <div class="row d-flex justify-content-between px-3 item">
                            <h5 class="d-flex flex-column justify-content-center">Sort by</h5>
                            <div class="m-1 fillter-label" id="filter-type">
                                <label for="radio-choice-abc" class="checked">Alphabet</label>
                                <input type="raido" name="filter-type" checked id="radio-choice-abc" class="d-none" tabindex="2" value="abc" />
                                <label for="radio-choice-count-reads">Views</label>
                                <input type="raido" name="filter-type" id="radio-choice-count-reads" class="d-none" tabindex="2" value="counter" />
                                <label for="radio-choice-days">Lasted Update</label>
                                <input type="raido" name="filter-type" id="radio-choice-days" class="d-none" tabindex="2" value="days" />
                            </div>
                            <div class="pr-3 pt-2">
                                <input type="radio" name="yes_no" id="filter_up" checked><label for="filter_up" class="px-2">Ascending</label>
                                <input type="radio" name="yes_no" id="filter_down"><label for="filter_down" class="pl-2">Descending</label>
                            </div>
                        </div>
                        <div class="row table-pagination pr-md-5 px-3 pl-md-0">
                            <table class="table table-striped danhsach">
                                <thead>
                                    <tr style="background-color: #274e13;" class="text-white">
                                        <th>Novel title</th>
                                        <th>Newest Chapter</th>
                                        <th>Upload Date</th>
                                        <th class="text-center">Views</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                            <div class="col-10 d-md-flex justify-content-md-center danhsach">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <span class="page-link">First</span>
                                        </li>
                                        <li class="page-item active">
                                            <span class="page-link">
								        1
								        <span class="sr-only">(current)</span>
                                            </span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Last</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>Assignment 1 - Web Programming - Fall 2018</p>
    </footer>
</body>
<script type="text/javascript">
    //$('input:radio').click(function(){
    var arr_letter = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
    $(arr_letter).each(function() {
        var string = '<div class="m-1 text-uppercase"><label for="radio-choice-' + this[0] + '">' + this[0] + '</label><input type="radio" name= "filter-word" id="radio-choice-' + this[0] + '"class="d-none" tabindex="2" value="' + this[0] + '" /></div>'
        $('#filter-letter').append(string);
    })
    $('input').click(function() {
        $(this).closest('#filter-type').find('label').not("label[for='" + $(this).attr("id") + "']").removeClass('checked');
        $(this).closest('#filter-letter').find('label').not("label[for='" + $(this).attr("id") + "']").removeClass('checked');
        $("label[for='" + $(this).attr("id") + "']").toggleClass('checked');
    });
</script>

</html>