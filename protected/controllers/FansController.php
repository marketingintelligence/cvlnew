<?php
    class FansController extends Controller {

        public function actionIndex() {
            $criteria = new CDbCriteria();
            $criteria->condition = "status_int = '1'";
            $criteria->order = "top_int DESC, created_at DESC, id DESC";
            $pages = new CPagination(News::model()->count($criteria));
            $pages->pageSize = 6;
            $pages->applyLimit($criteria);
            $model = News::model()->findAll($criteria);

            $this->pageTitle = "Философия клуба";
            $this->render('index', array("model" => $model, "pages" => $pages));
        }

        public function actionPage($url) {
            $criteria = new CDbCriteria();
            $criteria->condition = "url_text = '".$url."'";
            $model = Fanspages::model()->find($criteria);

            $this->pageTitle = $model->{Yii::app()->params['lan']."name_text"};
            $this->render('page', array("model" => $model));
        }
    }
?>
