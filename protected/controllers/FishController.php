<?php
    class FishController extends Controller {

        public function actionIndex() {
            $criteria = new CDbCriteria();
            $criteria->condition = "status_int = '1' AND category_int = 8";
            $criteria->order = "created_at DESC, id DESC";
            $pages = new CPagination(Recipe::model()->count($criteria));
            $pages->pageSize = 19;
            $pages->applyLimit($criteria);
            $model = Recipe::model()->findAll($criteria);

            $criteriaRec = new CDbCriteria();
            $criteriaRec->condition = "status_int = '1' AND category_int = 11 AND subcategory_int = 26";
            $criteriaRec->order = "created_at DESC, id DESC";
            $pagesRec = new CPagination(Recipe::model()->count($criteriaRec));
            $pagesRec->pageSize = 19;
            $pagesRec->applyLimit($criteriaRec);
            $modelRec = Recipe::model()->findAll($criteriaRec);

            $this->pageTitle = "Рыба";
            $this->render('index', array("model" => $model, "pages" => $pages, "modelrec" => $modelRec));
        }

        public function actionCategory($url) {
            $category_id = Recipecategory::model()->find("url_text = '".$url."'");
            $criteria = new CDbCriteria();
            $criteria->condition = "status_int = '1' AND category_int = '".$category_id->id."'";
            $criteria->order = "created_at DESC, id DESC";
            $pages = new CPagination(Recipe::model()->count($criteria));
            $pages->pageSize = 7;
            $pages->applyLimit($criteria);
            $model = Recipe::model()->findAll($criteria);

            $this->pageTitle = "Диета ".$category_id->{Yii::app()->params['lan']."name_text"};
            $this->render('category', array("catid" => $category_id->id, "category_name" => $category_id->{Yii::app()->params['lan']."name_text"}, "model" => $model, "pages" => $pages));
        }

        public function actionShow($url) {
            $criteria = new CDbCriteria();
            $criteria->condition = "url_text = '".$url."'";
            $model = Recipe::model()->find($criteria);

            $criteria = new CDbCriteria();
            $criteria->condition = "id != '".$model->id."' AND status_int = '1'";
            $criteria->order = "rand()";
            $criteria->limit = 3;
            $poh = Recipe::model()->findAll($criteria);

            $this->pageTitle = $model->{Yii::app()->params['lan']."name_text"};
            $this->render('show', array("model" => $model, "poh" => $poh));
        }
    }
?>
