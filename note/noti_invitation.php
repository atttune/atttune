<table cellspacing="0" border="0" height="100%" style="" bgcolor="#ffffff" cellpadding="0" width="100%">
    <tbody><tr>
        <td align="center" valign="top">

            <table cellspacing="0" cellpadding="0" width="400">
                <tbody><tr>
                    <td align="left" height="60">
                        <h2 style="font:bolder 24px/27px Arial, sans-serif;padding:0 0 10px;color:#0C695D;"><a href="http://www.atttune.com" style="text-decoration:none;color:#0C695D;" target="_blank">@tttune</a></h2>
                    </td>
                </tr>
                
                <tr>
                    <td align="left" valign="top" style="padding:0 0 15px 0;">
                        <font size="4" color="#333" face="Helvetica Neue, Arial, Helvetica, sans-serif" style="font-size:16px;line-height:25px;"><?php echo $this->s['hi_msg'].' '.(isset($data['name'])?$data['name']:'') ;?> ,
                        </font>
                    </td>
                </tr>
                
                <tr>
                    <td align="left" valign="top" style="padding:0 0 15px 0;">
                        <font size="4" color="#333" face="Helvetica Neue, Arial, Helvetica, sans-serif" style="font-size:16px;line-height:25px;"><?php echo $this->s['n-msg-invite'].$data['psd'].', '.$data['city'].', '.strtoupper($data['contry']).' ' ;?>
                        </font>
                    </td>
                </tr>
               
                <tr>
                    <td align="left" valign="top" style="padding:0 0 15px 0;">
                        <font size="4" color="#333" face="Helvetica Neue, Arial, Helvetica, sans-serif" style="font-size:16px;line-height:25px;"><?php echo $this->s['invit_joining'] ;?><br><a href="http://www.atttune.com/invitations/join/<?php echo $data['theid'] ;?>" style="color:#0C695D;" target="_blank"><?php echo $this->s['click_2_joining'] ;?></a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td align="left" valign="top" style="padding:0 0 15px 0;">
                        <font size="4" color="#333" face="Helvetica Neue, Arial, Helvetica, sans-serif" style="font-size:16px;line-height:25px;"><?php echo $this->s['thx'] ;?>,
                        </font>
                    </td>
                </tr>
                <tr>
                    <td align="left" valign="top" style="padding:0 0 15px 0;">
                        <font size="4" color="#333" face="Helvetica Neue, Arial, Helvetica, sans-serif" style="font-size:16px;line-height:25px;"><?php echo $this->s['the_team'] ;?>
                        </font>
                    </td>
                </tr>
                
                <tr>
                    <td align="left" style="padding:15px 0;border-top:1px solid #ddd;">
                        <font color="#777" face="Helvetica Neue, Arial, Helvetica, sans-serif" style="font-size:12px;line-height:1.5;">
                            <?php echo $this->s['atttune-address'] ;?><br> 
                             <a href="<?php echo Router::url('params/notification') ;?>" style="color:#0C695D" target="_blank"><?php echo $this->s['upd_setting'] ;?></a>
                        </font>
                    </td>
                </tr>
            </tbody></table>
            
        </td>
    </tr>
</tbody></table>

