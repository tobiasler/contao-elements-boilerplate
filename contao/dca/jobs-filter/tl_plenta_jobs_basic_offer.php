<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;
use Contao\BackendUser;
use Contao\System;

// Filter für bestimmte Benutzergruppen ausblenden
$GLOBALS['TL_DCA']['tl_plenta_jobs_basic_offer']['config']['onload_callback'][] = function() {
    $user = BackendUser::getInstance();
    
    // Wenn kein Admin und nicht in der privilegierten Gruppe
    if (!$user->isAdmin && !in_array('jobs_filter_group', $user->groups)) {
        // Die Filter werden nach dem DOM-Ready ausgeblendet
        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/contaocore/js/jquery.min.js';
        
        // JavaScript-Lösung, die garantiert funktioniert
        $GLOBALS['TL_MOOTOOLS'][] = '<script>
        window.addEvent("domready", function() {
            // Zuverlässiges Ausblenden aller Filter-Typen
            $$(".tl_panel").each(function(panel) {
                panel.setStyle("display", "none");
            });
            
            // Auch für einige spezifische Elemente von Plenta Jobs
            $$(".header_filter, .header_employment_types").each(function(el) {
                el.setStyle("display", "none");
            });
            
            // Sicherstellen, dass der Filter-Bereich komplett verschwunden ist
            $$("form .tl_listing_container").each(function(container) {
                container.setStyles({
                    "margin-top": "15px",
                    "padding-top": "0"
                });
            });
            
            console.log("Plenta Jobs Filter wurden ausgeblendet für nicht-privilegierte Benutzer");
        });
        </script>';
        
        // Zusätzlich CSS für sofortiges Ausblenden hinzufügen
        $GLOBALS['TL_CSS'][] = 'bundles/contaocore/styles.css';
        $GLOBALS['TL_HEAD'][] = '<style>
            /* Filter ausblenden - alle möglichen Selektoren */
            .tl_panel,
            .tl_filter,
            .tl_subpanel,
            .header_filter,
            .tl_panel .tl_filter,
            .tl_formbody_edit > .tl_panel,
            div.tl_panel:first-child,
            .tl_header,
            .tl_header_table,
            #tl_buttons + .tl_panel {
                display: none !important;
            }
            
            /* Wichtig: Layout-Anpassungen */
            form .tl_listing_container {
                margin-top: 15px;
                padding-top: 0;
            }
        </style>';
    }
};