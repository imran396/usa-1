<div id="content">

    <ul class="breadcrumb">
        <li><a href="<?php echo site_url(); ?>" class="glyphicons home"><i></i> <?php echo $this->lang->line('admin_panel'); ?></a></li>
        <li class="divider"></li>
        <li>Tadoo Note</li>
    </ul>
    <br/>

    <?php $this->load->view('admin/layouts/message'); ?>
    <br/>
    <div class="separator"></div>

    <div class="heading-buttons">
        <h3 class="glyphicons sort"><i></i>Tadoo Note</h3>
        <div class="clearfix"></div>
    </div>
    <!-- End Content -->
    <div class="separator"></div>
    <form method="post" action="/<?php echo $this->uri->segment(1,NULL)?>/tadoonote/create" name="form1" id="form1">
 <div class="innerLR">
     <div class="tab-content tab-content-custom" >
            <div class="tab-pane active" id="account-details">

                <div class="widget widget-2">
                    <div class="widget-head">
                        <h4 class="heading glyphicons edit"><i></i>Tadoo Note</h4>
                    </div>

                    <div class="widget-body" style="padding-bottom: 0;">
                        <div class="row-fluid">
                            <div class="span6">

                                <div class="control-group">
                                    <label class="control-label">Title</label>
                                    <div class="controls">
                                        <input type="text" value="<?php echo set_value('title'); ?>"  class="validate[required] span10" name="title" id="title"  />
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Note</label>
                                    <div class="controls">
                                    <textarea name="note" id="note" class="validate[required] span10"></textarea>
                                    </div>
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