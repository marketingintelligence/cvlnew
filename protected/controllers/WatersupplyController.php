<?php
    class WatersupplyController extends Controller {

        public function actionIndex() {
            $criteria = new CDbCriteria();
            $criteria->condition = "status_int = '1'";
            $criteria->order = "created_at DESC, id DESC";
			
			$cr = new CDbCriteria();
            $cr->condition = "status_int = '1'";
            $cr->order = "serial_landingnumber";
			
            $pages = new CPagination(Certificateportret::model()->count($criteria));
            $pages->pageSize = 19;
            $pages->applyLimit($criteria);
            $CertP = Certificateportret::model()->findAll($criteria); // render model Certificate Portet - Сертификаты портретный вид

            $modelPort = Portfolioimages::model()->findAll($cr); // render model Portfolio - Портфолио
            $page = Pages::model()->findAll(" status_int = '1' ");

            $this->pageTitle = "Водоснабжение";
            $this->render('index', array("CertP" => $CertP, "pages" => $pages, "modelPort" => $modelPort,"page"=>$page));
        }
    }
?>
