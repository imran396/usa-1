<div id="content">

        <ul class="breadcrumb">
            <li><a href="<?php echo site_url(); ?>" class="glyphicons home"><i></i> <?php echo $this->lang->line('admin_panel'); ?></a></li>
            <li class="divider"></li>
            <li><?php echo $this->lang->line('users');?></li>
        </ul>
    <br/>
    <?php $this->load->view('admin/layouts/message'); ?>
    <br/>
    <div class="separator"></div>

    <div class="heading-buttons">
        <h3 class="glyphicons sort"><i></i><?php echo $this->lang->line('users');?></h3>
        <div class="clearfix"></div>
    </div>
    <br/>
    <form method="post" action="/<?php echo $this->uri->segment(1,NULL)?>/users/update" name="form1" id="form1">
        <div class="well" style="padding-bottom: 20px; margin: 0;">
            <div class="widget-head">
                <h4 class="heading glyphicons edit"><i></i>account_details</h4>
            </div>
            <hr class="separator" />
            <div class="row-fluid">
                <div class="span6">
                    <div class="control-group">
                        <label class="control-label" for="firstname"><?php echo $this->lang->line('first_name');?></label>
                        <div class="controls"><input type="text" placeholder="<?php echo $this->lang->line('enter').' '.$this->lang->line('first_name');?>" value="<?php echo(isset($queryup[0]->first_name))? $queryup[0]->first_name:set_value('first_name'); ?>"  class="span12" name="first_name" id="first_name"  /></div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="lastname"><?php echo $this->lang->line('last_name');?></label>
                        <div class="controls"><input type="text" placeholder="<?php echo $this->lang->line('enter').' '.$this->lang->line('last_name');?>" value="<?php echo(isset($queryup[0]->last_name))? $queryup[0]->last_name:set_value('last_name'); ?>"  class="span12" name="last_name" id="last_name"  /></div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="phone"><?php echo $this->lang->line('phone');?></label>
                        <div class="controls">

                            <input type="text" placeholder="<?php echo $this->lang->line('enter').' '.$this->lang->line('phone');?>" value="<?php echo(isset($queryup[0]->phone))? $queryup[0]->phone:set_value('phone'); ?>"  class="validate[required] span12" name="phone" id="phone"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="username"><?php echo $this->lang->line('email');?></label>
                        <div class="controls">
                            <input type="text" placeholder="<?php echo $this->lang->line('enter').' '.$this->lang->line('email');?>" value="<?php echo(isset($queryup[0]->email))? $queryup[0]->email:set_value('email'); ?>"  class="validate[required] span12" name="email" id="email"  />
                        </div>
                    </div>

               </div>

            </div>


            <div class="form-actions">
                <input type="hidden" name="username" value="<?php echo(isset($queryup[0]->username))? $queryup[0]->username:set_value('username'); ?>">
                <input type="hidden" name="id" value="<?php echo(isset($queryup[0]->id))? $queryup[0]->id:set_value('id'); ?>">
                <button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i><?php echo $this->lang->line('save_changes');?></button>
                <button type="reset" class="btn btn-icon btn-default glyphicons circle_remove"><i></i><?php echo $this->lang->line('cancel');?></button>
            </div>
            <div class="separator line"></div>


        </div>
    </form>

<br/>

<!-- End Content -->

</div>