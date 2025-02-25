<?php
return array(
    'label' => array('Standorte-Kachel Element', ''),
    'types' => array('content', 'module'),
    'contentCategory' => 'tobiasler/elements',
    'moduleCategory' => 'tobiasler/elements',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('headline', 'cssID'),
    'fields' => array(
        'tiles' => array(
            'label' => array('Kacheln', ''),
            'inputType' => 'list',
            'elementLabel' => '%s. Kachel',
            'minItems' => 2,
            'fields' => array(
                'flag' => array(
                    'label' => array('mit Banner', ''),
                    'inputType' => 'checkbox',
                    'eval' => array('tl_class' => 'clr'),
                ),
                'image' => array(
                    'label' => array('Bild', 'Wählen Sie ein Bild für die Kachel.'),
                    'inputType' => 'fileTree',
                    'eval' => array(
                        'filesOnly' => true,
                        'fieldType' => 'radio',
                        'extensions' => 'jpg,jpeg,png,gif,svg',
                    ),
                ),
                'location' => array(
                    'label' => array('Standort', 'Geben Sie den Standort für die Kachel ein.'),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50'),
                ),
                'address' => array(
                    'label' => array('Adresse', 'Geben Sie die Adresse für die Kachel ein.'),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50'),
                ),
                'link' => array(
                    'label' => array('Link', 'Geben Sie den Link für die Kachel ein.'),
                    'inputType' => 'url',
                    'eval' => array('tl_class' => 'w50 clr'),
                ),
            ),
        ),
    ),
);
