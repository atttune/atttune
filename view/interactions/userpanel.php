                            
<div class="panel panel-success">
                        <div class="panel-heading">
                            <a class="close" href="<?php echo Router::url('interactions/del/'.$id_interaction[$v->id]); ?>">&times;</a>
                         <a href="<?php echo Router::url('users/view/id:'.$v->id); ?>" ><h5><?php echo ucfirst($v->pseudo); ?><?php echo ', '.age($v->dd1,$v->dm1,$v->dy1).', ';?><span title="<?php echo $v->dist.'km' ;?>"><?php echo $v->city ;?></span><?php if($connected[$k]):?>, <i class="ico-connected"></i><?php endif ;?></h5></a>
                        
                        </div>
                        <div class="panel-body">
                    <div>
                        <a href="<?php echo Router::url('users/view/id:'.$v->id); ?>" class="ttip" id="ttype" data-toggle="tooltip" title="<?php echo $v->few_words; ?>"><img src="<?php echo Router::webroot('img/'.$v->img) ;?>" class="img-responsive" /></a> 
			
                    </div>
                    
                   <?php if(isset($mtags)):?>
         <div>
               <?php $nb=0 ; foreach($mtags[$k] as $x=>$y): ?>
                        <?php if($nb==10): ?>
                        <a  class="btn  btn-primary btn-xs" href="<?php echo Router::url('users/view/id:'.$v->id); ?>" >+++</a>
                        <?php elseif($nb<10): ?>
                        <?php if(in_array($y->id_tag,$mytaglist)&&($y->id_owner!=$mid)): ?>
                        <a  class="btn  btn-primary btn-xs" href="<?php echo Router::url('users/index/id:'.$y->id_tag.'/name:'.urlname($y->name)); ?>" ><?php echo $y->name; ?></a>  
                        <?php else: ?>
                        
                         <a  class="btn  btn-info  btn-xs" href="<?php echo Router::url('users/index/id:'.$y->id_tag.'/name:'.urlname($y->name)); ?>" ><?php echo $y->name; ?></a>
                       <?php endif ;?>
                         <?php endif ;?>
                       
              <?php $nb++ ; endforeach;?> 
        </div> 
                 <?php endif ;?>
                      <div class="clearfix"></div>
                      
                      <?php  if($nb_pics[$k]): ?>
               <span class="label label-info"><?php echo $nb_pics[$k] ;?> <i class="icon-camera icon-white"></i></span>
                     <?php endif ;?>
                     
               <?php if(isset($mtags)&&($tagnb[$k]>0)):?>
               <span class="label label-info"><?php echo $tagnb[$k] ;?> <i class="icon-tags icon-white"></i></span>
               <?php endif ;?>
               
               <?php if(anniv($v->dd1,$v->dm1,$v->dy1)): ?>
               <span class="label label-info"><i class="icon-gift icon-white"></i></span>
                <?php endif ;?>
               
               <?php if(isset($apps_list[$k])&&!empty($apps_list[$k])): ?>
               <?php foreach($apps_list[$k] as $l=>$m): ?>
                  <?php if(isset($m->app_link)&&(!empty($m->app_link))): ?>
          <span><a href="<?php echo $m->app_link ;?>" target="_blank"><i class="ico-<?php echo $m->slug ;?>" id="sn-btn"></i></a></span>
          <?php else: ?>
          <span><i class="ico-<?php echo $m->slug ;?>" id="sn-btn"></i></span>
          <?php endif ;?>
                      <?php endforeach ;?>
               <?php endif ;?>
               </div>
               <div class="panel-footer">
               <a  class="btn  btn-success  btn-xs" href="<?php echo Router::url('messages/write/id:'.$v->id); ?>"><span><i class="icon-comment icon-white"></i></span></a>
               <a  class="btn  btn-success  btn-xs" href="<?php echo Router::url('interactions/add_friend/id:'.$v->id); ?>"><span><i class="icon-user icon-white"></i></span></a>
              <a  class="btn  btn-success  btn-xs" href="<?php echo Router::url('interactions/attraction/id:'.$v->id); ?>"><span><i class="icon-thumbs-up icon-white"></i></span></a>
               <span class="btn btn-xs disabled"><?php echo $tv['visite_me_since'] ;?> <?php if(isset($data[$k]->modified))echo sinceI($data[$k]->modified); else echo sinceI($data[$k]->date)  ;?></span>
               </div>
</div>
         