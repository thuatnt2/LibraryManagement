<div class="umtop">
    <?php echo $this->element('nav_reader_management'); ?>
    <?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <span class="umstyle1"><?php echo __('All Department'); ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="filter" style="max-width: 300px;">
                <?php echo $this->Form->create('Department',array('method'=>'POST'))?>
                <?php echo $this->Form->input('faculty_id',array('div'=>false,'label'=>false,  'class'=>'form-control','empty'=>'Tất cả')); ?>
                <?php echo $this->Form->end();?>

            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="index">
                <table cellspacing="0" cellpadding="0" width="100%" border="0" >
                    <thead>
                        <tr>
                            <th><?php echo __('Depart name'); ?></th>
                            <th><?php echo __('Faculty name'); ?></th>
                            <th><?php echo __('Created'); ?></th>
                            <th><?php echo __('Status'); ?></th>
                            <th><?php echo __('Action'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($departments)) {
                            foreach ($departments as $row) {
                                echo "<tr>";
                                echo "<td>" . h($row['Department']['department_name']) . "</td>";
                                echo "<td>" . h($row['Faculty']['faculty_name']) . "</td>";
                                echo "<td>" . date('d-M-Y', strtotime($row['Department']['created'])) . "</td>";
                                echo "<td>";
                                if ($row['Department']['actived'] == 1) {
                                    echo "<span class='icon'><a href='" . $this->Html->url('/usermgmt/departments/active/' . $row['Department']['id'] . '/0') . "'><img src='" . SITE_URL . "usermgmt/img/approve.png' border='0'></a></span>";
                                } else {
                                    echo "<span class='icon'><a href='" . $this->Html->url('/usermgmt/departments/active/' . $row['Department']['id'] . '/1') . "'><img src='" . SITE_URL . "usermgmt/img/dis-approve.png' border='0'></a></span>";
                                }
                                echo "</td>";

                                echo "<td>";
                                echo "<span class='icon'><a href='" . $this->Html->url('/editDepartment/' . $row['Department']['id']) . "'><img src='" . SITE_URL . "usermgmt/img/edit.png' border='0' alt='Edit' title='Edit'></a></span>";

                                echo $this->Form->postLink($this->Html->image(SITE_URL . 'usermgmt/img/delete.png', array("alt" => __('Delete'), "title" => __('Delete'))), array('action' => 'delete', $row['Department']['id']), array('escape' => false, 'confirm' => __('Are you sure you want to delete this faculty?')));

                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan=6><br/><br/>Không có dữ liệu</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="um_box_down"></div>
</div>

<script type="text/javascript">
    $('#DepartmentFacultyId').on('change',function(){
        $('#DepartmentIndexForm').submit();
    });
</script>