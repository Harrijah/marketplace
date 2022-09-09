<?php if(!$souscategories): ?>
    <option></option> 
<?php else: ?>
    <option value='<?php echo $souscategories[0]['categorie']; ?>' class='retourcategorie'>Toutes les sous-catégories</option>
    <?php foreach($souscategories as $souscategorie): ?>
        <option value='<?php echo $souscategorie['id']; ?>'><?php echo $souscategorie['souscategorie']; ?></option>
    <?php endforeach; ?>
<?php endif; ?>