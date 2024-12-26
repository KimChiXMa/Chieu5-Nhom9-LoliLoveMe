<?php
include "header.php";
include "sidebar.php";
if(!isset($_GET['page'])){
    $page = 1;
}else{
    $page = $_GET['page'];
}
?>
<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i
                    class="icon-home"></i> Home</a></div>
        <h1>Manage Categories</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="form-add-cate.php"> <i class="icon-plus"></i>
                            </a></span>
                        <h5>Categories</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered
                                    table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $getCateLimit = $cate->getCateLimit($page,10);
                                foreach ($getCateLimit as $value):
                                    ?>
                                    <tr class="">

                                        <td style="text-align: center; font-size: 16px;"><?php echo $value['name_tag'] ?>
                                        </td>

                                        <td style="text-align: center;">
                                            <a href=<?php echo "form-update-cate.php?idcate=" . $value['id_tag']; ?> class="btn
                                                            btn-success">Edit</a>
                                            <a href=<?php echo "jump.php?select=7&idcate=" . $value['id_tag'] ?> class="btn
                                                            btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <div class="row" style="margin-left: 18px;">
                            <ul class="pagination">
                                <?php
                                $total = count($getallCate);
                                $url = $_SERVER['PHP_SELF'];
                                echo $anime->paginateItem($url, $total, 10); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- END CONTENT -->
<?php include "footer.php" ?>