<?php
namespace Drupal\drupalup_controller\Controller;

class ArticleContoller {

    public function page() {
/**

*In this function we are listing the items in the article list that will populate from this module
**/

        $items = array (

            array('name' => 'Article one'),
            array('name' => 'Article Two'),
            array('name' => 'Article three'),
            array('name' => 'Article Four'),
        );




        return array(
            '#theme' => 'article_list',
            '#items' => $items,
            '#title' => 'our article list'
        );
    }
}