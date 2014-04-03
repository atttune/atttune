<?php $title_for_layout = $tv['flt_title_my_blacklist']; ?>

<?php $mytaglist=$this->Session->read('mytag') ; 
if(!isset($mytaglist)||empty($mytaglist)){$mytaglist=array();}
      $mid=$this->Session->User('id') ; 
?>
      <?php $rqd=$this->request->data ;?>

<ul class="nav nav-tabs" id="myj">
    <li <?php if(isset($pstat)&&($pstat==0)) echo 'class="active"' ;?>><a href="<?php echo Router::url('interactions/my_blacklist'); ?>"><?php echo $tv['g_all'] ;?></a></li>
    <li <?php if(isset($pstat)&&($pstat==1)) echo 'class="active"' ;?>><a href="<?php echo Router::url('interactions/my_blacklist/11'); ?>"><?php echo $tv['g_day'] ;?></a></li>
    <li <?php if(isset($pstat)&&($pstat==2)) echo 'class="active"' ;?>><a  href="<?php echo Router::url('interactions/my_blacklist/22'); ?>"><?php echo $tv['g_week'] ;?></a></li>
    <li <?php if(isset($pstat)&&($pstat==3)) echo 'class="active"' ;?>><a href="<?php echo Router::url('interactions/my_blacklist/33'); ?>"><?php echo $tv['g_month'] ;?></a></li>
    <li <?php if(isset($pstat)&&($pstat==4)) echo 'class="active"' ;?>><a href="<?php echo Router::url('interactions/my_blacklist/44'); ?>"><?php echo $tv['g_online'] ;?></a></li>
</ul>

   <h3><?php echo $tv['flt_my_blacklist'] ;?></h3> 
<hr>
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
            
            <?php if(isset($users)&&!empty($users)): ?>
              
                <div id="userlist" class="row">
                 <?php $cus=count($users) ;?>
                    <?php for($w=0;$w<3;$w++): ?>
                        <div class="col-md-4">
                            <?php for($k=$w;$k<$cus;$k=$k+3): ?>
                            <?php $v=$users[$k]; ?>
                            
                            
<?php require('userpanel.php') ;?>                   
                            
                            
                            <?php endfor ?>
                        </div>
                    <?php endfor ;?>
                        
               
		</div>
            <?php endif ;?>
            
            <?php if(isset($page)&&($page>0)):?>
  <ul class="pagination">
      <?php for($i=1; $i <= $page; $i++): ?>
        <li <?php if($i==$this->request->page) echo 'class="active"'; ?>><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
      <?php endfor; ?>
      </ul>
            <?php endif ;?>
</div>




</div>

