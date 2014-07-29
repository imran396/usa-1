<div id="content">

    <ul class="breadcrumb">
        <li><a href="<?php echo site_url(); ?>" class="glyphicons home"><i></i> <?php echo $this->lang->line('admin_panel'); ?></a></li>
        <li class="divider"></li>
        <li>Assign Task</li>
    </ul>
    <br/>

    <?php $this->load->view('admin/layouts/message'); ?>
    <br/>
    <div class="separator"></div>

    <div class="heading-buttons">
        <h3 class="glyphicons sort"><i></i>Tadoo Assign Task</h3>
        <div class="clearfix"></div>
    </div>
    <!-- End Content -->
    <div class="separator"></div>
    <form method="post" action="/<?php echo $this->uri->segment(1,NULL)?>/tadooassign/creat name="form1" id="form1">
 <div class="innerLR">
     <div class="tab-content tab-content-custom" >
            <div class="tab-pane active" id="account-details">

                <div class="widget widget-2">
                    <div class="widget-head">
                        <h4 class="heading glyphicons edit"><i></i>Assign Task</h4>
                    </div>

                    <div class="widget-body" style="padding-bottom: 0;">
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label">User</label>
                                    <?php echo form_dropdown('user_id', $userlist);?>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Tadoo</label>
                                    <?php echo form_dropdown('tadoo_id', $tadoolist);?>
                                </div>
                            </div>

                        </div>


                        <div class="form-actions" style="margin: 0;">
                            <button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i><?php echo $this->lang->line('save_changes');?></button>
                            <button type="reset" class="btn btn-icon btn-default glyphicons circle_remove"><i></i><?php echo $this->lang->line('cancel');?></button>
                        </div>
                    </div>
                </div>
            </div

        </div>

    </div>
    </form>
<br/>

</div>