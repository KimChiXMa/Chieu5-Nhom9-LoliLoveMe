<?php
include "header.php";
include "sidebar.php";
?>
<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
        <h1>Manage User</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="form-add-user.php"> <i class="icon-plus"></i>
                            </a></span>
                        <h5>Users List</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered
                                    table-striped">
                            <thead>
                                <tr>
                                    <th>User Id</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>DisplayName</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($user->getalluser() as $value): ?>
                                <tr class="">
                                    <td style="text-align: center; font-size: 16px;"><?php echo $value['id']; ?></td>
                                    <td style="text-align: center; font-size: 16px;"><?php echo $value['username'] ?></td>
                                    <td style="text-align: center; font-size: 16px;"><?php echo $value['pass'] ?></td>
                                    <td style="text-align: center; font-size: 16px;"><?php echo $value['displayname'] ?></td>
                                    <td style="text-align: center; font-size: 16px;"><?php echo $value['email'] ?></td>
                                    <td style="text-align: center; font-size: 16px;"><?php echo $value['role'] ?></td>
                                    <td style="text-align: center;">
                                        <a href="edit.html" class="btn
                                                    btn-success ">Edit</a>
                                        <form action="" method="">
                                            <input type="submit" class="btn btn-danger
                                                        " value="Delete">
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="row" style="margin-left: 18px;">
                            <ul class="pagination">
                                <li class="active">1</li>
                                <li>2</li>
                                <li>3</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT -->
<?php include "footer.php" ?>