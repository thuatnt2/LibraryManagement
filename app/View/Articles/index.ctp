<div class="umtop">
    <?php //echo $this->element('nav_reader_management'); ?>
    <?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <span class="umstyle1"><?php echo 'Danh sách bài viết'; ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="index">
                <table cellspacing="0" cellpadding="0" width="100%" border="0" >
                    <thead>
                        <tr>
                            <th><?php echo 'Tên bài viết' ?></th>
                            <th><?php echo 'Danh mục' ?></th>
                            <th><?php echo 'Ngày đăng' ?></th>
                            <th><?php echo 'Tình trạng' ?></th>
                            <th><?php echo 'Thao tác' ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($articles)) {
                            foreach ($articles as $row) {
                                echo "<tr>";
                                echo "<td>" . h($row['Article']['title']) . "</td>";
                                echo "<td>" . h($row['Category']['name']) . "</td>";
                                echo "<td>" . date('d/m/Y', strtotime($row['Article']['created'])) . "</td>";
                                echo "<td>";
                                if ($row['Article']['published'] == 1) {
                                    echo "<span class='icon'><a href='" . $this->Html->url('/articles/pulished/' . $row['Article']['id'] . '/0') . "'><img src='" . SITE_URL . "usermgmt/img/approve.png' border='0'></a></span>";
                                } else {
                                    echo "<span class='icon'><a href='" . $this->Html->url('/articles/pulished/' . $row['Article']['id'] . '/1') . "'><img src='" . SITE_URL . "usermgmt/img/dis-approve.png' border='0'></a></span>";
                                }
                                echo "</td>";

                                echo "<td>";
                                echo "<span class='icon'><a href='" . $this->Html->url('/articles/edit/' . $row['Article']['id']) . "'><img src='" . SITE_URL . "usermgmt/img/edit.png' border='0' alt='Edit' title='Edit'></a></span>";

                                echo $this->Form->postLink($this->Html->image(SITE_URL . 'usermgmt/img/delete.png', array("alt" => __('Delete'), "title" => __('Delete'))), array('action' => 'delete', $row['Article']['id']), array('escape' => false, 'confirm' => __('Are you sure you want to delete this faculty?')));

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
                echo $this->Paginator->first('<<Trang đầu', array('class' => 'paginator-link'));
                echo $this->Paginator->prev('Trước');
                echo $this->Paginator->numbers(array('separator' => false, 'class' => 'number'));
                echo $this->Paginator->next('Tiếp');
                echo $this->Paginator->last('Trang cuối>>');
                ?>



            </div>
        </div>
    </div>
</div>
