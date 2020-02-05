# Test Task Encrypt/Decrypt Command Line
```shell
decrypt:message '"{private_key}"' '{message}'
```
This is artisan command. Then you must write like this:
```shell
php artisan decrypt:message '"{private_key}"' '{message}'
```

| Attribute   | Type     | Required | Description           |
|:------------|:---------|:---------|:----------------------|
| `message`  | text | yes   | Encrypted message which you received from **/getSecret** . |
| `private_key` | text | yes   | Generating with your public key for **/register** (this value should be urlencoded). |

Example command run:

```shell
php artisan decrypt:message '"-----BEGIN+RSA+PRIVATE+KEY-----%0AMIIEogIBAAKCAQEAocg8uy8XVkZHY8o51jvGcGb2%2FN%2FMrEX2qc1PQt%2BJ%2BIf1mRYW%0A3VZBgdnvmU%2BO2IV2fQYgQP%2B%2F2QyxNsc8rOdTWIqao%2FCkulRSGPrY3fNyAI%2FpWj%2F5%0AZZf7ErJxdwJW559TMrDSAQdTB3suB17exoHH8eyI%2Bu8dzl9sV07NEHuSrhjRY%2Bdv%0AB4UFu88hh9GzGqynod4udg9kYK9HYENC7kq6%2BWQfLYcjqBBr7UbtUEQwcY6J6sRK%0AHtbEPMkI%2BkW7yqJ%2BosZcS9Nt8avVBNUrDwvPua%2FIGD7hA9gmbpt%2B7xGga%2Fr6zk14%0Apik8BRNypBMPeiXWPx4W548zTMJzxTVTQ08JAwIDAQABAoIBABz2D4kiwPa81gLT%0ALM9hHAD7LbPPDIC6dZGoI0xBYB2RmTGydp1g15E7Rl0XlObF3ZQ8CIIaRmnAj%2BjS%0AedYqAw2SomQ%2Bq%2F5%2FIcM%2FBJuW%2FQ2Eta1mTmsVbejG8PDxBkWoi%2BhDJxTwDrkEIBVJ%0Asm%2Buw%2FBW%2B56QN7G9%2B1MV1DfjJzrrBYvhDIAw04FnJXdpVwVXS1Cc3dSbc%2BkczNaX%0AMtqG0GduXQvo244p504nTRfQANLuqaWt5D3T28%2Fu%2B%2BMkzB8u6chWAxGo9FkItpnE%0A0C6klJ4WCsXw%2FDxOER5rXn6UvgxY7VYavYv4Zso1RNsVpRz5ZE7NzDwy9XEtT%2Bow%0ApEQmlQECgYEA0ZpQec%2BVRltDUcfv0rYBIvUMpFowVpH7MnZDdy0H%2By%2F%2FXKPnRpbF%0AFGMQ%2B7D8mTOdixSAx6Bp03JXWMK%2B%2BvcJVVNEhrOWJeRqeHS3ChJnjD5VXMiK1E91%0A%2Batt7B0WstHyYX4Lu5p1DUpzjDUrcbBnMg%2FOpILEcNhb6qL%2Br8E%2BaiECgYEAxZgL%0ANcfWLi1tjJLIgvE7WIMX7Ftik9x6hRXmzTN6Mm1WWQzxfAfWAISRWF%2BKFhY9LjlW%0A7o5PDdxGqXMgH%2FcOXGMmdmBgwv1YwuQvBOTL%2Fku54zzxXKCbfQ1FNQk%2FK1%2FASse%2B%0AvB0eK7RWxxdOQaXRHgbwl3H9QquAyK%2Bvu8FetqMCgYAOOPli%2Bpn3dzPfNcDpPF5h%0AX91mvZPwG%2BG%2Br9WuHYkgG0apo5mK6aof0wUQ%2FxZ00tLK4C5I3XKw3V5d8IEDCIZC%0Amu7YcREsKw6qc8kDzvHly0kBjb4V3%2FpyYZaI4gRrR%2BG5idMD%2FNwadcXXargy87Rc%0A6kOsWA86VQQPrNW5WVSB4QKBgDe2DMMXGw5eBJsz75Drzx2%2FqIkdowepjGnlqPOG%0AZhe9uDDXc2bTFsWCmzBdj6N2lb1osVgFi8iOqOWx7gbVM5lc40VRGzcfE12v1In%2B%0AsH18gGbPkgXZyr1RdofjmYnzL1ZmRyLm2tDbwfPUYF4mEHX04vTwUMXxcRgkYNoB%0ARWEdAoGAJpKaH8YVcmJBT6%2F%2FEj%2BXB0KyVTRAaPlAMhZ6NLgrwsnVMHzmVu4vyO6E%0ASNlser5u1bbhPR1kheAJ4F9l3NtkjPBxYE4XAj1WKmXmAb7LRMx3Zy%2BECo6YeeSZ%0AQ8aXQA7dTSqDH%2FMuAqMw%2B3VQS4AM8BTP0ydW8mw6kS0QDWmbowE%3D%0A-----END+RSA+PRIVATE+KEY-----"' 'EzR2$NxzbQ8Ypw/voJ+uTS9TKxYKn5rNt6DDlR+yg2EJcweqGBROze1YPvLpNI8qzwQKqAkgJ1pSSyePmVoY2fGu996si9idRVwDF7hn0V8PsYhotsFfjS+I/LjDqq90y0Xxm3oBoXbWnGUQT0QnGZsKyDe5s06ZNTGIpxxHlQZYQvcMhJ4lnE7xPXGoDPPxVf16getOsgbmLek4FZGe+RHyAEbl5doACMQnjaMs2iCBKPR+7pEvKSYs5O5hv6Ti20DEypOZ39YfCy6/XHbKX9kPWJshfldbIVOfrsEcCncFr1Ryr5cx92V+Bhm1MTd9rw1OgpfaLSCE37uGwjIu6+ALRvA==$3vUCABTMcHI5U9ZtirSrV9A1b6KcGGgYyBe41crocNbMQ72JNVVDfD4TtjJlWdAd3QDX58A7dfNNdKUcw2RHdkiVN3tvY+a6igpaIkWwb/qjxeniZPNbSeVWIUNgWbI=$943f09bed49ebef6'
```
Example command answer:

```shell
Decrypt message: i love url)
```
