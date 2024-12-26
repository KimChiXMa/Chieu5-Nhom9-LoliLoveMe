<?php
include "header.php";
include "sidebar.php";
?>
<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i>
                Home</a></div>
        <h1>
            Update Category
            <br>
            <?php
            $cateinfo = $cate->getCateByID($_GET['idcate'])[0];
            echo "Name category: ".$cateinfo['name_tag']."<br>";
            echo "ID: ".$cateinfo['id_tag'];
            ?>
        </h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Update Category</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <!-- BEGIN FORM -->
                        <form action=<?php echo "jump.php?select=8&cateid=".$cateinfo['id_tag']?> method="post" class="form-horizontal"
                            enctype="multipart/form-data">
                            <div class="control-group">
                                <label class="control-label">Category name</label>
                                <div class="controls">
                                    <textarea required class="span11" name="namecate"></textarea>
                                </div>
                            </div>
                            <div class="form-actions" style="text-align: right;">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END FORM -->
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT -->
<?php include "footer.php" ?>