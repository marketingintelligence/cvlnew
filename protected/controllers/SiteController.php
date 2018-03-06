<?php

class SiteController extends Controller {

    public function actions() {
        return array(
            'captcha' => array(
                'class'     => 'TCaptchaAction',
                'backColor' => 0xFFFFFF,
                'minLength' => 4,
                'maxLength' => 4
            ),
        );
    }
    public function actionLogin() {
        $error = 0;
        Yii::app()->user->setState('loginError',0);
        Yii::app()->user->setState('loginFail',0);
        $this->pageTitle = 'Вход в Административную часть';
        if (Yii::app()->user->isGuest) {
            //$error = (int)Yii::app()->user->getState('loginError');
            //$fail = (int)Yii::app()->user->getState('loginFail');
            if ($error <= (time()-3600)) {
                $error = 0;
                Yii::app()->user->setState('loginError',0);
                Yii::app()->user->setState('loginFail',0);
            }
            if ($fail < 35) {
                $model = new LoginForm('login');
                if (isset($_POST['LoginForm'])) {
                    $model->attributes = $_POST['LoginForm'];
                    if ($model->validate()) {
                        if ($model->login()) {
                            $this->redirect('/timesafe/cvlnews/');
                        }
                    }
                    else {
                        $fail++;
                        if ($fail >= 35){
                            Yii::app()->user->setState('loginError',time());
                        }
                        Yii::app()->user->setState('loginFail',$fail);
                    }
                }
                if (Yii::app()->request->isAjaxRequest) {
                    $this->renderPartial('_login', array('model' => $model));
                }
                else {
                    $this->render('login', array('model' => $model));
                }
            }
            else {
                $this->render('login', array('error' => $error));
            }
        }
        else {
            $this->redirect('/timesafe/cvlnews');
        }
    }
    public function actionError() {
        $type  = (int)Yii::app()->request->getParam('type');
        if (!$type) {$type = 404;}
        if ($type == "403"){
            Yii::app()->user->logout();
            $this->redirect("/site/login");
        }
        $this->pageTitle = "Ошибка ".$type;
        $this->render('error', array('type'=>$type));
    }

    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

 public function actionIndex() {
            $criteria = new CDbCriteria();
            $criteria->condition = "status_int = '1'";
            $criteria->order = "created_at DESC, id DESC";
            $pages = new CPagination(Employee::model()->count($criteria));
            $pages->pageSize = 19;
            $pages->applyLimit($criteria);
            $cr = new CDbCriteria();
            $cr->condition = " status_int = '1'";
            $cr->order = " serial_number";

            $crPort = new CDbCriteria();
            $crPort->condition = " status_int = '1'";
            $crPort->order = "weight_text";

            $cr1 = new CDbCriteria();
            $cr1->condition = " status_int ='1' AND parent_id = '99'";
            $cr1->order = "serial_number";
            $images1 = Portfolioimages::model()->findAll($cr1);

            $cr2 = new CDbCriteria();
            $cr2->condition = " status_int ='1' AND parent_id = '100'";
            $cr2->order = "serial_number";
            $images2 = Portfolioimages::model()->findAll($cr2);

            $cr3 = new CDbCriteria();
            $cr3->condition = " status_int ='1' AND parent_id = '101'";
            $cr3->order = "serial_number";
            $images3 = Portfolioimages::model()->findAll($cr3);

            $cr4 = new CDbCriteria();
            $cr4->condition = " status_int ='1' AND parent_id = '103'";
            $cr4->order = "serial_number";
            $images4 = Portfolioimages::model()->findAll($cr4);

            $cr5 = new CDbCriteria();
            $cr5->condition = " status_int ='1' AND parent_id = '104'";
            $cr5->order = "serial_number";
            $images5 = Portfolioimages::model()->findAll($cr5);

            $modelEmp = Employee::model()->findAll($criteria); // render model Employee - Сотрудники
            $CertA = Certificatealbom::model()->findAll($criteria); // render model Certificate Albom - Сертификаты альбомный вид
            $CertP = Certificateportret::model()->findAll($criteria); // render model Certificate Portet - Сертификаты портретный вид
            $model = Cvlnews::model()->findAll($cr);  // render model Cvlnews - Жизнь нашей компании
            $modelRev = Reviews::model()->findAll($cr); // render model Reviews - Отзывы
            $modelPort = Portfolio::model()->findAll($crPort); // render model Portfolio - Категорий портфолио
            $modelAd = Advice::model()->findAll($cr); // render model Advice - Полезные советы
            $page = Pages::model()->findAll(" status_int = '1' ");
            $this->pageTitle = "CVL";
            $this->render('index', array("model" => $model, "pages" => $pages, "modelRev" => $modelRev, "modelPort" => $modelPort , "modelEmp" => $modelEmp , "CertA" => $CertA , "modelAd" => $modelAd , "CertP" => $CertP , "page" => $page, "images1"=>$images1,"images2"=>$images2 , "images3"=>$images3 , "images4"=>$images4,"images5"=>$images5 ));
    }

}
?>
