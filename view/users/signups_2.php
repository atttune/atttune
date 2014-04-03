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
  function somefunction(){
    var my_tags=$("#inputemail").val();
  if(my_tags===""){
      $("#recaptcha_div").hide();
      $("#confpassword_div").hide();
  }else {
	 $("#recaptcha_div").show();
         $("#confpassword_div").show();
}
  
  };
  

</script>
<div class="jumbotron">
      <div class="container">
        <h1>Hello, welcome on Atttune</h1>
        <p>A simple social network to connect people having similar interests.</p>
        <p class="visible-xs"><a class="btn btn-primary btn-lg" role="button" href="#start_p">Go ahead !!</a></p>
      </div>
    </div>
<div class="row">
    <div class="col-lg-4">
        
        <div class="col-md-12">
          <h2>Find interesting people nearby</h2>
          <p>Atttune let you connect with people around with interests, skills, passion or everythings you can appreciate to share. Simply add what you love, simply search what you want !!!</p>
          
        </div>
        <div class="col-md-12">
          <h2>Improve your online presence</h2>
          <p>You're on a lot of fun social network to say what you love, to connect with people and change the world !! But if people don't know who you are, don't have your ID... How they gone find you ?_?) On Atttune you're findable by what matter for you !_! And guess what... on google to ^_^ </p>
          <p><a class="btn btn-default hidden-xs" href="https://www.google.com/?q=%40tttune+music" role="button" target="_blank">Just try on google</a><button class="btn btn-default visible-xs">search on google: @tttune music</button></p>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="col-md-12">
          <h2>Have a social impact</h2>
          <p>Atttune is not just "another social network :-[]". You can use it to create community, identify and organize with people having same goals as you are and have a social impact !! </p>
        </div>
        <div class="col-md-12">
          <h2>Hi five buddy ( ^ - ^ )</h2>
          <p>Enjoy, love, and always pursuing your dream. We wish you all the best and happiness as possible. You're all fantastic and we always appreciate your comments, feedbacks and supports <i class="icon-thumbs-up"></i><br>Best @tttune team</p>
          
        </div>
        <div class="page-header" id="start_p"></div>
    </div>
    
    <div class="col-lg-4" >
        <?php echo $this->Form->create(array('style'=>'hoz','id'=>'form_1','action'=>'users/signups'),true, '1987paka','777kikju') ;?>
<div class="form-group">
<div class="col-lg-offset-2 col-lg-10 ">
   <a href="<?php echo Router::url('invitations/connect'); ?>" class="btng btn-lg btn-fcbk" >Connect with Facebook</a>
</div>
</div>
<div class="form-group">
    <label class="col-lg-2 control-label" for="inputpseudo"></label>
                <div class="col-lg-10">
                    
                        <input type="text"  class="input-large form-control" id="inputpseudo" name="pseudo" placeholder="<?php echo $tv['vu_first_name'] ;?>" >
                </div>
</div> 
<div class="form-group">
					<label class="col-lg-2 control-label" for="inputsecond_name"></label>
					<div class="col-lg-10"><input type="text" class="input-large form-control" id="inputsecond_name" name="second_name" placeholder="<?php echo $tv['vu_second_name'] ;?>"></div></div>
    	<?php echo $this->Form->input('my_type','',array('options' => $mtype)); ?>
        
 <div class="form-group " id="startd1">   
     <label class="col-lg-2 control-label"></label>
    <div class="col-lg-3 col-xs-4" style="padding-right:3px;">
        <select id="inputdd1" name="dd1" class=" form-control" >
	   <?php foreach($jour as $k=>$v): ?>
            <option value="<?php echo $k ;?>"><?php echo $v ;?></option>
            <?php endforeach ;?>
	</select>
    </div>
    <div class="col-lg-3 col-xs-4" style="padding:0px;">
        <select id="inputdm1" name="dm1" class=" form-control" >
	   <?php foreach($mois as $k=>$v): ?>
            <option value="<?php echo $k ;?>"><?php echo $v ;?></option>
            <?php endforeach ;?>
	</select>
    </div>
    <div class="col-lg-3 col-xs-4" id="endd1" style="padding-left:3px;">
        <select id="inputdy1" name="dy1" class=" form-control " >
	   <?php foreach($annee as $k=>$v): ?>
            <option value="<?php echo $k ;?>"><?php echo $v ;?></option>
            <?php endforeach ;?>
	</select>
    </div>
     
                                    
</div>
               
        
    
   
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
                  <input type="password" id="inputpassword" name="password" placeholder="<?php echo $tv['vu_password'] ;?>" class="input-large form-control"  onblur="somefunction()">
              </div>
</div>
    
        
<div class="form-group" id="confpassword_div" style="display:none">
    <label class="col-lg-2 control-label"></label>
              <div class="col-lg-10">
                  <input type="password" id="inputconfpassword" name="conf_password" placeholder="<?php echo $tv['vu_confpassword'] ;?>" class="input-large form-control" >
              </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label"></label>
    <div class="col-lg-10">
    <textarea  class="input-large form-control" id="inputmy_tags" name="my_tags" placeholder="<?php echo $tv['vu_my_tags_pholder'] ;?>" rows="5" ></textarea>
    </div>
 </div>   
    <?php require_once LIB.DS.'captcha'.DS.'recaptchalib.php'; ?>

    <div class="form-group" id="recaptcha_div" style="display:none;">
                
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


