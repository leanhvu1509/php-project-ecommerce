  <!-- Main menu -->
                <nav class="navbar-main">
                    <div id="mb_mainnav">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-12 col-xs-12 vertical_menu">
                                    <div id="mb_verticle_menu" class="menu-quick-select">
                                        <div class="title_block">
                                            <span>Danh mục sản phẩm</span>
                                        </div>
                                        <div id="menuverti" class="block_content navbar_menuvertical">
                                            <ul class='nav_verticalmenu'>
                                                <?php if(!isset($_GET["view"])||$_GET["view"]!='shoppingcart'&&$_GET["view"]!='checkout'&&$_GET["view"]!='dangky'&&$_GET["view"]!='dangnhap'){?>
                                                <?php 
                                                    $sqlSelect = "SELECT * FROM category";
                                $result = mysqli_query($conn, $sqlSelect) or die("Lỗi truy vấn");
                                                    while($row = mysqli_fetch_array($result)){
                                                ?>
                                            <li class="has-child level0">
                                                <a class='' href="index.php?view=listproduct&id=<?php echo $row["id"]?>"><img class='' src='' alt=''> <span><?php echo $row["CatName"]?></span></a>
                                       		</li>
                                    <!--         <li class="level0">
                                            	<a class='' href='#'><img class='' src='' alt=''> <span>Nội khoa</span></a>
                                            </li>
                                            <li class="level0">
                                            	<a class='' href='#'><img class='' src='' alt=''> <span>Nhi khoa</span></a>
                                            </li>
                                            <li class="level0">
                                            	<a class='' href='#'><img class='' src='' alt=''> <span>Sản phụ khoa</span></a>
                                            </li>
                                            <li class="level0">
                                                <a class='' href='#'><img class='' src='' alt=''> <span>Tai mũ họng</span></a>
                                            </li>
                                            <li class="level0">
                                                <a class='' href='#'><img class='' src='' alt=''> <span>Chuẩn đoán hình ảnh</span></a>
                                            </li>
                                            <li class="level0">
                                                <a class='' href='#'><img class='' src='' alt=''> <span>Dụng cụ y dược</span></a>
                                            </li>
                                            <li class="has-child level0">
                                                <a class='' href='#'><img class='' src='' alt=''> <span>Thẩm mỹ</span></a>
                                            </li>
                                            <li class="level0">
                                            	<a class='' href='#'><img class='' src='' alt=''><span>Điều dưỡng</span></a>
                                            </li>
                                            <li class="level0">
                                            	<a class='' href='#'><img class='' src='' alt=''><span>Sách dược</span></a>
                                            </li> -->
                                        <?php }?> <?php }?>
                                            </ul class='nav_verticalmenu'>
                                        </div>
                                    </div>
                                </div>
                                <nav class="col-md-9 col-sm-12 col-xs-12 p-l-0">
                                    <ul class='menu nav navbar-nav menu_hori'>
                                    <li class="level0"><a class='' href='trang-chu.html'><span>Trang chủ</span></a></li>
                                    <li class="level0"><a class='' href='gioi-thieu.html'><span>Giới thiệu</span></a></li>
                                    <li class="level0"><a class='' href='san-pham.html'><span>Sản phẩm</span></a></li>
                                    <li class="level0"><a class='' href='lien-he.html'><span>Liên hệ</span></a></li>
                                    </ul class='menu nav navbar-nav menu_hori'>
                                </nav>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- End main menu -->
                <script type="text/javascript">
                    $(document).ready(function () {
                        var str = location.href.toLowerCase();
                        $("ul.menu li a").each(function () {
                            if (str.indexOf(this.href.toLowerCase()) >= 0) {
                                $("ul.menu li").removeClass("active");
                                $(this).parent().addClass("active");
                            }
                        });
                    });
                </script>
                <!--Template--
                    --End-->
            </div>