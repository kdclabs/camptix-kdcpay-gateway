=== CampTix KDCpay Payments ===
Contributors: kdclabs, vachan, ajitbohra
Donate link: http://www.kdclabs.com/donate/
Tags: camptix, kdcpay
Requires at least: 3.5
Tested up to: 4.8.1
Stable tag: 1.5.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

KDCpay Payment Platform for CampTix plugin

== Description ==

KDCpay Payment Platform for the CampTix plugin.

Take payments in INR, LKR or USD through KDCpay using the CampTix plugin. CampTix plugin needs to be installed and activated for the KDCpay payment platform to work.

== Installation ==

1. Upload `camptix-kdcpay` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to `Tickets -> Setup` in your WordPress admin area to set the currency to INR and enable the KDCpay.

= Getting Mobile Filed ID =
1. Edit/Create ticket which will use the KDCpay Platform.
2. Add a compulsory `Queston` as `Text input` and Tick `Required`.
3. Update/Publish the Ticket.
4. View Source or inspect the Ticket page in the frontend in the second step (attendee info form).
5. Note the ID mentioned in the `<input name="tix_attendee_questions[1][#]"`, where # = Mobile Field ID.
6. Visit: WP Dashbard > Camptix > Setup > Payments > KDCpay > Mobile Field ID > Enter the above noted ID.

== Changelog ==

= 1.5.0 =
* Added: Internationlization (@ajitbohra)
* Fixed: Debug=ON Errors (@ajitbohra)

= 1.4.5 =
* Fixed: Code Typos. (@coreymckrill)

= 1.4.4 =
* Fixed: `iframe` height to `850`.

= 1.4.3 =
* Fixed: `iframe` height to accomodate all payment options.

= 1.4.2 =
* Fixed: `iframe` typo.

= 1.4.1 =
* Added: `display` field.

= 1.4.0 =
* Added: Curreny support for `USD` & `LKR`.
* Added: iFrame checkout.
* Fixed: `buyerEmail` and `buyerName` (as first attendee).

= 1.3.3 =
* Updated: `buyerEmal` and `buyerName`

= 1.3.2 =
* Added: Attendee Info Field `mobile`
* Added: (Readme) Instructions for Mobile Field ID

= 1.3.1 =
* Updated: Payment URL with `esc_url()`

= 1.3.0 =
* Added: Payment URL

= 1.2.3 =
* Attendee OrdeBy=>ID

= 1.2.2 =
* APP - Camptix
* Attendee - Access and Edit Tokens

= 1.2.1 =
* Error cleanup

= 1.2.0 =
* Special Provision for Camptix Attendee->INFO
* INR - No-Conflict

= 1.1.0 =
* Updates made as per WP-Audit

= 1.0.2 =
* Mode setting added after sandbox

= 1.0.1 =
* Basic Fix

= 1.0.0 =
* First release
