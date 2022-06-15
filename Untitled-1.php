<div class="card-banner  overlay-grad mt-0" style="height: 650px; background-image: url('banner_one_car_parts.jpg'); background-repeat: no-repeat;display:flex;align-items:center;">
  <div class="card-body text-white" style = "display: flex; flex-direction:column;width:50%;">
          <div style="width:50%;">  
            <h3 style= "text-align:center;font-weight:900px" class="card-title">Primary text as title</h3><br>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
  </div>
</div>
                </div>

    <div class="row m-3 mb-5 shadow-lg p-3 mb-5 bg-white rounded">
            <form class="form" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST">
                <div class="input-group">
                    
                            <div class="form-outline">
                                <input name="search" value="<?php echo $search ?>" type="search" class="form-control" />
                                <label class="form-label" for="search">Search</label>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-search"></i>
                            </button>
                            </div>
                    
                </div>