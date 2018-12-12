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