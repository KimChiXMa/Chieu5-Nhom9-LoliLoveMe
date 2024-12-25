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
        <?php
            $anime_info = $anime->getAnimeByID($_GET['id-anime'])[0];
            echo $anime_info['name'] . "<br>" . "ID: " . $anime_info['id'];
            ?>
        </h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Add Ep</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <!-- BEGIN FORM -->
                        <form action=<?php echo "jump.php?select=4&id-anime=".$anime_info['id'] ?> method="post" class="form-horizontal" enctype="multipart/form-data">
                            <div class="control-group">
                                <label class="control-label">Ep </label>
                                <div class="controls">
                                    <input required type="number" class="span11" name="Ep" /> *
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Link</label>
                                <div class="controls">
                                    <textarea required class="span11" name="link"></textarea>
                                </div>
                            </div>
                            <div class="form-actions" style="text-align: right;">
                                <button type="submit" class="btn btn-success">Add</button>
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