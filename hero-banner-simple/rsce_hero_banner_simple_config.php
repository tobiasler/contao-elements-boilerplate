<?php
return array(
    'label' => array('Hero-Banner ', 'Ein Hero-Banner Element mit Headline, RTE-Textarea und optionalem Hintergrundbild.'),
    'types' => array('content', 'module'),
    'contentCategory' => 'tobiasler/elements',
    'moduleCategory' => 'tobiasler/elements',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('headline', 'cssID'),
    'fields' => array(
        'backgroundImage' => array(
            'label' => array('Hintergrundbild', 'Wählen Sie ein optionales Hintergrundbild aus.'),
            'inputType' => 'fileTree',
            'eval' => array(
                'filesOnly' => true,
                'fieldType' => 'radio',
                'extensions' => 'jpg,jpeg,png,gif,svg',
                'tl_class' => 'clr',
            ),
        ),
        'description' => array(
            'label' => array('Beschreibung', 'Geben Sie hier den Text für das Element ein.'),
            'inputType' => 'textarea',
            'eval' => array(
                'rte' => 'tinyMCE',
                'tl_class' => 'clr',
            ),
        ),
    ),
    'generate' => function(array $attributes) {
        // UUID zu Pfad und Alt-Text auflösen
        $backgroundImagePath = '';
        $backgroundImageAlt = '';
        
        if (!empty($attributes['backgroundImage'])) {
            $fileModel = \Contao\FilesModel::findByUuid($attributes['backgroundImage']);
            if ($fileModel !== null) {
                $backgroundImagePath = $fileModel->path;

                // Alt-Text aus den Metadaten des Bildes abrufen
                $meta = $fileModel->getMeta();
                if (!empty($meta['alt'])) {
                    $backgroundImageAlt = $meta['alt'];
                }
            }
        }

        // Rückgabe der erweiterten Daten an das Template
        return array_merge($attributes, array(
            'backgroundImagePath' => $backgroundImagePath,
            'backgroundImageAlt'  => $backgroundImageAlt,
        ));
    },
);