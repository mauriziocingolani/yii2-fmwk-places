<?php

namespace mauriziocingolani\yii2fmwkplaces;

use mauriziocingolani\yii2fmwkphp\ActiveRecord;

/**
 * @property integer $ComuneID
 * @property integer $ProvinciaID
 * @property string $Comune
 * 
 * Relazioni
 * @property Provincia $provincia
 */
class Comune extends ActiveRecord {

    public static function tableName(): string {
        return 'places_comuni';
    }

    /* Validators */
    /* Relazioni */

    public function getProvincia() {
        return $this->hasOne(Provincia::class, ['ProvinciaID' => 'ProvinciaID']);
    }

    /* Eventi */
    /* Metodi */
    /* Getters-Setters */
    /* Metodi statici */

    /**
     * @return Comune[]
     */
    public static function GetAll() {
        return self::find()->orderBy('Comune')->all();
    }

    public static function Search($search) {
        return self::find()
                        ->select([
                            'id' => 'ComuneID',
                            'text' => "CONCAT(Comune,' (',Sigla,')')",
                        ])
                        ->innerJoin('places_province', 'places_comuni.ProvinciaID=places_province.ProvinciaID')
                        ->where(['like', "CONCAT(Comune,' (',Sigla,')')", "%$search%", false])
                        ->orderBy('Comune')
                        ->asArray()
                        ->all();
    }

}
