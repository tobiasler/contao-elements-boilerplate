<?php
return array(
    'label' => array('Akkordeon Element', ''),
    'types' => array('content', 'module'),
    'contentCategory' => 'tobiasler/elements',
    'moduleCategory' => 'tobiasler/elements',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('headline', 'cssID'),
    'fields' => array(
        'items' => array(
            'label' => array('Akkordeon Elemente', ''),
            'inputType' => 'list',
            'elementLabel' => '%s. Akkordeon Element',
            'fields' => array(
                'title' => array(
                    'label' => array('Titel', ''),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50'),
                ),
                'content' => array(
                    'label' => array('Inhalt', ''),
                    'inputType' => 'textarea',
                    'eval' => array('tl_class' => 'clr', 'rte' => 'tinyMCE'),
                ),
            ),
        ),
    ),
);