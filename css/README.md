#CSS Documentation

###Contents
1. style.css - Master import file
2. common.css - Styles used across entire site
3. nav.css - Styles for the headers & navigation
4. page.css - Styles that effect general page.php.tpl
5. front-page.css - Styles that effect the main landing page


#### CSS Formatting Rules   
- CSS must have 4 spaces/2 tabs with the bottom bracket below that last attribute. This makes scanning much easier. example:

```
.logo-container {
----float: right;
----width: 40%;
----}

```

- In the case a selector is nested, you can begin the nested portion 4 spaces below the main selector. example:

```
.logo-container {
----float: right;
----width: 40%;
----}
----.logo {
--------float: right;
--------width: 40%;
--------}

```
