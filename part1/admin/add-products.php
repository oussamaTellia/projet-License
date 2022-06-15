<?php   
session_start();
include('../middleware/adminMiddleware.php');
include('includes/header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Product</h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col-md-12">
                                <label class="mb-0"for="">Catrgory</label>
                                <select name="category_id"class="form-select mb-2" aria-label="Default select example">
                                    <option selected >Select Catrgory</option>
                                    <?php 
                                        $categories = getAll("categories");

                                        if(mysqli_num_rows($categories) > 0)
                                        {
                                            foreach($categories as $item)
                                            {
                                                ?>
                                                    <option value="<?= $item['id']; ?>"><?= $item['name']; ?></option>
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
                                <input type="text" required name="name" placeholder="Enter product nom" class="form-control mb-3">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"for="slug"  >Slug</label>
                                <input type="text" required placeholder="Enter slug" name="slug" class="form-control mb-3 ">
                            </div>
                            <div class="col-md-12">
                                <label class="mb-0"for=""  >Small Description</label>
                                <textarea name="small_description" required rows="3" placeholder="Enter small description" class="form-control mb-3"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-0"for=""  >Description</label>
                                <textarea name="description" required rows="3" placeholder="Enter description" class="form-control mb-3"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"for="name">original price</label>
                                <input type="number" required name="original_price" placeholder="Enter original price" class="form-control mb-3">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0">Selling Price</label>
                                <input type="number" required placeholder="Enter Selling Price" name="selling_price" class="form-control mb-3">
                            </div>
                            <div class="col-md-12">
                                <label class="mb-0"for=""  >Upload Image</label>
                                <input type="file" name="image" class="form-control mb-3">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"for="slug"  >Quantity</label>
                                <input type="number" required placeholder="Enter Quantity" name="qty" class="form-control mb-3">
                            </div>
                            <div class="col-md-3">
                                <label class="mb-0 mt-3"for=""  >Status</label><br>
                                <input type="checkbox" name="status">
                            </div>
                            <div class="col-md-3">
                                <label class="mb-0 mt-3"for=""  >Trending</label><br>
                                <input type="checkbox" name="trending">
                            </div>
                            <div class="col-md-12">
                                <label class="mb-0"for=""  >meta_title</label>
                                <input type="text" name="meta_title" class="form-control mb-3">
                            </div>
                            <div class="col-md-12">
                                <label class="mb-0"for=""  >Meta description</label>
                                <textarea name="meta_description" rows="3" placeholder="Enter meta description" class="form-control mb-3"></textarea>
                            </div>
                            <div class="col-md-1é">
                                <label class="mb-0"for=""  >Meta keywords</label>
                                <textarea name="meta_keywords" rows="3" placeholder="Enter meta keywords" class="form-control mb-3"></textarea>
                            </div>
                            
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" name="add_product_btn">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php   include('includes/footer.php');?>