<?php defined('_JEXEC') or die;

if (!$field->value || $field->value == '-1')
{
	return;
}

$value = $field->value;
$url = 'https://www.paypal.me/'.$field->fieldparams->get('useraccount').'/'.$value;

$style = '';
$btn = '';

switch($field->fieldparams->get('typebutton')){
	case 1: // link
		$style = 'color:'.$field->fieldparams->get('colortextbutton').';';
	break;

	case 2: // bootstrap
		$btn = 'btn btn-'.$field->fieldparams->get('stylebuttonb');
	break;

	case 3: // uikit
		$btn = 'uk-button uk-button-'.$field->fieldparams->get('stylebuttonu');
	break;

	case 4: // custom
		$btn = 'btn';
		$style = 'color:'.$field->fieldparams->get('colortextbutton').'; background:'.$field->fieldparams->get('colorbackgroundbutton').'; border-color:'.$field->fieldparams->get('colorborderbutton').';';
	break;
}

?>
<a style="<?php echo $style; ?>" class="<?php echo $btn; ?>" href="<?php echo $url; ?>" target="<?php echo $field->fieldparams->get('openbutton'); ?>">
	<?php
	if($field->fieldparams->get('iconbutton')){
		echo '<i class="fa fa-paypal"></i> ';
	}
	echo $field->fieldparams->get('textbutton');
	?>
</a>