<?php include(erLhcoreClassDesign::designtpl('lhuser/menu_tabs/personal_canned_messages_tab_pre.tpl.php'));?>
<?php if ($user_menu_tabs_personal_canned_messages_tab == true && erLhcoreClassUser::instance()->hasAccessTo('lhuser','personalcannedmsg')) : ?>
<li role="presentation" class="nav-item"><a class="nav-link <?php if ($tab == 'tab_canned') : ?>active<?php endif;?>" href="#canned" aria-controls="canned" role="tab" data-bs-toggle="tab"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Personal canned messages');?></a></li>
<?php endif;?>