<?php
session_start();
$page_name = "Results";
$index = 4;
require_once('header.php');
require_once('navbar.php');
if (isset($_GET['cat_id'])) {
    ?>
    <script type="text/javascript">
        var id = <?= $_GET['cat_id']; ?>;
        $.ajax({
            url: "classes/book.php",
            method: "GET",
            data: {
                cat: "fetch_category",
                id: id
            },
            success: function(e) {
                if (e === 0) {
                    document.location.href = "404.php";
                } else {

                }
            }
        });
    </script>
<?php
} else {
    echo '<script>document.location.href="404.php"</script>';
}
?>
<!-- END NAVBAR -->
<!-- END HEADER -->
<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-xs-3 ">
            <br>
            <div class="list-group " id="branches">
                <i class="list-group-item">Categories</i>
                <script type="text/javascript">
                    var id = <?php echo $_GET['cat_id']; ?>;
                    $.ajax({
                        url: "classes/book.php",
                        method: "GET",
                        data: {
                            branch: "fetch_branch",
                            place: 'categories',
                            id: id
                        },
                        success: function(e) {
                            $('#branches').html(e);
                        }

                    });
                </script>
            </div>

        </div>

        <div class="col-xs-9">
            <div class="row mt ">
                <script type="text/javascript">
                    function showbookbycatid(pagenumber) {
                        var id = <?= $_GET['cat_id']; ?>;
                        $.ajax({
                            url: "classes/book.php",
                            method: "GET",
                            data: {
                                id: id,
                                book_operation: "showbycat",
                                page: pagenumber
                            },
                            success: function(e) {
                                $('#data').html(e);

                            }
                        });
                    }
                    showbookbycatid(1);
                </script>
                <section id="data">

                </section>
                <script type="text/javascript">
                    var id = <?= $_GET['cat_id']; ?>;
                    $.ajax({
                        url: "classes/book.php",
                        method: "GET",
                        data: {
                            id: id,
                            book_operation: "showrowsnum",
                        },
                        success: function(e) {
                            $('#pagin').html(e);
                            
                        }
                    });
                </script>
                <section id="pagin">
                </section>
                


            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
<?php
require_once('footer.php');
?>