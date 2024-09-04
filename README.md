# Ubercart Stripe

This is an Ubercart payment gateway module for Stripe. It maintains PCI SAQ A 
compliance which allows Stripe, the payment processor, to handle processing and 
storing of payment card details.

It is compliant with 3D Secure, 3D Secure 2, and Strong Customer Authentication
(SCA). Your site should be configured to use `https`.

## Installation

- Install this module using the [official Backdrop CMS instructions](https://backdropcms.org/guide/modules).

### Dependencies

- [Ubercart](https://github.com/backdrop-contrib/ubercart), specifically the
  `uc_payment` and `uc_credit` sub-modules.
- The [Stripe](https://github.com/backdrop-contrib/stripe) module bundles the
  Stripe PHP bindings and provides some API functionality.

## Configuration and Usage

Configure the Stripe module at: `admin/config/services/stripe`

After Ubercart and Stripe are installed and configured, activate this module and
configure it in the Ubercart "Payment methods" section.

More details may be found (or contributed to) in the [Wiki](https://github.com/backdrop-contrib/uc_stripe/wiki).

## Issues

Bugs and Feature requests should be reported in the [Issue Queue](https://github.com/backdrop-contrib/uc_stripe/issues)

# Current Maintainers

- [Laryn Kragt Bakker](https://github.com/laryn)
- Collaboration and co-maintainers welcome!

## Credits

- Ported to Backdrop by [Laryn Kragt Bakker](https://github.com/laryn)
- Backdrop port initially sponsored by [CEDC at the Stuart Center](https://stuartcenter.org/office/cedc)
- Maintained for Drupal by [AndraeRay](https://www.drupal.org/u/andraeray)
- Earlier versions of `uc_stripe` were developed by [Victor Quinn](http://drupal.org/user/367196) and [rfay](https://www.drupal.org/u/rfay), 
  and were also based in part on [Bitcookie's work](http://bitcookie.com/blog/pci-compliant-ubercart-and-stripe-js)
  from [discussion in the D7 `uc_stripe` issue queue](https://www.drupal.org/node/1467886).

## License

This project is GPL v2 software. See the LICENSE.txt file in this directory for
complete text.
