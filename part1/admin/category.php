<?php   
session_start();

include('../middleware/adminMiddleware.php');
include('includes/header.php');
?>

<div class="conainer">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Category</h4>
                </div>
                <div class="card-body" id="category_table">
                    <table class="table table-bordred table-striped table-hover">
                        <thead>
                            <tr class="table-info">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>                         
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $category = getAll("categories");
        
                            if(mysqli_num_rows($category) > 0)
                            {
                                foreach($category as $item)
                                {?>
                                    <tr>
                                        <td><?= $item['id']; ?></td>
                                        <td><?= $item['name']; ?></td>
                                        <td>
                                            <img src="../uploads/<?= $item['image']; ?>" width="50px" height="50px"alt="<?= $item['name'] ?>">
                                        </td>
                                        <td>
                                            <?= $item['status'] == '0' ? "Visible" : "Hidden"?></td>
                                        <td>
                                            <a href="edit-category.php?id=<?= $item['id']; ?>" class="btn btn-primary">Edit</a>
                                            
                                                <button class="btn btn-danger btn-sm delete_category_btn" value="<?= $item['id'];?>" type="submit" name="delete_category_btn">Delete</button>
                                            
                                            </td>
                                    </tr>
                              <?php      
                                }
                            }
                            else
                            {
                                echo "No Record Found";
                            }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>

<?php   include('includes/footer.php');?>