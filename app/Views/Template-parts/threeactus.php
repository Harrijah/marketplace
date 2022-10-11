
<div class="popularCat mt-5">
    <h3 class="catheading">Les dernières actus</h3>
    <div class="divider"></div>
    <div class="actus">
        <?php for ($i=0; $i < 3; $i++): ?> 
            <div class="card card02 bg-light text-center">
                <div class="produits04">
                    <img src="<?php echo base_url('uploads/images/smartphone.jpg'); ?>" alt="" class="img-fluid">
                </div>
                <div class="container text-left">
                    <h5 class="text-center" style="font-weight:bold">Les tendances du moment</h5>
                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem dolorum, nesciunt ...</span>
                    <a href="" class="text-warning">Lire la suite</a>
                </div>
            </div>
        <?php endfor; ?> 
    </div>
</div>
