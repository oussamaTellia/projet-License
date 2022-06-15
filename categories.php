<?php 

session_start();
include('functions/userfunctions.php');

    include('includes/header.php');

?>

<div class="py-5 container" >
    <div class="row "style="margin-top: 6em;">
        <div class="col-md-12">
                <h1>Our Collections</h1>
                <hr>
                <div class="row">
                    <?php
                        $categories = getAllActive("categories");

                        if(mysqli_num_rows($categories) > 0)
                        {
                            foreach($categories as $item)
                            {
                                ?>
                                <div class="col-md-3 mb-2" >
                                    <a href="products.php?category=<?= $item['slug']; ?>">
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <img src="uploads/<?= $item['image']; ?>" alt="category image" class="w-100" style="height:30vh;">
                                                <h4 class="text-center" ><?= $item['name']; ?></h4>
                                                
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                   
                                <?php
                            }
                        }
                        else {
                            echo "no category available";
                        }
                    ?>
                </div>
                
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>