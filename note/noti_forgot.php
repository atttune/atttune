<table cellspacing="0" border="0" height="100%" style="" bgcolor="#ffffff" cellpadding="0" width="100%">
    <tbody><tr>
        <td align="center" valign="top">

            <table cellspacing="0" cellpadding="0" width="400">
                <tbody><tr>
                    <td align="left" height="60">
                        <h2 style="font:bolder 24px/27px Arial, sans-serif;padding:0 0 10px;color:#0C695D;"><a href="<?php echo Router::url('users/index') ;?>" style="text-decoration:none;color:#0C695D;" target="_blank">@tttune</a></h2>
                    </td>
                </tr>
                
                <tr>
                    <td align="left" valign="top" style="padding:0 0 15px 0;">
                        <font size="4" color="#333" face="Helvetica Neue, Arial, Helvetica, sans-serif" style="font-size:16px;line-height:25px;">Hi <?php echo $data['data'].'/'.$data['key'] ;?>,
                        </font>
                    </td>
                </tr>
                
                <tr>
                    <td align="left" valign="top" style="padding:0 0 15px 0;">
                        <font size="4" color="#333" face="Helvetica Neue, Arial, Helvetica, sans-serif" style="font-size:16px;line-height:25px;">Welcome to @tttune, kris972 (guizmauh@hotmail.com).
                        </font>
                    </td>
                </tr>
                <tr>
                    <td align="left" valign="top" style="padding:0 0 15px 0;">
                        <font size="4" color="#333" face="Helvetica Neue, Arial, Helvetica, sans-serif" style="font-size:16px;line-height:25px;"><a href="http://www.atttune.com/users/confirm/<?php echo $data['data'].'/'.$data['key'] ;?>" style="color:#0C695D" target="_blank"><?php echo $this->s['whois'] ;?></a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td align="left" valign="top" style="padding:0 0 15px 0;">
                        <font size="4" color="#333" face="Helvetica Neue, Arial, Helvetica, sans-serif" style="font-size:16px;line-height:25px;">We don't want to keep you from working but to get most of the Kippt you might want to install <a href="<?php echo Router::url('users/index') ;?>" style="color:#0C695D" target="_blank">a browser extension</a>.
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
                            <?php echo $this->s['chg_setting'] ;?><br> 
                             <a href="<?php echo Router::url('params/notification') ;?>" style="color:#0C695D" target="_blank"><?php echo $this->s['upd_setting'] ;?></a>
                        </font>
                    </td>
                </tr>
            </tbody></table>
            
        </td>
    </tr>
</tbody></table>
<?php  $this->s['visite_interes'] ;?>
<?php  $this->s['new_visite'] ;?>
