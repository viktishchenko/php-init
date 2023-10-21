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
