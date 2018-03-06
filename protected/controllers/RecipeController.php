<?php
    class RecipeController extends Controller {

        public function actionIndex() {
            $criteria = new CDbCriteria();
            $criteria->condition = "status_int = '1'";
            $criteria->order = "created_at DESC, id DESC";
            $pages = new CPagination(Recipe::model()->count($criteria));
            $pages->pageSize = 19;
            $pages->applyLimit($criteria);
            $model = Recipe::model()->findAll($criteria);

            $this->pageTitle = "Все рецепты";
            $this->render('index', array("model" => $model, "pages" => $pages));
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

           $this->pageTitle = "Рецепты";
            $this->render('category', array("model" => $model));
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
