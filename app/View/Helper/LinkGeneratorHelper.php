<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//App::uses('Inflector', 'Utility');

class LinkGeneratorHelper extends AppHelper {

    var $helpers = array('Html', 'Common');

    /**
     * 
     * @param array $article an instance of Article model
     * @param string $name name for link, using article's tile if null
     * @param string $class (Option) class for link
     * @return string
     */
    public function link_for_article($article, $name = null, $class = null) {
        if ($name == null) {
            $name = $article['Article']['title'];
        }
        return $this->Html->link($name, array(
                    'controller' => 'articles',
                    'action' => 'userView',
                    'id' => $article['Article']['id'],
                    'slug' => $this->Common->vnit_change_string(Inflector::slug($article['Article']['title']))), array('class' => $class,'escape'=> false));
    }

}

?>
