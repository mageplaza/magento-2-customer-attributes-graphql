# Magento 2 Customer Attributes GraphQL/PWA

**Magento 2 Customer Attributes GraphQL is a part of Mageplaza Customer Attributes extension, which offers GraphQL features. This supports PWA compatibility.**

[Mageplaza Customer Attributes for Magento 2](https://www.mageplaza.com/magento-2-customer-attributes/) enables online stores to collect more information from customers with extra essential attributes added to registration or customer account pages.

On the Magento 2 Default, you can only collect some basic information of customers, such as name, date of birth, or tax number that are not helpful at all for your further sales purposes. With Megaplaza Customer Attributes, you can even create unlimited attributes added to the customer registration forms. Attribute properties can be configured easily at the backend. The extension supports 11 different input types, including: 

- Text field 
- Text area
- Date
- Yes/No
- Dropdown
- Multiple Select 
- Single Select with image
- Multi Select with image
- Media image
- Single File Attachment 
- Content 

Magento 2 Customer Attributes enables both store owners and customers to edit the attribute fields easily. Customers can edit the information they fill in the fields. At the same time, store owners can create a new customer account from the admin backend with similar information customers provide from the frontend. With input validation - an advanced feature in this extension, you can set the default types of input so that it’ll prevent the wrong forms of input customers fill in the form. You will totally get the right and useful information from customers without having to confirm with customers and fix them manually. 

Customer Attributes are well compatible with Mageplaza One Step Checkout. All the essential attributes will be added to the checkout page. The store owners can get more information to validate the purchase and process the payment quickly. 

## 1. How to install

Run the following command in Magento 2 root folder:

```
composer require mageplaza/module-customer-attributes-graphql
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

**Note:**
Magento 2 Customer Attributes GraphQL requires installing [Mageplaza Customer Attributes](https://www.mageplaza.com/magento-2-customer-attributes/) in your Magento installation.

## 2. How to use

To perform GraphQL queries in Magento, please do the following requirements:

- Use Magento 2.3.x or higher. Set your site to [developer mode](https://www.mageplaza.com/devdocs/enable-disable-developer-mode-magento-2.html).
- Set GraphQL endpoint as `http://<magento2-server>/graphql` in url box, click **Set endpoint**. 
(e.g. `http://dev.site.com/graphql`)
- To view the queries that the **Mageplaza Customer Attributes GraphQL** extension supports, you can look in `Docs > Query` in the right corner.  

## 3. Devdocs

- [Magento 2 Customer Attributes API & examples](https://documenter.getpostman.com/view/10589000/T1DqgH2g?version=latest)
- [Magento 2 Customer Attributes GraphQL & examples](https://documenter.getpostman.com/view/10589000/TVYJ5GmN)

Click on Run in Postman to add these collections to your workspace quickly. 

![Magento 2 Blog graphql pwa](https://i.imgur.com/lhsXlUR.gif)

## 4. Contribute to this module

Feel free to **Fork** and contribute to this module and create a pull request so we will merge your changes main branch.

## 5. Get Support

- Feel free to [contact us](https://www.mageplaza.com/contact.html) if you have any further questions.
- If you like this project, please give us a **Star** ![star](https://i.imgur.com/S8e0ctO.png)
