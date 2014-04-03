<?php $title_for_layout = $tv['cpa_title_notification']; ?>
<?php $role=$this->Session->User('role') ;
$roles =array(1=>$tv['u_visitor'],2=>$tv['u_member'],3=>$tv['u_premium']);
?>

<?php 
$nb_show=array(15=>15,30=>30,60=>60,75=>75,120=>120,150=>150,240=>240);


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
                            1=>$tv['w'], 
                            2=>$tv['m'],
                            3=>$tv['cpl'] ) ; 

$ethnic=array(
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
    1=>$tv['vfd_slim'],
    2=>$tv['vfd_average'],
    3=>$tv['vfd_athletic'],
    4=>$tv['vfd_extra'],
    5=>$tv['vfd_big'],


  );
  $child = array(
    1=>$tv['vfd_none'],
    2=>$tv['vfd_one'],
    3=>$tv['vfd_two'],
    4=>$tv['vfd_more']
    ) ;

  $hertz = array(
    1=>$tv['vfd_never'],
    2=>$tv['vfd_occasionnaly'],
    3=>$tv['vfd_often']
    )  ;


    $sexorientation = array(
    1=>$tv['vfd_straight'],
    2=>$tv['vfd_openminded'],
    3=>$tv['vfd_bisexual'],
    4=>$tv['vfd_gay']
    );
    
    $living = array(
    1=>$tv['vfd_wparent'],
    2=>$tv['vfd_wroomate'],
    3=>$tv['vfd_studentres'],
    4=>$tv['vfd_wpartner'],
    5=>$tv['vfd_alone'],
    );
    
     $education = array(
    1=>$tv['vfd_school'],
    2=>$tv['vfd_somecollege'],
    3=>$tv['vfd_highschool'],
    4=>$tv['vfd_degree']
    );
     
     $income = array(
    1=>$tv['vfd_low'], //faible
    2=>$tv['vfd_medium'],//moyen
    3=>$tv['vfd_hight'], // eleve
    4=>$tv['vfd_very_hight']    //
    );
    
        $type_filter =array(
       0=>$tv['vfd_none'],
       1=>$tv['blk_list_filter'],
       2=>$tv['wht_list_filter'],
   )

  ?>


<?php $agerg=array() ;
      $agerg[-1]='Age';
      for($i=18;$i<80;$i++){
          $agerg[$i]=$i;
      }
          $agerg[80]='80+';
      
      $dist= array(); $dist[-10]= $tv['hello_world'] ;
      for($i=10;$i<=200;$i=$i+10){
          $dist[$i]=$i.' Km';
      }
          ;?>


         <ul class="nav nav-tabs" id="myj">
     
  <li><a href="<?php echo Router::url('params/index'); ?>"><?php echo $tv['cpa_general'] ;?></a></li>
            <li><a href="<?php echo Router::url('params/notification'); ?>"><?php echo $tv['cpa_notification'] ;?></a></li>
            <li><a href="<?php echo Router::url('params/privacy'); ?>"><?php echo $tv['cpa_privacy'] ;?></a></li>
            <?php  if(isset($role)&&($role==3)):?>
            <li><a href="<?php echo Router::url('params/premium'); ?>"><?php echo $tv['cpa_filter'] ;?></a></li>
            <?php endif ;?>
            <!--  <li class="well"><a href="#secu">SECURITY</a></li>
            <li class="well"><a href="#paym">PAYMENT</a></li> -->
</ul>
<div class="row">


<div class="col-md-12">


<div class="page-header">
	<h2><?php echo $tv['cpa_editfilter'] ; ?></h2>
</div>

<?php echo $this->Form->create(array('style'=>'hoz','id'=>'form_1','action'=>'params/filter'),true,'DoN@tienne') ;?>

<div class="form-group"  >
            
                <div class="controls">
    <input type="submit" class="btn btn-success btn-lg" value="<?php echo $tv['g_update'] ;?>">
           </div> 
  
    </div>


    <fieldset>
<?php echo $this->Form->input('filter_nb_show',$tv['cpa_filter_nb_show'],array('options'=>$nb_show)); ?>
<?php echo $this->Form->input('filter_hidden',$tv['cpa_filter_hidden'],array('type'=>'checkbox')); ?>   
<?php echo $this->Form->input('filter_ads',$tv['cpa_filter_ads'],array('type'=>'checkbox')); ?>   
<?php echo $this->Form->input('filter_explicit',$tv['cpa_filter_explicit'],array('type'=>'checkbox')); ?>


       <div class="page-header">
  <h3><?php echo $tv['filters'] ; ?></h3>
</div>


<?php echo $this->Form->input('filter_type',$tv['cpa_filter_type'],array('options'=>$type_filter)); ?>
<?php echo $this->Form->input6('filter_role',$tv['cpa_filter_role'],array('options'=>$roles,'multiple'=>'multiple')); ?>
<?php echo $this->Form->input6('filter_my_type',$tv['cpa_ filter_my_type'],array('options'=>$mtype)); ?>





<?php echo $this->Form->input('filter_distance',$tv['cpa_filter_distance'],array('options'=>$dist)); ?>


<?php echo $this->Form->input('filter_min_old',$tv['cpa_filter_min_old'],array('options'=>$agerg)); ?>
<?php echo $this->Form->input('filter_max_old',$tv['cpa_filter_max_old'],array('options'=>$agerg)); ?>
<?php echo $this->Form->input6('filter_link_type',$tv['cpa_filter_link_type'],array('options'=>$living,'multiple'=>'multiple')); ?>
<?php echo $this->Form->input6('filter_ambiance',$tv['cpa_filter_ambiance'],array('options'=>$statut,'multiple'=>'multiple')); ?>
<?php echo $this->Form->input6('filter_relationship_statut',$tv['cpa_filter_relationship_statut'],array('options'=>$statut,'multiple'=>'multiple')); ?>
<?php echo $this->Form->input6('filter_orientation',$tv['cpa_filter_orientation'],array('options'=>$sexorientation,'multiple'=>'multiple')); ?>
<?php echo $this->Form->input6('filter_living',$tv['cpa_filter_living'],array('options'=>$living,'multiple'=>'multiple')); ?>
<?php echo $this->Form->input6('filter_body_type',$tv['cpa_filter_body_type'],array('options'=>$bodytype,'multiple'=>'multiple')); ?>
<?php echo $this->Form->input6('filter_hair_color',$tv['cpa_filter_hair_color'],array('options'=>$hair,'multiple'=>'multiple')); ?>
<?php echo $this->Form->input6('filter_eye_color',$tv['cpa_filter_eye_color'],array('options'=>$eyes,'multiple'=>'multiple')); ?>
<?php echo $this->Form->input6('filter_ethnic',$tv['cpa_filter_ethnic'],array('options'=>$ethnic,'multiple'=>'multiple')); ?>
<?php echo $this->Form->input6('filter_children',$tv['cpa_filter_children'],array('options'=>$child,'multiple'=>'multiple')); ?>
<?php echo $this->Form->input6('filter_smoking',$tv['cpa_filter_smoking'],array('options'=>$hertz,'multiple'=>'multiple')); ?>
<?php echo $this->Form->input6('filter_drinking',$tv['cpa_filter_drinking'],array('options'=>$hertz,'multiple'=>'multiple')); ?>
<?php echo $this->Form->input6('filter_education',$tv['cpa_filter_education'],array('options'=>$education,'multiple'=>'multiple')); ?>
<?php echo $this->Form->input6('filter_income',$tv['cpa_filter_income'],array('options'=>$income,'multiple'=>'multiple')); ?>
<?php echo $this->Form->input6('filter_languages',$tv['cpa_filter_languages'],array('options'=>$langu,'multiple'=>'multiple')); ?>

        <div class="form-group"  >
            
                <div class="controls">
    <input type="submit" class="btn btn-success btn-lg" value="<?php echo $tv['g_update'] ;?>">
           </div> 
  
    </div>
        
        </fieldset>
</form>

</div>
    </div>
