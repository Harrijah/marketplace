<?php if(!$categories): ?>
    <option></option> 
<?php else: ?>
    <option value='<?php echo $categories[0]['rayon']; ?>' class='retourrayon'>Toutes les catégories</option> 
    <?php foreach($categories as $categorie): ?>
        <option value='<?php echo $categorie['id']; ?>'><?php echo $categorie['categorie']; ?></option>
    <?php endforeach; ?>
<?php endif; ?>