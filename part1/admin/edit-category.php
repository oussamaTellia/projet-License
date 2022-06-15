<?php   
session_start();
include('../middleware/adminMiddleware.php');
include('includes/header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
                if(isset($_GET['id']))
                {
                    $id = $_GET['id'];
                    $category = getById("categories", $id);

                    if(mysqli_num_rows($category) > 0)
                    {
                        $data = mysqli_fetch_array($category);

                        ?>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit Category</h4>
                                    <a href="category.php" class="btn btn-primary float-end">retour</a>
                                </div>
                                <div class="card-body">
                                    <form action="code.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="hidden" value="<?= $data['id'] ?>" name="category_id" >
                                                <label for="name">Name</label>
                                                <input type="text" name="name" value ="<?= $data['name'] ?>" placeholder="Enter category nom" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="slug"  >Slug</label>
                                                <input type="text" value ="<?= $data['slug'] ?>" placeholder="Enter slug" name="slug" class="form-control">
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <label for=""  >Description</label>
                                                <textarea name="description" rows="3" placeholder="Enter description" class="form-control"> <?= $data['description'] ?></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <label for=""  >Upload Image</label>
                                                <input type="file" name="image" class="form-control">
                                                <label for="">Current image</label>
                                                <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
                                                <img src="../uploads/<?= $data['image'] ?>" width="50px" height="50px">
                                            </div>
                                            <div class="col-md-12">
                                                <label for=""  >meta title</label>
                                                <input type="text" value ="<?= $data['meta_title'] ?>" name="meta_title" class="form-control">
                                            </div>
                                            <div class="col-md-12">
                                                <label for=""  >Meta description</label>
                                                <textarea name="meta_description" rows="3" placeholder="Enter meta description" class="form-control"><?= $data['meta_description'] ?></textarea>
                                            </div>
                                            <div class="col-md-1é">
                                                <label for=""  >Meta keywords</label>
                                                <textarea name="meta_keywords" rows="3" placeholder="Enter meta keywords" class="form-control"><?= $data['meta_keywords'] ?></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label for=""  >Status</label>
                                                <input type="checkbox" <?= $data['status'] == 1 ?"checked" : ""  ?> name="status">
                                            </div>
                                            <div class="col-md-6">
                                                <label for=""  >Popular</label>
                                                <input type="checkbox" <?= $data['popular'] == 1 ?"checked" : ""  ?> name="popular">
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary" name="update_category_btn">update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                  
                        <?php
                    }
                    else
                    {
                        echo "category not found";
                    }
                }
                else
                {
                    echo "Id missing from url";
                }   
            ?>
        </div>
    </div>
</div>

<?php   include('includes/footer.php');?>