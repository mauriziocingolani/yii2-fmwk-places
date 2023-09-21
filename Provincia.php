<?php

namespace mauriziocingolani\yii2fmwkplaces;

use mauriziocingolani\yii2fmwkphp\ActiveRecord;

/**
 * @property integer $ProvinciaID
 * @property integer $RegioneID
 * @property string $Provincia
 * @property string $Sigla
 * 
 * Relazioni
 * @property Regione $regione
 * @property Comune[] $comuni
 * 
 * Getters
 * @property string $descrizione 
 */
class Provincia extends ActiveRecord {

    public static function tableName(): string {
        return '{{%places_province}}';
    }

    /* Validators */
    /* Relazioni */

    public function getRegione() {
        return $this->hasOne(Regione::class, ['RegioneID' => 'RegioneID']);
    }

    public function getComuni() {
        return $this->hasMany(Comune::class, ['ProvinciaID' => 'ProvinciaID']);
    }

    /* Eventi */
    /* Metodi */
    /* Getters-Setters */

    public function getDescrizione() {
        return "$this->Provincia ($this->Sigla)";
    }

    /* Metodi statici */

    public static function GetAll() {
        return self::find()->orderBy('Provincia')->all();
    }

}
