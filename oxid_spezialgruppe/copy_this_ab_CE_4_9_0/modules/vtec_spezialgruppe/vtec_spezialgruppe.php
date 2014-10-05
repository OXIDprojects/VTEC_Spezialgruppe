<?php 

class vtec_spezialgruppe extends vtec_spezialgruppe_parent
{
    public function getCatArticleCount($sCatId)
    {
        // current status unique ident
        $sActIdent = $this->_getUserViewId();
        
        // loading from cache
        /* $aCatData = $this->_getCatCache();  */ // wird nicht benötigt
        
        if( !$aCatData || !isset($aCatData[$sCatId][$sActIdent]) ) 
        {
            $iCnt = $this->setCatArticleCount($aCatData, $sCatId, $sActIdent);
        }
        else
        {
            $iCnt = $aCatData[$sCatId][$sActIdent];
        }

        return $iCnt;
    }

}
