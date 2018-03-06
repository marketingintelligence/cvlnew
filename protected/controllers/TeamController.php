<?php
    class TeamController extends Controller {

        public function actionIndex() {
            $criteria = new CDbCriteria();
            $criteria->condition = "status_int = '1'";
            $criteria->order = "top_int DESC, created_at DESC, id DESC";
            $pages = new CPagination(News::model()->count($criteria));
            $pages->pageSize = 6;
            $pages->applyLimit($criteria);
            $model = News::model()->findAll($criteria);

            $this->pageTitle = "Все новости";
            $this->render('index', array("model" => $model, "pages" => $pages));
        }

        public function actionCategory($url) {
            $category_id = Newscategory::model()->find("url_text = '".$url."'");
            $criteria = new CDbCriteria();
            $criteria->condition = "status_int = '1' AND category_int = '".$category_id->id."'";
            $criteria->order = "top_int DESC, created_at DESC, id DESC";
            $pages = new CPagination(News::model()->count($criteria));
            $pages->pageSize = 6;
            $pages->applyLimit($criteria);
            $model = News::model()->findAll($criteria);

            $this->pageTitle = "Новости ".$category_id->{Yii::app()->params['lan']."name_text"};
            $this->render('category', array("category_name" => $category_id->{Yii::app()->params['lan']."name_text"}, "model" => $model, "pages" => $pages));
        }
    }
?>
