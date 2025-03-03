<?php
return array(
    'label' => array('Tabelle Element', ''),
    'types' => array('content', 'module'),
    'contentCategory' => 'tobiasler/elements',
    'moduleCategory' => 'tobiasler/elements',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('headline', 'cssID'),
    'fields' => array(
        'table_head_1' => array(
            'label' => array('Tabellenkopf Spalte 1', ''),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50'),
        ),
        'table_head_2' => array(
            'label' => array('Tabellenkopf Spalte 2', ''),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50'),
        ),
        'items' => array(
            'label' => array('Tabellenreihen', ''),
            'inputType' => 'list',
            'elementLabel' => '%s. Tabellenreihe',
            'fields' => array(
                'column_1' => array(
                    'label' => array('Spalte 1', ''),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50'),
                ),
                'column_2' => array(
                    'label' => array('Spalte 2', ''),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50'),
                ),
            ),
        ),
    ),
);