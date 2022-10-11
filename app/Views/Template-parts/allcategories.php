<div class="popularRay">
    <h3 class="catheading">Catégories populaires</h3>
    <div class="divider"></div>
    <div class="categories02 mb-2">
        <div class="categorycontainer">
            <?php foreach($rayon as $ray): ?>
                <div class="card01 bg-light">
                    <div class="container producticone">
                        <a href="#" class="stretched-link iconeshadow"><i class="<?php echo $ray['icone']; ?>"></i></a>
                        <h4 style="font-size:16px" class=""><?php echo $ray['rayon']; ?></h4> 
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
    </div>
</div>