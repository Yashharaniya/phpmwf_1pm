
<div class="row">
    <div class="col-md-11 p-2">
        <div class="row">
            <?php
            foreach($seletdata as $row) {
            ?>        
            <div class="col-md-4 mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <center>
                            <img src="Admin/<?php echo $row["photo"];?>" width="80%" height="150px"><br>
                            <b><?php echo $row["pro_name"];?></b><br>
                            <b><?php echo $row["price"];?>&nbsp;<del class=""><?php echo $row["old_price"];?></del></b><br><br>
                            <button type="button" class="btn btn-primary">Buy Now</button>&nbsp;&nbsp;
                            <button type="button" class="btn btn-danger">Add to Cart</button>
                        </center>
                    </div> 
                </div>
            </div> 
            <?php
            }
            ?>
        </div>
    </div>
</div>
