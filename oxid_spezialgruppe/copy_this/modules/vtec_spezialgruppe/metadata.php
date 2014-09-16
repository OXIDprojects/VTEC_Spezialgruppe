<?php

/**
 *
 * Version:    1.7
 * Author:     Pasquale Pari | Vendingtechnik
 * Author URL: http://www.vendingtechnik.com
 * License:    GNU GPL 3.0
 *             !! it is forbidden to resell this Software !!
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';


$aModule = array (
    'id'           => 'vtec_spezialgruppe',
    'title'        => 'VTEC Spezialgruppe, ab CE 4.8.6',
    'description'  => 'Einzelne Artikel bleiben den normalen Benutzern verborgen und werden nur einer bestimmten, eingeloggten Benutzergruppe angezeigt.<br \>In der Artikelverwaltung wird im Reiter Stamm eine Checkbox aktiviert, so wird der Artikel nur der Benutzergruppe, die in den<br\>Moduleinstellungen definiert wurde, angezeigt.',
    'thumbnail'    => 'spezialgruppe.jpg',
    'version'      => '1.7',
    'author'       => 'Pasquale Pari',
    'url'          => 'http://www.vendingtechnik.com <br \> http://www.getraenkekiste.ch',
    'email'        => 'pasquale.pari@vendingtechnik.com',
    'extend'       => array (
        'oxutilscount'     => 'vtec_spezialgruppe/vtec_spezialgruppe',
        ),
        
     'settings'     => array
    (
        array(
                'group'     => 'main',
                'name'      => 'vtec_spezialgruppe',
                'type'      => 'str',
                'value'     => '',
              ),
     ),            
    
    'blocks' => array(
        array('template'     => 'article_main.tpl',
              'block'        => 'admin_article_main_form',         
              'file'         => '/views/blocks/vtec_admin_artikel_spezialgruppe.tpl'
              ),
            
        ),
);
