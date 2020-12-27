<?php

namespace mauriziocingolani\yii2fmwkplaces;

use mauriziocingolani\yii2fmwkphp\ActiveRecord;

/**
 * @property integer $RegioneID
 * @property integer $AreaID
 * @property string $Regione
 * 
 * Relazioni
 * @property Area $area
 */
class Regione extends ActiveRecord {

    public static function tableName(): string {
        return 'places_regioni';
    }

    /* Validators */
    /* Relazioni */

    public function getArea() {
        return $this->hasOne(Area::class, ['AreaID' => 'AreaID']);
    }

    /* Eventi */
    /* Metodi */
    /* Getters-Setters */
    /* Metodi statici */

    /**
     * @return Regione[]
     */
    public static function GetAll() {
        return self::find()->orderBy('Regione')->all();
    }

}
