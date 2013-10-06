<div id="sidebar">
    <ul class="categories">
        <li>
            <h4>Danh mục</h4>
            <ul>
                <?php
                $book_types = $this->requestAction('bookTypes/getBookType');
                foreach ($book_types as $k => $v) {
                    ?>
                    <li><a href="<?php echo $k ?>"><?php echo $v ?></a></li>
                <?php } ?>
            </ul>
        </li>
        <li>
            <h4>Authors</h4>
            <ul>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Morbi eget</a></li>
                <li><a href="#">Nulla egestas</a></li>
                <li><a href="#">Curabitur venenatis</a></li>
                <li><a href="#">Ut dictum purus</a></li>
            </ul>
        </li>
    </ul>
    <ul class="categories">
        <li>
            <h4>Statistics</h4>
            <ul>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Morbi eget</a></li>
                <li><a href="#">Nulla egestas</a></li>
            </ul>
        </li>
        <li>
            <h4>Support</h4>
            <ul>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Morbi eget</a></li>
                <li><a href="#">Nulla egestas</a></li>
                <li><a href="#">Curabitur venenatis</a></li>
                <li><a href="#">Ut dictum purus</a></li>
            </ul>
        </li>
    </ul>

</div>