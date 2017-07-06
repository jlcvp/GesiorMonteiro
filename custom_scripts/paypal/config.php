<?php
$paypal_report_url = '';
$paypal_return_url = '';
$paypal_image = 'https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif';
$paypal_payment_type = '_xclick'; // '_xclick' (Buy Now) or '_donations'

$paypals[0]['mail'] = 'carnero.marcelo@outlook.com'; // your paypal login
$paypals[0]['name'] = '100 premium points on server anderion.net for 0.01 EURO';
$paypals[0]['money_amount'] = '0.01';
$paypals[0]['money_currency'] = 'EUR'; // USD, EUR, more codes: https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_api_nvp_currency_codes
$paypals[0]['premium_points'] = 100;