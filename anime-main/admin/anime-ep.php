<?php
include "header.php";
include "sidebar.php";
?>
<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i
                    class="icon-home"></i> Home</a></div>
        <h1><?php echo $anime->getAnimeByID($_GET['id-anime'])[0]['name'] ?></h1>
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
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                if(isset($_GET['id-anime'])):
                                foreach ($anime->getAllEpOfAnime($_GET['id-anime']) as $value):
                                    ?>

                                    <tr class="">
                                        <td style="text-align: center;"><?php echo $value['tentap'] ?></td>
                                        <td onclick="copyLink('<?php echo $value['id']; ?>',this)"
                                            style="text-align: center;"><?php echo $value['id'] ?></td>
                                        <td style="text-align: center; width: 150px;"><a href="<?php echo $value['id']; ?>"
                                                target="_blank"><button class="btn btn-success">Open</button></a>
                                        </td>
                                        <td style="text-align: center; width: 150px;">
                                            <a href="#45" class="btn btn-success">Edit</a>
                                        </td>
                                        <td style="text-align: center; width: 150px;">
                                            <a href="#45" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>

                                <?php endforeach; endif;?>
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
    var lastCopiedElement = null; // Biến để lưu trữ phần tử cuối cùng được sao chép
    function copyLink(id, element) {
        //nếu đã có cái chọn trước đó, set bg thành default
        if (lastCopiedElement) {
            lastCopiedElement.style.backgroundColor = "";
        }

        var tempInput = document.createElement("input"); // 1
        tempInput.value = id; // 2
        document.body.appendChild(tempInput); // 3
        tempInput.select(); // 4
        try {
            if (document.execCommand("copy")) {
                element.style.backgroundColor = "#d3f9d8";
            }
            else {
                element.style.backgroundColor = "#ff0000";
            }
        } catch (err) {
            console.log("Copy hổng có được! Huhuhu")
        }

        document.body.removeChild(tempInput); // 6
        //lưu lại thằng được chọn gần nhất
        lastCopiedElement = element;
    }

</script>
<!-- END CONTENT -->
<?php include "footer.php" ?>