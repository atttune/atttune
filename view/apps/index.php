<?php $title_for_layout = $tv['title_apps_list']; ?>
<div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<h1><?php echo $tv['apps_list'] ;?></h1>
		</div>
            <?php if(isset($apps)&&!empty($apps)):?>
                        <?php echo $this->Form->create(array('style'=>'hoz','action'=>'apps/add'),true,'vegetAppS') ;?>
<fieldset>
    <div class="form-group"  >
            
                <div class="col-lg-offset-2 col-lg-10">
    <input type="submit" class="btn btn-success btn-lg" value="<?php echo $tv['g_update'] ;?>">
           </div> 
  
    </div>
            <table class="table table-striped">
	<thead>
		<tr>
			<th><?php echo $tv['name'] ;?></th>
			
			<th><?php echo $tv['link'] ;?></th>
     <?php if(isset( $this->request->data->link)&&!empty($this->request->data->link)): ?>
                        <th><?php echo $tv['edit'] ;?></th>
                        <?php endif ;?>
                        
		</tr>   
	</thead>
	<tbody>
		<?php $i=0;$j=0; foreach ($apps as $k => $v): ?>
			<tr>
				<td><i class="ico-<?php echo $v->slug ;?>"></i> <?php echo $v->name ;?></td>
				
                                <td>
                                    <?php if(isset( $this->request->data->link[($j+1)])&&!empty($this->request->data->link[($j+1)])): ?>
                                    <?php if(isset($apid)&&(($j+1)==$apid)): ?>
                                    <div class="form-group success">
                                        <input class="form-control input-xxlarge" type="text" name="link[<?php echo $j ; ?>]" value="<?php echo $this->request->data->link[($j+1)] ; ?>">
                                    </div>
                                    <?php else: ?>
                                        <?php echo $this->request->data->link[($j+1)] ; ?>
                                    <?php endif ; $j++;?>
                                    <?php else: ?>
                                   <input class="form-control input-xxlarge"  title="<?php echo $tv['cpaste_app']; ?>"  type="text" name="link[<?php echo $j ; $j++; ?>]">
                                    <?php endif ;?>
                                </td>
                                <td>
                               <?php if(isset( $this->request->data->link[($j)])&&!empty($this->request->data->link[($j)])): ?>
                                <a  title="<?php echo $tv['update_app']; ?>" href="<?php echo Router::url('apps/index/id:'.$j); ?>"><i class="icon-pencil"></i></a>   <a title="<?php echo $tv['del_app']; ?>" href="<?php echo Router::url('apps/delete/id:'.$j); ?>"><i class="icon-remove"></i></a>   
                        <?php endif ;?>
                                </td>
			</tr>
		<?php endforeach; ?>
                 
	</tbody>
</table>
    
    <div class="form-group"  >
            
                <div class="col-lg-offset-2 col-lg-10">
    <input type="submit" class="btn btn-success btn-lg" value="<?php echo $tv['g_update'] ;?>">
           </div> 
  
    </div>

        </fieldset>
             </form>
            <?php endif ;?>
  
        </div>
	
</div>