<?php $title_for_layout =  $tv['title_users_index'];  ?>
<?php $mytaglist=$this->Session->read('mytag') ; 
if(!isset($mytaglist)||empty($mytaglist)){$mytaglist=array();}
      $mid=$this->Session->User('id') ; 
?>
      <?php $rqd=$this->request->data ;?>


<div class="row">
	<div class="col-md-12">
		
                    
   
            <div id="thetaglist">
               
                <div class="row">
                    <div class="col-md-12">
                   <?php if(isset($_SESSION['taglist_n'])&&!empty($_SESSION['taglist_n'])): ?>
                     <?php foreach($_SESSION['taglist_id'] as $k=>$v):?>
                
                    <a class="btn  btn-warning<?php if(isset($t3tag)&&($t3tag==$v))echo ' disabled ' ;$_SESSION['tagpin']=$v;?>" href="<?php echo Router::url('users/index/'.$v); ?>"><?php echo $_SESSION['taglist_n'][$k] ;?></a>
                
                   <?php endforeach ;?>
                    <a class="btn btn-default" href="<?php echo Router::url('users/index'); ?>"><i class="icon-trash"></i></a>
                    
                    <?php elseif(isset($thetag)): ?>
                    <?php $_SESSION['taglist_id'][]=$thetag;
                    $_SESSION['taglist_n'][]=$this->gettagname($thetag); ;?>
                    <a class="btn  btn-warning<?php if(isset($t3tag)&&($t3tag==$thetag))echo ' disabled ' ; $_SESSION['tagpin']=$thetag;?>" href="<?php echo Router::url('users/index/'.$thetag); ?>"><?php echo $thetag_name ;?></a>
                   <a class="btn btn-default" href="<?php echo Router::url('users/index'); ?>"><i class="icon-trash"></i></a>
                     <?php endif ;?>
                    </div>
                    
            </div>
                <?php if((isset($_SESSION['taglist_n'])&&!empty($_SESSION['taglist_n']))||isset($thetag)): ?>
                <hr>
                <?php endif ;?>
            </div>
            
            
                <div id="userlist" class="row">
                 <?php $cus=count($users) ;?>
                    <?php for($w=0;$w<3;$w++): ?>
                        <div class="col-md-4 col-sm-6">
                            <?php for($k=$w;$k<$cus;$k=$k+3): ?>
                            <?php $v=$users[$k]; ?>
                            
                            
<div class="panel <?php if($connected[$k]){ echo ' panel-atttune';}else{echo ' panel-default';} ?>">
                        <div class="panel-heading">
                         <a href="<?php echo Router::url('users/view/id:'.$v->id); ?>" ><h5><?php if($v->role==3):?><i class="icon-star icon-gold"></i> <?php endif ;?><?php echo ucfirst($v->pseudo); ?><?php echo ', '.age($v->dd1,$v->dm1,$v->dy1).', ';?><span title="<?php echo $v->dist.'km' ;?>"><?php echo $v->city ;?></span><?php if($connected[$k]):?>, <i class="ico-connected"></i><?php endif ;?></h5></a>
                       
                        </div>
                     <div class="panel-body">   
                    <div>
                        <a href="<?php echo Router::url('users/view/id:'.$v->id); ?>" class="ttips" data-toggle="tooltip" title="<?php echo $v->few_words; ?>"><img src="<?php echo Router::webroot('img/'.$v->img) ;?>" class="img-responsive"/></a> 
			
                    </div>
             <?php if((isset($auth[$k])&&($auth[$k]==true))||($v->id==$mid)||!isset($auth[$k])): ?>       
                         <div>
  
 <?php if(isset($mtags)):?>
               <?php $nb=0 ; foreach($mtags[$k] as $x=>$y): ?>
                        <?php if($nb==10): ?>
                        <a  class="btn  btn-primary btn-xs" href="<?php echo Router::url('users/view/id:'.$v->id); ?>" >+++</a>
                        <?php elseif($nb<10): ?>
                        <?php if(in_array($y->id_tag,$mytaglist)&&($y->id_owner!=$mid)): ?>
                        <a  class="btn  btn-primary btn-xs" href="<?php echo Router::url('users/index/id:'.$y->id_tag); ?>" ><?php echo $y->name; ?></a>  
                        <?php else: ?>
                        
                         <a  class="btn  btn-info  btn-xs" href="<?php echo Router::url('users/index/id:'.$y->id_tag); ?>" ><?php echo $y->name; ?></a>
                       <?php endif ;?>
                         <?php endif ;?>
                       
              <?php $nb++ ; endforeach;?> 
                         
                         
                         
       
                 <?php endif ;?>
                         <?php if(isset($apps_list[$k])&&!empty($apps_list[$k])): ?>
               <?php foreach($apps_list[$k] as $l=>$m): ?>
                  <?php if(isset($m->app_link)&&(!empty($m->app_link))): ?>
          <span><a href="<?php echo $m->app_link ;?>" target="_blank"><i class="ico-<?php echo $m->slug .' ' ;?> sn-btn"></i></a></span>
          <?php else: ?>
          <span><i class="ico-<?php echo $m->slug.' ' ;?> sn-btn"></i></span>
          <?php endif ;?>
                      <?php endforeach ;?>
               <?php endif ;?>
          
              </div>          
                       
          
                      <div class="clearfix"></div>
                      <?php  if($nb_pics[$k]): ?>
               <a  class="btn  btn-success  btn-xs" title="<?php echo $tv['btn_pics'] ;?>" href="<?php echo Router::url('medias/pics/id:'.$v->id); ?>"><?php echo $nb_pics[$k] ;?> <i class="icon-camera icon-white"></i></a>
                     <?php endif ;?>
                     
               <?php if(isset($mtags)&&($tagnb[$k]>0)):?>
               <a  class="btn  btn-success  btn-xs" title="<?php echo $tv['btn_tags'] ;?>" href="<?php echo Router::url('users/taglist/id:'.$v->id); ?>"><?php echo $tagnb[$k] ;?> <i class="icon-tags icon-white"></i></a>
               <?php endif ;?>
               
               <?php if(anniv($v->dd1,$v->dm1,$v->dy1)): ?>
               <span class="label label-info"><i class="icon-gift icon-white"></i></span>
                <?php endif ;?>
               
              
          
          <?php endif ;?>
          <?php if(($v->id!=$mid)&&(isset($auth[$k])&&($auth[$k]==false))): ?>
                <span><i class="icon-lock"></i></span>
                    <?php else: ?>     
                 <a  class="btn  btn-success  btn-xs" title="<?php echo $tv['btn_comment'] ;?>" href="<?php echo Router::url('messages/write/id:'.$v->id); ?>"><i class="icon-comment icon-white"></i></a>
               <a  class="btn  btn-success  btn-xs" title="<?php echo $tv['btn_friend'] ;?>" href="<?php echo Router::url('interactions/add_friend/id:'.$v->id); ?>"><i class="icon-user icon-white"></i></a>
              <a  class="btn  btn-success  btn-xs" title="<?php echo $tv['btn_follow'] ;?>" href="<?php echo Router::url('interactions/attraction/id:'.$v->id); ?>"><i class="icon-thumbs-up icon-white"></i></a>
               <?php  endif ;?>
                </div>
               <div class="panel-footer" id="texta">
                   <form class="formMessage" data-u-id="<?php echo $v->id; ?>">
                     <textarea class="input messageTextarea" placeholder="<?php echo $tv['placeh_write_me'] ;?>" name="message"></textarea>
                   </form>
                   </div>
</div>
                            
                            
                            
                            <?php endfor ?>
                        </div>
                    <?php endfor ;?>
                        
               
		</div>
            
            <?php if(isset($page)&&($page>1)):?>
  <ul class="pagination">
      <?php for($i=1; $i <= $page; $i++): ?>
        <li <?php if($i==$this->request->page) echo 'class="active"'; ?>><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
      <?php endfor; ?>
      </ul>
            <?php endif ;?>
</div>




</div>
