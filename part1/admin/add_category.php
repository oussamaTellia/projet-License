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
                    <h4>Add Category</h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">Name</label>
                                <input type="text" name="name" placeholder="Enter category nom" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="slug"  >Slug</label>
                                <input type="text" placeholder="Enter slug" name="slug" class="form-control">
                            </div>
                            
                            <div class="col-md-12">
                                <label for=""  >Description</label>
                                <textarea name="description" rows="3" placeholder="Enter description" class="form-control"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for=""  >Upload Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label for=""  >meta_title</label>
                                <input type="text" name="meta_title" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label for=""  >Meta description</label>
                                <textarea name="meta_description" rows="3" placeholder="Enter meta description" class="form-control"></textarea>
                            </div>
                            <div class="col-md-1é">
                                <label for=""  >Meta keywords</label>
                                <textarea name="meta_keywords" rows="3" placeholder="Enter meta keywords" class="form-control"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for=""  >Status</label>
                                <input type="checkbox" name="status">
                            </div>
                            <div class="col-md-6">
                                <label for=""  >Popular</label>
                                <input type="checkbox" name="popular">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" name="add_category_btn">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php   include('includes/footer.php');?>