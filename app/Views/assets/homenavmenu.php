<div class="navbar navbar-expand-lg navbar-light wrapper">
    <div class="buttonWrapper">
        <!-- <ul class="nav navbar-nav">
            <li class="nav-item"><a class="mybutton nav-link active" href="#" data-id="produits">Produits de la semaine</a></li>
            <li class="nav-item"><a class="mybutton nav-link" href="#" data-id="nouveautes">Les nouveautés</a></li>
            <li class="nav-item"><a class="mybutton nav-link" href="#" data-id="promos">En promotion</a></li>
            <li class="nav-item"><a class="mybutton nav-link" href="#" data-id="topventes">Top ventes</a></li>
        </ul> -->
        <div class="btn-group">
            <button type="button" class="active mybutton btn btn-outline-warning mytext" data-id="produits">Produits de la semaine</button>
            <button type="button" class="mybutton btn btn-outline-warning mytext" data-id="nouveautes">Les nouveautés</button>
            <button type="button" class="mybutton btn btn-outline-warning mytext" data-id="promos">En promotion</button>
            <select name="rayon" id="" url="<?php echo base_url('filtre/changerayon')?>" url2="<?php echo base_url('filtre/getResultat'); ?>" class="selectrayon2 form-control mybutton btn btn-outline-warning mytext">   
                <?php foreach($rayons as $ray): ?>
                    <option value="<?php echo $ray['id']; ?>"><?php echo $ray['rayon']; ?></option> 
                <?php endforeach; ?>
            </select>
        </div>
    </div>
</div>