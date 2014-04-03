<?php $permission1=array(1=>$tv['public'], 2=>$tv['private'],3=>$tv['friend']);?>

<?php if(empty($_SERVER['HTTP_X_REQUESTED_WITH'])): ;?>
<a href="<?php echo Router::url($this->previous()); ?>" class="btn"><i class="icon-user"></i><?php echo $tv['g_profile'] ;?></a>
<?php endif ;?>

<div class="page-header">
	<h1><?php echo $tv['g_add_comment'] ;?></h1>
</div>
<?php echo $this->Form->create(array('style'=>'hoz','id'=>'form_1','action'=>'posts/add_comment'),true, 'DoN@tienne') ;?>
	
	<?php echo $this->Form->input('message',$tv['g_comment'] ,array('type'=>'textarea')); ?> 
        <?php echo $this->Form->input('level', $tv['g_access'],array('options'=>$permission1)); ?> 
	<div class="actions">
		<input type="submit" value="<?php echo $tv['g_send'] ;?>" class="btn primary">
	</div>
</form>
