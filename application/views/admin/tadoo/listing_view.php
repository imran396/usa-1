<div id="content">

    <ul class="breadcrumb">
        <li><a href="<?php echo site_url(); ?>" class="glyphicons home"><i></i> <?php echo $this->lang->line('admin_panel'); ?></a></li>
        <li class="divider"></li>
        <li>Tadoo</li>
    </ul>
    <br/>

    <?php $this->load->view('admin/layouts/message'); ?>
    <br/>
    <div class="separator"></div>

    <div class="heading-buttons">
        <h3 class="glyphicons sort"><i></i>Tadoo</h3>
        <div class="buttons pull-right">
            <a href="/admin/tadoo/create" class="btn btn-primary btn-icon glyphicons circle_plus"><i></i>Create Tadoo</a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="separator"></div>
<style>
    .btn-danger:hover, .btn-danger:active, .btn-danger.active, .btn-danger.disabled, .btn-danger[disabled] {
        background-color: #BD362F;
        color: #FFFFFF;
    }
    .icon-ok-custom {
        background-position: -289px 4px;
        height: 18px;
    }
</style>

<div class="innerLR">

        <div class="widget widget-gray widget-body-white">

            <div class="widget-body" style="padding: 10px 0;">

                <div data-toggle="buttons-radio" class="btn-group">

                </div>
                <table class="table table-bordered table-primary js-table-sortable">
                    <thead>
                    <tr>
                        <th class="center">No.</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th><?php echo $this->lang->line('action');?></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
            $var = ($paging[3] != '0')  ? ($paging[3]+1) : 1;
                    $i=$var;
                  foreach($paging[0]->result() as  $rows ) : ?>
                    <tr class="selectable" id="listItem_<?php echo $rows->tadoo_id; ?>" >
                        <td class="center"><?php echo $rows->tadoo_id; ?></td>
                        <td><?php echo $rows->title;?></td>
                        <td><?php echo $rows->description;?></td>
                        <td>
                            <a class="btn-action glyphicons pencil btn-success" href="/admin/tadoo/edit/<?php echo $rows->tadoo_id; ?>"><i></i></a>
                            <a class="btn-action glyphicons remove_2 btn-danger" href="/admin/tadoo/remove/<?php echo $rows->tadoo_id; ?>"><i></i></a>

                         </td>
                    </tr>
                    <?php $i++; endforeach; ?>
                    </tbody>
                </table>
                 <?php if($paging[1]){ ?>
                    <div class="row-fluid row-fluid-custom"><div class="left-custom-paging">Showing <?php echo ($paging[3]+1); ?> to <?php echo ($i-1); ?> of <?php echo $paging[2]; ?> Entries.</div><div class="paging_bootstrap pagination custom-pagination"><?php echo $paging[1]; ?></div></div>
                <?php } ?>

            </div>
        </div>

</div>
</div>