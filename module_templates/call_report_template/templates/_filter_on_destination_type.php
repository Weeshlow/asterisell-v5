<?php

require 'generator_header.php';

echo '<?php';

?>
  /**************************************************************
   !!!                                                        !!!
   !!! WARNING: This file is automatic generated.             !!!
   !!!                                                        !!!
   !!! In order to modify this file change the content of     !!!
   !!!                                                        !!!
   !!!    /module_template/call_report_template               !!!
   !!!                                                        !!!
   !!! and execute                                            !!!
   !!!                                                        !!!
   !!!    sh generate_modules.sh                              !!!     
   !!!                                                        !!!
   **************************************************************/


$options = array("" => "");

<?php if (! $generateForAdmin) { ?>

  if (sfConfig::get('app_show_outgoing_calls')) {
    $d = DestinationType::outgoing;
    $options[$d] = DestinationType::getName($d);
  }

  if (sfConfig::get('app_show_incoming_calls')) {
    $d = DestinationType::incoming;
    $options[$d] = DestinationType::getName($d);
  }

  if (sfConfig::get('app_show_internal_calls')) {
    $d = DestinationType::internal;
    $options[$d] = DestinationType::getName($d);
  }

  <?php } else { ?>

    // ADMINISTRATOR

    $d = DestinationType::outgoing;
    $options[$d] = DestinationType::getUntraslatedName($d);
    
    $d = DestinationType::incoming;
    $options[$d] = DestinationType::getUntraslatedName($d);
    
    $d = DestinationType::internal;
    $options[$d] = DestinationType::getUntraslatedName($d);

    $d = DestinationType::system;
    $options[$d] = DestinationType::getUntraslatedName($d);

<?php } ?>


$defaultChoice = "";
if (isset($filters['filter_on_destination_type'])) {
  $defaultChoice = $filters['filter_on_destination_type'];
}
echo select_tag('filters[filter_on_destination_type]', options_for_select($options, $defaultChoice));

<?php 
echo '?>' . "\n";
?>
