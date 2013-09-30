<div class="umtop">
    <?php //echo $this->element('nav_reader_management'); ?>
    <?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <span class="umstyle1"><?php echo 'Danh mục bài viết'; ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="index">
                <table>
                    <thead>
                        <tr>
                            <th width="8%">Thứ tự</th>
                            <th>Tên danh mục</th>
                            <th>Người tạo</th>
                            <th>Ngày tạo</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $options = array(
                            'Columns'=>array(
                                'Category.name'=>'Tên Danh mục',
                                'Category.user_created' => 'Người tạo',
                                'Category.created' => 'Ngày tạo',
                                'Category.actived' => 'Trạng thái',
                                ),
                        );
                        echo $this->Table->render($categories, $options);
                        
                       /* if (!empty($categories)) {
                            $stt = 1;
                            foreach ($categories as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $stt++ ?></td>
                                    <td><?php echo ($row['Category']['name']) ?></td>
                                    <td><?php echo $row['Category']['user_created'] ?></td>
                                    <td><?php echo date('d/M/Y', strtotime($row['Category']['created'])) ?></td>
                                    <?php if ($row['Category']['published'] == 1) { ?>
                                        <td><span class='icon'><a href="<?php echo $this->Html->url('/categories/published/' . $row['Category']['id'] . '/0') ?>">
                                                    <img src="<?php echo SITE_URL . 'usermgmt/img/approve.png' ?>">
                                                </a></span></td>
                                    <?php } else {
                                        ?>
                                        <td>
                                            <span class='icon'><a href="<?php echo $this->Html->url('/categories/published/' . $row['Category']['id'] . '/1') ?>">
                                                    <img src="<?php echo SITE_URL . 'usermgmt/img/dis-approve.png' ?>">
                                                </a></span></td>
                                    <?php }
                                    ?>
                                    <td>
                                        <span class="icon">
                                            <a href="<?php echo $this->Html->url('/categories/edit/'.$row['Category']['id']) ?>"><img src="<?php echo SITE_URL.'usermgmt/img/edit.png' ?>" border="0" alt="Chỉnh sửa danh mục" title="Chỉnh sửa danh mục"/></a>
                                        </span>
                                        
                                        <?php echo $this->Form->postLink($this->Html->image(SITE_URL . 'usermgmt/img/delete.png', array("alt" => __('Delete'), "title" => 'Xóa danh mục')), array('action' => 'delete', $row['Category']['id']), array('escape' => false, 'confirm' => __('Are you sure you want to delete this faculty?')));?>

                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            ?>
                            <tr><td colspan=6><br/><br/>Không có dữ liệu</td></tr>
                            <?php
                        }*/
                        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="um_box_down"></div>
</div>
