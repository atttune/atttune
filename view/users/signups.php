<?php
            
            $jour=array();
            $annee=array();
            $sexe=array(-1=>'Sexe ', 1 =>'<i class="icon-user"></i>Homme',2=>'<i class="icon-star"></i>Femme') ;
                $mois=array(0=>$tv['mth'] ,
                1 =>$tv['mth1'] ,
                2=>$tv['mth2'] ,
                3 =>$tv['mth3'],
                4 =>$tv['mth4'] ,
                5 => $tv['mth5'] , 
                6 => $tv['mth6'],
                7 => $tv['mth7'], 
                8 =>$tv['mth8'],
                9 =>$tv['mth9'],
                10 =>$tv['mth10'], 
                11=>$tv['mth11'], 
                12=>$tv['mth12'] );            
                 
                $jour[0]= $tv['day'] ;
            $i=1;
            while($i<32){$jour[$i]=$i; 
                                   $i++;}
                  
           
                                   $annee[0]= $tv['yea'] ;
            $i=date('Y');
            $i=$i-18;
            while($i>1900){$annee[$i]=$i; 
                                   $i--;}
                                   
        $mtype=array(       0=>$tv['uare'],
                            1=>$tv['m'], 
                            2=>$tv['w']
                            ) ;                           
                                   
?>

<script type="text/javascript" src="https://www.atttune.com/js/signup.js"></script>
<script type="text/javascript">
  var RecaptchaOptions = { theme : 'clean'}
</script>
<div class="jumbotron">
      <div class="container">
        <h1><?php echo $tv['welcome_title'] ;?></h1>
        <p><?php echo $tv['welcome_sentence'] ;?></p>
        <p class="visible-xs"><a class="btn btn-success btn-lg" role="button" href="#start_p"><?php echo $tv['go_signup'] ;?></a>    <a class="btn btn-primary btn-lg" role="button" href="#LoginModal" data-toggle="modal"><?php echo $tv['go_signin'] ;?></a></p>
      </div>
    </div>
<div class="row">
    <div class="col-lg-4">
        
        <div class="col-md-12">
          <h2><?php echo $tv['title_nearby'] ;?></h2>
          <p><?php echo $tv['p_nearby'] ;?></p>
        </div>
        <div class="col-md-12">
          <h2><?php echo $tv['title_improve'] ;?></h2>
          <p><?php echo $tv['p_improve'] ;?></p>
          <p><a class="btn btn-default hidden-xs" href="https://www.google.com/?q=%40tttune+music" role="button" target="_blank"><?php echo $tv['just_try_desk'] ;?></a><button class="btn btn-default visible-xs"><?php echo $tv['just_try_mobi'] ;?></button></p>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="col-md-12">
          <h2><?php echo $tv['title_social'] ;?></h2>
          <p><?php echo $tv['p_social'] ;?></p>
          </div>
        <div class="col-md-12">
          <h2><?php echo $tv['title_hi5'] ;?></h2>
          <p><?php echo $tv['p_hi5'] ;?></p>
          </div>
        <div class="page-header" id="start_p"></div>
    </div>
    
    <div class="col-lg-4" >
        <?php echo $this->Form->create(array('style'=>'hoz','id'=>'form_1','action'=>'users/signups'),true, '1987paka','777kikju') ;?>
<div class="form-group">
<div class="col-lg-offset-2 col-lg-10 ">
   <a href="<?php echo Router::url('invitations/connect'); ?>" class="btng btn-lg btn-fcbk" ><?php echo $tv['cnx_facebook'] ;?></a>
</div>
</div>
<div class="form-group">
    <label class="col-lg-2 control-label" for="inputpseudo"></label>
                <div class="col-lg-10">
                    
                        <input type="text"  class="input-large form-control" id="inputpseudo" name="pseudo" placeholder="<?php echo $tv['vu_first_name'] ;?>" >
                </div>
</div> 
	<?php echo $this->Form->input('my_type','',array('options' => $mtype)); ?>
        <?php echo $this->Form->input('dy1','',array('options' => $annee)); ?>

    
   
    <div class="form-group">
        <label class="col-lg-2 control-label"></label>
        <div class="col-lg-8"><input type="text" class="input-large form-control" id="inputccity" name="ccity"  autocomplete="off" placeholder="<?php echo $tv['vu_city'] ;?>">
           <div class="panel panel-default" id="result" style="display:none; position:absolute ; top:100%; width: 100%; z-index: 100;"> 
                 <ul id="reslist" class="list-unstyled" style="margin-left:12px;margin-top:4px;"></ul>
                  <p id="resmsg"></p>
        </div>
        
        </div>
   
           <div class="col-lg-2" id="localisation">
                    <button class="btn btn-info" id="geoloc"><i class="icon-screenshot"></i></button>
                </div>

        </div>
   

        
    <div> 
        <input type="hidden" name="city" value="">
        <input type="hidden" name="region" value="">
        <input type="hidden" name="contry" value="">
        <input type="hidden" name="lat" value="">
        <input type="hidden" name="lng" value="">
        <input type="hidden" name="idc" value="">
    </div>
<div class="form-group">
    <label class="col-lg-2 control-label"></label>
                <div class="col-lg-10">
                        <input type="text"  class="input-large form-control" id="inputemail" name="email" placeholder="<?php echo $tv['vu_email'] ;?>" >
                </div>
</div> 
<div class="form-group">
    <label class="col-lg-2 control-label"></label>
              <div class="col-lg-10">
                  <input type="password" id="inputpassword" name="password" placeholder="<?php echo $tv['vu_password'] ;?>" class="input-large form-control">
              </div>
</div>
    


<div class="form-group">
    <label class="col-lg-2 control-label"></label>
    <div class="col-lg-10">
    <textarea  class="input-large form-control" id="inputmy_tags" name="my_tags" placeholder="<?php echo $tv['vu_my_tags_pholder'] ;?>" rows="5" ></textarea>
    </div>
 </div>   
    <?php require_once LIB.DS.'captcha'.DS.'recaptchalib.php'; ?>

    <div class="form-group" id="recaptcha_div">
                
                <div class="col-lg-offset-2 col-lg-10">
                 <?php echo recaptcha_get_html(Conf::$recapt_pub,null,true); ?> 
		</div> 
  
        </div>  
        
<div class="form-group">
                
                <div class="col-lg-offset-2 col-lg-8">
                
		<input type="submit" class="btn btn-success btn-lg btn-block" value="<?php echo $tv['g_signup'] ;?>">
	         </div> 
  
        </div>
        
</form>
    </div>
    
</div>
<?php echo $this->Form->create(array('style'=>'hoz','id'=>'loginF','action'=>'users/loogin'),true, 'DoN@ti','karate2') ;?>

<div id="LoginModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo  $tv['vu_welcome'] ;?></h3>
  </div>
   <div class="modal-body">
       	<?php echo $this->Form->input('email',$tv['vu_email']) ; ?>
		<?php echo $this->Form->input('password',$tv['vu_psw'],array('type'=>'password')) ;?>
             
              <div class="form-group"  >
                <div class="col-lg-offset-2 col-lg-10 ">
		<a href="<?php echo Router::urls('users/forgot') ;?>" ><?php echo $tv['vu_forgot'] ;?></a>
	        </div> 
              </div>
            
		<?php echo $this->Form->input('keep',$tv['vu_kcnx'],array('type'=>'checkbox')); ?>
            
   </div>	              
  <div class="modal-footer">
    <input type="submit" value="<?php echo $this->s['g_login'] ;?>" class="btn btn-success btn-lg">
   <button class="btn  btn-lg" data-dismiss="modal" aria-hidden="true"><?php echo $this->s['g_close'] ;?></button>
							</div>	
  </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
							
					
</div>
  

</form> 


