<?php $permission1=array(1=>'public', 2=>'private',3=>'friend');?>

<?php if(empty($_SERVER['HTTP_X_REQUESTED_WITH'])): ;?>
<a href="<?php echo Router::url($this->previous()); ?>" class="btn"><i class="icon-arrow-left"></i></a>
<?php endif ;?>

<div class="page-header">
	<h1><?php echo $tv['g_renamealbum'] ;?></h1>
</div>
<?php echo $this->Form->create(array('style'=>'hoz','id'=>'form_1','action'=>'albums/album_rename/'.$id_alb),true, 'DoN@tienne') ;?>
	
	<?php echo $this->Form->input('name',$tv['g_title']); ?>
        
	<div class="actions">
		<input type="submit" value="<?php echo $tv['g_add'] ;?>" class="btn primary">
	</div>
</form>
