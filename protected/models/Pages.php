<?
class Pages extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public static function modelTitle()
    {
        return 'Данные';
    }

    public function tableName()
    {
        return 'pages';
    }

    public function getNiceDate() {
        return date( 'd.m.Y', $this->created_at );
    }

    public function rules()
    {
        return array(
            array('created_at ', 'numerical', 'integerOnly'=>true),
            array('name_text, url_text, weight_text, short_texteditor', 'length', 'max'=>255),
            array('full_bigtexteditor', 'length', 'max'=>90000),
            array('status_int', 'numerical', 'integerOnly'=>true),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'created_at' => 'Дата создания',
            'url_text' => 'ЧПУ',
            'name_text' => 'Заголовок',
            'short_texteditor' => 'Короткое описание',
            'full_bigtexteditor' => 'Содержание',
            'status_int' => 'Видимость',
            'image' => 'Изображение',
            'weight_text' => 'Порядковый номер',
        );
    }


    public function search()
    {
        $criteria=new CDbCriteria;
        $criteria->compare('id',$this->id);
        $criteria->compare('name_text',$this->name_text,true);
        $pagination = array('pageSize'=> 10);
        return new CActiveDataProvider($this,array(
            'criteria'   => $criteria,
            'pagination' => $pagination
        ));
    }

    public function beforeValidate() {
        if ($this->created_at==0) {
            $this->created_at=time();
        }
        if (strstr($this->created_at,'-')) {
            $date=explode('-',$this->created_at);
            $minute = $hour = 0;
            if(isset($_POST['_time']['created_at'])){
                $time = explode(':',$_POST['_time']['created_at']);
                $hour = (int)$time[0];
                $minute = (int)$time[1];
            }
            $this->created_at=mktime( $hour, $minute, 0, $date[1], $date[0], $date[2] );
        }
        return true;
    }

    public function getPreview($field = 'image', $type = 'sm', $preview = false, $allowEmpty = false) {
        $filename = 'upload/' . __CLASS__ . '/' . $type . '/' . $this->$field;
        if (is_file($filename) || $allowEmpty) {
            $htmlSize = array('title' => CHtml::encode($this->title));
            if (!$allowEmpty) {
                $htmlSize['width']  = $size[0];
                $htmlSize['height'] = $size[1];
                $size = getimagesize($filename);
            }
            return CHtml::image('/' . $filename, CHtml::encode($this->title), $htmlSize);
        } elseif ($preview) {
            $filename = 'upload/' . __CLASS__ . '/preview.png';
            if(is_file($filename)){
                $size     = getimagesize($filename);
                return CHtml::image(
                    '/'.$filename, '', array(
                    'width'  => $size[0],
                    'height' => $size[1]));
            }
        }
        return null;
    }

    public function beforeDelete(){
        $option  = $this->options();
        foreach ($option['images'] as $type=>$size){

            if(is_file('upload/'.__CLASS__.'/'.$type.'/'.$this->image)){
                unlink('upload/'.__CLASS__.'/'.$type.'/'.$this->image);
            }
        }
        return true;
    }

    public function defaultScope() {
        return array(
            'order' => 'created_at DESC, id + 0 DESC',
        );
    }

    public function options()
    {
        return array(
            'images' => array(
                'full' => array(
                    'width' => 1000,
                    'height' => 1000,
                    'type' => 'resize'
                ),
                'sm' => array(
                    'width' => 251,
                    'height' => 154,
                    'type' => 'resize'
                ),
                'tm' => array(
                    'width' => 251,
                    'height' => 154,
                    'type' => 'crop'
                ),
            )
        );
    }
}
?>
