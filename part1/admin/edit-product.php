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

                    $product = getByID("products",$id);
                    if(mysqli_num_rows($product) > 0)
                    {
                        $data =mysqli_fetch_array($product);
                        ?>
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Product</h4>
                                <a href="products.php" class="btn btn-primary float-end">retour</a>
                            </div>
                            <div class="card-body">
                                <form action="code.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                    <div class="col-md-12">
                                            <label class="mb-0"for="">Catrgory</label>
                                            <input type="hidden" name="product_id" value="<?= $data['id']; ?>">
                                                <select name="category_id"class="form-select mb-2" aria-label="Default select example">
                                                    <?php 
                                                        $categories = getAll("categories");
                
                                                        if(mysqli_num_rows($categories) > 0)
                                                        {
                                                            foreach($categories as $item)
                                                            {
                                                                ?>
                                                                    <option value="<?= $item['id']; ?>" <?= $data['category_id'] == $item['id'] ? "selected" : "" ?>><?= $item['name']; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                        else
                                                        {
                                                            echo "No Category Available";
                                                        }
                                                    ?>
                                                
                                                
                                                </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mb-0"for="name">Name</label>
                                            <input type="text" required name="name" placeholder="Enter product nom" class="form-control mb-3" value="<?= $data['name'];?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mb-0"for="slug"  >Slug</label>
                                            <input type="text" required placeholder="Enter slug" value="<?= $data['slug'];?>" name="slug" class="form-control mb-3 ">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="mb-0"for=""  >Small Description</label>
                                            <textarea name="small_description" required rows="3" placeholder="Enter small description" class="form-control mb-3"><?= $data['small_description'];?></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="mb-0"for=""  >Description</label>
                                            <textarea name="description" required rows="3" placeholder="Enter description" class="form-control mb-3"><?= $data['description'];?></textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mb-0"for="name">original price</label>
                                            <input type="number" value="<?= $data['original_price'];?>" required name="original_price" placeholder="Enter original price" class="form-control mb-3">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mb-0"for="slug"  >Selling Price</label>
                                            <input type="number" value="<?= $data['selling_price'];?>" required placeholder="Enter Selling Price" name="selling_price" class="form-control mb-3">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="hidden" name="old_image" value="<?= $data['image']; ?>">
                                            <label class="mb-0"for=""  >Upload Image</label>
                                            <input type="file" name="image" class="form-control mb-3">
                                            <label class="mb-0"for=""  >Current Image</label>
                                            <img src="../uploads/<?= $data['image']; ?>" width="50px" height="50px">
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mb-0"for="slug"  >Quantity</label>
                                            <input type="number" value="<?= $data['qty'];?>" required placeholder="Enter Quantity" name="qty" class="form-control mb-3">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="mb-0 mt-3"for=""  >Status</label><br>
                                            <input type="checkbox"  <?= $data['status'] == 0 ? '':'checked';?>  name="status">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="mb-0 mt-3"for=""  >Trending</label><br>
                                            <input type="checkbox" <?= $data['trending'] == 0 ? '':'checked';?> name="trending">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="mb-0"for=""  >meta_title</label>
                                            <input type="text" name="meta_title" value="<?= $data['meta_title'];?>" class="form-control mb-3">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="mb-0"for=""  >Meta description</label>
                                            <textarea name="meta_description" rows="3" placeholder="Enter meta description" class="form-control mb-3"><?= $data['meta_description'];?></textarea>
                                        </div>
                                        <div class="col-md-1é">
                                            <label class="mb-0"for=""  >Meta keywords</label>
                                            <textarea name="meta_keywords" rows="3" placeholder="Enter meta keywords" class="form-control mb-3"><?= $data['meta_keywords'];?></textarea>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary" name="update_product_btn">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                            
                        <?php
                    }
                    else
                    {
                    echo "Product not found for the given ID";
                    }
                }
                else
                {
                    echo "Id missing from URL";
                }
                ?>
        </div>
    </div>
</div>

<?php   include('includes/footer.php');?>