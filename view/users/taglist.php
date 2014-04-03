<ul class="nav nav-tabs" id="myj">
    <li><a href="<?php echo Router::url('users/view/id:'.$user_id); ?>"><i class="icon-user"></i><span class="hidden-xs"><?php echo $tv['g_profile'] ;?></span></a></li>
 <?php if($own===true): ?>
  <li><a href="<?php echo Router::url('users/edit'); ?>"><i class="icon-pencil"></i><span class="hidden-xs"><?php echo $tv['g_edit'] ;?></span></a></li>
                        <li><a href="<?php echo Router::url('medias/pics'); ?>"><i class="icon-picture"></i><span class="hidden-xs"><?php echo $tv['g_picture'] ;?></span></a></li>
                        <li class="active"><a href="<?php echo Router::url('users/taglist'); ?>"><i class="icon-tags"></i><span class="hidden-xs"><?php echo $tv['g_tag'] ;?></span></a></li>
                        <?php else: ?>
                        <li><a href="<?php echo Router::url('messages/write/id:'.$user_id); ?>"><i class="icon-edit"></i><span class="hidden-xs"><?php echo $tv['g_message'] ;?></span></a></li>
                        <li><a href="<?php echo Router::url('medias/pics/id:'.$user_id); ?>"><i class="icon-picture"></i><span class="hidden-xs"><?php echo $tv['g_picture'] ;?></span></a></li>
                        <li class="active"><a href="<?php echo Router::url('users/taglist/'.$user_id); ?>"><i class="icon-tags"></i><span class="hidden-xs"><?php echo $tv['g_tag'] ;?></span></a></li>
                        <li><a href="<?php echo Router::url('interactions/blacklist/id:'.$user_id); ?>"><i class="icon-ban-circle"><span class="hidden-xs"></i><?php echo $tv['g_blocked'] ;?></span></a></li>
                        <li><a href="<?php echo Router::url('interactions/abuse/id:'.$user_id); ?>"><i class="icon-flag"></i><span class="hidden-xs"><?php echo $tv['g_report'] ;?></span></a></li>
                        <?php endif ;?>
   
</ul>
<div class="row">
  <?php if(isset($tags)): ?>
<table class="table span5 table-bordered">
    <tr>
        <th>Tag</th>
        <th>Date</th>
        <th>Action</th>
      
    </tr>
    
    <?php foreach($tags as $k=>$v): ?>

    <tr>
        <td>
           <a href="<?php echo Router::url('users/index/'.$v->id_tag); ?>"><?php echo $v->name ;?></a> 
        </td>
        <td>
            <?php echo date("M j, H:i",$v->created) ;?>
        </td>
        <?php if($own===true): ?>
        <td>
            <a href="<?php echo Router::url('categories/delete_tag/'.$v->id); ?>"><i class="icon-remove"></i></a>
        </td>
        <?php else: ?>
        <td>
         <a href="<?php echo Router::url('categories/tag/'.$v->id); ?>"><i class="icon-circle-arrow-down"></i></a>
        </td>
        <?php endif ;?>
        
        
    </tr>    
    
    <?php endforeach;?>
</table>
    

<?php endif; ?>
<div class="col-md-4">

    <?php $mynterest=$this->allinteres() ;?>
              <?php
              $mint='';
              foreach( $mynterest as $k=>$v){
                  $mint.='   <a class="btn btn-info" title="'.$tv['add_tag'].'" href="'.Router::url('categories/tag/'.$v->id).'">'.$v->name.'<i class="icon-arrow-down icon-white"></i></a> ';
              } 
              echo $mint;
              ?>
</div>  
</div>


