<?
class Tableoch extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function modelTitle()
	{
		return "Таблица очков";
	}
	
	public function tableName()
	{
		return 'tableoch';
	}
	
	public function getNiceDate() {
		return date( 'd.m.Y', $this->created_at );
	}

	public function rules()
	{
		return array(
            array('name_text, games_int, gols_int, ochkov_int, category_int', 'required'),
			array('created_at, gols_int, games_int, ochkov_int, category_int', 'numerical', 'integerOnly'=>true),
			array('name_text, kazname_text, engname_text', 'length', 'max'=>255),
			array('image', 'length', 'max'=>255),
			array('url_text', 'length', 'max'=>255),
			array('weight_text', 'length', 'max'=>255),
            array('status_int', 'length', 'max'=>255),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'created_at' => 'Дата создания',
			'name_text' => 'Название',
            'kazname_text' => 'Название (ҚАЗ)',
            'engname_text' => 'Название (ENG)',
			'image' => 'Иконка',
			'url_text' => 'Ссылка',
			'weight_text' => 'Порядковый номер',
            'status_int' => 'Видимость',
            'games_int' => 'Игр',
            'gols_int' => 'Голы',
            'ochkov_int' => 'Очки',
            'category_int' => 'Лига',
		);
	}

    public function search()
    {
        $criteria=new CDbCriteria;
        $criteria->compare('id',$this->id);
        $criteria->compare('name_text',$this->name_text,true);
        $pagination = array('pageSize'=> 30);
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

    public function defaultScope() {
        return array(
            'order' => 'ochkov_int + 0 DESC',
        );
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

    public function options()
	{
        return array(
            'images' => array(
                'icon' => array(
                    'width' => 25,
                    'height' => 36,
                    'type' => 'crop'
                ),
                'tm' => array(
                    'width' => 100,
                    'height' => 100,
                    'type' => 'crop'
                ),
            )
        );
	}
}
?>