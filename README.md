
# hyva-checkout-paypal-standard
Hyvä Compatibility module for PayPal Standard

> **Important**: In Context Mode must be disabled!!

## Requirements

```
"php": "^8.0",
"hyva-themes/magento2-default-theme": "^1.2.0",
"hyva-themes/magento2-hyva-checkout": "^1.0.2",
```

## Link to original module
https://github.com/magento/magento2/tree/2.4-develop/app/code/Magento/Paypal

## Installation

### Via github

1. Add github repo
   ```
   "mvenghaus/magento2-hyva-checkout-paypal-standard": {
      "type": "git",
      "url": "git@github.com:mvenghaus/magento2-hyva-checkout-paypal-standard.gitt"
   }
   ```

2. Install via composer
    ```
    composer require mvenghaus/magento2-hyva-checkout-paypal-standard"
    ```
3. Enable module
    ```
    bin/magento setup:upgrade
    ```