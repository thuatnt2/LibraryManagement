<div class="umtop">
    <?php //echo $this->element('nav_reader_management'); ?>
    <?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <span class="umstyle1"><?php echo 'Danh sách menu'; ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="index">
                <table cellspacing="0" cellpadding="0" width="100%" border="0" >
                    <thead>
                        <tr>
                            <th>Thứ tự</th>
                            <th>Tên Menu</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($menus)) {
                           $stt = 1;
                            foreach ($menus as $row) {
                                echo "<tr>";
                                echo '<td>'.($stt++).'</td>';
                                echo "<td>" . h($row['Menu']['title']) . "</td>";
                                echo "<td>";
                                if ($row['Menu']['published'] == 1) {
                                    echo "<span class='icon'><a href='" . $this->Html->url('/menus/published/' . $row['Menu']['id'] . '/0') . "'><img src='" . SITE_URL . "usermgmt/img/approve.png' border='0'></a></span>";
                                } else {
                                    echo "<span class='icon'><a href='" . $this->Html->url('/menus/published/' . $row['Menu']['id'] . '/1') . "'><img src='" . SITE_URL . "usermgmt/img/dis-approve.png' border='0'></a></span>";
                                }
                                echo "</td>";

                                echo "<td>";
                                echo "<span class='icon'><a href='" . $this->Html->url('/menus/edit/' . $row['Menu']['id']) . "'><img src='" . SITE_URL . "usermgmt/img/edit.png' border='0' alt='Edit' title='Edit'></a></span>";

                                echo $this->Form->postLink($this->Html->image(SITE_URL . 'usermgmt/img/delete.png', array("alt" => __('Delete'), "title" => __('Delete'))), array('action' => 'delete', $row['Menu']['id']), array('escape' => false, 'confirm' => __('Are you sure you want to delete this faculty?')));

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
