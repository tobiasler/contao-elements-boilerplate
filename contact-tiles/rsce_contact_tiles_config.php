<?php
return array(
    'label' => array('Kontakt Kacheln Element', ''),
    'types' => array('content', 'module'),
    'contentCategory' => 'tobiasler/elements',
    'moduleCategory' => 'tobiasler/elements',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('headline', 'cssID'),
    'fields' => array(
        'items' => array(
            'label' => array('Kontakt Kacheln', ''),
            'inputType' => 'list',
            'elementLabel' => '%s. Kontakt Kachel',
            'fields' => array(
                'location' => array(
                    'label' => array('Standort-Name', ''),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50'),
                ),
                'contact_person' => array(
                    'label' => array('Ansprechpartner', ''),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50'),
                ),
                'email' => array(
                    'label' => array('E-Mail', ''),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50'),
                ),
                'phone' => array(
                    'label' => array('Telefonnummer', ''),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50'),
                ),
            ),
        ),
    ),
);