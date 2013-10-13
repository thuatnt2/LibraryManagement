<table>
	<thead>
		<tr>
			<th>Mã sách</th>
			<th>Tên sách</th>
			<th>Nhà xuất bản</th>
			<th>Tác giả</th>
			<th>Ngôn ngữ</th>
			<th>Ngày tạo</th>
			<th>Hành động</th>
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
					<td><?php echo $book['BookSerial']['Book']['language'] ?></td>
					<td><?php echo $book['Ciculation']['created'] ?></td>
					<td>hanh dong</td>
				</tr>
				<?php
			}
		}
		else{
			echo 'Bạn đọc chưa mượn sách';
		}

		?>

	</tbody>
</table>