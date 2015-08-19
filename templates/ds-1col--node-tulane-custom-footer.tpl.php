<?php if ($content): ?> 
<?php 
echo "&copy;" . date('Y') . "&nbsp;";
echo $content['field_display_name']['#items'][0]['safe_value'] . "&nbsp;";
echo $content['field_map_address']['#items'][0]['safe_value'] . "&nbsp;";
echo $content['field_phone']['#items'][0]['safe_value'] . "&nbsp;";
echo "<a href=\"mailto:" . $content['field_email']['#items'][0]['safe_value'] . "\">";
echo $content['field_email']['#items'][0]['safe_value'];
echo "</a><br />";
?>
<?php endif; ?>