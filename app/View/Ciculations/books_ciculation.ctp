<table>
	<thead>
		<tr>
			<th>Mã sách</th>
			<th>Tên sách</th>
			<th>Nhà xuất bản</th>
			<th>Tác giả</th>
			<th>Ngày mượn</th>
			<th>Ngày hết hạn</th>
			<th>Gia hạn sách</th>
		</tr>
	</thead>
	<tbody>
		<?php
		if (!empty($books)) {
			foreach ($books as $book) {

				?>
				<tr>
					<td><?php echo $book['BookSerial']['barcode'] ?></td>
					<td><?php echo $book['BookSerial']['Book']['title'] ?></td>
					<td><?php echo $book['BookSerial']['Book']['publisher'] ?></td>
					<td><?php echo $book['BookSerial']['Book']['authors'] ?></td>
					<td><?php echo date('d/m/Y', strtotime($book['Ciculation']['created'])) ?></td>
					<td>
						<?php
						if (!empty($book['is_late'])) {

							?>
						<p style="color: red"><?php echo date('d/m/Y',  strtotime($book['Ciculation']['date_return'])) . ' (Trễ ' . $book['is_late'] . ' ngày)' ?><p>
								<?php
							} else {
								echo $book['Ciculation']['date_return'];
							}

							?>
					</td>
					<td>
						<?php if ($book['extension_allow'] == true) {

							?>
							<a href="#" onclick="renewBook(<?php echo $book['BookSerial']['id'] ?>)">Gia hạn</a>
							<?php
						} else {

							?>
							<p style="color: red">Hết quyền gia hạn</p>
							<?php
						}

						?>

					</td>
				</tr>
				<?php
			}
		}

		?>

	</tbody>
</table>