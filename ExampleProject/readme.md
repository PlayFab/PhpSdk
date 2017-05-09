# PhpSdk Getting Started Guide

This is a ROUGH getting started guide for PHP SDK.


## PHP Project Setup

* Install PHP 7.1
* Install Apache 2.4
* Setup SSL on both
  * This step is complicated, and we'll elaborate later, but basically enable the SSL modules on both, and link PHP and Apache together
* Setup a ca-bundle.crt file in your PHP installation
  * The easiest way is to get one online, but that's not a "real" solution
    * But it's pretty much the only thing you can do if you're just hosting/testing on localhost
    * https://github.com/bagder/ca-bundle/
  * The proper way is to get one from the certificate authority where you purchased your website SSL certificate
* Copy the contents of our sdk into your ./Apache24/htdocs folder
* Run apache

## Finish and Execute

If you set up everything correctly, this page should work: https://localhost/ExampleProject/gui.php

* Set your PlayFab TitleId at the top
* Select Client, and LoginWithCustomID
* Put this in JsonRequest:
  * {"CustomID":"GettingStartedGuide", "CreateAccount": true}
* Press "Send"

## PENDING CHANGES

This guide and example describe using the Client API via your PHP server.  This is not a best practice.  Your game should use the JavaScriptSdk for client calls, from the client html.  Your server logic should make server api calls as needed, and you should implement your own server logic between your client and our server api.
