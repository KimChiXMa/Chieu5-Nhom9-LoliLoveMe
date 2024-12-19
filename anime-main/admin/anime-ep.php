<?php
if(!isset($_GET['id-anime'])){
    header("location:anime.php");
    exit();
}
include "header.php";
include "sidebar.php";
?>
<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i
                    class="icon-home"></i> Home</a></div>
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
                    <div class="widget-title">
                        <span class="toggle-icon icon" style="cursor: pointer;">
                            <i class="icon-chevron-down"></i>
                        </span>
                        <h5>Anime info</h5>
                    </div>
                    <div class="widget-content nopadding vieweditanime">
                        <!-- BEGIN FORM -->
                        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <div class="control-group">
                                <label class="control-label">Name</label>
                                <div class="controls">
                                    <input type="text" class="span11" name="txtAnime_name" value="<?php echo $anime_info['name']; ?>"/> *
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Author</label>
                                <div class="controls">
                                    <input type="text" class="span11" name="txtAuthor" value="<?php echo $anime_info['author']; ?>"/> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Studio</label>
                                <div class="controls">
                                    <input type="text" class="span11" name="txtStudio" value="<?php echo $anime_info['studio']; ?>"/> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Thumbnail</label>
                                <div class="controls">
                                    <input type="file" name="fileUpload" id="fileUpload">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Choose a
                                    category</label>
                                <div class="controls">
                                    <select name="cate" id="cate" multiple="multiple">
                                        
                                        <option value="1" selected>The Gioi</option>
                                        <option value="2">The Thao</option>
                                    </select> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Description</label>
                                <div class="controls">
                                    <textarea style="height: 250px;" class="span11" name="content"><?php echo $anime_info['descrip']; ?></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Chap</label>
                                <div class="controls">
                                    <input type="number" name="inputsotap" id="" value="<?php echo $anime_info['so_tap']; ?>">
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
                                if (isset($_GET['id-anime'])):
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

                                    <?php endforeach; endif; ?>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $(".widget-title").click(function () {
            $(".vieweditanime").toggle();  // Thu gọn/mở rộng phần nội dung
            var icon = $(this).find("i");
            // Thay đổi icon khi thu gọn/mở rộng
            if (icon.hasClass("icon-chevron-down")) {
                icon.removeClass("icon-chevron-down").addClass("icon-chevron-up");
            } else {
                icon.removeClass("icon-chevron-up").addClass("icon-chevron-down");
            }
        });
    });
</script>

<!-- END CONTENT -->
<?php include "footer.php" ?>