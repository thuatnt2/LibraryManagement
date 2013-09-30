<div class="onecolumn">
    <div class="header">
        <span><?php echo __('List readers') ?></span>
    </div>
    <br class="clear">
    <div class="content">
        <form method="post" action="" name="form_data" id="form_data">
            <table width="100%" cellspacing="0" cellpadding="0" class="data">
                <thead>
                    <tr>
                        <th style="width:10px">
                            <input type="checkbox" name="check_all" id="check_all">
                        </th>
                        <th>Mã thẻ</th>
                        <th>Họ tên</th>
                        <th>Đơn vị</th>
                        <th>Ngày cấp</th>
                        <th>Ngày hết hạn</th>
                        <th>Tình trạng lưu thông</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($readers as $reader) {
                        ?>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td><?php echo $reader['User']['username']?></td>
                            <td><a href=""><?php echo $this->Html->link($reader['User']['fullname'], array('controllre'=>'users','action'=>'edit',$reader['User']['id'])) ?></a></td>
                            <td><?php echo $reader['User'][''] ?></td>
                            <td>
                                <a href=""><img title="Edit" class="help" alt="edit" src="images/icon_edit.png"></a>
                                <a href=""><img title="Delete" class="help" alt="delete" src="images/icon_delete.png"></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>


                </tbody>
            </table>
            <div class="chart_wrapper" id="chart_wrapper"></div>
            <!-- End bar chart table-->
        </form>

        <!-- Begin pagination -->
        <div class="pagination">
            <a href="#">«</a>
            <a class="active" href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">»</a>
        </div>
        <!-- End pagination -->

    </div>
</div>