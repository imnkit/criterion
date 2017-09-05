<?php
return array(
    'components'=>array(
        //Database of Magento1
        'mage1' => array(
            'connectionString' => 'mysql:host=localhost;port=3306;dbname=criterion1',
            'emulatePrepare' => true,
            'username' => 'criterion1',
            'password' => 'Mnbqd4tvEnyGCtH5',
            'charset' => 'utf8',
            'tablePrefix' => '',
            'class' => 'CDbConnection'
        ),
        //Database of Magento2 beta
        'mage2' => array(
            'connectionString' => 'mysql:host=localhost;port=3306;dbname=criterion',
            'emulatePrepare' => true,
            'username' => 'criterion',
            'password' => 'DCxazrh0WUOmOp0Z',
            'charset' => 'utf8',
            'tablePrefix' => '',
            'class' => 'CDbConnection'
        )
    ),

    'import'=>array(
        //This can change for your magento1 version if needed
        //'application.models.db.mage17x.*',
        'application.models.db.mage19x.*',
    )
);
