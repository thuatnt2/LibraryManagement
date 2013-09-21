<div class="umtop">
    <?php echo $this->element('nav_reader_management'); ?>
    <?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <span class="umstyle1"><?php echo 'Danh sách bạn đọc'; ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="index">
                <table cellspacing="0" cellpadding="0" width="100%" border="0" >
                    <thead>
                        <tr>
                            <th><?php echo 'Mã thẻ' ?></th>
                            <th><?php echo 'Họ tên' ?></th>
                            <th><?php echo 'Đơn vị' ?></th>
                            <th><?php echo 'Ngày cấp' ?></th>
                            <th><?php echo 'Ngày hết hạn' ?></th>
                            <th><?php echo 'Tình trạng' ?></th>
                            <th><?php echo 'Thao tác' ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($readers)) {
                            foreach ($readers as $row) {
                                echo "<tr>";
                                echo "<td>" . h($row['Reader']['cardBarcode']) . "</td>";
                                echo "<td>" . h($row['User']['fullname']) . "</td>";
                                echo "<td>" . h($row['Department']['department_name']) . "</td>";
                                echo "<td>" . date('d/m/Y', strtotime($row['Reader']['created'])) . "</td>";
                                if(strtotime($row['Reader']['date_expiry'])<= time()){
                                    echo "<td style=".'color:red'.">" . date('d/m/Y', strtotime($row['Reader']['date_expiry'])) ." (hết hạn)". "</td>";
                                }
                                else{
                                    //var_dump(strtotime(date('d/m/y',time())));
                                    echo "<td>" . date('d/m/Y', strtotime($row['Reader']['date_expiry'])) . "</td>";
                                }
                               //echo "<td>" . date('d/m/Y', strtotime($row['Reader']['date_expiry'])) . "</td>";
                                echo "<td>";
                                if ($row['User']['actived'] == 1) {
                                    echo "<span class='icon'><a href='" . $this->Html->url('/usermgmt/users/actived/' . $row['User']['id'] . '/0') . "'><img src='" . SITE_URL . "usermgmt/img/approve.png' border='0'></a></span>";
                                } else {
                                    echo "<span class='icon'><a href='" . $this->Html->url('/usermgmt/users/actived/' . $row['User']['id'] . '/1') . "'><img src='" . SITE_URL . "usermgmt/img/dis-approve.png' border='0'></a></span>";
                                }
                                echo "</td>";

                                echo "<td>";
                                echo "<span class='icon'><a href='" . $this->Html->url('/editReader/' . $row['User']['id']) . "'><img src='" . SITE_URL . "usermgmt/img/edit.png' border='0' alt='Edit' title='Edit'></a></span>";

                                //echo $this->Form->postLink($this->Html->image(SITE_URL . 'usermgmt/img/delete.png', array("alt" => __('Delete'), "title" => __('Delete'))), array('action' => 'delete', $row['Department']['id']), array('escape' => false, 'confirm' => __('Are you sure you want to delete this faculty?')));

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
            <div class="pagination">
                <?php
                echo $this->Paginator->first('<<Trang đầu',array('class'=>'paginator-link'));
                echo $this->Paginator->prev('Trước');
                echo $this->Paginator->numbers(array('separator' => false, 'class'=>'number'));
                echo $this->Paginator->next('Tiếp');
                echo $this->Paginator->last('Trang cuối>>');
                ?>

              

            </div>
        </div>
    </div>
</div>
