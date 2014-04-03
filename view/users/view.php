<?php $title_for_layout = $tv['vu_title_view'].$user->pseudo ?>

<?php   
        $lui=$this->Session->read('lui') ;
        if(isset($lui)&&!empty($lui)){
         $nb=count($lui);
        $key= array_search($user->id,$lui);
        $nxt=0;
        $prv=0;
        if($nb<=1){
            $nxt=$lui[0];
            $prv=$lui[0];
        }elseif($nb>1){
            $knxt=$key+1;
            if($knxt==$nb){
                $nxt=$lui[0];
            }else{
                $nxt=$lui[$knxt];
            }
            $kprv=$key-1;
            if($kprv<0){
                $prv=$lui[$nb-1];
            }else{
                $prv= $lui[$kprv];
            }
        }   
        }
        
        

      $mid=$this->Session->User('id') ; 
       if($mid){
          $mytaglist=array();
      $mytaglist=$this->Session->read('mytag') ;  
       }
 
$rolles =array(0=>$tv['u_visitor'],1=>$tv['u_visitor'],2=>$tv['u_member'],3=>$tv['u_premium']);
 $mtype=array(       
                            1=>$tv['m'], 
                            2=>$tv['w']) ; 

 $langu=array(
'en'=>$tv['en'],
'fr'=>$tv['fr'],
'de'=>$tv['de'],
'es'=>$tv['es'],
'pt'=>$tv['pt'],
'it'=>$tv['it'],
'ja'=>$tv['ja'],
'hi'=>$tv['hi'],
'ko'=>$tv['ko'],
'zh'=>$tv['zh'],
'ru'=>$tv['ru'],

);



  $abuse=array(
1=>$tv['ab_falseprofile'],
2=>$tv['ab_stolen_pics'],
3=>$tv['ab_children'],
4=>$tv['ab_insults'],
5=>$tv['ab_pishing'],
6=>$tv['ab_spam'],
7=>$tv['ab_explicit'],
8=>$tv['ab_shocking']
);   

;?>
<style type="text/css">
    .pas_copier {
	height:<?php echo $yy ;?>px;
	width:<?php echo $xx ;?>px;
	background:url('<?php echo Router::webroot('img/'.$img_adress);?>') center center no-repeat ;
}
</style>


<ul class="nav nav-tabs" id="myj">
      <li class="active"><a href="<?php echo Router::url('users/view/id:'.$user->id); ?>"><i class="icon-user"></i><span class="hidden-xs"> <?php echo $tv['g_profile'] ;?></span></a></li>
 
 <?php if($own>5): ?>
                        <li><a href="<?php echo Router::url('users/edit'); ?>"><i class="icon-pencil"></i><span class="hidden-xs"> <?php echo $tv['g_edit'] ;?></span></a></li>
                        <li><a href="<?php echo Router::url('medias/pics'); ?>"><i class="icon-picture"></i><span class="hidden-xs"> <?php echo $tv['g_picture'] ;?></span></a></li>
                        <li><a href="<?php echo Router::url('users/taglist/id:'.$user->id); ?>"><i class="icon-tags"></i><span class="hidden-xs"> <?php echo $tv['g_tag'] ;?></span></a></li>
                        <?php else: ?>
                        <li><a href="<?php echo Router::url('messages/write/id:'.$user->id); ?>"><i class="icon-edit"></i><span class="hidden-xs"> <?php echo $tv['g_message'] ;?></span></a></li>
                        <li><a href="<?php echo Router::url('medias/pics/id:'.$user->id); ?>"><i class="icon-picture"></i><span class="hidden-xs"> <?php echo $tv['g_picture'] ;?></span></a></li>
                        <li><a href="<?php echo Router::url('users/taglist/id:'.$user->id); ?>"><i class="icon-tags"></i><span class="hidden-xs"> <?php echo $tv['g_tag'] ;?></span></a></li>
                        <li><a href="#repAbuse" data-toggle="modal"><i class="icon-flag"></i><span class="hidden-xs"> <?php echo $tv['g_report'] ;?></span></a></li>
                       
 <?php endif ;?>
   
</ul>
<div class="first-header">
    <div class="row">
        <div class="col-md-2 col-xs-1">
            <?php if(isset($prv)): ?>
            <h1><a href="<?php echo Router::url('users/view/id:'.$prv); ?>"><</a></h1>
            <?php endif ;?>
        </div>
        <div class="col-md-8 col-xs-9 ttip" rel="ttype" data-toggle="tooltip" title="<?php echo $tv['vu_timstp'].' '.sinceI($user->timstp) ; ?>">
                <h2><?php echo ucfirst($user->pseudo); ?>,<?php echo ' '.age($user->dd1,$user->dm1,$user->dy1).', '.$user->city.', '.strtoupper($user->contry) ;?> <?php if($connected):?><i class="ico-connected"></i><?php endif ;?></h2>
        </div>
        <div class="col-md-2 col-xs-1">
            <?php if(isset($nxt)): ?>
            <h1><a href="<?php echo Router::url('users/view/id:'.$nxt); ?>">></a></h1>
            <?php endif ;?>
        </div>
    </div>
    
</div>
<div class="row">
   
    
    <div class="col-md-4">
        
        <?php if(isset($post)&&!empty($post)): ?>
        <?php foreach($post as $k=>$v): ?>
        <div class="panel panel-info" id="u_feed">
            <div class="panel-body">
              <?php echo $v->message ; ?>  
                <div class="clearfix"></div>
                   <a  class="btn  btn-success  btn-xs"  href="<?php echo Router::url('medias/pics_delete/id:'.$v->id); ?>"><i class="icon-star"></i></a>
                   <a  class="btn  btn-success  btn-xs"  href="<?php echo Router::url('medias/pics_main/id:'.$v->id); ?>"><i class="icon-retweet"></i></a>
                   <a  class="btn  btn-success  btn-xs"  href="<?php echo Router::url('medias/pics_main/id:'.$v->id); ?>"><i class="icon-paperclip"></i></a>  
                <?php if($own>5): ?>
                   <a  class="btn  btn-success  btn-xs"  href="<?php echo Router::url('posts/delete/'.$v->id); ?>"><i class="icon-trash"></i></a>
                  <?php endif ;?>       
                  <?php echo sinceI($v->date) ;?> 
            </div>
            
            <div class="panel-footer">
                 
                <form class="formMessage" data-u-id="<?php echo $v->id; ?>">
                     <textarea class="input messageTextarea" placeholder="<?php echo $tv['placeh_write_me'] ;?>" name="message"></textarea>
                   </form>
            </div>
        </div>
        
        
        <?php endforeach ;?>
        <?php endif ;?>
        
    </div>
     <div class="col-md-4">
        <div class="well" id="u_mainpicture" >
                <?php if(isset($main_pic)):?>		
	        <a href="<?php echo Router::url('medias/pics/id:'.$main_pic->user_id); ?>" class="img-rounded img-responsive"><img src="<?php echo Router::webroot('img/pic.gif'); ?>"  class="pas_copier  img-responsive" /></a>
                <?php endif ;?>
        </div>
             <table class="table table-bordered" id="u_info">
              <th>Personnal info</th>
              <?php if(isset($mid)&&($mid!=false)): ?>
              <tr><td><?php echo $tv['vu_role'] ; ?></td><td><?php echo $rolles[$user->role] ; ?></td></tr>
<?php 
if(isset($user->type_set)&&!empty($user->type_set)){
   $b=explode(',',$user->type_set);
  $c=array();
  foreach($b as $m=>$n){
      $c[]=' '.$mtype[$n].' ';
  }
  $tx = implode(',',$c) ;
  unset($b);
  unset($c);   
}


;?>
<tr><td><?php echo $tv['vfd_my_type'] ; ?></td><td><?php echo $mtype[$user->my_type] ; ?></td></tr>
<?php if(isset($tx)): ?>
<tr><td><?php echo $tv['vfd_type_search'] ; ?></td><td><?php echo $tx ; ?></td></tr>
<?php endif ;?>
<?php 
if($user->languages){
  $b=explode(',',$user->languages);
  $c=array();
  foreach($b as $m=>$n){
      $c[]=' '.$langu[$n].' ';
  }
  $tl = implode(',',$c) ;
  unset($b);
  unset($c);  
}
  
;?>
<?php if(isset($tl)): ?>
<tr><td><?php echo $tv['vu_languages'] ; ?></td><td><?php echo $tl ; ?></td></tr>
<?php endif ;?>


            <?php else: ?>
<tr>
    <td>
        <a href="<?php echo Router::url('users/login'); ?>"><?php echo $tv['b_member_to_view'] ;?></a>
    </td>
</tr>
            <?php endif ;?>
               </table>
    </div>
    
    <div class="col-md-4">
        <?php if(isset($apps_list)&&!empty($apps_list)): ?>
        <div class="panel panel-info">
            <div class="panel-body">
              <?php foreach($apps_list as $l=>$m): ?>
                  <?php if(isset($m->app_link)&&(!empty($m->app_link))): ?>
          <span><a href="<?php echo $m->app_link ;?>" target="_blank"><i class="ico-<?php echo $m->slug ;?>" id="sn-btn"></i></a></span>
          <?php else: ?>
          <span><i class="ico-<?php echo $m->slug ;?>" id="sn-btn"></i></span>
          <?php endif ;?>
                      <?php endforeach ;?>  
            </div>
            
        </div>
               
               <?php endif ;?>
          
        <?php if(isset($mtags)):?>
          <div class="well" id="u_taglist">
               <?php $tag_list="" ;?>
              <?php foreach($mtags as $k=>$v): ?>
                        <?php if(isset($mytaglist)&&!empty($mytaglist)&&in_array($v->id_tag,$mytaglist)&&($v->id_owner!=$mid)): ?>
                        <span > <button class="btn  btn-primary "><a href="<?php echo Router::url('users/index/id:'.$v->id_tag.'/name:'.urlname($v->name)); ?>" ><?php echo $v->name; ?></a> </button></span>    
                        <?php else: ?>
                        
                        <span class="btn-group btn-group-xs"> <button  type="button" class="btn  btn-info "><a href="<?php echo Router::url('users/index/id:'.$v->id_tag.'/name:'.urlname($v->name)); ?>" ><?php echo $v->name; ?></a>
                                <?php if($v->id_owner != $mid): ?>
                                <button  type="button" class="btn  btn-info "><a href="<?php echo Router::url('categories/tag/id:'.$v->id_tag); ?>" title="add this tag" ><i class="icon-arrow-down"></i></a></button>
                                <?php else: ?>
                                <button  type="button" class="btn  btn-info "><a href="<?php echo Router::url('categories/delete_tag/id:'.$v->id); ?>" ><i class="icon-remove"></i></a></button>
                                
                                <?php endif;?>
                                 </button></span> 
                <?php endif ;?>
                       <?php $tag_list.=$v->name.' , ' ;?>
              <?php endforeach;?> 
                        
            </div>
         <?php endif ;?>
        <?php 
        $sx=array(1=>'$M',2=>'$W');
        $age=age($user->dd1,$user->dm1,$user->dy1);
        $desc_for_layout = 'Hi my name is '.$user->pseudo.' I\'m a '.$mtype[$user->my_type].' '.$age.' years old , living in '.$user->city.' '.$user->region.' '.$user->contry.' I\'m interesting in '.$tag_list;
        for($i=18;$i<$age;$i++){
            $min_range.=' $+'.$i.'';
        }
        for($j=$age+1;$j<80;$j++){
            $max_range.=' $-'.$j.'';
        }
        
        $desc_for_layout .='My last message: '.$user->few_words.'\n $che@tC0de::'.$sx[$user->my_type].' $='.$age.$min_range.$max_range ;
        $keyw_for_layout = $tag_list; ?>
        <div class="well" id="mapid" style="width: 100%; height: 200px"></div>
        
    </div>
</div>



<?php if(isset($mid)&&($mid!=false)): ?>
<script type="text/javascript">
function initialize() {
    var myLatlng = new google.maps.LatLng(<?php echo "$user->lat,$user->lng" ;?>);
        var mapOptions = {
          center: myLatlng,
          zoom: 11
        };
        var map = new google.maps.Map(document.getElementById("mapid"),
            mapOptions);
         
        var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: '<?php echo $tv['map_member'];?>'
        });
            
      }
      google.maps.event.addDomListener(window, 'load', initialize);


</script>
<?php else: ?>
<script type="text/javascript">
function initialize() {
var mapOptions = {
          center: new google.maps.LatLng(<?php echo "37.46, 122.25" ;?>),
          zoom: 11
        };
        var map = new google.maps.Map(document.getElementById("mapid"),
            mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php endif ;?>

<?php echo $this->Form->create(array('style'=>'hoz','id'=>'form_1','file'=>'ok','action'=>'interactions/abuse/id:'.$user->id),true, 'DoN@tienne','kuhjtyus') ;?>

<div id="repAbuse" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
        <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo $tv['report_abuse'] ;?></h3>
  </div>
   <div class="modal-body">
      <?php echo $this->Form->input32('abuse',$tv['ab_type'],array('options'=>$abuse)); ?> 
      <?php echo $this->Form->input('description',$tv['ab_description'],array('type'=>'textarea','rows'=>4)); ?>
      <?php echo $this->Form->input('block',$tv['ab_block'],array('type'=>'checkbox')); ?>

 </div>
  <div class="modal-footer">
    <input type="submit" value="<?php echo $tv['g_report'] ;?>" class="btn btn-danger ">
    <a href="<?php echo Router::url('interactions/blacklist/id:'.$user->id); ?>" class="btn btn-info btn-lg"><i class="icon-ban-circle"></i> <?php echo $tv['g_blocked'] ;?></a>
                        
    <button class="btn " data-dismiss="modal" aria-hidden="true"><?php echo $this->s['g_close'] ;?></button>
  </div>
        
</div>
</form>




