

<?php
include_once 'function.php';
$sqlSelectCat = "Select * from category";
$resultCat = mysqli_query($conn, $sqlSelectCat) or die("Lỗi truy vấn");

if (isset($_POST["addnew"])) {
    $table = 'product';
    $data = $_POST;
    $data["status"] = ($data["status"])?$data["status"]:0;
    
$fileName="";
 $path = "../public/Uploads/product/";
 
if(isset($_FILES["image"])){
   
 if ($_FILES["image"]["type"]=="image/jpeg"||$_FILES["image"]["type"]=="image/jpg"||$_FILES["image"]["type"]=="image/png"||$_FILES["image"]["type"]=="image/gif") {
  if ($_FILES["image"]["size"]<120000) {
                # code...
                     if ($_FILES["image"]["error"]==0) {
                        //đưa file ở đây
                       $filename = $_FILES["image"]["tmp_name"];
                       $target_file = $path.$_FILES["image"]['name'];
                      move_uploaded_file($filename, $target_file);
                      $fileName.=$_FILES["image"]['name'];
                    }else{
                         echo "Lỗi file";
                  }
                }else{
                   echo "Độ lớn file không quá  12mb!!";
                }
                
           }else{
                echo "File không đúng định dạng";
             }
             // echo "<prE>";print_r($_FILES);die;
    }
    $data["image"] =$fileName; 
    $sqlInsert = save($table,$data);
    mysqli_query($conn, $sqlInsert) or die("Lỗi thêm mới".$sqlInsert);
    header('Location: index.php?module=listproduct');
}
?>
<div class="container-fluid  dashboard-content">
    <div class="row">
        <!-- ============================================================== -->
        <!-- basic form -->
        <!-- ============================================================== -->
        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Thêm sản phẩm</h5>
                <div class="card-body">
                    <form action="" method="post" id="basicform" data-parsley-validate="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="ProName">Tên sản phẩm</label>
                            <input id="ProName"  type="text" name="ProName"  placeholder="Nhập tên sản phẩm" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="catId">Loại sản phẩm</label>
                            <select name="id" id="id" class="form-control">
                                <option value="">---Chọn loại sản phẩm---</option>
                                <?php while ($rowcat = mysqli_fetch_assoc($resultCat)){?>
                                <option value="<?php echo $rowcat["id"]?>"><?php echo  $rowcat["CatName"]?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Giá sản phẩm</label>
                            <input id="price"  type="text" name="price"  placeholder="Nhập giá" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="image">Ảnh sản phẩm</label>
                            <input id="image"  type="file" name="image"  placeholder="" class="form-control">
                        </div>
                         <div class="form-group">
                            <label for="sale">Sale off</label>
                            <input id="sale"  type="text" name="sale_off"  placeholder="Nhập giá" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="mota">Mô tả</label>
                            <textarea cols="60" name="mota" id="mota"></textarea>
                            <script>    CKEDITOR.replace( 'mota' );</script>
                        </div>
                         <div class="form-group">
                                <label class="be-checkbox custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="status" id="status" value="1"><span class="custom-control-label">Trạng thái</span>
                                </label>
                            </div>
                        <div class="row">
                           
                            <div class="col-sm-6 pl-0">
                                <p class="text-right">
                                    <button type="submit" class="btn btn-space btn-primary" name="addnew">Thêm mới</button>

                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end basic form -->
        <!-- ============================================================== -->       
    </div>
</div>

