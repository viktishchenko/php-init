[display data, check if empty →][def]

![Alt text](img/displayDBData.png)

```php
$sql = "SELECT *
  FROM article
//   WHERE id = 0 // data→nodata
  ORDER BY created_at;";
```

![Alt text](img/noData.png)

[def]: ../s3-display-db-data.php

[single page data →][def2]

![Alt text](img/singlePageData.png)

[def2]: ../s4-single-page-data.php

[query string →][def3]

![Alt text](img/queryString.png)

```php
// TO AVOID SQL INJECTION!!!
// validate id's passed in from Query String!!!
// check id's set (hide err msg abt id's) && number
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
```

[avoid sql injection validate incoming data →][def5]

[def5]: ../s4-single-page-data.php

![Alt text](img/singlePageData2.png)

[def3]: ../s5-querystring.php

[extract repeated code →][def4]

[def4]: ../s6-db-dry.php

[deny access →][def6]

![Alt text](img/denyAccess.png)

[def6]: ../includes/.htaccess

[get data from user (get/post) →][def7]

![Alt text](img/getPostData.png)

[def7]: ../form.php

[HTML5 form intro →][def8]

![Alt text](img/html5FormIntro.png)

[def8]: ../form.php

[insert data →](../new-article.php)

![Alt text](img/insertData.png)

- insert spec columns (val = num, order spec col)

![Alt text](img/insertSpecificColumns.png)

![Alt text](img/insertSpecificColumns2.png)

![Alt text](img/insertSpecificColumns3.png)

- insert multiple

![Alt text](img/insertMultiple.png)

![Alt text](img/insertMultiple2.png)

![Alt text](img/insertMultiple3.png)

- e.g.

![Alt text](img/insertMultiple4.png)

- e.g.

![Alt text](img/insertMultiple5.png)

- res

![Alt text](img/insertMultiple6.png)

- sql inj-on

![Alt text](img/sqlIngection.png)
