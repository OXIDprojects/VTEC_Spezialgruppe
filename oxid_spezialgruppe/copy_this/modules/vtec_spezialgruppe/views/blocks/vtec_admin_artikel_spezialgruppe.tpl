[{$smarty.block.parent}]

<tr>
  <td class="edittext" width="120">[{oxmultilang ident="VTEC_ADMIN_SPEZIALGRUPPE"}]</td>
  <td class="edittext">
    <input type="hidden" name="editval[oxarticles__vtecspezialgruppe]" value="0">
    <input class="edittext" type="checkbox" name="editval[oxarticles__vtecspezialgruppe]" value='1' [{if $edit->oxarticles__vtecspezialgruppe->value == 1}]checked[{/if}]>
    [{ oxinputhelp ident="HELP_VTEC_SPEZIALGRUPPE" }]
  </td>
</tr>
