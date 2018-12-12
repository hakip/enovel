 
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