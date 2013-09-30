<div class="fancybox-data">
    <div class="fancybox-header">
        <span><?php echo 'Nhập link'; ?></span>
    </div>

    <table cellspacing="0" cellpadding="0" width="100%" border="0" class="admindata" >
        <thead>
            <tr>
                <th>Thứ thự</th>
                <th>Tên danh mục</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($categories)) {
                $stt = 1;
                foreach ($categories as $row) {
                    ?>
                    <tr class="fancybox-row-<?php echo ($stt % 2) ?>" onclick="return_category('<?php echo $row['Category']['id'] ?>', '<?php echo $row['Category']['name'] ?>')">
                        <td><?php echo $stt; ?></td>
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
<script type="text/javascript">
    
        function return_link(){
            
                parent.document.getElementById('MenuLink').value = $('#Link').val();
                parent.document.getElementById('MenuController').value = '';
                parent.document.getElementById('MenuAction').value = '';
                parent.document.getElementById('MenuExt').value = 0;
                parent.document.getElementById('MenuView').value = $('#Link').val();
                parent.$.fancybox.close();
            
        }
           
    function close_box(){
        parent.$.fancybox.close();
    }
</script>