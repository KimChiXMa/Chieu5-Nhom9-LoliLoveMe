<?php
if (!isset($_GET['id-anime'])) {
    header("location:anime.php");
    exit();
}

include "header.php";
include "sidebar.php";
$huhu = 0;

    if (isset($_POST['txtAnime_name']) && isset($_POST['txtAuthor']) && isset($_POST['txtStudio']) && isset($_POST['content'])) {
        $anime->updateAnime($_POST['txtAnime_name'], $_POST['txtAuthor'], $_POST['txtStudio'], $_POST['content'], "ihentai.uk", $_POST['inputsotap'], $_POST['id-anime']);
    }


// Thêm đoạn này để reload trang sau khi submit

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
                            <i class="icon-chevron-down iconanimeinfo"></i>
                        </span>
                        <h5>Anime info</h5>
                    </div>
                    <div class="widget-content nopadding vieweditanime">
                        <!-- BEGIN FORM -->
                        <form action=<?php echo "jump.php?id-anime=".$anime_info['id']."&select=1" ?> method="post" class="form-horizontal" enctype="multipart/form-data">
                            <div class="control-group">
                                <label class="control-label">Name</label>
                                <div class="controls">
                                    <input required type="text" class="span11" name="txtAnime_name"
                                        value="<?php echo $anime_info['name']; ?>" /> *
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Author</label>
                                <div class="controls">
                                    <input type="text" class="span11" name="txtAuthor"
                                        value="<?php echo $anime_info['author']; ?>" /> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Studio</label>
                                <div class="controls">
                                    <input type="text" class="span11" name="txtStudio"
                                        value="<?php echo $anime_info['studio']; ?>" /> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Thumbnail</label>
                                <div class="controls">
                                    <input class="span11" type="text" name="inputthumbnail" value="<?php echo $anime_info['thumbnail'] ?>">
                                    <a href="https://drive.google.com/drive/folders/1qW-YpAgWAfG7e2rYVXjMet5AxuFqcWbZ" target="_blank" class="btn">GG Drive</a>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Category</label>
                                <div class="controls">
                                    <select name="cate[]" id="cate" multiple="multiple">
                                        <?php
                                        $getTagByAnimeID = $tag->getAllTag();
                                        foreach ($getTagByAnimeID as $value):
                                            ?>
                                            <option <?php if ($tag->checkSelectedTag($_GET['id-anime'], $value['id_tag']) == true) {
                                                echo "selected";
                                            } ?> value=<?php echo $value['id_tag']; ?>><?php echo $value['name_tag']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Description</label>
                                <div class="controls">
                                    <textarea style="height: 250px;" class="span11"
                                        name="content"><?php echo $anime_info['descrip']; ?></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Chap</label>
                                <div class="controls">
                                    <input type="number" name="inputsotap" id=""
                                        value="<?php echo $anime_info['so_tap']; ?>">
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
                    <div class="widget-title"> <span class="icon"><a href="form-add-ep-anime.php?id-anime=<?php echo $anime_info['id'] ?>"> <i class="icon-plus"></i>
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
                                        <form action="jump.php?select=2" method="post">
                                            <td style="text-align: center;"><?php echo $value['tentap'] ?></td>
                                            <td ondblclick=""
                                                style="text-align: center;"><input style="width: 100%;" type="text" name="input_link_ep" id="" value="<?php echo $value['id'] ?>"></td>
                                            <td style="text-align: center; width: 150px;"><a class="btn btn-success" href="<?php echo $value['id']; ?>"
                                                    target="_blank">Open</a>
                                            </td>
                                            <td style="text-align: center; width: 150px;">
                                                <!-- <form action="jump.php?select=2" method="post"> -->
                                                <!-- <a href="#45" class="btn btn-success">Edit</a> -->
                                                 <button class="btn btn-success" name="btneditlink" value="<?php echo $value['id_anime']."???KimChi???".$value['tentap'] ?>" type="submit">Edit</button>
                                                <!-- </form> -->
                                            </td>
                                            <td style="text-align: center; width: 150px;">
                                                <a href=<?php echo "jump.php?select=3&idanime=".$value['id_anime']."&tentap=".$value['tentap'] ?> class="btn btn-danger">Delete</a>
                                            </td>
                                            </form>
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
            var icon = $(this).find(".iconanimeinfo");
            // Thay đổi icon khi thu gọn/mở rộng
            if (icon.hasClass("icon-chevron-down")) {
                icon.removeClass("icon-chevron-down").addClass("icon-chevron-up");
            } else {
                icon.removeClass("icon-chevron-up").addClass("icon-chevron-down");
            }
        });
    });
</script>
<!-- double click to edit -->
<script>
    function editLink(cell) {
        // Lưu lại nội dung cũ của thẻ <td> vào một biến
        var currentText = cell.innerText;

        // Tạo một ô input để thay thế thẻ <td>
        var input = document.createElement("input");
        input.type = "text";
        input.value = currentText; // Đặt giá trị ban đầu của input là nội dung cũ

        input.style.width = "100%";

        // Thêm sự kiện khi người dùng nhập Enter hoặc mất focus (blur)
        input.onblur = function() {
            // Cập nhật lại nội dung của thẻ <td> khi mất focus
            cell.innerText = input.value;

            // Tùy chọn: Có thể gửi dữ liệu đến server tại đây nếu cần lưu thay đổi
            alert("Updated content: " + input.value); // Hiển thị alert
        }

        input.onkeydown = function(event) {
            // Kiểm tra xem người dùng có nhấn Enter không
            if (event.key === "Enter") {
                input.blur(); // Tự động mất focus khi nhấn Enter
            }
        }

        // Lưu lại các phần tử con trong <td> nếu có (ví dụ, các thẻ <a> bên trong <td>)
        var originalContent = cell.innerHTML;

        // Xóa nội dung hiện tại trong <td>
        //cell.innerHTML = '';                                ???

        // Thêm ô input vào <td>
        cell.appendChild(input);

        // Focus vào ô input để người dùng có thể tiếp tục chỉnh sửa
        input.focus();

        // Tùy chọn: Cập nhật lại nội dung cũ sau khi chỉnh sửa
        // (Nếu bạn muốn lấy lại các phần tử khác đã có trong <td>)
        input.onblur = function() {
            // Trả lại phần tử con cũ, ví dụ các thẻ <a> nếu cần
            cell.innerHTML = originalContent;

            // Sau đó, cập nhật lại nội dung của <td> từ ô input
            cell.innerText = input.value;

            //alert("Updated content: " + input.value); // Hiển thị alert
        }
    }
</script>


<!-- END CONTENT -->
<?php include "footer.php" ?>