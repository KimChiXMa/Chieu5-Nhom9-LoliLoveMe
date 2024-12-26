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
            Update User
            <br>
            <?php
            $userinfo = $user->getUserByID($_GET['iduser'])[0];
            ?>
        </h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Update User</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <!-- BEGIN FORM -->
                        <form action=<?php echo "jump.php?select=10&userid=".$userinfo['id']?> method="post" class="form-horizontal"
                            enctype="multipart/form-data">
                            <div class="control-group">
                                <label class="control-label">Username</label>
                                <div class="controls">
                                    <input type="text" required class="span11" name="username" value=<?php echo $userinfo['username']; ?>>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Password</label>
                                <div class="controls">
                                    <input type="text" required class="span11" name="pass" value=<?php echo $userinfo['pass']; ?>>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">DisplayName</label>
                                <div class="controls">
                                    <input type="text" required class="span11" name="displayname" value=<?php echo $userinfo['displayname']; ?>>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Email</label>
                                <div class="controls">
                                    <input type="text" required class="span11" name="Email" value=<?php echo $userinfo['email']; ?>>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">AVT</label>
                                <div class="controls">
                                    <input type="text" required class="span11" name="avt" value=<?php echo $userinfo['image']; ?>>
                                </div>
                            </div>
                            <div class="control-group" style="opacity: 100 !important;">
                                <label class="control-label">Role</label>
                                <div class="controls">
                                    <select name="role" id="role">
                                        <option selected value="0">User</option>
                                        <option <?php if($userinfo['role']==1){echo "selected";} ?> value="1">Admin</option>
                                    </select>
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