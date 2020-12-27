<?php

namespace mauriziocingolani\yii2fmwkplaces\migrations;

class Provincia extends \mauriziocingolani\yii2fmwkphp\Migration {

    public function create() {
        $this->createTable('places_province', [
            'ProvinciaID' => self::Pk(),
            'RegioneID' => self::typeUnsignedInteger(true),
            'Provincia' => self::typeVarchar(100, true),
            'Sigla' => self::typeChar(2),
            self::Pk('ProvinciaID'),
                ], self::TableOptionsLatin());
        $this->createIndex('unique_placesprovince_provincia', 'places_province', 'Provincia', true);
        $this->createIndex('unique_placesprovince_sigla', 'places_province', 'Sigla', true);
        $this->addForeignKey('fk_placesprovince_regione', 'places_province', 'RegioneID', 'places_regioni');
    }

    public function data() {
        $this->batchInsert('places_province', ['ProvinciaID', 'RegioneID', 'Provincia', 'Sigla'], [
            [1, 1, 'Genova', 'GE'], [2, 1, 'Imperia', 'IM'], [3, 1, 'La Spezia', 'SP'], [4, 1, 'Savona', 'SV'],
            [5, 2, 'Bergamo', 'BG'], [6, 2, 'Brescia', 'BS'], [7, 2, 'Como', 'CO'], [8, 2, 'Cremona', 'CR'], [9, 2, 'Lecco', 'LC'], [10, 2, 'Lodi', 'LO'], [11, 2, 'Mantova', 'MN'], [12, 2, 'Milano', 'MI'], [13, 2, 'Monza e della Brianza', 'MB'], [14, 2, 'Pavia', 'PV'], [15, 2, 'Sondrio', 'SO'], [16, 2, 'Varese', 'VA'],
            [17, 3, 'Alessandria', 'AL'], [18, 3, 'Asti', 'AT'], [19, 3, 'Biella', 'BI'], [20, 3, 'Cuneo', 'CN'], [21, 3, 'Novara', 'NO'], [22, 3, 'Torino', 'TO'], [23, 3, 'Verbano-Cusio-Ossola', 'VB'], [24, 3, 'Vercelli', 'VC'],
            [25, 4, 'Aosta', 'AO'],
            [26, 5, 'Bologna', 'BO'], [27, 5, 'Ferrara', 'FE'], [28, 5, 'Forlì-Cesena', 'FC'], [29, 5, 'Modena', 'MO'], [30, 5, 'Parma', 'PR'], [31, 5, 'Piacenza', 'PC'], [32, 5, 'Ravenna', 'RA'], [33, 5, 'Reggio Emilia', 'RE'], [34, 5, 'Rimini', 'RN'],
            [35, 6, 'Gorizia', 'GO'], [36, 6, 'Pordenone', 'PN'], [37, 6, 'Trieste', 'TS'], [38, 6, 'Udine', 'UD'],
            [39, 7, 'Bolzano', 'BZ'], [40, 7, 'Trento', 'TN'],
            [41, 8, 'Belluno', 'BL'], [42, 8, 'Padova', 'PD'], [43, 8, 'Rovigo', 'RO'], [44, 8, 'Treviso', 'TV'], [45, 8, 'Venezia', 'VE'], [46, 8, 'Verona', 'VR'], [47, 8, 'Vicenza', 'VI'],
            [48, 9, 'Frosinone', 'FR'], [49, 9, 'Latina', 'LT'], [50, 9, 'Rieti', 'RI'], [51, 9, 'Roma', 'RM'], [52, 9, 'Viterbo', 'VT'],
            [53, 10, 'Ancona', 'AN'], [54, 10, 'Ascoli Piceno', 'AP'], [55, 10, 'Fermo', 'FM'], [56, 10, 'Macerata', 'MC'], [57, 10, 'Pesaro e Urbino', 'PU'],
            [58, 11, 'Arezzo', 'AR'], [59, 11, 'Firenze', 'FI'], [60, 11, 'Grosseto', 'GR'], [61, 11, 'Livorno', 'LI'], [62, 11, 'Lucca', 'LU'], [63, 11, 'Massa-Carrara', 'MS'], [64, 11, 'Pisa', 'PI'], [65, 11, 'Pistoia', 'PT'], [66, 11, 'Prato', 'PO'], [67, 11, 'Siena', 'SI'],
            [68, 12, 'Perugia', 'PG'], [69, 12, 'Terni', 'TR'],
            [70, 13, 'Chieti', 'CH'], [71, 13, 'L\'Aquila', 'AQ'], [72, 13, 'Pescara', 'PE'], [73, 13, 'Teramo', 'TE'],
            [74, 14, 'Matera', 'MT'], [75, 14, 'Potenza', 'PZ'],
            [76, 15, 'Catanzaro', 'CZ'], [77, 15, 'Cosenza', 'CS'], [78, 15, 'Crotone', 'KR'], [79, 15, 'Reggio Calabria', 'RC'], [80, 15, 'Vibo Valentia', 'VV'],
            [81, 16, 'Avellino', 'AV'], [82, 16, 'Benevento', 'BN'], [83, 16, 'Caserta', 'CE'], [84, 16, 'Napoli', 'NA'], [85, 16, 'Salerno', 'SA'],
            [86, 17, 'Campobasso', 'CB'], [87, 17, 'Isernia', 'IS'],
            [88, 18, 'Bari', 'BA'], [89, 18, 'Barletta-Andria-Trani', 'BT'], [90, 18, 'Brindisi', 'BR'], [91, 18, 'Foggia', 'FG'], [92, 18, 'Lecce', 'LE'], [93, 18, 'Taranto', 'TA'],
            [94, 19, 'Cagliari', 'CA'], [95, 19, 'Carbonia-Iglesias', 'CI'], [96, 19, 'Nuoro', 'NU'], [97, 19, 'Olbia-Tempio', 'OT'], [98, 19, 'Oristano', 'OR'], [99, 19, 'Medio Campidano', 'VS'], [100, 19, 'Sassari', 'SS'], [101, 19, 'Ogliastra', 'OG'],
            [102, 20, 'Agrigento', 'AG'], [103, 20, 'Caltanissetta', 'CL'], [104, 20, 'Catania', 'CT'], [105, 20, 'Enna', 'EN'], [106, 20, 'Messina', 'ME'], [107, 20, 'Palermo', 'PA'], [108, 20, 'Ragusa', 'RG'], [109, 20, 'Siracusa', 'SR'], [110, 20, 'Trapani', 'TP'],
        ]);
    }

    public function drop() {
        $this->dropTable('places_province');
    }

}
