<?php foreach($rayons as $ray): ?>
    <option value="<?php echo $ray['id']; ?>" class=" d-block">
        <?php echo $ray['rayon']; ?>
    </option>
<?php endforeach; ?>