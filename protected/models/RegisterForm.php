<?
class RegisterForm extends CActiveRecord
{
    public function tableName()
    {
        return 'user';
    }

    public function attributeLabels()
    {
        return array(
            'username'=>'Your username for the game',
            'password'=>'Your password for the game',
            'email'=>'Needed in the event of password resets',
        );
    }
}
?>