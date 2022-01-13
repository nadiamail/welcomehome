=== Plugin Name ===
Plugin Name: WelcomeHome Gravity Forms
Description: WelcomeHome Gravity Forms
version: 0.1
Author: SageAge
Author URI: https://www.sageagestrategies.com/
License: GPLv3 or later
Text Domain: wh-gform
Domain Path: /languages

Sends Gravity Form data to WelcomeHome /leads RESTful endpoint.

== Description ==

For use only with Gravity Forms v1.9 or greater.

Please Note: This is a custom version of the plugin for use with Bridges. It was not built on the latest version of the plug-in.

Main Settings

Main for settings can be found under admin -> Forms -> Settings -> YGL GForm. You will need a YGL username and password. The base endpoint url may be edited if necessary.

You may need to enter a LeasSourceName, LeadSourceID, and LeadSourceRank. Leave the default values if you have not revcieved any information from YGL.

Form Settings

Individual form settings can be found under admin -> Forms -> Forms -> {form name} -> Settings -> YGL GForm.

Select the "Send this form to You've Got Leads" checkbox to attach the form. You will need to set the Community ID, as the default value is only a placeholder and will not work.

Field Mapping

To map the form fields, select the relevant Field (to be mapped for YGL) to the Form Field (from the Gravity Form).

The form field must be of the correct type. The mapping is as follows:

First Name -> textfield
Last Name -> textfield
Email Address -> email
Phone -> phone
Community -> select or hidden
Lead Source Name -> hidden or textfield
Lead Source ID -> textfield or hidden

So make sure when creating your form that you use the correct form field types for the YGL field mapping.

If you map the Community field, this value will overwrite the selected Community ID for the form. When mapping this field, please ensure that the value of the field(s) is set to a YGL Community ID. Please note that a Community ID is still a required field.

Like the Community mapping field, Lead Source Name and Lead Source ID can be customized. If no value is set, the default plugin value will be used.

== Changelog ==

= 0.6.1-bridges =
* added ability to customized lead source id on a form by form basis

= 0.6-bridges =
* added ability to map community id to a select or hidden field that will overwrite the form's community id
* added ability to customized lead source name on a form by form basis

= 0.6 =
* fixed email not being applied at the creation of the connection (email not sending)
* fixed sageage url in plugin description

= 0.5 =
* fixed illegal offset issue when not sending form

= 0.4 =
* fixed referral source section of JSON string
* added instruction page

= 0.3 =
* add referral source values

= 0.2 =
* fix Uninitialized string offset: 0 and Illegal string offset 'send_form' issue when loading send_form for a form that has not been configured to use YGL

= 0.1 =
* First buildout.

== Upgrade Notice ==

= 0.0 =
Placeholder.


== Arbitrary section ==

This is arbitrary.