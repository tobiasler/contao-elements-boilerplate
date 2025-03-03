<?php
return array(
    'label' => array('Zitat Element', ''),
    'types' => array('content', 'module'),
    'contentCategory' => 'tobiasler/elements',
    'moduleCategory' => 'tobiasler/elements',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('headline', 'cssID'),
    'fields' => array(
        'image' => array(
            'label' => array('Bild', ''),
            'inputType' => 'fileTree',
            'eval' => array('filesOnly' => true, 'fieldType' => 'radio', 'tl_class' => 'clr'),
        ),
        'text' => array(
            'label' => array('Text', ''),
            'inputType' => 'textarea',
            'eval' => array('tl_class' => 'clr', 'rte' => 'tinyMCE'),
        ),
        'subline' => array(
            'label' => array('Subline/Bildunterschrift', ''),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),
        'background_color' => array(
            'label' => array('Hintergrundfarbe', ''),
            'inputType' => 'select',
            'options' => array('red' => 'Rot', 'green' => 'Grün'),
            'eval' => array('tl_class' => 'w50 clr'),
        ),
    ),
);