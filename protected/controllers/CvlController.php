<?php
    class CvlController extends Controller {

        public function actionIndex() {
            $criteria = new CDbCriteria();
            $criteria->condition = "status_int = '1'";
            $criteria->order = "created_at DESC, id DESC";
            $pages = new CPagination(Cvlnews::model()->count($criteria));
            $pages->pageSize = 19;
            $pages->applyLimit($criteria);
            $model = Cvlnews::model()->findAll($criteria);

            $this->pageTitle = "Cvl";
            $this->render('index', array("model" => $model, "pages" => $pages));
        }

        public function actionCategory($url) {
            $category_id = Healthcategory::model()->find("url_text = '".$url."'");
            $criteria = new CDbCriteria();
            $criteria->condition = "status_int = '1' AND category_int = '".$category_id->id."'";
            $criteria->order = "created_at DESC, id DESC";
            $pages = new CPagination(Health::model()->count($criteria));
            $pages->pageSize = 7;
            $pages->applyLimit($criteria);
            $model = Health::model()->findAll($criteria);

            $this->pageTitle = "Диета ".$category_id->{Yii::app()->params['lan']."name_text"};
            $this->render('category', array("catid" => $category_id->id, "category_name" => $category_id->{Yii::app()->params['lan']."name_text"}, "model" => $model, "pages" => $pages));
        }

        public function actionShow($url) {
            $criteria = new CDbCriteria();
            $criteria->condition = "url_text = '".$url."'";
            $model = Health::model()->find($criteria);

            $criteria = new CDbCriteria();
            $criteria->condition = "id != '".$model->id."' AND status_int = '1'";
            $criteria->order = "rand()";
            $criteria->limit = 3;
            $poh = Health::model()->findAll($criteria);

            $this->pageTitle = $model->{Yii::app()->params['lan']."name_text"};
            $this->render('show', array("model" => $model, "poh" => $poh));
        }
    }
?>
