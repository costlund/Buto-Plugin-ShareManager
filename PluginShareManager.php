<?php
class PluginShareManager{
  function __construct() {
    wfPlugin::enable('share/facebook');
    wfPlugin::enable('share/twitter');
    wfPlugin::enable('share/linkedin');
    wfPlugin::enable('share/mail_client');
    wfPlugin::enable('share/copy');
    wfPlugin::enable('qr/link_to_page');
  }
  public function widget_share_buttons($data){
    $data = new PluginWfArray($data);
    if(!$data->is_set('data/qr')){
      $data->set('data/qr', true);
    }
    wfHelp::print($data);
    $element = wfDocument::getElementFromFolder(__DIR__, __FUNCTION__);
    $element->setByTag($data->get('data'), 'rs', true);
    wfDocument::renderElement($element);
  }
}