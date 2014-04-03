<?php $abuse=array(
1=>$tv['ab_falseprofile'],
2=>$tv['ab_stolen_pics'],
3=>$tv['ab_children'],
4=>$tv['ab_insults'],
5=>$tv['ab_pishing'],
6=>$tv['ab_spam'],
7=>$tv['ab_explicit'],
8=>$tv['ab_shocking']
);?>


<?php if(empty($_SERVER['HTTP_X_REQUESTED_WITH'])): ;?>
<a href="<?php echo Router::url($this->previous()); ?>" class="btn btn-default"><i class="icon-arrow-left"></i><?php echo $tv['g_back'] ;?></a>
<?php endif ;?>

<div class="page-header">
    
	<h1><?php echo $tv['report_abuse'] ;?></h1>
</div>
	
<?php echo $this->Form->create(array('style'=>'hoz','id'=>'form_1','action'=>'interactions/abuse/id:'.$id_ab.(isset($id_pic)?'/'.$id_pic:'')),true, 'DoN@tienne') ;?>
	
        <?php echo $this->Form->input32('abuse',$tv['ab_type'],array('options'=>$abuse)); ?> 
        <?php echo $this->Form->input('description',$tv['ab_description'],array('type'=>'textarea','rows'=>4)); ?>
         <?php echo $this->Form->input('block',$tv['ab_block'],array('type'=>'checkbox')); ?>

	<div class="actions">
		<input type="submit" value="<?php echo $tv['g_report'] ;?>" class="btn primary">
	</div>
</form>
