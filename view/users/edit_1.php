<?php $title_for_layout = $tv['vu_title_edit']; ?>
<?php 

$langu=array(
'da'=>$tv['da'],
'de'=>$tv['de'],
'en'=>$tv['en'],
'fr'=>$tv['fr'],
'ko'=>$tv['ko'],
'pt'=>$tv['pt'],
'ru'=>$tv['ru'],

);

 $mtype=array(       
1=>$tv['m'], 
2=>$tv['w'] ) ; 


 $school=array(
0=>$tv['nosay'],
1=>$tv['vfd_school'],
2=>$tv['vfd_somecollege'],
3=>$tv['vfd_highschool'],
4=>$tv['vfd_degree'],

  );

$ethnic=array(

0=>$tv['nosay'],
1=>$tv['vfd_african'],
2=>$tv['vfd_african_american'], 
3=>$tv['vfd_asian'],
4=>$tv['vfd_caucasian'],
5=>$tv['vfd_european'],
6=>$tv['vfd_hispanic'],
7=>$tv['vfd_indian'],
8=>$tv['vfd_middle_eastern'],
9=>$tv['vfd_mixed'],
10=>$tv['vfd_earthling'],

  ) ;

  $hair = array(
    1=>$tv['vfd_hairblack'],
    2=>$tv['vfd_hairblond'],
    3=>$tv['vfd_hairred'],
    4=>$tv['vfd_hairbald'],
    5=>$tv['vfd_hairshaved'],
    6=>$tv['vfd_hairbrown'],
    7=>$tv['vfd_hairgrey'],
    8=>$tv['vfd_hairwhite'],
    9=>$tv['vfd_hairdyed']
    );

  $eyes = array(
    1=>$tv['vfd_eyesblack'],
    2=>$tv['vfd_eyesbrown'],
    3=>$tv['vfd_eyesblue'],
    4=>$tv['vfd_eyesgreen'],
    5=>$tv['vfd_eyesgrey'],
    6=>$tv['vfd_eyesother']
    );

  $statut = array(
    1=>$tv['vfd_statutsingle'],
    2=>$tv['vfd_statutmarried'],
    3=>$tv['vfd_statutattached'],
    4=>$tv['vfd_statutopen']
    );

 $bodytype=array(
    0=>$tv['nosay'],
    1=>$tv['vfd_slim'],
    2=>$tv['vfd_average'],
    3=>$tv['vfd_athletic'],
    4=>$tv['vfd_extra'],
    5=>$tv['vfd_big'],


  );
  $child = array(
    0=>$tv['nosay'],
    1=>$tv['vfd_none'],
    2=>$tv['vfd_one'],
    3=>$tv['vfd_two'],
    4=>$tv['vfd_more']
    ) ;

  $hertz = array(
    0=>$tv['nosay'],
    1=>$tv['vfd_never'],
    2=>$tv['vfd_occasionnaly'],
    3=>$tv['vfd_often']
    )  ;
    
  $living = array(
    1=>$tv['vfd_wparent'],
    2=>$tv['vfd_wroomate'],
    3=>$tv['vfd_studentres'],
    4=>$tv['vfd_wpartner'],
    5=>$tv['vfd_alone'],
    );
    
     $income = array(
    1=>$tv['vfd_low'],
    2=>$tv['vfd_medium'],
    3=>$tv['vfd_hight'],
    4=>$tv['vfd_very_hight']
    );
  ?>


<?php $agerg=array() ;
      $agerg[-1]='Age';
      for($i=18;$i<80;$i++){
          $agerg[$i]=$i;
      }
          $agerg[80]='80+'
          ;?>

<script type="text/javascript" src="https://www.atttune.com/js/signup.js"></script>
<ul class="nav nav-tabs" id="myj">
    <li><a href="<?php echo Router::url('users/view/id:'.$id); ?>"><i class="icon-user"></i><?php echo $tv['g_profile'] ;?></a></li>
 <?php if($own>5): ?>
  <li class="active"><a href="<?php echo Router::url('users/edit'); ?>"><i class="icon-pencil"></i><?php echo $tv['g_edit'] ;?></a></li>
                        <li><a href="<?php echo Router::url('medias/pics'); ?>"><i class="icon-picture"></i><?php echo $tv['g_picture'] ;?></a></li>
                        <li><a href="<?php echo Router::url('users/taglist'); ?>"><i class="icon-tags"></i><?php echo $tv['g_tag'] ;?></a></li>
                        <?php else: ?>
                        <li><a href="<?php echo Router::url('messages/write/id:'.$id); ?>"><i class="icon-edit"></i><?php echo $tv['g_message'] ;?></a></li>
                        <li><a href="<?php echo Router::url('medias/pics/id:'.$id); ?>"><i class="icon-picture"></i><?php echo $tv['g_picture'] ;?></a></li>
                        <li><a href="<?php echo Router::url('interactions/blacklist/id:'.$id); ?>"><i class="icon-ban-circle"></i><?php echo $tv['g_blocked'] ;?></a></li>
                        <li><a href="<?php echo Router::url('interactions/abuse/id:'.$id); ?>"><i class="icon-flag"></i><?php echo $tv['g_report'] ;?></a></li>
                        <?php endif ;?>
   
</ul>
<div class="page-header">
	<h2><?php echo $tv['vu_editprofil'] ;?></h2>
</div>	
<?php echo $this->Form->create(array('style'=>'hoz','action'=>'users/edit'),true,'VegetAAs','Yhdeqo') ;?>
    <fieldset>

<div class="row">
  
    <div class="col-md-12">
        <?php echo $this->Form->input('few_words',$tv['vfd_few_words'],array('type'=>'textarea', 'rows'=>'5')); ?>
    
    <div class="form-group" id="localisation" >
            <label class="col-lg-2 control-label" for="inputdd1"><?php echo $tv['vu_geolocation'] ;?></label>
                <div class="col-lg-2">
                    <button class="btn btn-info" id="geoloc"><i class="icon-screenshot"></i></button>
                </div>

        </div>
     
    <div class="form-group">
	<label class="col-lg-2 control-label" for="inputccity"><?php echo $tv['vu_city'] ;?></label>
	<div class="col-lg-10"><input type="text" class="input-large form-control" id="inputccity" name="ccity"  autocomplete="off">
           <div class="panel panel-default" id="result" style="display:none; position:absolute ; top:100%; width: 50%; z-index: 100;"> 
                 <ul id="reslist" class="list-unstyled" style="margin-left:12px;margin-top:4px;"></ul>
                  <p id="resmsg"></p>
        </div>
        
        </div>
  
    </div>
        
    <div> 
     <?php echo $this->Form->input('city','hidden'); ?>
    <?php echo $this->Form->input('region','hidden'); ?>
    <?php echo $this->Form->input('contry','hidden'); ?>
    <?php echo $this->Form->input('idc','hidden'); ?>
    <?php echo $this->Form->input('lat','hidden'); ?>
    <?php echo $this->Form->input('lng','hidden'); ?>        
    </div>     
        <?php echo $this->Form->input3('type_set@',$tv['vfd_type_search'],array('options'=>$mtype)); ?>
<?php echo $this->Form->input('relationship_statut',$tv['vfd_relationship_statut'],array('options'=>$statut)); ?> 
<?php echo $this->Form->input('children',$tv['vfd_children'],array('options'=>$child)); ?> 
 <?php echo $this->Form->input('height',$tv['vfd_height']); ?> 
<?php echo $this->Form->input('weight',$tv['vfd_weight']); ?> 
<?php echo $this->Form->input('body_type',$tv['vfd_body_type'],array('options'=>$bodytype)); ?> 
<?php echo $this->Form->input('hair_color',$tv['vfd_hair_color'],array('options'=>$hair)); ?> 
<?php echo $this->Form->input('eye_color',$tv['vfd_eye_color'],array('options'=>$eyes)); ?> 
<?php echo $this->Form->input('ethnic',$tv['vfd_ethnic'],array('options'=>$ethnic)); ?> 
<?php echo $this->Form->input('smoking',$tv['vfd_smoking'],array('options'=>$hertz)); ?> 
<?php echo $this->Form->input('drinking',$tv['vfd_drinking'],array('options'=>$hertz)); ?> 
<?php echo $this->Form->input('living',$tv['vfd_living'],array('options'=>$living)); ?>
<?php echo $this->Form->input('income',$tv['vfd_income'],array('options'=>$income)); ?>
<?php echo $this->Form->input('education',$tv['vfd_education'],array('options'=>$school)); ?>
<?php echo $this->Form->input('job',$tv['vfd_job']); ?>  
<?php echo $this->Form->input3('','hiddened'); ?>  
    </div>

    
</div>   
    

    <div class="form-group"  >
            
                <div class="col-lg-offset-2 col-lg-10">
    <input type="submit" class="btn btn-success btn-lg" value="<?php echo $tv['g_update'] ;?>">
           </div> 
  
    </div>

        </fieldset>
</form>
