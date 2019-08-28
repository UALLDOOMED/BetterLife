<?php

if (!defined('ABSPATH'))
    exit;
oxilab_flip_box_user_capabilities();
echo '<div class="oxilab-flip-box-col-3">';
$styledata = Array('id' => 251, 'style_name' => 'style25', 'css' => 'oxilab-flip-type |oxilab-flip-box-flip oxilab-flip-box-flip-top-to-bottom| oxilab-flip-effects |easing_easeInOutCirc| front-background-color |rgba(199, 18, 66, 1)| backend-title-bottom-border-color |#ffffff| front-border-color|#ffffff| || || backend-background-color |rgba(199, 18, 66, 1)| backend-border-color|#ffffff| backend-info-color |#ffffff| || || || || || backend-title-color |#ffffff||| || || || || flip-col |oxilab-flip-box-col-1| flip-width |262| flip-height |262| margin-top |10| margin-left |10| flip-open-tabs || oxilab-animation || animation-duration |2| flip-boxshow-color |rgba(212, 212, 212, 0.69)| flip-boxshow-horizontal |0| flip-boxshow-vertical |2| flip-boxshow-blur |8| flip-boxshow-spread |0| || front-padding-top |5| || || || || || || || || || || || || || || backend-padding-top |10| backend-padding-left |10| front-margin-top-bottom |5| backend-info-size |18| backend-info-family |Open+Sans| backend-info-style |normal| backend-info-weight |400| backend-info-text-align |Center| backend-info-padding-top |10| backend-info-padding-bottom |10| backend-info-padding-left |10| backend-info-padding-right |10| || || || || || || || || || || || || flip-backend-border-style|solid| flip-backend-border-size|4| flip-border-radius |100| backend-title-border-width |100| backend-title-border-height |3| flip-col-border-size |2| flip-col-border-style |solid| backend-border-padding-top|10| || || || || || || || || backend-heading-size |24| backend-heading-family |Open+Sans| backend-heading-style |normal| backend-heading-weight |600| backend-heading-text-align |Center| backend-heading-padding-top |10| backend-heading-padding-bottom |10| backend-heading-padding-left |10| backend-heading-padding-right |10| custom-css |||');
$listdata = Array(
    0 => Array('id' => 1, 'styleid' => 251, 'title' => '',
        'files' => ' {#}|{#}{#}|{#} {#}|{#}{#}|{#} flip-box-image-upload-url-01 {#}|{#}' . oxilab_flip_box_admin_image('1.jpg') . '{#}|{#} flip-box-backend-desc {#}|{#}Creative Director{#}|{#} {#}|{#}{#}|{#} flip-box-backend-link {#}|{#}#{#}|{#} flip-box-image-upload-url-02 {#}|{#}{#}|{#} {#}|{#}{#}|{#} flip-box-backend-title {#}|{#}Jhon Abraham{#}|{#}',
       ),
);
echo '<input type="hidden" name="oxilab-flip-box-data-25-' . $listdata[0]['id'] . '" id="oxilab-flip-box-data-25-' . $listdata[0]['id'] . '" value="' . $styledata['css'] . '">';
echo '<input type="hidden" name="oxilab-flip-box-files-25-' . $listdata[0]['id'] . '" id="oxilab-flip-box-files-25-' . $listdata[0]['id'] . '" value="' . $listdata[0]['files'] . '">';
echo oxilab_flipbox_admin_style_layouts($styledata, $listdata);
echo '</div>';
echo '<div class="oxilab-flip-box-col-3">';
$styledata = Array('id' => 252, 'style_name' => 'style25', 'css' => 'oxilab-flip-type |oxilab-flip-box-flip oxilab-flip-box-flip-left-to-right| oxilab-flip-effects |easing_easeInOutCirc|  front-background-color |rgba(34, 199, 42, 1)| backend-title-bottom-border-color |#f5f5f5| front-border-color|#ffffff| || || backend-background-color |rgba(34, 199, 42, 1)| backend-border-color|#ffffff| backend-info-color |#fafafa| || || || || || backend-title-color |#f5f5f5| || || || || || flip-col |oxilab-flip-box-col-1| flip-width |262| flip-height |262| margin-top |10| margin-left |10| flip-open-tabs || oxilab-animation || animation-duration |2| flip-boxshow-color |rgba(212, 212, 212, 0.69)| flip-boxshow-horizontal |0| flip-boxshow-vertical |2| flip-boxshow-blur |8| flip-boxshow-spread |0| || front-padding-top |5| || || || || || || || || || || || || || || backend-padding-top |10| backend-padding-left |10| front-margin-top-bottom |5| backend-info-size |18| backend-info-family |Open+Sans| backend-info-style |normal| backend-info-weight |400| backend-info-text-align |Center| backend-info-padding-top |10| backend-info-padding-bottom |10| backend-info-padding-left |10| backend-info-padding-right |10| || || || || || || || || || || || || flip-backend-border-style|solid| flip-backend-border-size|4| flip-border-radius |100| backend-title-border-width |100| backend-title-border-height |3| flip-col-border-size |2| flip-col-border-style |solid| backend-border-padding-top|10| || || || || || || || || backend-heading-size |24| backend-heading-family |Open+Sans| backend-heading-style |normal| backend-heading-weight |600| backend-heading-text-align |Center| backend-heading-padding-top |10| backend-heading-padding-bottom |10| backend-heading-padding-left |10| backend-heading-padding-right |10| custom-css |||');
$listdata = Array(
    0 => Array('id' => 2, 'styleid' => 252, 'title' => '',
        'files' => '{#}|{#}{#}|{#} {#}|{#}{#}|{#} flip-box-image-upload-url-01 {#}|{#}' . oxilab_flip_box_admin_image('bg2.png') . '{#}|{#} flip-box-backend-desc {#}|{#}Creative Director.{#}|{#} {#}|{#}{#}|{#} flip-box-backend-link {#}|{#}{#}|{#} flip-box-image-upload-url-02 {#}|{#}{#}|{#} {#}|{#}{#}|{#} flip-box-backend-title {#}|{#}Jhon Abraham{#}|{#}',
        ),
);
echo '<input type="hidden" name="oxilab-flip-box-data-25-' . $listdata[0]['id'] . '" id="oxilab-flip-box-data-25-' . $listdata[0]['id'] . '" value="' . $styledata['css'] . '">';
echo '<input type="hidden" name="oxilab-flip-box-files-25-' . $listdata[0]['id'] . '" id="oxilab-flip-box-files-25-' . $listdata[0]['id'] . '" value="' . $listdata[0]['files'] . '">';
echo oxilab_flipbox_admin_style_layouts($styledata, $listdata);
echo '</div>';
echo '<div class="oxilab-flip-box-col-3">';
$styledata = Array('id' => 253, 'style_name' => 'style25', 'css' => 'oxilab-flip-type |oxilab-flip-box-flip oxilab-flip-box-flip-left-to-right| oxilab-flip-effects |easing_easeInOutCirc| front-background-color |rgba(156, 50, 248, 1)| backend-title-bottom-border-color |#ffffff| front-border-color|#ffffff| || || backend-background-color |rgba(156, 50, 248, 1)| backend-border-color|#ffffff| backend-info-color |#ffffff| || || || || || backend-title-color |#ffffff||| || || || || flip-col |oxilab-flip-box-col-1| flip-width |262| flip-height |262| margin-top |10| margin-left |10| flip-open-tabs || oxilab-animation || animation-duration |2| flip-boxshow-color |rgba(212, 212, 212, 0.69)| flip-boxshow-horizontal |0| flip-boxshow-vertical |2| flip-boxshow-blur |8| flip-boxshow-spread |0| || front-padding-top |5| || || || || || || || || || || || || || || backend-padding-top |10| backend-padding-left |10| front-margin-top-bottom |5| backend-info-size |18| backend-info-family |Open+Sans| backend-info-style |normal| backend-info-weight |400| backend-info-text-align |Center| backend-info-padding-top |10| backend-info-padding-bottom |10| backend-info-padding-left |10| backend-info-padding-right |10| || || || || || || || || || || || || flip-backend-border-style|solid| flip-backend-border-size|4| flip-border-radius |100| backend-title-border-width |100| backend-title-border-height |3| flip-col-border-size |2| flip-col-border-style |solid| backend-border-padding-top|10| || || || || || || || || backend-heading-size |24| backend-heading-family |Open+Sans| backend-heading-style |normal| backend-heading-weight |600| backend-heading-text-align |Center| backend-heading-padding-top |10| backend-heading-padding-bottom |10| backend-heading-padding-left |10| backend-heading-padding-right |10| custom-css |||');
$listdata = Array(
    0 => Array('id' => 3, 'styleid' => 253, 'title' => '',
        'files' => '{#}|{#}{#}|{#} {#}|{#}{#}|{#} flip-box-image-upload-url-01 {#}|{#}' . oxilab_flip_box_admin_image('bg1.png') . '{#}|{#} flip-box-backend-desc {#}|{#}Creative Director{#}|{#} {#}|{#}{#}|{#} flip-box-backend-link {#}|{#}#{#}|{#} flip-box-image-upload-url-02 {#}|{#}{#}|{#} {#}|{#}{#}|{#} flip-box-backend-title {#}|{#}Jhon Abraham{#}|{#}',
        )
);
echo '<input type="hidden" name="oxilab-flip-box-data-25-' . $listdata[0]['id'] . '" id="oxilab-flip-box-data-25-' . $listdata[0]['id'] . '" value="' . $styledata['css'] . '">';
echo '<input type="hidden" name="oxilab-flip-box-files-25-' . $listdata[0]['id'] . '" id="oxilab-flip-box-files-25-' . $listdata[0]['id'] . '" value="' . $listdata[0]['files'] . '">';
echo oxilab_flipbox_admin_style_layouts($styledata, $listdata);
echo '</div>';
