
<div class="umtop">
    <?php echo $this->element('nav_reader_management'); ?>
    <?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="form-horizontal">
                <div class="span5 align-left" style="margin-left: 0px">
                    <span class="umstyle1"><?php echo __('Danh sách khoa'); ?></span>
                </div>
                <div class="span2 align-right" align="right">
                    <?php echo $this->Html->link('Thêm khoa',array('plugin' => 'usermgmt', 'controller' => 'faculties', 'action' => 'add'),array('class' => 'btn btn-primary btn-lg', 'escape' => false)) ?>
                </div>
            </div>
            <div style="clear:both"></div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="index">
                <table cellspacing="0" cellpadding="0" width="100%" border="0" >
                    <thead>
                        <tr>
                            <th><?php echo __('faculty name'); ?></th>
                            <th><?php echo __('Created'); ?></th>
                            <th><?php echo __('Status'); ?></th>
                            <th><?php echo __('Action'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($faculties)) {
                            foreach ($faculties as $row) {
                                echo "<tr>";
                                echo "<td>" . h($row['Faculty']['name']) . "</td>";
                                echo "<td>" . date('d-M-Y', strtotime($row['Faculty']['created'])) . "</td>";
                                echo "<td>";
                                if ($row['Faculty']['is_active'] == 1) {
                                    echo "<span class='icon'><a href='" . $this->Html->url('/usermgmt/faculties/active/' . $row['Faculty']['id'] . '/0') . "'><img src='" . SITE_URL . "usermgmt/img/approve.png' border='0'></a></span>";
                                } else {
                                    echo "<span class='icon'><a href='" . $this->Html->url('/usermgmt/faculties/active/' . $row['Faculty']['id'] . '/1') . "'><img src='" . SITE_URL . "usermgmt/img/dis-approve.png' border='0'></a></span>";
                                }
                                echo "</td>";

                                echo "<td>";
                                echo "<span class='icon'><a href='" . $this->Html->url('/editFaculty/' . $row['Faculty']['id']) . "'><img src='" . SITE_URL . "usermgmt/img/edit.png' border='0' alt='Edit' title='Edit'></a></span>";

                                echo $this->Form->postLink($this->Html->image(SITE_URL . 'usermgmt/img/delete.png', array("alt" => __('Delete'), "title" => __('Delete'))), array('action' => 'delete', $row['Faculty']['id']), array('escape' => false, 'confirm' => __('Are you sure you want to delete this faculty?')));

                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan=6><br/><br/>No Data</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="um_box_down"></div>
</div>