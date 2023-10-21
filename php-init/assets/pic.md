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
