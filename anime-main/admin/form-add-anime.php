<?php
include "header.php";
include "sidebar.php";
?>
<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i>
                Home</a></div>
        <h1>Add User</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Add User</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <!-- BEGIN FORM -->
                        <form action=<?php echo "jump.php?select=12" ?> method="post" class="form-horizontal"
                            enctype="multipart/form-data">
                            <div class="control-group">
                                <label class="control-label">Name</label>
                                <div class="controls">
                                    <input type="text" required class="span11" name="name">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Author</label>
                                <div class="controls">
                                    <input type="text" required class="span11" name="author">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Studio</label>
                                <div class="controls">
                                    <input type="text" required class="span11" name="studio">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Description</label>
                                <div class="controls">
                                <textarea style="height: 250px;" class="span11" name="content"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Thumbnail</label>
                                <div class="controls">
                                    <input type="text" class="span11" name="thumbnail">
                                </div>
                            </div>
                            <div class="control-group" style="opacity: 100 !important;">
                                <label class="control-label">Ep</label>
                                <div class="controls">
                                    <input class="span11" type="number" name="sotap" id="">
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