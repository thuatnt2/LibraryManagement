<div class="fancybox-data">
    <div class="fancybox-header">
        <span><?php echo 'Chọn bài viết'; ?></span>
    </div>

    <table cellspacing="0" cellpadding="0" width="100%" border="0" class="admindata" >
        <thead>
            <tr>
                <th>Thứ thự</th>
                <th>Tiêu đề bài viết</th>
                <th>Danh mục</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($articles)) {
                $stt = 1;
                foreach ($articles as $row) {
                    ?>
                    <tr class="fancybox-row-<?php echo ($stt % 2) ?>" onclick="return_article('<?php echo $row['Article']['id'] ?>', '<?php echo $row['Article']['title'] ?>')">
                        <td><?php echo $stt;?></td>
                        <td>
                            <?php echo $row['Article']['title'] ?>
                        </td>
                        <td><?php echo $row['Category']['name'] ?></td>
                    </tr> 
                    <?php
                    $stt++;
                }
            } else {
                ?>
                <tr><td colspan=6><br/><br/>Không có dữ liệu</td></tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
