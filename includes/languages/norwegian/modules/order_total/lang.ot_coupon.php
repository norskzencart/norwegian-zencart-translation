<?php
$define = [
    'MODULE_ORDER_TOTAL_COUPON_TITLE' => 'Rabattkoder',
    'MODULE_ORDER_TOTAL_COUPON_HEADER' => TEXT_GV_NAMES.'/Rabattkoder',
    'MODULE_ORDER_TOTAL_COUPON_DESCRIPTION' => 'Rabattkoder',
    'MODULE_ORDER_TOTAL_COUPON_TEXT_ENTER_CODE' => TEXT_GV_REDEEM,
    'MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS' => '<p>Fyll inn din rabattkode i boksen nedenfor. Din rabattkode vil bli anvendt på totalprisen og vil vises i handlekurven etter du har klikket på fortsett.</p><p>Merk: Du kan bare bruke en rabattkode per ordre.</p>',
    'MODULE_ORDER_TOTAL_COUPON_TEXT_CURRENT_CODE' => 'Din gjeldende rabattkode: ',
    'TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER' => 'FJERN',
    'TEXT_REMOVE_REDEEM_COUPON' => 'Rabattkode er nå fjernet etter eget ønske!',
    'MODULE_ORDER_TOTAL_COUPON_INCLUDE_ERROR' => ' Setting Include tax = true, should only happen when recalculate = None',
];

$define['MODULE_ORDER_TOTAL_COUPON_REMOVE_INSTRUCTIONS'] = '<p>For å fjerne en rabattkode fra denne ordren erstatter du rabattkoden med: ' . $define['TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER'] . '</p>';

return $define;
