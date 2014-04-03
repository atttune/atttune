<?php $title_for_layout = $tv['help']; ?>
<!-- START PRIVACY POLICY CODE --><div style="font-family:verdana">
   
    <div class="page-header">
        <h2>
            @tttune <?php echo $tv['faq'] ;?>
        </h2>
    </div>
    <div class="row">
        <div class="col-md-8"> <?php foreach($posts as $k=>$v): ?>
    <strong><?php echo $v->message ;?></strong> 
    <br /><br /><?php echo $v->message2 ;?><br /><br/>
   <?php endforeach ;?></div>
        
    </div>
   
    