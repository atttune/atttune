<?php $title_for_layout =  $tv['title_premium'];  ?>
<div class="row">
   
    <div class="col-md-4">
        <table class="table table-striped">
           
          <tr><td><h3><?php echo $tv['prem_period3'] ;?></h3></td></tr>
          <tr><td><?php echo $tv['prem_visibility'] ;?></td></tr>
          <tr><td><?php echo $tv['prem_nbshow'] ;?></td></tr>
          <tr><td><?php echo $tv['prem_hide'] ;?></td></tr>
          <tr><td><?php echo $tv['prem_ads'] ;?></td></tr>
          <tr><td><?php echo $tv['prem_choise'] ;?></td></tr>
          <tr><td><a href="<?php echo Router::url('users/premium/1'); ?>" class="btn btn-block btn-gold"><?php echo $tv['g_suscribe'] ;?></a></td></tr>
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
           
          <tr><td><h3><?php echo $tv['prem_period6'] ;?></h3></td></tr>
          <tr><td><?php echo $tv['prem_visibility'] ;?></td></tr>
          <tr><td><?php echo $tv['prem_nbshow'] ;?></td></tr>
          <tr><td><?php echo $tv['prem_hide'] ;?></td></tr>
          <tr><td><?php echo $tv['prem_ads'] ;?></td></tr>
          <tr><td><?php echo $tv['prem_choise'] ;?></td></tr>
          <tr><td><a href="<?php echo Router::url('users/premium/2'); ?>" class="btn btn-block btn-gold"><?php echo $tv['g_suscribe'] ;?></a></td></tr>
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
           
          <tr><td><h3><?php echo $tv['prem_period12'] ;?></h3></td></tr>
          <tr><td><?php echo $tv['prem_visibility'] ;?></td></tr>
          <tr><td><?php echo $tv['prem_nbshow'] ;?></td></tr>
          <tr><td><?php echo $tv['prem_hide'] ;?></td></tr>
          <tr><td><?php echo $tv['prem_ads'] ;?></td></tr>
          <tr><td><?php echo $tv['prem_choise'] ;?></td></tr>
          <tr><td><a href="<?php echo Router::url('users/premium/3'); ?>" class="btn btn-block btn-gold"><?php echo $tv['g_suscribe'] ;?></a></td></tr>
        </table>
    </div>

    
</div>
<?php if($_SESSION['prempage']==1): ?>
<div class="row"><a href="<?php echo Router::url($this->previous()); ?>" class="btn btn-success"><?php echo $tv['g_continue'] ;?></a></div>
<?php endif ;?>