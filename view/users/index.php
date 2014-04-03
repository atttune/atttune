<?php $title_for_layout =  $tv['title_users_index'];  ?>
<?php $og_title_for_layout =  $tv['share_title'];  ?>
<?php $og_description_for_layout =  $tv['share_description'];  ?>
<?php $og_description2_for_layout =  $tv['share_description2'];  ?>
<?php if(isset($t3tag)&&($t3tag==$thetag)):?>
<?php $og_tag_ok =true;  ?>
<?php $og_tag_name =$thetag_name;  ?>
<?php endif ;?>

<?php $mytaglist=$this->Session->read('mytag') ; 
if(!isset($mytaglist)||empty($mytaglist)){$mytaglist=array();}
      $mid=$this->Session->User('id') ; 
?>
      <?php $rqd=$this->request->data ;?>

<script type="text/javascript">
    $(document).ajaxComplete(function(){
    try{
        FB.XFBML.parse(document.getElementById('tag_bar_widget')); 
    }catch(ex){}
});
</script>
<div class="row" >
	<div class="col-md-12">
		
                    
   
            <div id="thetaglist">
               
                <div class="row">
                    <div class="col-md-12" id="u_taglist2">
                   <?php if(isset($_SESSION['taglist_n'])&&!empty($_SESSION['taglist_n'])): ?>
                     <?php foreach($_SESSION['taglist_id'] as $k=>$v):?>
                
                    <a class="ajax btn  btn-warning<?php if(isset($t3tag)&&($t3tag==$v))echo ' disabled ' ;$_SESSION['tagpin']=$v;?>" href="<?php echo Router::url('users/index/id:'.$v.'/name:'.urlname($_SESSION['taglist_n'][$k])); ?>" data-id_tag="<?php echo $v; ?>"><?php echo $_SESSION['taglist_n'][$k] ;?></a>
                
                   <?php endforeach ;?>
                    <a class="ajax btn btn-default" href="<?php echo Router::url('users/index'); ?>"><i class="icon-trash"></i></a>
                    
                    <?php elseif(isset($thetag)): ?>
                    <?php $_SESSION['taglist_id'][]=$thetag;
                    $_SESSION['taglist_n'][]=$this->gettagname($thetag); ;?>
                    <a class="ajax btn  btn-warning<?php if(isset($t3tag)&&($t3tag==$thetag))echo ' disabled ' ; $_SESSION['tagpin']=$thetag;?>" href="<?php echo Router::url('users/index/id:'.$thetag.'/name:'.urlname($thetag_name)); ?>" data-id_tag="<?php echo $v; ?>"><?php echo $thetag_name ;?></a>
                   <a class="ajax btn btn-default" href="<?php echo Router::url('users/index'); ?>"><i class="icon-trash"></i></a>
                     <?php endif ;?>
                    </div>
                    
            </div>
                <?php if((isset($_SESSION['taglist_n'])&&!empty($_SESSION['taglist_n']))||isset($thetag)): ?>
                <br>
                <span id="tag_bar_widget">
                <a class="btn btn-default" href="<?php echo Router::url('categories/tag/id:'.$thetag); ?>" title="<?php echo 'Join community : '.$thetag_name; ?>"><i class="icon-arrow-down"></i></a>
                   <fb:share-button href="<?php echo Router::url('users/index/id:'.$thetag.'/name:'.urlname($thetag_name)); ?>" type="button"></fb:share-button>
                </span>
                <hr>
                <?php endif ;?>
            </div>
            
            
                <div id="userlist" class="row">
                 <?php $cus=count($users) ;?>
                    <?php for($w=0;$w<3;$w++): ?>
                        <div class="col-md-4 col-sm-6">
                            <?php for($k=$w;$k<$cus;$k=$k+3): ?>
                            <?php $v=$users[$k]; ?>
                            
                            
<div class="panel <?php if($connected[$k]){ echo ' panel-atttune';}else{echo ' panel-default';} ?>" id="<?php echo 'user_'.$k; ?>">
                        <div class="panel-heading">
                         <a href="<?php echo Router::url('users/view/id:'.$v->id); ?>" ><h5><?php if($v->role==3):?><i class="icon-star icon-gold"></i> <?php endif ;?><?php echo ucfirst($v->pseudo); ?><?php echo ', '.age($v->dd1,$v->dm1,$v->dy1).', ';?><span title="<?php echo $v->dist.'km' ;?>"><?php echo $v->city ;?></span><?php if($connected[$k]):?>, <i class="ico-connected"></i><?php endif ;?></h5></a>
                       
                        </div>
                     <div class="panel-body">   
                    <div>
                        <a href="<?php echo Router::url('users/view/id:'.$v->id); ?>" class="ttips" data-toggle="tooltip" title="<?php echo $v->few_words; ?>"><img src="<?php echo Router::webroot('img/'.$v->img) ;?>" class="img-responsive"/></a> 
			
                    </div>
             <?php if((isset($auth[$k])&&($auth[$k]==true))||($v->id==$mid)||!isset($auth[$k])): ?>       
                         <div>
  
 <?php if(isset($mtags)&&!empty($mtags)):?>
               <?php $nb=0 ; foreach($mtags[$k] as $x=>$y): ?>
                        <?php if($nb==10): ?>
                        <a  class="btn  btn-primary btn-xs" href="<?php echo Router::url('users/view/id:'.$v->id); ?>" >+++</a>
                        <?php elseif($nb<10): ?>
                        <?php if(in_array($y->id_tag,$mytaglist)&&($y->id_owner!=$mid)): ?>
                        <a  class="ajax btn  btn-primary btn-xs" href="<?php echo Router::url('users/index/id:'.$y->id_tag.'/name:'.urlname($y->name)); ?>"  draggable="true" id="<?php echo $y->id_tag ; ?>" ondragstart="drag(event)"><?php echo $y->name; ?></a>  
                        <?php else: ?>
                        
                         <a  class="ajax btn  btn-info  btn-xs" href="<?php echo Router::url('users/index/id:'.$y->id_tag.'/name:'.urlname($y->name)); ?>"  draggable="true" id="<?php echo $y->id_tag ; ?>" ondragstart="drag(event)"><?php echo $y->name; ?></a>
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
                <?php if($this->Session->isLogged()): ?> 
                <a  class="btn  btn-info  btn-xs" href="javascript:void(0)" onclick="chatWith('<?php echo $v->id.'\',\''.$v->pseudo ; ?>')"><col-sm-><i class="icon-comment icon-white"></i></col-sm-></a>
                <?php else: ?>
                 <a  class="btn  btn-success  btn-xs" title="<?php echo $tv['btn_comment'] ;?>" href="<?php echo Router::url('messages/write/id:'.$v->id); ?>"><i class="icon-comment icon-white"></i></a>
               <?php endif ;?>
                 <a  class="btn  btn-success  btn-xs" title="<?php echo $tv['btn_friend'] ;?>" href="<?php echo Router::url('interactions/add_friend/id:'.$v->id); ?>"><i class="icon-user icon-white"></i></a>
              <a  class="btn  btn-success  btn-xs" title="<?php echo $tv['btn_follow'] ;?>" href="<?php echo Router::url('interactions/attraction/id:'.$v->id); ?>"><i class="icon-thumbs-up icon-white"></i></a>
               <?php  endif ;?>
              <div class="clearfix"></div>
              <div class="chat-with-<?php echo $v->id; ?>"></div>
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
<!--GUIDER --->


<?php if($this->device=='computer'): ?>
 <script type="text/javascript">
 <?php
//debug($_COOKIE);
  $new_visitor=false; 
 if(isset($_COOKIE['atttft4162'])){
    /* $nvi=decrypter($_COOKIE['atttft4162'],'Nv1t8r');
     $nvisteur= explode('_',$nvi);
     $ip=$nvisteur[0];
     $time_cnx=$nvisteur[1];
     if($time_cnx<(time()-(24*30*3600))){
        $new_visitor=false;   
     }*/
     $new_visitor=false; 
 }else{
      $new_visitor=true; 
      $ip_time= $_SERVER['REMOTE_ADDR'].'_'.time() ;
      setcookie('atttft4162',crypter($ip_time,'Nv1t8r'),time()+(60*60*24*15),'/','atttune.com');
                                
 }

 if($new_visitor==true){
     echo '
             guiders.createGuider({
      buttons: [{name: "Next"}],
      description: "'.$tv["fdbck_welcome"].'",
      id: "guider0",
      next: "guider1",
      overlay: true,
      title: "'.$tv["fdbck_title_welcome"].'",
      xButton: true,
      width: 500
    }).show();
         ';
 }else{
     echo '
             guiders.createGuider({
      buttons: [{name: "Next"}],
      description: "'.$tv["fdbck_welcome"].'",
      id: "guider0",
      next: "guider1",
      overlay: true,
      title: "'.$tv["fdbck_title_welcome"].'",
      xButton: true,
      width: 500
    });
         ';
 }
 
?> 
 var w = $("#userlist").width();
   var w1 = Math.floor(w/2);
    
    
    guiders.createGuider({
      attachTo: "#tex2sh",
      buttons: [{name: "Prev", onclick: guiders.prev},
                {name: "Next", onclick: guiders.next}],
      description: "<?php echo $tv['fdbck_search'] ;?>",
      id: "guider1",
      next: "guider2",
      position: 6,
      xButton: true,
      title: "<?php echo $tv['fdbck_title_search'] ;?>"
    //  width: 500
    });
    
   guiders.createGuider({
      attachTo: "#userlist",
      buttons: [{name: "Prev", onclick: guiders.prev},
                {name: "Next", onclick: guiders.next}],
      description: "<?php echo $tv['fdbck_user_list'] ;?>",
      id: "guider2",
      next: "guider3",
      xButton: true,
      offset: { left:w1,top:0},
      position: 11,
      title: "<?php echo $tv['fdbck_title_user_list'] ;?>"
     // width: 500
    });
    
   guiders.createGuider({
      attachTo: "#user_0",
      buttons: [{name: "Prev", onclick: guiders.prev},
                {name: "Next", onclick: guiders.next}],
      description: "<?php echo $tv['fdbck_user_panel'] ;?>",
      id: "guider3",
      next: "guider4",
      position: 3,
      autoFocus:true,
      xButton: true,
      title: "<?php echo $tv['fdbck_title_user_panel'] ;?>"
    //  width: 500
    });
        
        guiders.createGuider({
      attachTo: "#quicklauch",
      buttons: [{name: "Prev", onclick: guiders.prev},
                {name: "Next", onclick: guiders.next}],
      description: "<?php echo $tv['fdbck_quick_launch'] ;?>",
      id: "guider4",
      next: "guider5",
      position: 9,
      xButton: true,
      overlay: true,
      title: "<?php echo $tv['fdbck_title_quick_launch'] ;?>"
    //  width: 550
    });
    
    guiders.createGuider({
      attachTo: "#sb_dashboard",
      buttons: [{name: "Prev", onclick: guiders.prev},
                {name: "Next", onclick: guiders.next}],
      description: "<?php echo $tv['fdbck_side_bar'] ;?>",
      id: "guider5",
      next: "guider6",
      position: 3,
      xButton: true,
      title: "<?php echo $tv['fdbck_title_side_bar'] ;?>"
     // width: 600
    });
    
      
    guiders.createGuider({
      attachTo: "#sb_status",
      buttons: [{name: "Prev", onclick: guiders.prev},
                {name: "Next", onclick: guiders.next}],
      description: "<?php echo $tv['fdbck_user_status'] ;?>",
      id: "guider6",
      next: "guider7",
      position: 3,
      xButton: true,
      title: "<?php echo $tv['fdbck_title_user_status'] ;?>",
     // width: 550
    });
    
    guiders.createGuider({
      attachTo: "#sb_allinteres",
      buttons: [{name: "Prev", onclick: guiders.prev},
                {name: "Next", onclick: guiders.next}],
      description: "<?php echo $tv['fdbck_user_interest'] ;?>",
      id: "guider7",
      next: "guider8",
      position: 3,
      xButton: true,
      title: "<?php echo $tv['fdbck_title_user_interest'] ;?>",
     // width: 550
    });
    guiders.createGuider({
      attachTo: "#sb_interest",
      buttons: [{name: "Prev", onclick: guiders.prev},
                {name: "Next", onclick: guiders.next}],
      description: "<?php echo $tv['fdbck_user_my_interest'] ;?>",
      id: "guider8",
      next: "guider9",
      autoFocus:true,
      position: 3,
      xButton: true,
      title: "<?php echo $tv['fdbck_title_user_my_interest'] ;?>",
     // width: 550
    });
    guiders.createGuider({
      attachTo: "#sb_apps",
      buttons: [{name: "Prev", onclick: guiders.prev},
                {name: "Next", onclick: guiders.next}],
      description: "<?php echo $tv['fdbck_user_apps'] ;?>",
      id: "guider9",
      next: "guider10",
      autoFocus:true,
      position: 3,
      xButton: true,
      title: "<?php echo $tv['fdbck_title_user_apps'] ;?>",
     // width: 550
    });
  
    guiders.createGuider({
      attachTo: "#sb_invite",
      buttons: [{name: "Prev", onclick: guiders.prev},
                {name: "Next", onclick: guiders.next}],
      description: "<?php echo $tv['fdbck_side_invitation'] ;?>",
      id: "guider10",
      next: "guider11",
      autoFocus:true,
      position: 3,
      xButton: true,
      overlay: true,
      title: "<?php echo $tv['fdbck_title_side_invitation'] ;?>",
      
    });
     guiders.createGuider({
      attachTo: "#myj",
      buttons: [{name: "Prev", onclick: guiders.prev},
                {name: "Close"}],
      description: "<?php echo $tv['fdbck_side_enjoy'] ;?>",
      id: "guider11",
      next: "guider12",
      autoFocus:true,
      position: 6,
      xButton: true,
      overlay: true,
      title: "<?php echo $tv['fdbck_title_side_enjoy'] ;?>",
    
    });
    
    </script>
<?php endif ;?>

