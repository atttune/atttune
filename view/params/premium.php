<?php $title_for_layout = $tv['cpa_title_index'];
$roles =array(1=>$tv['u_visitor'],2=>$tv['u_member'],3=>$tv['u_premium']);
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
 
 $yn=array( 0=>$tv['n'], 
            1=>$tv['y'] ) ; 

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
    1=>$tv['vfd_low'],
    2=>$tv['vfd_medium'],
    3=>$tv['vfd_hight'],
    4=>$tv['vfd_very_hight']
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
<?php $role=$this->Session->User('role') ;?>
<?php  ;?>
 <ul class="nav nav-tabs" id="myj">
     
  <li><a href="<?php echo Router::url('params/index'); ?>"><?php echo $tv['cpa_general'] ;?></a></li>
            <li><a href="<?php echo Router::url('params/notification'); ?>"><?php echo $tv['cpa_notification'] ;?></a></li>
            <li><a href="<?php echo Router::url('params/privacy'); ?>"><?php echo $tv['cpa_privacy'] ;?></a></li>
            <?php  if(isset($role)&&($role==3)):?>
            <li class="active"><a href="<?php echo Router::url('params/premium'); ?>"><?php echo $tv['cpa_filter'] ;?></a></li>
            <?php endif ;?>
            <!--  <li class="well"><a href="#secu">SECURITY</a></li>
            <li class="well"><a href="#paym">PAYMENT</a></li> -->
</ul>

    
<div class="row">
   
<div class="col-md-9">

<div class="page-header">
	<h2><?php echo $tv['cpa_editfilter'] ; ?></h2>
</div>
    
    <?php echo $this->Form->create(array('style'=>'hoz','id'=>'form_1','action'=>'params/filter'),true,'DoN@tienne') ;?>

    <div class="form-group"  >
            
                <div class="controls">
    <input type="submit" class="btn btn-success btn-lg" value="<?php echo $tv['g_update'] ;?>">
           </div> 
  
    </div>
    
   <?php if($params->role==3): ?>
   <?php 
   $fil=array('filter_type' , 'filter_role', 'filter_my_type','filter_explicit','filter_ads', 'filter_hidden', 'filter_nb_show',
                                     'filter_contry', 'filter_region', 'filter_department', 'filter_city' ,  'filter_distance', 'filter_min_old',
                                      
                                      'filter_max_old', 'filter_link_type', 'filter_ambiance', 'filter_relationship_statut', 'filter_orientation', 'filter_living',
                                      'filter_body_type', 'filter_hair_color', 'filter_eye_color', 'filter_ethnic', 'filter_children', 'filter_smoking', 'filter_drinking',
                                     'filter_education', 'filter_income', 'filter_languages' );
   ;?>
   
   <div id="not" class="page-header">
       <table class="table table-striped">


<tr>
<td><?php $i=1 ; echo $tv['cpa_filter_explicit']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input('filter_explicit','',array('type'=>'checkbox')); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
  <td><?php echo $yn[$params->filter_explicit] ;?></td>
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>

<tr>
<td><?php echo $tv['cpa_filter_ads']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input('filter_ads','',array('type'=>'checkbox')); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
  <td><?php echo $yn[$params->filter_ads] ;?></td>
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>

<tr>
<td><?php echo $tv['cpa_filter_hidden']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input('filter_hidden','',array('type'=>'checkbox')); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
  <td><?php echo $yn[$params->filter_hidden] ;?></td>
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>

<tr>
<td><?php echo $tv['cpa_filter_nb_show']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input('filter_nb_show','',array('options'=>$nb_show)); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
  <td><?php echo $params->filter_nb_show ;?></td>
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>
       </table>
       
       
       <div class="page-header">
	<h3><?php echo $tv['filters'] ; ?></h3>
</div>
       <table class="table table-striped">
           
                      <tr>
<td><?php  echo $tv['cpa_filter_type']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input('filter_type','',array('options'=>$type_filter)); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
 <td><?php echo $type_filter[$params->filter_type] ;?></td> 
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>

<tr>
<td><?php echo $tv['cpa_filter_distance']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input('filter_distance','',array('options'=>$dist)); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
  <td><?php echo $dist[$params->filter_distance] ;?></td>
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>

<tr>
<td><?php echo $tv['cpa_filter_min_old']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input('filter_min_old','',array('options'=>$agerg)); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
  <td><?php echo $params->filter_min_old ;?></td>
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>

<tr>
<td><?php echo $tv['cpa_filter_max_old']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input('filter_max_old','',array('options'=>$agerg)); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
  <td><?php echo $params->filter_max_old ;?></td>
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>



<tr>
<td><?php echo $tv['cpa_filter_role']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input6('filter_role','',array('options'=>$roles,'multiple'=>'multiple')); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
  <?php
$pp=array();
$ppam=array();
$ppam2=array();
$pp=explode(',',$params->filter_role);

if(isset($pp)&&!empty($pp)){
foreach($pp as $k=>$v)
{
if(isset($v)&&!empty($v)){
  $ppam[]=$roles[$v];  
}
}
$ppam2=implode(', ',$ppam); 
}
?>
<td><?php echo $ppam2 ;?></td>
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>

<tr>
<td><?php echo $tv['cpa_filter_link_type']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input6('filter_my_type','',array('options'=>$mtype)); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
  <?php
$pp=array();
$ppam=array();
$ppam2=array();
 $pp=explode(',',$params-> filter_my_type);
if(isset($pp)&&!empty($pp)){
foreach($pp as $k=>$v)
{
if(isset($v)&&!empty($v)){
  $ppam[]=$mtype[$v];  
}
}
$ppam2=implode(', ',$ppam); 
}
?>
<td><?php echo $ppam2 ;?></td>
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>


<tr>
<td><?php echo $tv['cpa_filter_relationship_statut']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input6('filter_relationship_statut','',array('options'=>$statut,'multiple'=>'multiple')); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
  <?php
$pp=array();
$ppam=array();
$ppam2=array();
$pp=explode(',',$params->filter_relationship_statut);
if(isset($pp)&&!empty($pp)){
foreach($pp as $k=>$v)
{
if(isset($v)&&!empty($v)){
  $ppam[]=$statut[$v];  
}
}
$ppam2=implode(', ',$ppam); 
}
?>
<td><?php echo $ppam2 ;?></td>
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>

<tr>
<td><?php echo $tv['cpa_filter_orientation']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input6('filter_orientation','',array('options'=>$sexorientation,'multiple'=>'multiple')); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
  <?php
$pp=array();
$ppam=array();
$ppam2=array();
$pp=explode(',',$params->filter_orientation);
if(isset($pp)&&!empty($pp)){
foreach($pp as $k=>$v)
{
if(isset($v)&&!empty($v)){
  $ppam[]=$sexorientation[$v];  
}
}
$ppam2=implode(', ',$ppam); 
}
?>
<td><?php echo $ppam2 ;?></td>
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>

<tr>
<td><?php echo $tv['cpa_filter_living']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input6('filter_living','',array('options'=>$living,'multiple'=>'multiple')); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
  <?php
$pp=array();
$ppam=array();
$ppam2=array();
$pp=explode(',',$params->filter_living);
if(isset($pp)&&!empty($pp)){
foreach($pp as $k=>$v)
{
if(isset($v)&&!empty($v)){
  $ppam[]=$living[$v];  
}
}
$ppam2=implode(', ',$ppam); 
}
?>
<td><?php echo $ppam2 ;?></td>
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>

<tr>
<td><?php echo $tv['cpa_filter_body_type']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input6('filter_body_type','',array('options'=>$bodytype,'multiple'=>'multiple')); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
  <?php
$pp=array();
$ppam=array();
$ppam2=array();
$pp=explode(',',$params->filter_body_type);
if(isset($pp)&&!empty($pp)){
foreach($pp as $k=>$v)
{
if(isset($v)&&!empty($v)){
  $ppam[]=$bodytype[$v];  
}
}
$ppam2=implode(', ',$ppam); 
}
?>
<td><?php echo $ppam2 ;?></td>
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>

<tr>
<td><?php echo $tv['cpa_filter_hair_color']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input6('filter_hair_color','',array('options'=>$hair,'multiple'=>'multiple')); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
  <?php
$pp=array();
$ppam=array();
$ppam2=array();
$pp=explode(',',$params->filter_hair_color);
if(isset($pp)&&!empty($pp)){
foreach($pp as $k=>$v)
{
if(isset($v)&&!empty($v)){
  $ppam[]=$hair[$v];  
}
}
$ppam2=implode(', ',$ppam); 
}
?>
<td><?php echo $ppam2 ;?></td>
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>

<tr>
<td><?php echo $tv['cpa_filter_eye_color']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input6('filter_eye_color','',array('options'=>$eyes,'multiple'=>'multiple')); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
  <?php
$pp=array();
$ppam=array();
$ppam2=array();
$pp=explode(',',$params->filter_eye_color);

if(isset($pp)&&!empty($pp)){
foreach($pp as $k=>$v)
{
if(isset($v)&&!empty($v)){
  $ppam[]=$eyes[$v];  
}
}
$ppam2=implode(', ',$ppam); 
}
?>
<td><?php echo $ppam2 ;?></td>
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>

<tr>
<td><?php echo $tv['cpa_filter_ethnic']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input6('filter_ethnic','',array('options'=>$ethnic,'multiple'=>'multiple')); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
  <?php
$pp=array();
$ppam=array();
$ppam2=array();
$pp=explode(',',$params->filter_ethnic);
if(isset($pp)&&!empty($pp)){
foreach($pp as $k=>$v)
{
if(isset($v)&&!empty($v)){
  $ppam[]=$ethnic[$v];  
}
}
$ppam2=implode(', ',$ppam); 
}
?>
<td><?php echo $ppam2 ;?></td>
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>

<tr>
<td><?php echo $tv['cpa_filter_children']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input6('filter_children','',array('options'=>$child,'multiple'=>'multiple')); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
  <?php
$pp=array();
$ppam=array();
$ppam2=array();
$pp=explode(',',$params->filter_children);
if(isset($pp)&&!empty($pp)){
foreach($pp as $k=>$v)
{
if(isset($v)&&!empty($v)){
  $ppam[]=$child[$v];  
}
}
$ppam2=implode(', ',$ppam); 
}
?>
<td><?php echo $ppam2 ;?></td>
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>

<tr>
<td><?php echo $tv['cpa_filter_smoking']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input6('filter_smoking','',array('options'=>$hertz,'multiple'=>'multiple')); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
  <?php
$pp=array();
$ppam=array();
$ppam2=array();
$pp=explode(',',$params->filter_smoking);

if(isset($pp)&&!empty($pp)){
foreach($pp as $k=>$v)
{
if(isset($v)&&!empty($v)){
  $ppam[]=$hertz[$v];  
}
}
$ppam2=implode(', ',$ppam); 
}

?>
<td><?php  echo $ppam2 ;?></td>
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>

<tr>
<td><?php echo $tv['cpa_filter_drinking']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input6('filter_drinking','',array('options'=>$hertz,'multiple'=>'multiple')); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
  <?php
$pp=array();
$ppam=array();
$ppam2=array();
$pp=explode(',',$params->filter_drinking);
if(isset($pp)&&!empty($pp)){
foreach($pp as $k=>$v)
{
if(isset($v)&&!empty($v)){
  $ppam[]=$hertz[$v];  
}
}
$ppam2=implode(', ',$ppam); 
}
?>
<td><?php echo $ppam2 ;?></td>
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>

<tr>
<td><?php echo $tv['cpa_filter_education']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input6('filter_education','',array('options'=>$education,'multiple'=>'multiple')); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
  <?php
$pp=array();
$ppam=array();
$ppam2=array();
$pp=explode(',',$params->filter_education);
if(isset($pp)&&!empty($pp)){
foreach($pp as $k=>$v)
{
if(isset($v)&&!empty($v)){
  $ppam[]=$education[$v];  
}
}
$ppam2=implode(', ',$ppam); 
}

?>
<td><?php echo $ppam2 ;?></td>
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>

<tr>
<td><?php echo $tv['cpa_filter_income']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input6('filter_income','',array('options'=>$income,'multiple'=>'multiple')); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
  <?php
$pp=array();
$ppam=array();
$ppam2=array();
$pp=explode(',',$params->filter_income);
if(isset($pp)&&!empty($pp)){
foreach($pp as $k=>$v)
{
if(isset($v)&&!empty($v)){
  $ppam[]=$income[$v];  
}
}
$ppam2=implode(', ',$ppam); 
}

?>
<td><?php echo $ppam2 ;?></td>
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>

<tr>
<td><?php echo $tv['cpa_filter_languages']; ?></td>
<?php if(isset($idfilt)&&($idfilt==$i)): ?>
<td><?php echo $this->Form->input6('filter_languages','',array('options'=>$langu,'multiple'=>'multiple')); ?></td>
<td><a title="<?php echo $tv['remove_flt']; ?>" href="<?php echo Router::url('params/premium'); ?>"><i class="icon-remove"></i></a></td>
<?php $i++; else: ?>
  <?php
$pp=array();
$ppam=array();
$ppam2=array();
$pp=explode(',',$params->filter_languages);
if(isset($pp)&&!empty($pp)){
foreach($pp as $k=>$v)
{
if(isset($v)&&!empty($v)){
  $ppam[]=$langu[$v];  
}
}
$ppam2=implode(', ',$ppam); 
}

?>
<td><?php echo $ppam2 ;?></td>
<td><a href="<?php echo Router::url('params/premium/id:'.$i); $i++ ;?>"><i class="icon-pencil"></i></a></td>
<?php endif; ?>
</tr>

       </table>
   </div>
 
   
   <?php endif ;?>
 
   <div class="form-group"  >
            
                <div class="controls">
    <input type="submit" class="btn btn-success btn-lg" value="<?php echo $tv['g_update'] ;?>">
    <a href="<?php echo Router::url('params/filter'); ?>" class="btn btn-lg" ><?php echo $tv['cpa_update_multiple'] ;?></a>
           </div> 
  
    </div>
</form>


</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('nav li a').click(function(){
        $('nav li a').removeClass('active');
        $(this).addClass('active');
        var id=$(this).attr('href');
        scrollTo(id);
        return false ;
        
    });
    /**
     * scro
     */
    function scrollTo(target) {
        if($(target).length>=1){
            height=$(target).offset().top;
        }
        $('html,body').animate({scrollTop:height},1000);
        return false ;
    }
    })

</script>
