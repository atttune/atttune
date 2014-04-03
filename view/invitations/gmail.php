
<div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<h1>Invitation</h1>
		</div>
		<?php if(isset($url)): ?>
            <a href="<?php echo $url ;?>" class="btn btn-info btn-lg">Inviter vos contacts Gmail</a>
	       <?php endif ;?>
         
            <?php if(isset($contact)&&!empty($contact)):?>
                        <?php echo $this->Form->create(array('style'=>'hoz','action'=>'invitations/confirm'),true,'vegetAAble') ;?>
<fieldset>
    <div class="form-group"  >
            
                <div class="controls">
    <input type="submit" class="btn btn-success btn-lg" value="<?php echo $tv['g_update'] ;?>">
           </div> 
  
    </div>
            <table class="table table-bordered">
	<thead>
		<tr>
			<th><?php echo $tv['name'] ;?></th>
			<th><?php echo $tv['email'] ;?></th>
			<th><?php echo $tv['invite'] ;?></th>
		</tr>   
	</thead>
	<tbody>
		<?php $i=0; foreach ($contact as $k => $v): ?>
			<tr>
				<td><?php echo $v['name'] ;?></td>
				<td><?php echo $v['email']; ?></td>
				<td>
                                   <input type="checkbox" name="invit[<?php echo $i ; $i++; ?>]" value="<?php echo $v['uid'] ;?>" checked="checked">
                                </td>
				
			</tr>
		<?php endforeach; ?>
                 
	</tbody>
</table>
    
    <div class="form-group"  >
            
                <div class="controls">
    <input type="submit" class="btn btn-success btn-lg" value="<?php echo $tv['g_update'] ;?>">
           </div> 
  
    </div>

        </fieldset>
             </form>
            <?php endif ;?>
            
        </div>
	
</div>