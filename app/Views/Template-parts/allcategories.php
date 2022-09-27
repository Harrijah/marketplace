<div>
    <div class="mx-auto mt-5 pl-5">
        <h3>Catégories populaires</h3>
        <div class="categories02 mx-auto mb-2">
            <?php foreach($rayon as $ray): ?>
                <div class="card card01">
                    <div class="container">
                        <a href="#" class="monicone stretched-link"><i class="<?php echo $ray['icone']; ?>" style="font-size:52px"></i></a>
                        <h4 style="font-size:16px"><?php echo $ray['rayon']; ?></h4>
                    </div>
                </div>
            <?php endforeach; ?>
            
        </div>
    </div>
</div>