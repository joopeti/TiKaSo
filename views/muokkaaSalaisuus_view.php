<div class="kirjautuminen">
    
    <form class="form-signin" role="form" action="muokkaasalaisuus.php" method="POST" id="salaisuus">
        <h2 class="form-signin-heading">Muokkaa salaisuutta</h2>
        <input type="text" class="form-control" placeholder="Otsikko" required autofocus name="Otsikko" value="<?php echo $data->salaisuus->getOtsikko() ?>">        
        <textarea name="Sisalto" class="form-control" rows="4" cols="60" form="salaisuus"><?php echo $data->salaisuus->getSisalto() ?></textarea>
        <input type="hidden" value="<?php echo $data->salaisuus->getSalainenID(); ?>" name="muokattiin">
        <input type="hidden" value="<?php echo $data->salaisuus->getSalainenID(); ?>" name="muokkausid">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Valmis</button>
    </form>

</div>