# magento-catalog-autolistmode
Auto List Mode
================
This simple magento extension change view mode from "grid" to "list" whenever there are less products than columns .

Facts
-----
- version: 1.0
- extension key: -
- extension on Magento Connect: -
- Magento Connect 1.0 extension key: -
- Magento Connect 2.0 extension key: -
- [extension on GitHub](https://github.com/bitbull-team/magento-catalog-autolistmode)

Description
-----------
This simple magento extension change view mode from grid to list when there numbers of products in cateory or in search results are less than columns.
More info here:
http://www.bitbull.it/blog/come-cambiare-automaticamente-la-visualizzazione-del-catalogo-in-funzione-dei-prodotti

Usage
-----
No configurations needed. If you want you can change range ("from" and "to" tags) in app/design/frontend/base/default/layout/company_catalog.xml  if you want enable this extension behaviour for a different number of products

The extension does not generate any modification of the database structure.

Compatibility
-------------
- Magento >= 1.9.1.0

Installation Instructions
-------------------------
1. Download the extension from extension page on Bitbucket and copy all the files into your document root.
2. Clear the cache, logout from the admin panel and then login again.

Uninstallation
--------------
No SQL query is need to be run after removing the extension files.

Support
-------
If you have any issue with this extension you can [open an issue on GitHub](https://github.com/bitbull-team/magento-catalog-autolistmode/issues)

Contribution
------------
Any contributions are highly appreciated. Ideas or code improvements can be discussed opening a [pull request on GitHub](https://help.github.com/articles/using-pull-requests)

Developer
---------
Marco Greco
[http://www.bitbull.it](http://www.bitbull.it)

Licence
-------
[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)

Copyright
---------
(c) 2016 Bitbull Srl
