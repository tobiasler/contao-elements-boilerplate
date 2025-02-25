<?php
return array(
    'label' => array('Team-Sammlung Element', ''),
    'types' => array('content', 'module'),
    'contentCategory' => 'tobiasler/elements',
    'moduleCategory' => 'tobiasler/elements',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('headline', 'cssID'),
    'fields' => array(
        'advisers' => array(
            'label' => array('Beiratsmitglieder', ''),
            'inputType' => 'list',
            'elementLabel' => '%s. Beiratsmitglied',
            'fields' => array(
                'image' => array(
                    'label' => array('Bild', 'Wählen Sie ein Bild für das Beiratsmitglied.'),
                    'inputType' => 'fileTree',
                    'eval' => array(
                        'filesOnly' => true,
                        'fieldType' => 'radio',
                        'extensions' => 'jpg,jpeg,png,gif,svg',
                    ),
                ),
                'name' => array(
                    'label' => array('Name', 'Geben Sie den Namen des Beiratsmitglieds ein.'),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50'),
                ),
                'position' => array(
                    'label' => array('Position', 'Geben Sie die Position des Beiratsmitglieds ein.'),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50'),
                ),
            ),
        ),
        'managers' => array(
            'label' => array('Geschäftsführungsmitglieder', ''),
            'inputType' => 'list',
            'elementLabel' => '%s. Geschäftsführungsmitglied',
            'fields' => array(
                'image' => array(
                    'label' => array('Bild', 'Wählen Sie ein Bild für den Geschäftsführer.'),
                    'inputType' => 'fileTree',
                    'eval' => array(
                        'filesOnly' => true,
                        'fieldType' => 'radio',
                        'extensions' => 'jpg,jpeg,png,gif,svg',
                    ),
                ),
                'name' => array(
                    'label' => array('Name', 'Geben Sie den Namen des Geschäftsführers ein.'),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50'),
                ),
                'position' => array(
                    'label' => array('Position', 'Geben Sie die Position des Geschäftsführers ein.'),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50'),
                ),
            ),
        ),
        'extended_managers' => array(
            'label' => array('Erweiterte Geschäftsführungsmitglieder', ''),
            'inputType' => 'list',
            'elementLabel' => '%s. Erweitertes Geschäftsführungsmitglied',
            'fields' => array(
                'image' => array(
                    'label' => array('Bild', 'Wählen Sie ein Bild für das erweiterte Geschäftsführungsmitglied.'),
                    'inputType' => 'fileTree',
                    'eval' => array(
                        'filesOnly' => true,
                        'fieldType' => 'radio',
                        'extensions' => 'jpg,jpeg,png,gif,svg',
                    ),
                ),
                'name' => array(
                    'label' => array('Name', 'Geben Sie den Namen des erweiterten Geschäftsführers ein.'),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50'),
                ),
                'position' => array(
                    'label' => array('Position', 'Geben Sie die Position des erweiterten Geschäftsführers ein.'),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50'),
                ),
            ),
        ),
        'operational_managers' => array(
            'label' => array('Operative Geschäftsführungsmitglieder', ''),
            'inputType' => 'list',
            'elementLabel' => '%s. Operatives Geschäftsführungsmitglied',
            'fields' => array(
                'image' => array(
                    'label' => array('Bild', 'Wählen Sie ein Bild für das operative Geschäftsführungsmitglied.'),
                    'inputType' => 'fileTree',
                    'eval' => array(
                        'filesOnly' => true,
                        'fieldType' => 'radio',
                        'extensions' => 'jpg,jpeg,png,gif,svg',
                    ),
                ),
                'name' => array(
                    'label' => array('Name', 'Geben Sie den Namen des operativen Geschäftsführers ein.'),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50'),
                ),
                'position' => array(
                    'label' => array('Position', 'Geben Sie die Position des operativen Geschäftsführers ein.'),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50'),
                ),
            ),
        ),
    ),
);