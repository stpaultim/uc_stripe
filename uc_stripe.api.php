<?php

/**
 * @file
 * Hooks provided by the uc_stripe module.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Allows other modules to alter intent params before Stripe Payment Intent
 *  is created. This is used for one time charges.
 *
 * @param &$intent
 *   The intent array used to create the intent.
 * @param $order
 *   The order object that is being used for the intent.
 *
 * @return
 *   Nothing should be returned. Hook implementations should receive the
 *   $intent array by reference and alter it directly.
 */
function hook_uc_stripe_payment_intent_alter(&$intent, $order) {
  $intent['metadata'] = ["order_source" => "affilate_links"];
}

/**
 * Allows other modules to alter recurring charge payment intent params before Stripe
 *  Payment Intent is created. This is used for recurring charges.
 *
 * @param &$intent
 *   The intent array used to create the intent.
 * @param $order
 *   The order object that is being used for the intent.
 *
 * @return
 *   Nothing should be returned. Hook implementations should receive the
 *   $intent array by reference and alter it directly.
 */
function hook_uc_stripe_recurring_intent_alter(&$intent, $order) {
  $intent['currency'] = 'CAD';
}