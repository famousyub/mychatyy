<?php if ((int)erLhcoreClassModelChatConfig::fetch('show_language_switcher')->current_value == 1) : ?>

<?php 
$enabledLanguages = explode(',',erLhcoreClassModelChatConfig::fetch('show_languages')->current_value);
$langArray = array(
	'eng' => 'English',
    'lit' => 'Lietuviškai',
    'hrv' => 'Croatian',
    'esp' => 'Spanish',
    'por' => 'Portuguese',
    'nld' => 'Dutch',
    'ara' => 'Arabic',
    'ger' => 'German',
    'pol' => 'Polish',
    'rus' => 'Russian',
    'ita' => 'Italian',
    'fre' => 'Français',
    'chn' => 'Chinese',
    'cse' => 'Czech',
    'nor' => 'Norwegian',
    'tur' => 'Turkish',
    'vnm' => 'Vietnamese',
    'idn' => 'Indonesian',
    'sve' => 'Swedish',
    'per' => 'Persian',
    'ell' => 'Greek',
    'dnk' => 'Danish',
    'rou' => 'Romanian',
    'bgr' => 'Bulgarian',
    'tha' => 'Thai',
    'geo' => 'Georgian',
    'fin' => 'Finnish',
    'alb' => 'Albanian',
);
?>

<div class="btn-group float-end dropstart me-auto" role="group">
    <button type="button" class="btn btn-secondary btn-xs dropdown-toggle" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/startchat','Choose your language');?>" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="material-icons me-0">language</i>
    </button>
    <ul class="dropdown-menu f-dropdown-lang" role="menu">
      <?php foreach ($enabledLanguages as $siteAccess) : ?>
        <li role="menuitem"><a onclick="return lhinst.switchLang($('#form-start-chat'),'<?php echo $siteAccess?>')" href="#"><?php echo $langArray[$siteAccess]?></a>
      <?php endforeach;?>

    </ul>
</div>
<?php endif;?>