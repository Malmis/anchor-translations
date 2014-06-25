<?php

return array(

	'extend' => 'Ut&ouml;ka',

	'fields' => 'Anpassade f&auml;lt',
	'fields_desc' => 'Skapa ytterligare f&auml;lt',

	'variables' => 'Webbplats variabler',
	'variables_desc' => 'Skapa ytterligare metadata',

	'create_field' => 'Skapa ett nytt f&auml;lt',
	'editing_custom_field' => '&Auml;ndrar f&auml;lt &ldquo;%s&rdquo;',
	'nofields_desc' => 'Det finns inga f&auml;lt &auml;nnu',

	'create_variable' => 'Skapa en ny variabel',
	'editing_variable' => '&Auml;ndrar variabel &ldquo;%s&rdquo;',
	'novars_desc' => 'Det finns inga variabler &auml;nnu',

	// form fields
	'type' => 'Typ',
	'type_explain' => 'Vilken typ av inneh&aring;ll som du vill l&auml;gga till det h&auml;r f&auml;ltet.',

	'field' => 'F&auml;lt',
	'field_explain' => 'Html ing&aring;ngstyp',

	'key' => 'Unik nyckel',
	'key_explain' => 'Den unika nyckeln f&ouml;r ditt f&auml;lt',
	'key_missing' => 'V&auml;nligen ange en unik nyckel',
	'key_exists' => 'Nyckeln anv&auml;nds redan',

	'label' => 'Etikett',
	'label_explain' => 'L&auml;sbart namn p&aring; f&auml;lt',
	'label_missing' => 'V&auml;nligen ange en etikett',

	'attribute_type' => 'Filtyper',
	'attribute_type_explain' => 'Kommaseparerad lista med de accepterade filtyperna. Tomt accepterar alla.',

	// images
	'attributes_size_width' => 'Bild maxbredd',
	'attributes_size_width_explain' => 'Bilder kommer att &auml;ndras om de &auml;r st&ouml;rre &auml;n max storlek',

	'attributes_size_height' => 'Bild maxh&ouml;jd',
	'attributes_size_height_explain' => 'Bilder kommer att &auml;ndras om de &auml;r st&ouml;rre &auml;n max storlek',

	// custom vars
	'name' => 'Namn',
	'name_explain' => 'Ett unikt namn',
	'name_missing' => 'V&auml;nligen ange ett unikt namn',
	'name_exists' => 'Namnet anv&auml;nds redan',

	'value' => 'V&auml;rde',
	'value_explain' => 'De data du vill lagra (upp till 64kb)',
	'value_code_snipet' => 'Textsnutt att infoga i mallen:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Din variabel skapades',
	'variable_updated' => 'Din variabel uppdaterades',
	'variable_deleted' => 'Din variabel raderades',

	'field_created' => 'Ditt f&auml;lt skapades',
	'field_updated' => 'Ditt f&auml;lt uppdaterades',
	'field_deleted' => 'Ditt f&auml;lt raderades'

);
