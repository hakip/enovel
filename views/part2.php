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