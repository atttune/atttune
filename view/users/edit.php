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

$agerg=array() ;
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
