<?php
return array(
    'label' => array('Drei Kacheln Header Element', 'Element mit drei Kacheln bestehend aus Bild, Headline, Sub Line, Link Text und Link Ziel.'),
    'types' => array('content', 'module'),
    'contentCategory' => 'tobiasler/elements',
    'moduleCategory' => 'tobiasler/elements',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('headline', 'cssID'),
    'fields' => array(
        'text_group' => array(
            'inputType' => 'group',
            'label' => array('Text Inhalt'),
        ),
        'text' => array(
            'label' => array('Beschreibung', 'Geben Sie eine Überschrift für die Kacheln ein.'),
            'inputType' => 'textarea',
            'eval' => array('tl_class' => 'w50','rte' => 'tinyMCE'),
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
        'tiles' => array(
            'label' => array('Kacheln'),
            'inputType' => 'list',
            'eval' => array(
                'minItems' => 3,
                'maxItems' => 3,
            ),
            'fields' => array(
                'image' => array(
                    'label' => array('Bild', 'Wählen Sie ein Bild für die Kachel.'),
                    'inputType' => 'fileTree',
                    'eval' => array(
                        'filesOnly' => true,
                        'fieldType' => 'radio',
                        'extensions' => 'jpg,jpeg,png,gif,svg',
                    ),
                ),
                'headline' => array(
                    'label' => array('Überschrift', 'Geben Sie eine Überschrift für die Kachel ein.'),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50'),
                ),
                'subline' => array(
                    'label' => array('Subline', 'Geben Sie eine zusätzliche Zeile für die Kachel ein.'),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50'),
                ),
                'linkText' => array(
                    'label' => array('Link Text', 'Geben Sie den Text für den Link ein.'),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50'),
                ),
                'linkTarget' => array(
                    'label' => array('Link Ziel', 'Geben Sie eine URL als Link Ziel ein.'),
                    'inputType' => 'url',
                    'eval' => array('tl_class' => 'w50'),
                ),
            ),
        ),
    ),
);
