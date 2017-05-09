# PhpSdk README

This is a beta launch of a PHP SDK for PlayFab. It's current design is to be minimal, without formal class definitions for API requests and results, but left to be dynamic and open ended like JavaScriptSdk.


## 1. Overview:

This document describes using the PlayFab Php SDK in your web-server.


## 2. Prerequisites:

* Users should also be familiar with the topics covered in our [getting started guide](https://playfab.com/docs/getting-started-with-playfab/).

To connect to the PlayFab service, your machine must be running TLS v1.2 or better.
* For Windows, this means Windows 7 and above
* [Official Microsoft Documentation](https://msdn.microsoft.com/en-us/library/windows/desktop/aa380516%28v=vs.85%29.aspx)
* [Support for SSL/TLS protocols on Windows](http://blogs.msdn.com/b/kaushal/archive/2011/10/02/support-for-ssl-tls-protocols-on-windows.aspx)

This SDK is tested with PHP 7.1 and Apache 2.4.  You will need to enable SSL in both, and acquire and configure a ca-bundle.crt for your PHP installation.

## 3. Beta

This SDK is currently designed to be a min-spec PHP SDK, allowing you to make PlayFab api calls from your PHP server.  There's very little of the niceties and convienience that exists in the other SDKs.  Based on customer interest, we may bring this SDK up to the feature spec of other SDKs in the future.


## 4. Troubleshooting:

#### Contact Us
We love to hear from our developer community! 
Do you have ideas on how we can make our products and services better? 

Our Developer Success Team can assist with answering any questions as well as process any feedback you have about PlayFab services.

[Forums, Support and Knowledge Base](https://community.playfab.com/index.html)

## 5. Copyright and Licensing Information:

  Apache License -- 
  Version 2.0, January 2004
  http://www.apache.org/licenses/

  Full details available within the LICENSE file.
