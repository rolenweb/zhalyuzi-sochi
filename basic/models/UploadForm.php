<?php
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }
    
    public function upload($id)
    {
        
        if ($this->validate()) {
            $this->imageFile->saveAs('images/material/' . $id . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}
?>