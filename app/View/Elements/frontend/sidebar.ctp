<div id="sidebar">
    <ul class="categories">
        <li>
            <h4>Danh mục</h4>
            <ul>
                <?php
                $book_categories = $this->requestAction('bookCategories/getBookCategories');
                foreach ($book_categories as $k => $v) {
                    ?>
                    <li>
                        <?php
                        echo $this->Html->link(
                                $v, array(
                            'plugin' => null,
                            'controller' => 'bookCategories',
                            'action' => 'userView',
                            'id' => $k,
                            'slug' => $this->Common->vnit_change_string(Inflector::slug($v))
                        ));
                        ?>
                    </li>
                <?php } ?>
            </ul>
        </li>
        <li>
            <h4>Thể loại</h4>
            <ul>
                <?php
                $book_types = $this->requestAction('bookTypes/getBookTypes');
                foreach ($book_types as $k => $v) {
                    ?>
                    <li>
                        <?php
                        echo $this->Html->link(
                                $v, array(
                            'plugin' => null,
                            'controller' => 'bookTypes',
                            'action' => 'userView',
                            'id' => $k,
                            'slug' => $this->Common->vnit_change_string(Inflector::slug($v))
                        ));
                        ?>
                    </li>
                <?php } ?>

            </ul>
        </li>
    </ul>
    <ul class="categories">
        <li>
            <h4>Thống kê</h4>
            <ul>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Morbi eget</a></li>
                <li><a href="#">Nulla egestas</a></li>
            </ul>
        </li>
        <li>
            <h4>Liên kết</h4>
            <ul>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Morbi eget</a></li>
            </ul>
        </li>
    </ul>

</div>