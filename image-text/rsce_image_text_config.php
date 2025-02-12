<?php
return array(
    'label' => array('Bild-Text Element', 'Ein flexibles Bild-Text Element mit optionalem Button.'),
    'types' => array('content', 'module'),
    'contentCategory' => 'tobiasler/elements',
    'moduleCategory' => 'tobiasler/elements',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('headline','cssID'),
    'fields' => array(
        'layout' => array(
            'label' => array('Reihenfolge', 'Soll das Bild oder der Text zuerst erscheinen?'),
            'inputType' => 'select',
            'options' => array(
                'image_first' => 'Bild zuerst',
                'text_first' => 'Text zuerst',
            ),
            'eval' => array('tl_class' => 'w25 clr'),
        ),
        'image' => array(
            'label' => array('Bild', 'Wählen Sie ein Bild aus.'),
            'inputType' => 'fileTree',
            'eval' => array(
                'filesOnly' => true,
                'fieldType' => 'radio',
                'extensions' => 'jpg,jpeg,png,gif,svg',
                'tl_class' => 'clr',
            ),
        ),
        'text' => array(
            'label' => array('Text', 'Geben Sie den Inhalt ein.'),
            'inputType' => 'textarea',
            'eval' => array(
                'rte' => 'tinyMCE',
                'tl_class' => 'clr',
            ),
        ),
        'addButton' => array(
            'label' => array('Button hinzufügen', 'Soll ein Button angezeigt werden?'),
            'inputType' => 'checkbox',
            'eval' => array('tl_class' => 'clr'),
        ),
        'buttonText' => array(
            'label' => array('Button-Text', 'Text für den Button eingeben.'),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w25'),
            'dependsOn' => array('field' => 'addButton'),
        ),
        'buttonLink' => array(
            'label' => array('Button-Link', 'Ziel-URL des Buttons.'),
            'inputType' => 'url',
            'eval' => array('tl_class' => 'w25'),
            'dependsOn' => array('field' => 'addButton'),
        ),
    ),
);