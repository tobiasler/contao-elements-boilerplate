<?php
return array(
    'label' => array('Text-Bild Liste Element', ''),
    'types' => array('content', 'module'),
    'contentCategory' => 'tobiasler/elements',
    'moduleCategory' => 'tobiasler/elements',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('headline', 'cssID'),
    'fields' => array(
        'items' => array(
            'label' => array('Text-Bild Felder', ''),
            'inputType' => 'list',
            'elementLabel' => '%s. Text-Bild Feld',
            'fields' => array(
                'alignment' => array(
                    'label' => array('Ausrichtung', ''),
                    'inputType' => 'select',
                    'options' => array('text-image' => 'Text-Bild', 'image-text' => 'Bild-Text'),
                    'eval' => array('tl_class' => 'w50 clr'),
                ),
                'headline' => array(
                    'label' => array('Überschrift', ''),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50 clr'),
                ),
                'text' => array(
                    'label' => array('Text', ''),
                    'inputType' => 'textarea',
                    'eval' => array('tl_class' => 'clr', 'rte' => 'tinyMCE'),
                ),
                'image' => array(
                    'label' => array('Bild', ''),
                    'inputType' => 'fileTree',
                    'eval' => array('filesOnly' => true, 'fieldType' => 'radio', 'tl_class' => 'clr'),
                ),
                'show_button' => array(
                    'label' => array('Button anzeigen', ''),
                    'inputType' => 'checkbox',
                    'eval' => array('tl_class' => 'w50 clr'),
                ),
                'button_text' => array(
                    'label' => array('Button Text', ''),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50 clr'),
                    'dependsOn' => 'show_button',
                ),
                'button_link' => array(
                    'label' => array('Button Link', ''),
                    'inputType' => 'url',
                    'eval' => array('tl_class' => 'w50'),
                    'dependsOn' => 'show_button',
                ),
                'button_type' => array(
                    'label' => array('Button Typ', ''),
                    'inputType' => 'select',
                    'options' => array('primary' => 'Primary', 'secondary' => 'Secondary'),
                    'eval' => array('tl_class' => 'w50'),
                    'dependsOn' => 'show_button',
                ),
            ),
        ),
    ),
);