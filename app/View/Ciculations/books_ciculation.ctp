<table>
	<thead>
		<tr>
			<th>Mã sách</th>
			<th>Tên sách</th>
			<th>Nhà xuất bản</th>
			<th>Tác giả</th>
			<th>Ngày mượn</th>
			<th>Ngày hết hạn</th>
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
					<td><?php echo $book['Ciculation']['created'] ?></td>
					<td><?php echo $book['Ciculation']['date_return'] ?></td>
					<td><a href="#" onclick="renewBook(<?php echo $book['BookSerial']['id'] ?>)">Gia hạn</a></td>
				</tr>
				<?php
			}
		}
		else{
		}

		?>

	</tbody>
</table>