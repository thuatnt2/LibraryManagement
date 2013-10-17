
<div class="umtop">
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <span class="umstyle1">Danh sách người dùng trong hệ thống</span>
                <span class="umstyle2" style="float:right"><?php echo $this->Html->link('Trang chủ', "/dashboard") ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="logs-list">
				<?php foreach ($logs as $log): ?>
					<div>
						<?php echo $log['Log']['reader_name'] . ': ' . $log['Log']['content'] . '  ' . date('d/m/Y', strtotime($log['Log']['created'])); ?>
					</div>
				<?php endforeach; ?>
            </div>
			<div class="pagination">
				<?php
				echo $this->Paginator->numbers();

				?>

			</div>
        </div>
    </div>
    <div class="um_box_down"></div>
</div>