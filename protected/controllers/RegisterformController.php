<?php

class RegisterformController extends Controller
{
    public function actionRegister2()
    {
        $model=new RegisterForm;
        if(isset($_POST['RegisterForm']))
        {
            $model->attributes = $_POST['RegisterForm'];
            if ($model->save()) {
                Yii::app()->user->setFlash('success', 'You have successfully added.');
                $this->redirect(array('index'));
            }
            // or if(!$model->save()){ print_r($model->getErrors())}
        }
        $this->render('register2',array(
            'model'=>$model,
        ));
    }
}

?>