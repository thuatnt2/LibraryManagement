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
                <li><a href="#">Tổng số: 12720</a></li>
                <li><a href="#">Truy cập: 1234</a></li>
                <li><a href="#">Online: 2</a></li>
            </ul>
        </li>
        <li>
            <h4>Liên kết</h4>
            <ul>
                <li><a href="#">Thư viện 1</a></li>
                <li><a href="#">Trường TTCS</a></li>
            </ul>
        </li>
    </ul>

</div>