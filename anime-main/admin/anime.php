<?php
include "header.php";
include "sidebar.php";
?>
<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
        <h1>Manage Anime</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="form-add-anime.php"> <i class="icon-plus"></i>
                            </a></span>
                        <h5>Anime</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered
                                    table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Author</th>
                                    <th>Studio</th>
                                    <th>Descrip</th>
                                    <th>Ep Num</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($getAllItem as $value) :  ?>

                                    <tr class="">
                                        <td width="200">
                                            <img src="<?php echo $anime->proceedImg($value['thumbnail']); ?>" />
                                        </td>
                                        <td style="text-align: center; vertical-align: middle;"><?php echo $value['name']; ?></td>
                                        <td style="text-align: center; vertical-align: middle;"><?php echo $value['author']; ?></td>
                                        <td style="text-align: center; vertical-align: middle;"><?php echo $value['studio']; ?></td>
                                        <td><?php echo $value['descrip']; ?></td>
                                        <td><?php echo $value['so_tap']; ?></td>
                                        <td>
                                            <a href="anime-ep.php"><button button class="btn btn-success">Edit</button></a>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="row" style="margin-left: 18px;">
                            <ul class="pagination">
                                <li class="active"><a href="">1</a>
                                </li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
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