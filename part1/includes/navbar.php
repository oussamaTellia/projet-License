<?php
include("config/dbcon.php");

$search = "";
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $sql = "SELECT * FROM products WHERE name LIKE '%$search%'";
    $result = mysqli_query($con, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
        // go to index.php and display the results of the search using the url 
       header("location: index.php?search=$search");
        
    }
}
function searchByName($products, $search)
{
    $search = strtolower($search);
    $products = array_filter($products, function ($product) use ($search) {
        return strpos(strtolower($product['name']), $search) !== false || strpos(strtolower($product['small_description']), $search) !== false;
    });
    return $products;
}

?>
 <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.php"><h4 >AUTO</h4><h4 style="color: #ff8300;">SHOP</h4></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="categories.php">Collections</a>
        </li>
        <?php 
            if(isset($_SESSION['auth']))
            {
                ?>
               
                    <li class="nav-item">
                      <a class="nav-link" href="logout.php">Logout</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="cart.php"><span>Shopping Cart </span><img src="uploads/shopping-cartsvg.svg" alt="Cart" width="22px" height ="20px"></a>
                    </li>
                
            <?php 
            }
            else{
               ?> <li class="nav-item">
                <a class="nav-link" href="Register.php">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              
            <?php
            }

            $search ='';
        ?>
                </div>
            </div>
        </nav>
         