<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('TrainingResourceTableSeeder');
    }
}

class TrainingResourceTableSeeder extends Seeder
{
    // Comanda php artisan db:seed per a executar.
    public function run()
    {
        // Warning! La següent línia esborrarà completament les dades de la taula indicada.
        DB::table('training_resource')->delete();

        // Inserim les dades que ens interessa.
        DB::table('training_resource')->insert(array(
            array('training_resource_id' => '1', 'training_resource_name' => 'Formació Inicial', 'training_resource_short_name' => 'form_ini', 'training_resource_description' => 'L\'objectiu principal de la Formació Inicial és oferir una formació pedagògica bàsica, eminentment pràctica, coherent amb el model educatiu europeu i que permeti al professorat el desenvolupament, millora i/o innovació de la seva actuació docent.', 'training_resource_thumbnail' => 'img/thumbnail/logo_formacio_inicial.png', 'training_resource_external_url' => '', 'training_resource_parentResourceId' => '0', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '2', 'training_resource_name' => 'Formació Continua', 'training_resource_short_name' => 'form_cont', 'training_resource_description' => 'Cicles Formatius de Grau Superior disponibles a l\'Institut de l\'Ebre', 'training_resource_thumbnail' => 'img/thumbnail/logo_formacio_continua.png', 'training_resource_external_url' => '', 'training_resource_parentResourceId' => '0', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '3', 'training_resource_name' => 'Formació Ocupacional', 'training_resource_short_name' => 'admin_fin', 'training_resource_description' => 'Cicles Formatius de Grau Mitjà', 'training_resource_thumbnail' => 'img/thumbnail/logo_formacio_ocupacional.png', 'training_resource_external_url' => '', 'training_resource_parentResourceId' => '0', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '4', 'training_resource_name' => 'Altres Formacions', 'training_resource_short_name' => 'altres_formacions', 'training_resource_description' => 'Superque poterunt aliasque cognitum cum vel tractant importat. Sensibus ideamque tollatur fas quisquis sub non meo. Ne to habeat animam cuncta at figere ei animum. At ea ingens et plures vocant mandat optime carnem. Effectus formalem videntur est ostensum tur possumus. Meditatas hac hoc sua nitebatur existimem iis. Reliquiae sequentia duo perfectis nec eundemque contineat hac. ', 'training_resource_thumbnail' => 'img/thumbnail/logo_altres_formacions.png', 'training_resource_external_url' => '', 'training_resource_parentResourceId' => '0', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),


            array('training_resource_id' => '5', 'training_resource_name' => 'Administració i finances', 'training_resource_short_name' => 'admin_fin', 'training_resource_description' => 'Cicles Formatius de Grau Mitjà', 'training_resource_thumbnail' => 'img/thumbnail/Logo_03_admin_fin.png', 'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm', 'training_resource_parentResourceId' => '1', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '6', 'training_resource_name' => 'Gestió administrativa (LOE)', 'training_resource_short_name' => 'ges_admin', 'training_resource_description' => 'Cicle Formatiu de Grau Mitjà', 'training_resource_thumbnail' => 'img/thumbnail/Logo_03_admin_fin.png', 'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm', 'training_resource_parentResourceId' => '5', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),

            array('training_resource_id' => '7', 'training_resource_name' => 'Sanitat', 'training_resource_short_name' => 'sanitat', 'training_resource_description' => 'Cicles Formatius de Grau Mitjà', 'training_resource_thumbnail' => 'img/thumbnail/logo_09_sanitat.png', 'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm', 'training_resource_parentResourceId' => '1', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '8', 'training_resource_name' => 'Cures auxiliars d\'infermeria (LOGSE)', 'training_resource_short_name' => 'aux_infermeria', 'training_resource_description' => 'Cicle Formatiu de Grau Mitjà', 'training_resource_thumbnail' => 'img/thumbnail/logo_09_sanitat.png', 'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm', 'training_resource_parentResourceId' => '7', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '9', 'training_resource_name' => 'Emergències sanitàries (LOE)', 'training_resource_short_name' => 'emerg_sanitaries', 'training_resource_description' => 'Cicle Formatiu de Grau Mitjà', 'training_resource_thumbnail' => 'img/thumbnail/logo_09_sanitat.png', 'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm', 'training_resource_parentResourceId' => '7', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '10', 'training_resource_name' => 'Farmàcia i parafarmàcia (LOE)', 'training_resource_short_name' => 'farmacia_parafarmacia', 'training_resource_description' => 'Cicle Formatiu de Grau Mitjà', 'training_resource_thumbnail' => 'img/thumbnail/logo_09_sanitat.png', 'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm', 'training_resource_parentResourceId' => '7', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),

            array('training_resource_id' => '11', 'training_resource_name' => 'Fabricació mecànica', 'training_resource_short_name' => 'fabricacio_mecanica', 'training_resource_description' => 'Cicles Formatius de Grau Mitjà', 'training_resource_thumbnail' => 'img/thumbnail/logo_06 _mecanica.png', 'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm', 'training_resource_parentResourceId' => '1', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '12', 'training_resource_name' => 'Mecanització (LOE)', 'training_resource_short_name' => 'mecanitzacio', 'training_resource_description' => 'Cicle Formatiu de Grau Mitjà', 'training_resource_thumbnail' => 'img/thumbnail/logo_06 _mecanica.png', 'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm', 'training_resource_parentResourceId' => '11', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '13', 'training_resource_name' => 'Soldadura i caldereria (LOE)', 'training_resource_short_name' => 'soldadura_caldereria', 'training_resource_description' => 'Cicle Formatiu de Grau Mitjà', 'training_resource_thumbnail' => 'img/thumbnail/logo_06 _mecanica.png', 'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm', 'training_resource_parentResourceId' => '11', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),

            array('training_resource_id' => '14', 'training_resource_name' => 'Administració i gestió', 'training_resource_short_name' => 'admin_gestio', 'training_resource_description' => 'Cicles Formatius de Grau Superior', 'training_resource_thumbnail' => 'img/thumbnail/Logo_03_admin_fin.png', 'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs', 'training_resource_parentResourceId' => '1', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '15', 'training_resource_name' => 'Administració i finances (LOE)', 'training_resource_short_name' => 'admin_finances', 'training_resource_description' => 'Cicle Formatiu de Grau Superior', 'training_resource_thumbnail' => 'img/thumbnail/Logo_03_admin_fin.png', 'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs', 'training_resource_parentResourceId' => '14', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '16', 'training_resource_name' => 'Assistència a la direcció (LOE)', 'training_resource_short_name' => 'assistencia_direccio', 'training_resource_description' => 'Cicle Formatiu de Grau Superior', 'training_resource_thumbnail' => 'img/thumbnail/Logo_03_admin_fin.png', 'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs', 'training_resource_parentResourceId' => '14', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),


            array('training_resource_id' => '17', 'training_resource_name' => 'Informàtica', 'training_resource_short_name' => 'informatica', 'training_resource_description' => 'Cicles Formatius de Grau Superior', 'training_resource_thumbnail' => 'img/thumbnail/logo_07_informatica.png', 'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs', 'training_resource_parentResourceId' => '1', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '18', 'training_resource_name' => 'Administració de sistemes informàtics en la xarxa (LOE)', 'training_resource_short_name' => 'ASIX', 'training_resource_description' => 'Cicle Formatiu de Grau Superior', 'training_resource_thumbnail' => 'img/thumbnail/logo_07_informatica.png', 'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs', 'training_resource_parentResourceId' => '17', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '19', 'training_resource_name' => 'Desenvolupament d\'aplicacions multiplataforma (LOE)', 'training_resource_short_name' => 'DAM', 'training_resource_description' => 'Cicle Formatiu de Grau Superior', 'training_resource_thumbnail' => 'img/thumbnail/logo_07_informatica.png', 'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs', 'training_resource_parentResourceId' => '17', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),

            array('training_resource_id' => '20', 'training_resource_name' => 'INSTITUT DE L\'EBRE', 'training_resource_short_name' => 'ies_ebre', 'training_resource_description' => 'Fruebatur ha ut cupientem ingeniosi re inscitiae ac formantur. Ex re quomodo punctum ignotae quisnam de ii. Quem at quod du quam suam modo de solo. Societati at de ea persuasus dubitarem. Invenit majorem quiddam ad et at ac. Dissimilem ne ei ad utilitatis perfectius re durationis affirmabam. Assumere iii cap loquebar physicae. ', 'training_resource_thumbnail' => 'img/thumbnail/logo_insebre.png', 'training_resource_external_url' => 'http://www.iesebre.com/', 'training_resource_parentResourceId' => '2', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '21', 'training_resource_name' => 'USOC', 'training_resource_short_name' => 'usoc', 'training_resource_description' => 'Fruebatur ha ut cupientem ingeniosi re inscitiae ac formantur. Ex re quomodo punctum ignotae quisnam de ii. Quem at quod du quam suam modo de solo. Societati at de ea persuasus dubitarem. Invenit majorem quiddam ad et at ac. Dissimilem ne ei ad utilitatis perfectius re durationis affirmabam. Assumere iii cap loquebar physicae. ', 'training_resource_thumbnail' => 'img/thumbnail/logo_usoc.jpg', 'training_resource_external_url' => 'http://www.serveis.usoc.cat/', 'training_resource_parentResourceId' => '2', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '22', 'training_resource_name' => 'CAMBRA OFICIAL DE COMERÇ, INDÚSTRIA I NAVEGACIÓ DE TORTOSA', 'training_resource_short_name' => 'cambra_oficial', 'training_resource_description' => 'Formació contínua, formació ocupacional, formació subvencionada', 'training_resource_thumbnail' => 'img/thumbnail/logo_cambra_comerc_tortosa.jpg', 'training_resource_external_url' => 'http://www.cambratortosa.com/formacio/index.asp', 'training_resource_parentResourceId' => '2', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),

            array('training_resource_id' => '23', 'training_resource_name' => 'ESCOLA DE L\'ESPLAI DE TORTOSA', 'training_resource_short_name' => 'escola_espai', 'training_resource_description' => 'Fruebatur ha ut cupientem ingeniosi re inscitiae ac formantur. Ex re quomodo punctum ignotae quisnam de ii. Quem at quod du quam suam modo de solo. Societati at de ea persuasus dubitarem. Invenit majorem quiddam ad et at ac. Dissimilem ne ei ad utilitatis perfectius re durationis affirmabam. Assumere iii cap loquebar physicae. ', 'training_resource_thumbnail' => 'img/thumbnail/2_wkB9dV.png', 'training_resource_external_url' => 'http://www.escolaesplai.cat/', 'training_resource_parentResourceId' => '4', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '24', 'training_resource_name' => 'CFO Ajuntament de Tortosa', 'training_resource_short_name' => 'CFOAT', 'training_resource_description' => 'Superque poterunt aliasque cognitum cum vel tractant importat. Sensibus ideamque tollatur fas quisquis sub non meo. Ne to habeat animam cuncta at figere ei animum. At ea ingens et plures vocant mandat optime carnem. Effectus formalem videntur est ostensum tur possumus. Meditatas hac hoc sua nitebatur existimem iis. Reliquiae sequentia duo perfectis nec eundemque contineat hac. ', 'training_resource_thumbnail' => 'img/thumbnail/logo_tort.png', 'training_resource_external_url' => 'http://www.tortosa.cat/webajt/cfo/index.asp', 'training_resource_parentResourceId' => '4', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '25', 'training_resource_name' => 'AECE', 'training_resource_short_name' => 'aece', 'training_resource_description' => 'Superque poterunt aliasque cognitum cum vel tractant importat. Sensibus ideamque tollatur fas quisquis sub non meo. Ne to habeat animam cuncta at figere ei animum. At ea ingens et plures vocant mandat optime carnem. Effectus formalem videntur est ostensum tur possumus. Meditatas hac hoc sua nitebatur existimem iis. Reliquiae sequentia duo perfectis nec eundemque contineat hac. ', 'training_resource_thumbnail' => 'img/thumbnail/default_thumbnail.png', 'training_resource_external_url' => 'http://www.aecebre.org/', 'training_resource_parentResourceId' => '4', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '26', 'training_resource_name' => 'INSTITUT JOAQUIN BAU', 'training_resource_short_name' => 'bau', 'training_resource_description' => 'Superque poterunt aliasque cognitum cum vel tractant importat. Sensibus ideamque tollatur fas quisquis sub non meo. Ne to habeat animam cuncta at figere ei animum. At ea ingens et plures vocant mandat optime carnem. Effectus formalem videntur est ostensum tur possumus. Meditatas hac hoc sua nitebatur existimem iis. Reliquiae sequentia duo perfectis nec eundemque contineat hac. ', 'training_resource_thumbnail' => 'img/thumbnail/default_thumbnail.png', 'training_resource_external_url' => 'http://ensenyament.gencat.cat/web/.content/home/serveis_territorials/terres_de_l_ebre/formacio_professional/cicles_formatius.pdf', 'training_resource_parentResourceId' => '4', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),

            array('training_resource_id' => '27', 'training_resource_name' => 'UGT-IDFO', 'training_resource_short_name' => 'ugt', 'training_resource_description' => 'Superque poterunt aliasque cognitum cum vel tractant importat. Sensibus ideamque tollatur fas quisquis sub non meo. Ne to habeat animam cuncta at figere ei animum. At ea ingens et plures vocant mandat optime carnem. Effectus formalem videntur est ostensum tur possumus. Meditatas hac hoc sua nitebatur existimem iis. Reliquiae sequentia duo perfectis nec eundemque contineat hac. ', 'training_resource_thumbnail' => 'img/thumbnail/logo_idfo_ugt.png', 'training_resource_external_url' => 'http://www.idfo.com/', 'training_resource_parentResourceId' => '3', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),

            array('training_resource_id' => '28', 'training_resource_name' => 'Edificació i obra civil', 'training_resource_short_name' => 'edificacio', 'training_resource_description' => 'Cicles Formatius de Grau Superior', 'training_resource_thumbnail' => 'img/thumbnail/logo_04_edificacio.png', 'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs', 'training_resource_parentResourceId' => '1', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '29', 'training_resource_name' => 'Projectes d\'edificació (LOE)', 'training_resource_short_name' => 'ASIX', 'training_resource_description' => 'Cicle Formatiu de Grau Superior', 'training_resource_thumbnail' => 'img/thumbnail/logo_04_edificacio.png', 'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs', 'training_resource_parentResourceId' => '28', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),

            array('training_resource_id' => '30', 'training_resource_name' => 'Serveis socioculturals i a la comunitat', 'training_resource_short_name' => 'sociocultural', 'training_resource_description' => 'Cicles Formatius de Grau Superior', 'training_resource_thumbnail' => 'img/thumbnail/logo_10_sociocultural.png', 'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs', 'training_resource_parentResourceId' => '1', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '31', 'training_resource_name' => 'Integració social (LOGSE)', 'training_resource_short_name' => 'integracio_social', 'training_resource_description' => 'Cicle Formatiu de Grau Superior', 'training_resource_thumbnail' => 'img/thumbnail/logo_10_sociocultural.png', 'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs', 'training_resource_parentResourceId' => '30', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '32', 'training_resource_name' => 'Educació infantil (LOE)', 'training_resource_short_name' => 'integracio_infantil', 'training_resource_description' => 'Cicle Formatiu de Grau Superior', 'training_resource_thumbnail' => 'img/thumbnail/logo_10_sociocultural.png', 'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs', 'training_resource_parentResourceId' => '30', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),


        ));
    }
}