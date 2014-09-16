<?php 

function getViewName( $sTable, $iLangId = null, $sShopId = null )
{
        $myConfig = oxRegistry::getConfig();
        
        // Benutzergruppe aus Moduleinstellungen auslesen
        $vtec_GruppenID = oxConfig::getInstance()->getConfigParam('vtec_spezialgruppe');
    
        // Ansicht...
        $sVtecAnsicht = $sTable; 
         
        //This config option should only be used in emergency case.
        //Originally it was planned for the case when admin area is not reached due to the broken views.
        if ( !$myConfig->getConfigParam( 'blSkipViewUsage' ) ) 
        {
            $sViewSfx = "";
            $sAnsichtSfx =""; // neue Ansichtsendung

            $blIsMultiLang = in_array( $sTable, oxRegistry::getLang()->getMultiLangTables() );
            if ( $iLangId != -1 && $blIsMultiLang ) 
            {
                $oLang = oxRegistry::getLang();
                $iLangId = $iLangId !== null ? $iLangId : oxRegistry::getLang()->getBaseLanguage();
                $sAbbr = $oLang->getLanguageAbbr( $iLangId );
                $sViewSfx .= "_" . $sAbbr;
            } 
            if ( $sVtecAnsicht == "oxarticles" )
            {
                $ox_User_ID = oxSession::getVar("usr");
                $ox_User = oxNew("oxUser");
                $ox_User->load($ox_User_ID);
                if ( !$ox_User->isAdmin() )
                {
                   $oxGruppen = $ox_User->getUserGroups();
                   $vtecInSpezGruppe = false;
                   
                   foreach ( $oxGruppen as $oxGruppe )
                   {
                      if ( $oxGruppe->getId() == $vtec_GruppenID )
                      {
                         $vtecInSpezGruppe = true;
                      }
                      
                   } 
                   if ( !$vtecInSpezGruppe )
                   {
                      $sAnsichtSfx = "_vsg";
                   }
                } 
            } 

            if ( $sViewSfx || (($iLangId == -1 || $sShopId == -1 ) && $blIsMultiLang) ) 
            {
                return "oxv_".$sTable.$sViewSfx.$sAnsichtSfx;
            }

        } 

        return $sTable;
} 