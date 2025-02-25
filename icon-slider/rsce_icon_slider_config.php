<?php
return array(
    'label' => array('Icon Slider', ''),
    'types' => array('content', 'module'),
    'contentCategory' => 'tobiasler/elements',
    'moduleCategory' => 'tobiasler/elements',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('headline', 'cssID'),
    'fields' => array(
        'slides' => array(
            'label' => array('Slide', ''),
            'inputType' => 'list',
            'elementLabel' => '%s. Slide',
            'minItems' => 1,
            'maxItems' => 4,
            'fields' => array(
                'icon' => array(
                    'label' => array('Icon', 'Wählen Sie ein Icon für die Kachel.'),
                    'inputType' => 'fileTree',
                    'eval' => array(
                        'filesOnly' => true,
                        'fieldType' => 'radio',
                        'extensions' => 'jpg,jpeg,png,gif,svg',
                    ),
                ),
                'benefit' => array(
                    'label' => array('Vorteil', 'Geben Sie einen Vorteil für die Kachel ein.'),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50'),
                ),
            ),
        ),
    ),
);
