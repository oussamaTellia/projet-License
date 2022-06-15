<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="assets/js/custom.js"></script>
<!--Alertify Js -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    
    
    <script>
        alertify.set('notifier','position', 'top-right');
        <?php if(isset($_SESSION['message'])) 
        { 
         
         ?>
         alertify.success('<?= $_SESSION['message'];?>');
        <?php 
                    unset($_SESSION['message']);
        } 
        ?>
    </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
></script>
<footer class="text-white text-center text-lg-start" style="background-color: #212529;">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">About company</h5>
  
          <p>
          launched in 2022 driven by a mission to deliver high quality Auto and 4x4 spare parts and accessories at seriously great prices! (often well below RRP).
          </p>
  
          <p>
            We are Oussama and Amir From University of Badji Mokhtar Annaba.
          </p>
  
          <div class="mt-4">
            <!-- Facebook -->
            <a type="button" class="btn btn-floating btn-primary btn-lg" href="https://www.facebook.com/oussama.tellia.9"><i class="fab fa-facebook-f"></i></a>
            
            <!-- Google + -->
            <a type="button" class="btn btn-floating btn-primary btn-lg" href="mailto:telliaoussama165@gmail.com,amirnassim127@gmail.com"><i class="fab fa-google-plus-g"></i></a>
            <!-- Linkedin -->
          </div>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        <form class="form" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST">
                <h5 class="text-uppercase mb-4 pb-1">Search something</h5>
        
                            <div class="form-outline  mb-4">
                            <input name="search" value="<?php echo $search ?>" type="search" class="form-control bg-white w-75" />
                                <label class="form-label text-black" for="search">Search</label>
                            
                         
          </div>
          </form>
          <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">University of Badji Mokhtar ,Annaba ,Algeria</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">telliaoussama165@gmail.com</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">amirnassim127@gmail.com</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+213 659 55 61 18</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">+213 542 99 50 48</span>
            </li>
          </ul>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Opening hours</h5>
  
          <table class="table text-center text-white">
            <tbody class="font-weight-normal">
              <tr>
                <td>Mon - Thu:</td>
                <td>8am - 9pm</td>
              </tr>
              <tr>
                <td>Fri - Sat:</td>
                <td>8am - 1am</td>
              </tr>
              <tr>
                <td>Sunday:</td>
                <td>9am - 10pm</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-white" href="index.php">© Creat Oussama Tellia and Sayhi Amir Nssime</a>
    </div>
    <!-- Copyright -->
  </footer>
   <!-- Bootstrap core JS-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>