<?php 

session_start();

    include('functions/userfunctions.php');
    include('includes/header.php');
    include('config/dbcon.php');
    $total=0;
    
    if (isset($_POST['increment'])) {
        
        $prod_id = $_POST['prod_id'];
        $user_id = $_POST['user_id'];
        $sql = "UPDATE cart SET prod_qty = prod_qty + 1 WHERE prod_id = $prod_id AND user_id = $user_id";
        mysqli_query($con, $sql);
    }
    // decrement quantity of item in cart by 1 if quantity is greater than 1
    if (isset($_POST['decrement'])) {
        $prod_id = $_POST['prod_id'];
        $user_id = $_POST['user_id'];
        $sql = "UPDATE cart SET prod_qty = prod_qty + 1 WHERE prod_id = $prod_id AND user_id = $user_id";
        $product = $_POST['prod_qty'];
        if ($product > 1) {
            $sql = "UPDATE cart SET prod_qty = prod_qty - 1 WHERE prod_id = $prod_id AND user_id = $user_id";
            mysqli_query($con, $sql);
        }
    }

   
    if (isset($_POST['delete'])) {
        global $con;
        $prod_id = $_POST['prod_id'];
        $user_id = $_POST['user_id']; 
        $sql = "DELETE FROM cart WHERE prod_id = $prod_id AND user_id = $user_id ";
       mysqli_query($con, $sql);
    }

    ?>


<div class="py-3 bg-dark">
    <div class="container">
        <a href="index.php" class="text-white" style="text-decoration:none">Home / </a><a href="cart.php" class="text-white" style="text-decoration:none" >Cart</a>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="card card-body shadow">
            <div class="row" style="margin-top: 2em;">
                <div class="col-md-12">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <h6>Products</h6>
                                </div>
                                <div class="col-md-3">
                                    <h6>Price</h6>
                                </div>
                                <div class="col-md-2">
                                    <h6>Quantity</h6>
                                </div>
                                <div class="col-md-2">
                                <h6>Remove</h6>
                                </div>
                            </div>
                
                <?php 
                        $item = getCartItems();
                        foreach($item as $citem)
                        {
                            $total += $citem['selling_price'] * $citem['prod_qty'];
                            ?>

                            <div class="card product-data border-success mb-3">
                                <form action="" method="post" class="row align-items-center">
                                    <div class="col-md-2">
                                        <img src="uploads/<?= $citem['image']?>" alt="<?= $citem['name']?>" width="80px">
                                    </div>
                                    <div class="col-md-3">
                                        <h5><?= $citem['name']?></h5>
                                    </div>
                                    <div class="col-md-3">
                                        <h5>$ <?= $citem['selling_price'] ?></h5>
                                    </div>
                                    
                                            <div class="col-md-2">
                                            
                                                <div class="input-group mb-3" style="width:130px">
                                                    <button type="submit" name="decrement" class="input-group-text">-</button>
                                                    <input type="text" name="prod_qty" class="form-control bg-white text-center qty-input" value="<?= $citem['prod_qty']?>"  >
                                                    <input type="hidden" name="user_id" value="<?= $citem['user_id']?>"  >
                                                    <input type="hidden" name="prod_id" value="<?= $citem['prod_id']?>"  >

                                                    <button type="submit" name="increment" class="input-group-text">+</button>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <button class="btn btn-danger btn-sm" name="delete">
                                                    

                                                <i class="fa fa-trash me-2"></i> Remove</a>
                                            </div>
                                            
                        </form>
                            </div>
                        
                    <?php    
                    }
                    ?>
                </div>
                <div style="margin-top: 20px; margin-left: 440px;" class="row col-md-6">
            <h1>Total: <?php echo $total; ?>$</h1>
        </div>
            </div>
        </div>
        
    </div>
</div>

<?php include('includes/footer.php');?>