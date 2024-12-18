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
                    <div class="widget-title"> <span class="icon"><a href="form.html"> <i class="icon-plus"></i>
                            </a></span>
                        <h5>Anime</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered
                                    table-striped">
                            <thead>
                                <tr>
                                    <th>Ep</th>
                                    <th>Link Anime (Click to copy)</th>
                                    <th>Open link</th>
                                    <th>Studio</th>
                                    <th>Descrip</th>
                                    <th>Ep Num</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($anime->getAllEpOfAnime(1) as $value) :  ?>

                                    <tr class="">
                                        <td style="text-align: center;"><?php echo $value['tentap'] ?></td>
                                        <td onclick="copyLink('<?php echo $value['id']; ?>',this)" style="text-align: center;"><?php echo $value['id'] ?></td>
                                        <td style="text-align: center;"><a href="<?php echo $value['id']; ?>" target="_blank"><button class="btn btn-success btn-mini">Open</button></a></td>
                                        <td style="text-align: center;">
                                            <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
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
<script>
function copyLink(id,element) {
    var tempInput = document.createElement("input"); // 1
    tempInput.value = id; // 2
    document.body.appendChild(tempInput); // 3
    tempInput.select(); // 4
    document.execCommand("copy"); // 5
    document.body.removeChild(tempInput); // 6
    element.style.backgroundColor = "#d3f9d8";
    alert("Đã sao chép link"); // 7
}

</script>
<!-- END CONTENT -->
<?php include "footer.php" ?>