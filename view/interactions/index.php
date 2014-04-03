<?php $title_for_layout = $tv['flt_title_index']; ?>
<div class="row">
	<div class="col-md-4 offset3 ">
	       
             
        <?php if(isset($tgt)): ?>
            
            <a href="<?php echo Router::url('interactions/attraction/'.$tgt->id); ?>" class="btn btn-lg btn-success"><i class="icon-heart"></i><?php echo $tv['g_like'] ;?></a>
         
                <a href="<?php echo Router::url('interactions/attraction'); ?>" class="btn btn-lg btn-danger"><i class="icon-remove"></i> No</a>
                
            
           
	<?php if(isset($main_pic)):?>		
	<a href="<?php echo Router::webroot('img/'.$main_pic->file); ?>" class="zoombox zgallery1"><img src="<?php echo Router::webroot('img/'.$main_pic->file_large); ?>" /></a>
                   	
           
        <?php else:?>
          <?php for($i=0;$i<20;$i++){echo '<br />' ;}?> 
        <?php endif;?>
        <?php if(isset($pics)&&(!empty($pics))): ?>      
	<div id="galerie2">
             <div class="slider2">
         
          <?php foreach($pics as $k => $v):?>
             <a href="#" ><img src="<?php echo Router::webroot('img/'.$v->file_sq_mini); ?>" width="45" height="45" alt="" /></a>
         <?php endforeach; ?>
             
             </div>
            <div class="prec"></div>
             <div class="suiv"></div>
             <div class="clearfix"></div>
         </div>
        <?php endif; ?> 
        <?php endif; ?>  
	</div>
     
      
</div>



