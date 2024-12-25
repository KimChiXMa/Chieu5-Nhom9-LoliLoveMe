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
                        <form action=<?php echo "jump.php?select=9" ?> method="post" class="form-horizontal"
                            enctype="multipart/form-data">
                            <div class="control-group">
                                <label class="control-label">Username</label>
                                <div class="controls">
                                    <input type="text" required class="span11" name="username">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Password</label>
                                <div class="controls">
                                    <input type="text" required class="span11" name="pass">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">DisplayName</label>
                                <div class="controls">
                                    <input type="text" required class="span11" name="displayname">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Email</label>
                                <div class="controls">
                                    <input type="text" required class="span11" name="email">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">AVT</label>
                                <div class="controls">
                                    <input type="text" class="span11" name="avt">
                                </div>
                            </div>
                            <div class="control-group" style="opacity: 100 !important;">
                                <label class="control-label">Role</label>
                                <div class="controls">
                                    <select name="role" id="role">
                                        <option value="0">User</option>
                                        <option value="1">Admin</option>
                                    </select>
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