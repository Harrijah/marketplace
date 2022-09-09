
<select name="rayon" id="" url="<?php echo base_url('filtre/changerayon')?>" url2="<?php echo base_url('filtre/getResultat'); ?>" class="selectrayon form-control"> 
    <?php foreach($rayons as $ray): ?>
        <option value="<?php echo $ray['id']; ?>"><?php echo $ray['rayon']; ?></option> 
    <?php endforeach; ?>
</select>