<?php
include "header.php";
include "sidebar.php";
//if(isset($_GET['keyword'])):
$keyword = $_GET['keyword'];
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$count = 5;
$total = count($item->searchCount('keyword'));
$url = $_SERVER['PHP_SELF'] . "?keyword=" . $keyword;
$search = $item->search($keyword, 0, $count)
?>
<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
        <h6>Result: found 10 item(s) with keyword "Samsung"</h6>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="form.html"> <i class="icon-plus"></i>
                            </a></span>
                        <h5>Products</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered
                                    table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Title</th>
                                    <th>Excerpt</th>
                                    <th>Category</th>
                                    <th>Feature</th>
                                    <th>View</th>
                                    <th>Author</th>
                                    <th>Created at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td width="250">
                                        <img src="./images/lenovo-phab-2gb-400x460-400x460.png" />
                                    </td>
                                    <td>Máy tính bảng Lenovo Phab 2GB</td>
                                    <td>SamSung</td>
                                    <td>Tablet</td>
                                    <td>Bút S-pen giúp Galaxy Tab A Plus
                                        trở thành 1 trợ thủ đắc lực cho
                                        người dùng
                                        văn p...</td>
                                    <td>4,490,000 VND</td>
                                    <td>1</td>
                                    <td>2016-04-29 00:00:00</td>
                                    <td>
                                        <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                        <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td width="250">
                                        <img src="./images/samsung-galaxy-tab-a-70-400x460.png" />
                                    </td>
                                    <td>Máy tính bảng Samsung Galaxy Tab
                                        A6 7.0</td>
                                    <td>SamSung</td>
                                    <td>Tablet</td>
                                    <td>Bút S-pen giúp Galaxy Tab A Plus
                                        trở thành 1 trợ thủ đắc lực cho
                                        người dùng
                                        văn p...</td>
                                    <td>4,490,000 VND</td>
                                    <td>1</td>
                                    <td>2016-04-29 00:00:00</td>
                                    <td>
                                        <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                        <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td width="250">
                                        <img src="./images/samsung-galaxy-tab-a-plus-97-sm-p555-n-190x190.jpg" />
                                    </td>
                                    <td>Galaxy Tab S2 8</td>
                                    <td>SamSung</td>
                                    <td>Tablet</td>
                                    <td>Bút S-pen giúp Galaxy Tab A Plus
                                        trở thành 1 trợ thủ đắc lực cho
                                        người dùng
                                        văn p...</td>
                                    <td>9,990,000 VND</td>
                                    <td>1</td>
                                    <td>2016-04-29 00:00:00</td>
                                    <td>
                                        <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                        <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td width="250">
                                        <img src="./images/samsung-galaxy-tab-a-plus-97-sm-p555-n-190x190.jpg" />
                                    </td>
                                    <td>Galaxy Tab A 9.7</td>
                                    <td>SamSung</td>
                                    <td>Tablet</td>
                                    <td>Bút S-pen giúp Galaxy Tab A Plus
                                        trở thành 1 trợ thủ đắc lực cho
                                        người dùng
                                        văn p...</td>
                                    <td>7,990,000 VND</td>
                                    <td>1</td>
                                    <td>2016-04-29 00:00:00</td>
                                    <td>
                                        <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                        <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td width="250">
                                        <img src="./images/ipad-pro-wifi-cellular-128gb-300-200x200.jpg" />
                                    </td>
                                    <td>iPad Pro wifi 32GB</td>
                                    <td>Apple</td>
                                    <td>Tablet</td>
                                    <td>iPad Pro được trang bị màn hình
                                        12.9 inch, lớn nhất từ trước đến
                                        nay đối
                                        vớ...</td>
                                    <td>19,999,000 VND</td>
                                    <td>1</td>
                                    <td>2016-04-28 00:00:00</td>
                                    <td>
                                        <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                        <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td width="250">
                                        <img src="./images/ipad-pro-wifi-cellular-128gb-300-200x200.jpg" />
                                    </td>
                                    <td>iPad Pro 3G 128GB</td>
                                    <td>Apple</td>
                                    <td>Tablet</td>
                                    <td>iPad Pro được trang bị màn hình
                                        12.9 inch, lớn nhất từ trước đến
                                        nay đối
                                        vớ...</td>
                                    <td>26,999,000 VND</td>
                                    <td>1</td>
                                    <td>2016-04-29 00:00:00</td>
                                    <td>
                                        <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                        <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td width="250">
                                        <img src="./images/samsung-galaxy-s6-edge-plus-400x533.png" />
                                    </td>
                                    <td>Điện thoại Samsung Galaxy S6
                                        32GB</td>
                                    <td>SamSung</td>
                                    <td>Cellphone</td>
                                    <td>Màn hình: Quad HD, 5.7", 1440 x
                                        2560 pixels
                                        Camera sau: 16 MP, Quay phim 4K
                                        2160p@30fps
                                        Camera t...</td>
                                    <td>14,500,000 VND</td>
                                    <td>1</td>
                                    <td>2016-01-08 00:00:00</td>
                                    <td>
                                        <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                        <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td width="250">
                                        <img src="./images/samsung-galaxy-s6-edge-plus-400x533.png" />
                                    </td>
                                    <td>Điện thoại Samsung Galaxy S6
                                        Edge 32GB</td>
                                    <td>SamSung</td>
                                    <td>Cellphone</td>
                                    <td>Màn hình: Quad HD, 5.7", 1440 x
                                        2560 pixels
                                        Camera sau: 16 MP, Quay phim 4K
                                        2160p@30fps
                                        Camera t...</td>
                                    <td>17,500,000 VND</td>
                                    <td>0</td>
                                    <td>2016-01-04 00:00:00</td>
                                    <td>
                                        <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                        <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td width="250">
                                        <img src="./images/samsung-galaxy-s6-edge-plus-400x533.png" />
                                    </td>
                                    <td>Điện thoại Samsung Galaxy Note 5</td>
                                    <td>SamSung</td>
                                    <td>Cellphone</td>
                                    <td>Màn hình: Quad HD, 5.7", 1440 x
                                        2560 pixels
                                        Camera sau: 16 MP, Quay phim 4K
                                        2160p@30fps
                                        Camera t...</td>
                                    <td>18,000,000 VND</td>
                                    <td>0</td>
                                    <td>2016-01-04 00:00:00</td>
                                    <td>
                                        <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                        <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td width="250">
                                        <img src="./images/samsung-galaxy-s6-edge-plus-400x533.png" />
                                    </td>
                                    <td>Điện thoại Samsung Galaxy S6
                                        Edge 64GB</td>
                                    <td>SamSung</td>
                                    <td>Cellphone</td>
                                    <td>Màn hình: Quad HD, 5.7", 1440 x
                                        2560 pixels
                                        Camera sau: 16 MP, Quay phim 4K
                                        2160p@30fps
                                        Camera t...</td>
                                    <td>18,500,000 VND</td>
                                    <td>0</td>
                                    <td>2016-01-05 00:00:00</td>
                                    <td>
                                        <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                        <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                    </td>
                                </tr>
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
<?php include "footer.php"; ?>