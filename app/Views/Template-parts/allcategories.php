<div class="popularRay">
    <h3 class="catheading">Catégories populaires</h3>
    <div class="divider"></div>
    <div class="row">
        <div class="col-1 text-center"><i class="fa fa-angle-left text-warning inner-div" style="font-size:76px"></i></div>
        <div class="categories02 mb-2 col-10">
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
    <div class="col-1 text-center"><i class="fa fa-angle-right text-warning inner-div" style="font-size:76px"></i></div>
    </div>
</div>
<div class="divider02"></div>