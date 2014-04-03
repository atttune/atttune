<?php 

  $tagtype = array(
    0=>$this->s['tag_hobbies'],
    1=>$this->s['tag_movies'],
    2=>$this->s['tag_music'],
    3=>$this->s['tag_book'],
    4=>$this->s['tag_tv'],
    5=>$this->s['tag_game'],
   
    );
  
 $mtype=array(       
                            1=>$this->s['w'], 
                            2=>$this->s['m'],
                            3=>$this->s['cpl'] ) ; 

$ethnic=array(
1=>$this->s['vfd_african'],
2=>$this->s['vfd_african_american'], 
3=>$this->s['vfd_asian'],
4=>$this->s['vfd_caucasian'],
5=>$this->s['vfd_european'],
6=>$this->s['vfd_hispanic'],
7=>$this->s['vfd_indian'],
8=>$this->s['vfd_middle_eastern'],
9=>$this->s['vfd_mixed'],
10=>$this->s['vfd_earthling'],

  ) ;

  $hair = array(
    1=>$this->s['vfd_hairblack'],
    2=>$this->s['vfd_hairblond'],
    3=>$this->s['vfd_hairred'],
    4=>$this->s['vfd_hairbald'],
    5=>$this->s['vfd_hairshaved'],
    6=>$this->s['vfd_hairbrown'],
    7=>$this->s['vfd_hairgrey'],
    8=>$this->s['vfd_hairwhite'],
    9=>$this->s['vfd_hairdyed']
    );

  $eyes = array(
    1=>$this->s['vfd_eyesblack'],
    2=>$this->s['vfd_eyesbrown'],
    3=>$this->s['vfd_eyesblue'],
    4=>$this->s['vfd_eyesgreen'],
    5=>$this->s['vfd_eyesgrey'],
    6=>$this->s['vfd_eyesother']
    );

  $statut = array(
    1=>$this->s['vfd_statutsingle'],
    2=>$this->s['vfd_statutmarried'],
    3=>$this->s['vfd_statutattached'],
    4=>$this->s['vfd_statutopen']
    );

 $bodytype=array(
    1=>$this->s['vfd_slim'],
    2=>$this->s['vfd_average'],
    3=>$this->s['vfd_athletic'],
    4=>$this->s['vfd_extra'],
    5=>$this->s['vfd_big'],


  );
  $child = array(
    1=>$this->s['vfd_none'],
    2=>$this->s['vfd_one'],
    3=>$this->s['vfd_two'],
    4=>$this->s['vfd_more']
    ) ;

  $hertz = array(
    1=>$this->s['vfd_never'],
    2=>$this->s['vfd_occasionnaly'],
    3=>$this->s['vfd_often']
    )  ;


    $sexorientation = array(
    1=>$this->s['vfd_straight'],
    2=>$this->s['vfd_openminded'],
    3=>$this->s['vfd_bisexual'],
    4=>$this->s['vfd_gay']
    );
    
    $living = array(
    1=>$this->s['vfd_wparent'],
    2=>$this->s['vfd_wroomate'],
    3=>$this->s['vfd_studentres'],
    4=>$this->s['vfd_wpartner'],
    5=>$this->s['vfd_alone'],
    );
    
     $education = array(
    1=>$this->s['vfd_school'],
    2=>$this->s['vfd_somecollege'],
    3=>$this->s['vfd_highschool'],
    4=>$this->s['vfd_degree']
    );
     
     $income = array(
    1=>$this->s['vfd_school'], //faible
    2=>$this->s['vfd_somecollege'],//moyen
    3=>$this->s['vfd_highschool'], // eleve
    4=>$this->s['vfd_degree']    //
    );
    $lg=array('en','fr') ; //,'de','es','pt','it','ja','hi','ko','zh','ru') ;
    
$llg=loadLang();
$uuid=$this->Session->User('id');    
$rqc=$this->request->controller;
$rqa=$this->request->action;
$rqp=$this->request->params;
?>
<!DOCTYPE html> 
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
    <head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php if(isset($og_tag_ok)&&($og_tag_ok==true)):?>
<meta property="og:title" content="<?php echo $og_title_for_layout; ?>" />
<meta property="og:description" content="<?php echo $og_description_for_layout.$og_tag_name.$og_description2_for_layout; ?>" />
<meta property="og:image" content="https://www.atttune.com/favicon.png" />
<?php endif ;?>
<meta property="fb:admins" content="291753447636541" />
<meta property="fb:app_id" content="348020895300791" />
    <title><?php echo isset($title_for_layout)?$title_for_layout: $this->s['l_title'] ; ?></title> 
    <link href="https://www.atttune.com/css/font-awesome.css" rel="stylesheet">
    <link href="https://www.atttune.com/css/icon-hover.css" rel="stylesheet">
    <link href="https://www.atttune.com/css/i-hover.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    
    <link rel="stylesheet" href="https://www.atttune.com/bootstrap/css/bootstrap_2.css"/>
    <link rel="stylesheet" href="https://www.atttune.com/css/main_1.css"/>
    <link href="https://www.atttune.com/css/zoombox.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="https://www.atttune.com/css/offcanvas.css" rel="stylesheet">
    <link href="https://www.atttune.com/guiders.css" rel="stylesheet" type="text/css" />
   
    <link rel="icon" type="image/png" href="https://www.atttune.com/favicon.png" />


    
    <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="<?php echo Router::webroot('favicon.ico'); ?>" /><![endif]-->

<script type="text/javascript" src="https://www.atttune.com/js/jqr.js"></script>
<script type="text/javascript" src="https://www.atttune.com/js/main.js"></script>
<script type="text/javascript" src="https://www.atttune.com/js/offcanvas.js"></script>
<script type="text/javascript" src="https://www.atttune.com/bootstrap/js/bootstrap3.min.js"></script>
<script type="text/javascript" src="https://www.atttune.com/guiders.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXsn9VfGcHSrugkPh8eSofe3crdx3moBI&sensor=true"></script>  
 </head> 
    <body >  

<script>


window.fbAsyncInit = function() {
    FB.init({
            appId:'348020895300791',
            status     : true,
            cookie     : true,
            xfbml      : true  
    });

};

function FacebookInviteFriends()
{
FB.ui({
method: 'apprequests',
message: '<?php echo $this->s['fcbk_invitation'] ;?>'

});
}
</script>   

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=348020895300791";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
       
               <!-- <div class="navbar" style="position:static" >-->
     <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header" id="thenavbar">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo Router::url('users/index'); ?>">@tttune</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
           <?php if(isset($_SESSION['User']->id) ): ?>        
              <ul class="nav navbar-nav">
                    <li><a href="<?php echo Router::url('users/index'); ?>" title="<?php echo $this->s['title_home'] ;?>"><i class="icon-home icon-white icon-hover-flip"></i><?php echo $this->s['l_home'] ;?></a></li> 
                  <li><a href="<?php echo Router::url('messages/index'); ?>" title="<?php echo $this->s['title_messages'] ;?>"><i class="icon-envelope icon-white icon-hover-flip"></i><?php echo $this->s['l_messages'] ;?><?php $nb_msg = $this->pending_messages() ; if($nb_msg) echo "<span class=\"label label-danger\">$nb_msg</span>";?></a></li>      
              </ul>
                    
             
    <ul class="nav navbar-nav navbar-right">
       
        <li><a href="<?php echo Router::url('users/view'); ?>" title="<?php echo $this->Session->read('User')->few_words; ?>"><?php if($this->Session->User('role')==3): ?><i class="icon-star icon-gold icon-hover-slide"></i> <?php endif ;?><i class="icon-user icon-white icon-hover-slide"></i><?php echo ' '.$this->Session->read('User')->pseudo ;?></a></li>
           
                      
      <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog icon-white  icon-hover-flip"></i><span class="caret"></span></a>
  
              <ul class="dropdown-menu pull-rigth" role="menu" aria-labelledby="dLabel" id="settingpanel">
                 <?php if($this->Session->User('role')==3): ?>
                  <li id="umc-setting">
                    <a href="<?php echo Router::url('params/premium') ;?>" title="<?php echo $this->s['title_gold'] ;?>"><i class="icon-star icon-gold"></i><?php echo $this->s['l_gold_setting'] ;?></a>
                 </li>
                  <?php endif ;?>
                  
                 <li id="umc-setting">
                    <a href="<?php echo Router::url('params/index') ;?>" title="<?php echo $this->s['title_settings'] ;?>"><i class="icon-wrench"></i><?php echo $this->s['l_setting'] ;?></a>
                 </li>
                 <li id="umc-signup">
                    <a href="<?php echo Router::url('users/logout') ;?>" title="<?php echo $this->s['title_logout'] ;?>"><i class="icon-off"></i><?php echo $this->s['l_logout'] ;?></a>
                 </li>
              </ul> 
      </li>

    </ul>
                
   <?php else: ?> 
        <ul class="nav navbar-nav">
                    <li><a href="<?php echo Router::url('users/index'); ?>" title="<?php echo $this->s['title_home'] ;?>"><i class="icon-home icon-white icon-hover-flip"></i><?php echo $this->s['l_home'] ;?></a></li> 
             </ul>
             <ul class="nav navbar-nav navbar-right">
                 <li class="dropdown">
        <a href="<?php echo Router::url('users/login') ;?>" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-signin icon-white icon-hover-flip"></i><?php echo ' '.$this->s['g_login'] ?><b class="caret"></b></a>
        
<div class="dropdown-menu" style="width:250px; padding:15px;" >
    
    

   	<?php echo $this->Form->create(array('action'=>'users/loogin'),true, 'DoN@ti','karate') ;?>
  
             <div class="form-group">
    
    <input type="email" class="form-control"  name="email" id="exampleInputEmail1" placeholder="<?php echo $this->s['placeh_email'] ;?>">
  </div>
  <div class="form-group">
    
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="<?php echo $this->s['placeh_pwd'] ;?>">
  </div>
	<button type="submit" class="btn btn-success "><?php echo $this->s['vu_cnx'] ;?></button>  <a href="<?php echo Router::url('invitations/connect') ;?>" class="btn btn-md btn-fcbk" title="<?php echo $this->s['title_cnx_facebook'] ;?>"><i class="icon-facebook icon-color"></i></a>	
              
    <div class="checkbox">
    <label>
      <input type="hidden" name="keep" value="0"><input type="checkbox" name="keep" value="1"><?php echo $this->s['vu_kcnx'] ;?>
    </label>
  </div>
 <div class="form-group"  >
  <a href="<?php echo Router::url('users/forgot') ;?>" ><?php echo $this->s['vu_forgot'] ;?></a>
</div>
		
	         
	</form>

          </div></li>
          
           <li class="dropdown">
        <a href="<?php echo Router::url('users/signup') ;?>" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-bookmark icon-white icon-hover-flip"></i><?php echo ' '.$this->s['g_signup'] ?><b class="caret"></b></a>
        
<div class="dropdown-menu" style="width:300px; padding:15px;" >
    
    <div class="form-group" >
        <a href="<?php echo Router::url('users/signup') ;?>"  class="btn btn-default btn-lg"><i class="icon-envelope-alt icon-hover-flip"></i><?php echo $this->s['signup_email'] ;?></a>
    </div>
    <div class="form-group" >
        <a href="<?php echo Router::url('invitations/connect'); ?>" class="btng btn-lg btn-fcbk" > <i class="icon-facebook icon-hover-flip"></i><?php echo $this->s['signup_facebook'] ;?></a>
    </div>

		
	

          </div></li>
          
                 
      <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-globe icon-white icon-hover-flip"></i><span class="caret"></span></a>
  
      <ul class="dropdown-menu pull-rigth" role="menu" aria-labelledby="dLabel" id="settingpanel">
          <?php foreach($lg as $k=>$v):?>
       <li id="lg-<?php echo $k ;?>">
        <a href="<?php echo Router::url('users/language/'.$k) ;?>" ><?php echo $this->s[$v] ;?></a>
    </li>
        <?php endforeach ;?>
    </ul> 
          
      </li>

    </ul>
               
    <?php endif ;?>

      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
 <?php  if($this->device=='computer'): ?>              
   <div class="betaImg" style="position: absolute; top: 50px; z-index: 1000;"><img src="<?php echo Router::webroot('img/beta2.png') ;?>" class="img-responsive"/></div>            

 <?php $oli=true ;?>       
<?php if(!$this->sh_cache->start('gallrY'.$llg)): ?>
          
          <!-- gallerie -->   
          
    <?php $gallery=$this->rand_pic(); if(!empty($gallery)): ?>
     <div class="container"  id="galslide">
         
         <div id="galerie">
             <div class="slider">
         
              <?php 
              
              foreach($gallery as $k=>$v): ?>
              <a href="<?php echo Router::url('users/view/id:'.$v->user_id); ?>" ><img src="<?php echo Router::webroot('img/'.$v->file_sq_med) ;?>" width="75" height="75" alt="" /></a>
                
              <?php endforeach ;?>
             </div>
             <div class="clearfix"></div>
         </div>
        
     </div>
    <div class="first-header"></div>
     <?php endif ;?>
    <?php endif ;?>
    <?php $this->sh_cache->end() ;?>
    <?php endif ;?>
          <?php  if(isset($this->Session->read('User')->id) ){$ok=true;} else{$ok=false;} ?> 
            <div class="container">
        
            <div class="row row-offcanvas row-offcanvas-left">
         <div class="col-xs-9 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
           
            
          
          
          <div class=" sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header"><a href="<?php echo Router::url('users/premium'); ?>"><strong style="color:#cead00"><i class="icon-star"></i><?php echo  ' '.$this->s['l_become_vip'] ;?></strong></a></li>
                   <li><a href="https://atttune.uservoice.com" target="_blank"><i class="icon-bullhorn icon-hover-flip"></i><?php echo  ' '.$this->s['l_give_feedback'] ;?></a></li>
                   <li><a href="#guider" onclick="guiders.show('guider0');"><i class="icon-info-sign icon-hover-flip"></i><?php echo  ' '.$this->s['l_take_tour'] ;?></a></li>
                   
                   <?php if($ok): ?>
                   <li><a href="<?php echo Router::url('apps/index'); ?>"><i class="icon-puzzle-piece icon-hover-flip"></i><?php echo  ' '.$this->s['l_add_sn'] ;?></a></li>
                   <?php endif ;?>
            </ul>
          </div>
            <hr> 
               
           <?php if($ok): ?> 
        
          <div class="sidebar-nav " id="sb_interest">
              <ul class="nav nav-list">
              
              <li class="nav-header" title="<?php echo $this->s['tips_myinteres'];?>"><i class="icon-tags icon-hover-flip"></i><?php echo ' '.$this->s['l_myinteres'] ;?></li>
              <p class="tgList">
              <?php $mynterest=$this->myinteres() ;?>
              <?php
              $mint='';
              foreach( $mynterest as $k=>$v){
                  $mint.='<a href="'.Router::url('users/index/id:'.$v->id_tag.'/name:'.urlname($v->name)).'" class="btn btn-primary btn-xs" title="'.$tagtype[$v->type].'">'.$v->name.'</a> ';
              } 
              echo $mint;
              ?>
              
               
              </p>
             
              </ul>
              <form id="formTags">
                  <textarea class="input messageTextarea" placeholder="<?php echo $this->s['placeh_tag'] ;?>" style=" background-color: #ffffff;margin-left:15px;margin-right:30px;width:85%;"></textarea>
              </form>
          </div><!--/.well -->
          <hr>
        

          <div class="sidebar-nav " id="sb_network">
            <ul class="nav nav-list">
              <li class="nav-header" title="<?php echo $this->s['tips_network'];?>"><i class="icon-group icon-hover-flip"></i><?php echo $this->s['l_flirtpanel'] ;?></li>
             <?php $numb=$this->flirt_nb() ; ?>
              
                                        <li><a href="<?php echo Router::url('interactions/my_friend'); ?>"><?php echo $this->s['l_my_friend'] ;?>   <?php if(isset($numb['my_friend'])&&($numb['my_friend']>0)):?> <?php if(isset($numb['my_friend_nread'])&&($numb['my_friend_nread']>0)):?>   <span class="label label-important"><?php echo $numb['my_friend'];?></span><?php else: ?><?php echo $numb['my_friend']; ?> <?php endif; ?> <?php endif ;?>   <?php if(isset($numb['my_friendrequests'])&&($numb['my_friendrequests']>0)):?> <?php if(isset($numb['my_friendrequests_nread'])&&($numb['my_friendrequests_nread']>0)):?>   <span class="label label-warning">(<?php echo $numb['my_friendrequests'];?>)</span><?php else: ?>(<?php echo $numb['my_friendrequests']; ?>) <?php endif; ?> <?php endif ;?></a></li>
					<li><a href="<?php echo Router::url('interactions/my_interes'); ?>"><?php echo $this->s['l_my_interes'] ;?>   <?php if(isset($numb['my_interes'])&&($numb['my_interes']>0)):?> <?php if(isset($numb['my_interes_nread'])&&($numb['my_interes_nread']>0)):?>   <span class="label label-important"><?php echo $numb['my_interes'];?></span><?php else: ?><?php echo $numb['my_interes']; ?> <?php endif; ?> <?php endif ;?></a></li>	
					<li><a href="<?php echo Router::url('interactions/interes_of'); ?>"><?php echo $this->s['l_interes_of'] ;?>   <?php if(isset($numb['interes_of'])&&($numb['interes_of']>0)):?>  <?php if(isset($numb['interes_of_nread'])&&($numb['interes_of_nread']>0)):?>  <span class="label label-important"><?php echo $numb['interes_of'];?></span><?php else: ?><?php echo $numb['interes_of']; ?> <?php endif; ?> <?php endif ;?></a></li>
                                        <li><a href="<?php echo Router::url('interactions/my_attraction'); ?>"><?php echo $this->s['l_my_attraction'] ;?>   <?php if(isset($numb['my_attraction'])&&($numb['my_attraction']>0)):?> <?php if(isset($numb['my_attraction_nread'])&&($numb['my_attraction_nread']>0)):?>   <span class="label label-important"><?php echo $numb['my_attraction'];?></span><?php else: ?><?php echo $numb['my_attraction']; ?> <?php endif; ?> <?php endif ;?></a></li>
                                        <li><a href="<?php echo Router::url('interactions/visite_me'); ?>"><?php echo $this->s['l_visite_me'] ;?>   <?php if(isset($numb['visite_me'])&&($numb['visite_me']>0)):?>  <?php if(isset($numb['visite_me_nread'])&&($numb['visite_me_nread']>0)):?>  <span class="label label-important"><?php echo $numb['visite_me'];?></span><?php else: ?><?php echo $numb['visite_me']; ?> <?php endif; ?> <?php endif ;?></a></li>
                                        <li><a href="<?php echo Router::url('interactions/my_visite'); ?>"><?php echo $this->s['l_my_visite'] ;?>   <?php if(isset($numb['my_visite'])&&($numb['my_visite']>0)):?>  <?php if(isset($numb['my_visite_nread'])&&($numb['my_visite_nread']>0)):?>  <span class="label label-important"><?php echo $numb['my_visite'];?></span><?php else: ?><?php echo $numb['my_visite']; ?> <?php endif; ?> <?php endif ;?></a></li>	
					<li><a href="<?php echo Router::url('interactions/my_blacklist'); ?>"><?php echo $this->s['l_my_blacklist'] ;?><?php if(isset($numb['my_blacklist'])&&($numb['my_blacklist']>0)):?> <?php if(isset($numb['my_blacklist_nread'])&&($numb['my_blacklist_nread']>0)):?>  <span class="label label-important"><?php echo $numb['my_blacklist'];?></span><?php else: ?><?php echo $numb['my_blacklist']; ?> <?php endif; ?> <?php endif ;?></a></li>	
						
							
						    
            </ul>
          </div><!--/.well -->
          <hr>
          <div class="sidebar-nav " id="sb_apps">
            <ul class="nav nav-list">
              <li class="nav-header" title="<?php echo $this->s['tips_apps'];?>"><i class="icon-puzzle-piece icon-hover-flip"></i><?php echo ' '.$this->s['l_myapps'] ;?></li>
              <li><a href="<?php echo Router::url('apps/index'); ?>"><?php  echo $this->s['l_add_apps'] ;?></a></li>

              <li>
                  <?php $myappsl= $this->myapps() ;
                  foreach($myappsl as $k=>$v): ?>
                  <?php if(isset($v->app_link)&&(!empty($v->app_link))): ?>
          <span><a href="<?php echo $v->app_link ;?>" target="_blank"><i class="ico-<?php echo $v->slug ;?>" id="sn-btn"></i></a></span>
          <?php else: ?>
          <span><i class="ico-<?php echo $v->slug ;?>" id="sn-btn"></i></span>
          <?php endif ;?>
                      <?php endforeach ;?>
              </li>
              
            </ul>
          </div>
          <hr>
                      
        
          <?php else: ?>
      <?php if(!$this->sh_cache->start('allinteres'.$llg)): ?>
          
          <div class="sidebar-nav " id="sb_allinteres">
              <ul class="nav nav-list">
              
              <li class="nav-header" title="<?php echo $this->s['tips_allinteres'];?>"><i class="icon-tags icon-hover-flip"></i><?php echo ' '.$this->s['l_allinteres'] ;?></li>
              <p>
              <?php $mynterest=$this->allinteres(20) ;?>
              <?php
              $mint='';
              foreach( $mynterest as $k=>$v){
                  $mint.='<a href="'.Router::url('users/index/id:'.$v->id.'/name:'.urlname($v->name)).'" class="btn btn-info btn-xs" title="'.$tagtype[$v->type].'">'.$v->name.'</a> ';
              } 
              echo $mint;
              ?>
              </p>
             
              <ul>
            
          </div><!--/.well -->
          <hr>
    
    <?php $this->sh_cache->end() ;?>
    <?php endif ;?>
          
          <?php endif ;?>
          
        <?php if(!$this->hr_cache->start('sidefooter'.$llg)): ?>
          
                     <div class=" sidebar-nav" id="sb_invite">
            <ul class="nav nav-list">
              <li class="nav-header" title="<?php echo $this->s['tips_invite'];?>"><i class="icon-share icon-hover-flip"></i><?php echo ' '.$this->s['l_invitation_panel'] ;?></li>
              
                    <li><a href="#"  onclick="FacebookInviteFriends();">facebook</a></li>
                    <li><a href="<?php echo Router::url('invitations/gmail'); ?>">gmail</a></li>
                    <li><a href="<?php echo Router::url('invitations/yahoo'); ?>">yahoo</a></li>
                    <li><a href="<?php echo Router::url('invitations/outlook'); ?>">outlook</a></li>		
                    
            </ul>
          </div><!--/.well -->
          <hr>
           
          <div class=" sidebar-nav" id="sb_follow">
            <ul class="nav nav-list">
              <li class="nav-header" title="<?php echo $this->s['tips_followus'];?>"><i class="icon-rss-sign icon-color icon-hover-flip"></i><?php echo ' '.$this->s['l_follow_panel'] ;?></li>
              
                    <li><a href="https://www.facebook.com/atttune" target="_blank" >facebook</a></li>
                    <li><a href="https://twitter.com/atttune" target="_blank" >twitter</a></li>
                    <li><a href="https://atttune.tumblr.com/" target="_blank" >tumblr</a></li>
                    
            </ul>
          </div></hr>
          <hr> 
          <?php $prem=$this->Session->read('Premium'); if(!empty($prem)&&($this->Session->filtr('ads')==1)): ?>
          <div class=" sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header" title="<?php echo $this->s['tips_ads'];?>"><i class="icon-bullhorn icon-hover-flip"></i><?php echo ' '.$this->s['l_ads_panel'] ;?></li>
              
            </ul>
          </div></hr>
          <?php endif ;?>
        </div><!--/span-->  
        
        
    <?php $this->hr_cache->end() ;?>
    <?php endif ;?>
  
        <div class="col-xs-12 col-sm-9" id="content_div">
          <p class="pull-left visible-xs">
            <button type="button" class="btn btn-default" data-toggle="offcanvas" ><i class="icon-th"></i></button>
          </p>
       
           
            
            <?php echo $this->Session->flash(); ?>
            
            <?php if($this->searchBar==true): ?> 
            
               
         <ul class="nav nav-tabs" id="myj">
                <li class="statut <?php if(isset($sta)&&($sta==0))echo 'active' ;?>" id="stat0"><a href="#"><i class="ico-groupblk"></i> <strong><?php echo $this->s['g_all'] ;?></strong></a></li>
                <li class="statut <?php if(isset($sta)&&($sta==1))echo 'active' ;?>" id="stat1"><a href="#"><i class="icon-time"></i> <strong><?php echo $this->s['g_new'] ;?></strong></a></li>
                <li class="statut <?php if(isset($sta)&&($sta==2))echo 'active' ;?>" id="stat2"><a href="#"><i class="icon-signal"></i> <strong><?php echo $this->s['g_online'] ;?></strong></a></li>
          </ul>
            <br>
           <?php echo $this->Form->create(array('id'=>'2search','action'=>'users/index' ,'marge'=>'bottom')) ;?>
            
          
          <div class="row">
                
                <div class="col-md-12">
         
   
                    <div class="row">
                        <div class="col-md-10 col-xs-10" id="tex2sh">
                          
                        <div class="input-group">
      <input class="form-control" id="tex2share" name="tex" type="text" placeholder="<?php echo $this->s['g_entertex'] ;?>">    
                        
      <div class="input-group-btn">
          <button class="btn btn-success" type="submit"><span class="hidden-xs"><?php echo $this->s['g_SEARCH'] ;?></span><i class="icon-search icon-white"></i></button>
      </div>
       
    </div><!-- /input-group -->
    <div class="panel panel-default" id="result" style="display:none; position:absolute ; top:100%; width: 50%; z-index: 100;"> 
                          <ul id="reslist" class="list-unstyled" style="margin-left:12px;margin-top:4px;"></ul>
                           <p id="resmsg"></p>
                          </div> 
                        </div>                         
                        
                        
                        <div class="col-md-1 col-xs-1">
                            <a  class="btn btn-default" id="advanced_search_link" href="#"><i class="icon-cog"></i></a>
                        </div>
                    </div>
                    <div id="advanced_search_fields" style="display:none;">
                        
                    <div class="row">
                        
                        <div class="col-md-3" title="Looking for">
                            <fieldset >
                                <label class="checkbox inline">
                                  <input type="checkbox" id="inlineCheckbox1" name="my_type1" value="1"<?php if(isset($rqd->my_type1)&&($rqd->my_type1==1)) echo 'checked' ;?>>Homme
                                </label>
                                <label class="checkbox inline">
                                  <input type="checkbox" id="inlineCheckbox2" name="my_type2" value="1"<?php if(isset($rqd->my_type2)&&($rqd->my_type2==1)) echo 'checked' ;?>>Femme
                                </label>
                            </fieldset>
                            
                            </div>
                        <div class="col-md-2">
                            <fieldset class="controls controls-row">
                               
                                
                                   <select class="col-md-1 form-control"  id="inlineCheckbox1"  name="min_age">
                                      <?php for($i=18;$i<=115;$i++):?>
                                      <option value="<?php echo $i ;?>" <?php if(isset($rqd->min_age)&&($i==$rqd->min_age)) echo 'selected="selected"' ;?>><?php echo $i ;?></option>
                                      <?php endfor ;?>
                                  </select>
                                
                                   <select class="col-md-1 form-control"  id="inlineCheckbox2" name="max_age">
                                      <?php for($i=18;$i<=115;$i++):?>
                                      <option value="<?php echo $i ;?>" <?php if(isset($rqd->max_age)&&($i==$rqd->max_age)){ echo 'selected="selected"' ; }elseif(!isset($rqd->max_age)&&($i==115)) echo 'selected="selected"' ;?> ><?php echo $i ;?></option>
                                      <?php endfor ;?>
                                  </select>
                                
                                
                            </fieldset>
                        </div>
                        <div class=" col-md-3">
                            <fieldset class=" controls controls-row" >
                                <input class="col-md-2 form-control" id="inputcity" name="city" type="text" autocomplete="off" placeholder="<?php echo ucfirst($this->Session->User('city')) ;?>">
                                <div class="form-group" id="result" style="display:none ; position:absolute; margin-left: 7px ; margin-top: 27px; background-color: #ffffff"> 
                                   <label class="control-label" for="inputdd1"></label>
                                   <div class="controls" id="resdata">
                                   <ul id="reslist" class="unstyled"></ul>
                                   <p id="resmsg"></p>
                                   </div>
                                </div>
                                   <select class="col-md-1 form-control"  id="inlineText2" name="dist">
                                      <?php for($i=-10;$i<=200;$i=$i+10):?>
                                      <option value="<?php echo $i ;?>"<?php if(isset($rqd->dist)&&($i==$rqd->dist)) echo 'selected="selected"' ;?>><?php echo $i ;?> kms</option>
                                      <?php endfor ;?>
                                  </select> 
                            </fieldset>
                        </div>
                        
                    </div>
                        
                       
        <div class="row" id="adv_srh">

            
<div class="col-md-2">
<?php echo $this->Form->input4('relationship_statut',$this->s['vfd_relationship_statut'],array('options'=>$statut)); ?> 
<?php echo $this->Form->input4('children',$this->s['vfd_children'],array('options'=>$child)); ?> 

     </div>
<div class="col-md-2">
<?php echo $this->Form->input4('orientation',$this->s['vfd_sexo'],array('options'=>$sexorientation)); ?>

     </div>
<div class="col-md-2">
<?php echo $this->Form->input4('body_type',$this->s['vfd_body_type'],array('options'=>$bodytype)); ?> 
<?php echo $this->Form->input4('ethnic',$this->s['vfd_ethnic'],array('options'=>$ethnic)); ?>
</div>
<div class="col-md-2">
<?php echo $this->Form->input4('hair_color',$this->s['vfd_hair_color'],array('options'=>$hair)); ?> 
    <?php echo $this->Form->input4('eye_color',$this->s['vfd_eye_color'],array('options'=>$eyes)); ?> 
       </div>
<div class="col-md-2">
       <?php echo $this->Form->input4('living',$this->s['vfd_living'],array('options'=>$living)); ?>
       <?php echo $this->Form->input4('education',$this->s['vfd_education'],array('options'=>$education)); ?>
</div>
<div class="col-md-2">
    <?php echo $this->Form->input4('smoking',$this->s['vfd_smoking'],array('options'=>$hertz)); ?> 
<?php echo $this->Form->input4('drinking',$this->s['vfd_drinking'],array('options'=>$hertz)); ?> 

</div>
     

         

   </div>
                        <hr>    
    </div>
                </div>
                
            </div>
            </form>
        
            <?php endif ;?>
            
         
            
        <?php echo $content_for_layout; ?>
        </div>
                
                   
       
         
                
   

        </div>   
      </div>
      
<?php if(!$this->hr_cache->start('footerSo'.$llg)): ?>
          
          <hr>
<div class="container-sn" style="width:100%; text-align:center;" id="like_bar">
    <div class="row">
        <span  style="display: inline-block;">
        <span class="col-md-4 col-xs-4"><div class="fb-like" data-href="https://www.atttune.com" data-width="450" data-layout="box_count" data-show-faces="true" data-send="false"></div></span>
     <span class="col-md-4 col-xs-4"><a href="https://twitter.com/share" class="twitter-share-button" data-url="https://www.atttune.com" data-via="atttune" data-lang="en" data-count="vertical">Tweet</a></span>
     <span class="col-md-4 col-xs-4"><div class="g-plusone" data-size="tall"></div></span>  
      
        </span>
      </div>
     
</div>
      
      <div class="first-header"></div>
      <div class="footer" style="width:100%; text-align:center;" id="footer_bar">
          
        
        <ul class="nav nav-pills" style="display: inline-block;">   
            
                   <li><a href="<?php echo Router::url('posts/about'); ?>" title="<?php echo $this->s['l_abtus'] ;?>">Atttune &copy; 2014</a></li>
                    <li><a href="https://atttune.uservoice.com" target="_blank" ><?php echo $this->s['l_feedback'] ;?></a></li>
                    <li><a href="<?php echo Router::url('posts/term'); ?>" ><?php echo $this->s['l_term'] ;?></a></li> 
                    <li><a href="<?php echo Router::url('posts/privacy'); ?>"><?php echo $this->s['l_privacy'] ;?></a></li> 
                    <li><a href="<?php echo Router::url('posts/contact'); ?>">Contact</a></li>
                    <li class="dropup">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo  $this->s['l_language'] ;?> <span class="caret"></span></a>
                                    
                                    <ul class="dropdown-menu pull-rigth" role="menu" aria-labelledby="dLabel" id="settingpanel">
                                        <?php foreach ($lg as $k => $v): ?>
                                            <li id="lg-<?php echo $k; ?>">
                                                <a href="<?php echo Router::url('users/language/' . $k); ?>" ><?php echo $this->s[$v]; ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul> 
                                    
                                </li>
                   
        </ul> 
          <a href="#nav-head" class="btn btn-lg btn-inverse silver" id="scrollToTop"><i class="icon-chevron-up icon-white"></i></a>
      </div>

    </div>
    <?php $this->hr_cache->end() ;?>
    <?php endif ;?><!-- /container -->
      
        
        
     
    
<div id="quicklauch" >
    <div><a href="#addPics" data-toggle="modal" title="<?php echo $this->s['ql_add_pics'] ;?>"><i class="icon-camera-retro icon-white icon-large""></i></a></div>
    <div><a href="#userTags" data-toggle="modal" title="<?php echo $this->s['ql_add_tags'] ;?>"><i class="icon-tags icon-white icon-large""></i></a></div>
        <div><a href="#userEdit" data-toggle="modal" title="<?php echo $this->s['ql_user_edit'] ;?>"><i class="icon-edit icon-white icon-large""></i></a></div>    
</div>
<?php if($ok): ?>
       <?php $album_list= $this->getAlbumList() ;?>
       <?php if(!empty($album_list)): ?>     
<?php echo $this->Form->create(array('style'=>'hoz','id'=>'form_1','file'=>'ok','action'=>'medias/add_new_pic'),true, 'DoN@tienne','PO541') ;?>

<div id="addPics" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo $this->s['add_pic_to'] ;?></h3>
  </div>
   <div class="modal-body">
      <?php foreach($album_list as $k=>$v): ?>
       <label class="radio">
  <input type="radio" name="albumd" id="optionsRadios<?php echo $k+1 ;?>" value="<?php echo $v->id_alb ;?>" checked>
  <?php echo $v->name ;?>
</label>
<?php endforeach ;?>
	<?php echo $this->Form->inputfile('file',$this->s['g_select_pics'],array('type'=>'file_multiple','class'=>'btn btn-lg btn-info')); ?>
  </div>
  <div class="modal-footer">
    <input type="submit" value="<?php echo $this->s['g_add'] ;?>" class="btn btn-success btn-lg">
    <a href="<?php echo Router::url('medias/pics') ;?>" class="btn btn-default btn-lg"><?php echo $this->s['g_view_gallery'] ;?></a>
    <button class="btn  btn-lg" data-dismiss="modal" aria-hidden="true"><?php echo $this->s['g_close'] ;?></button>
  </div>
  </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</form>           
      <?php endif ;?>   


<?php echo $this->Form->create(array('style'=>'hoz','id'=>'form_1','file'=>'ok','action'=>'users/edit'),true, 'VegetAAs','POliu') ;?>

<div id="userEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo $this->s['vfd_about_me'] ;?></h3>
  </div>
   <div class="modal-body">
       <textarea name="few_words" class="form-control"  rows="5" placeholder="<?php echo $this->s['vfd_few_words'].' . . .' ;?>"></textarea>
  
   </div>
  <div class="modal-footer">
    <input type="submit" value="<?php echo $this->s['g_add'] ;?>" class="btn btn-success btn-lg">
    <a href="<?php echo Router::url('users/edit') ;?>" class="btn btn-default btn-lg"><?php echo $this->s['g_view_edit'] ;?></a>
    <button class="btn btn-lg" data-dismiss="modal" aria-hidden="true"><?php echo $this->s['g_close'] ;?></button>
  </div>
  </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</form>


<?php echo $this->Form->create(array('style'=>'hoz','id'=>'form_1','file'=>'ok','action'=>'categories/add_tags'),true, 'VeOliuAs','zeNtopi') ;?>

<div id="userTags" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo $this->s['g_usertags'] ;?></h3>
  </div>
   <div class="modal-body">
       <?php $inters= $this->allinteres(30) ;?>
          <?php if(!empty($inters)): ?>
      <div class="row">
         <?php $curs=count($inters) ;?>
                    <?php for($w=0;$w<2;$w++): ?>
          <?php if($w==0): ?>
          <div class="col-md-6 offset1">
          <?php else: ?>
          <div class="col-md-6">
          <?php endif ;?>
                        <?php for($k=$w;$k<$curs;$k=$k+2): ?>
                            <?php $v=$inters[$k]; ?>
                <label class="checkbox">
               <input type="checkbox" name="taggs[<?php echo $k ;?>]" value="<?php echo $v->id ;?>"/><?php echo $v->name ;?>  
               <br></label>
                            <?php endfor ?>
                        </div>
                    <?php endfor ;?>
      </div>
          <?php endif ;?>
            
   </div>
  <div class="modal-footer">
    <input type="submit" value="<?php echo $this->s['g_add'] ;?>" class="btn btn-success btn-lg">
    <a href="<?php echo Router::url('users/taglist') ;?>" class="btn btn-default btn-lg"><?php echo $this->s['g_view_edit'] ;?></a>
    <button class="btn btn-lg" data-dismiss="modal" aria-hidden="true"><?php echo $this->s['g_close'] ;?></button>
  </div>
 </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</form> 
 <?php else: ?> 

<?php if(!$this->hr_cache->start('modal_empty'.$llg)): ?>
<div id="addPics" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo $this->s['add_pic_to'] ;?></h3>
  </div>
   <div class="modal-body">
      <p><?php echo $this->s['g_empty_addpics'] ;?></p>
   </div>
  <div class="modal-footer">
      
    <a href="<?php echo Router::url('users/signup') ;?>" class="btn btn-info btn-lg"><?php echo $this->s['g_view_signup'] ;?></a>
    <button class="btn  btn-lg btn-default" data-dismiss="modal" aria-hidden="true"><?php echo $this->s['g_close'] ;?></button>
  </div>
  </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="userEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo $this->s['vfd_about_me'] ;?></h3>
  </div>
   <div class="modal-body">
      <p><?php echo $this->s['g_empty_useredit'] ;?></p>
   </div>
  <div class="modal-footer">
    <a href="<?php echo Router::url('users/signup') ;?>" class="btn btn-info btn-lg"><?php echo $this->s['g_view_signup'] ;?></a>
    <button class="btn btn-lg btn-default" data-dismiss="modal" aria-hidden="true"><?php echo $this->s['g_close'] ;?></button>
  </div>
  </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="userTags" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo $this->s['g_usertags'] ;?></h3>
  </div>
   <div class="modal-body">
     <p><?php echo $this->s['g_empty_usertags'] ;?></p>      
   </div>
  <div class="modal-footer">
    <a href="<?php echo Router::url('users/signup') ;?>" class="btn btn-info btn-lg"><?php echo $this->s['g_view_signup'] ;?></a>
    <button class="btn btn-lg" data-dismiss="modal" aria-hidden="true"><?php echo $this->s['g_close'] ;?></button>
  </div>
 </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php $this->hr_cache->end() ;?>
    <?php endif ;?><!-- /container -->
<?php endif ;?>  
  



<script type="text/javascript">
  /** $(document).ready(function () {
     if ($("[class=ttip]").length) {
     $("[class=ttip]").tooltip();
     }
   }); 
   **/

    
       $('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})

 $('#togSide a').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });

</script>



<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
     
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43019721-1', 'atttune.com');
  ga('send', 'pageview');

</script>
    </body> 



</html>