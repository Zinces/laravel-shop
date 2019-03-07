<?php

return [
    'alipay' => [
        'app_id'         => '2016092700611256',
        'ali_public_key' =>'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0RSoMW2185ehNLLeNZSZc2emEnYsA1n2WKoVX6g8GV8Tgtea+yO+emxyDY8q26uF8BuFzxkOsr3NAmNYA+Sx+ORFItD2OP6+MJVWRv1dHpai2kBxD9NrtGrYBKjLcmevkMChkspCmhMej50rjjOhC0nx23kA7Zc8grmTbnAzPmGAfASidn60pxLJOwfMPkC+teqRbEDZxlpks979Oj7vs0VGviSVym4tO50xjKXgiddQZun8pBx9ly8Gh0EZ66+8qiJhJAw2hssf3YPncAsJpIFFt5iaCoBha3ejISI+uDruE1/C35btc4DJ+27wCzIUoODSH+FLGWLPpLVkIb2QSQIDAQAB',
        'private_key'    =>'MIIEpAIBAAKCAQEAqGySFknLWKZ3RaPPZDVyMUwwt9pP8qncjeQUjeRtaXrcMM0NdYzc1W1Tn9DQ3QejbvhJaG9hG98QcD4trB2Ck0uKkmEz00HGuCAeuntP7yEijqWXFoMiHaHNzxZescgxFSqfxQYJk9zyDIpDuThwuRAunsvoW7dkSd0nagasS3TKNCHzziSU0ObtAvdO3N/mVA4hsX+DWeXw6viQIiNjWRIQC8fT5ZUk5PSR4xYrn3yjC5iTQrkiFgVkoXSGr8AwUNlLRImkVbPhe2lssLFpYawJBrlEaQwqEWrrQOQEgWGe0TIdWqTVhxyjB16epi0wS4MdaGyjvzNV/Cxsb0ysEwIDAQABAoIBAQCft53t3vskTXCMLOTubbSlxU/p+fCY+bY7JJDNYlLTlXwcF0htMjD1gKCtzLNU9/pnsLLEg+L+MFIBbyWWs8Fw91EosV8ZNqZBU8xwIaJS7gQ8bBHUenSuzxNCED+qrmLFZM9wYuJQQ1WSyMeibUCQbyUW1924pDhJx5yp8jwPrN56pkxoaujBq2dXVVLQQYlocCm0b6T6f5BhOPF7qivwd+eJ+68dmokjhC9/aqGY1IaihrREUSHXHgse/BlM9moXYIVpM26/v/ifkXi0aP9yoKJl2eJoTuYZy6AY9CPDmf5H655NkxJPLQxQx/HMh7bOknyGWkCFondYqd39aYVJAoGBANKCbLsx6aM4nGlmr+E/rgesMkhudRzzJgnRt4xRakwQWon0WU9QAjVtewatNwEGgP4CL49b3cn8TWXYNUrQMZJtPke/4MqDRyr8peaa8C0gyTAEmdnHKkDYrkDoTZHCiyB8EMk3kHSMvstUuobxDAP6bPL/3+tIdKTPeAEW1VstAoGBAMzR8fUfoibqKH5/7J3+t8vnz2IzMm6hfHkYDdC3CIz4GylWXOdyR08naOxLwZQfrqf6RFKmun9d/FBwiEb8hzO8WxxCRJ24DQ6MMzJLR7JiLTbjuwg98E005A2Rx+dYyY9VIn1FGAdixdP7qfXBdL6sJ8EDRxEIroQuSR8XTaw/AoGAF2MYE2ADNfgHIIqhBaRegEm4OGXVKwc0dajP/I3bAmJavLLh7TbVV/w2y9IYp0uCrzWs9P9ez57xNlxj51DkAQGUBsKhhb45/OOextT10/2tfGE2eoRvBE9OZLWqUIRNkqlV8BT1Po2YcNyT8IP9Mr/ytLiKtwgQtXK7QVu5Dm0CgYBaf4UWFqUR5rJ/ukw1Px+8s68ZJ5/n6+hQpQUtrEHV76YorKUeCothePtONObSaPFF/TmE/3A16LQcYqyEGP4wKNBk+w7QVUtHm0Dfvw1tzx1FPHgeWye7JVyCdmBKYxuj/izgBtBoKwdX88GT+ad4vB5QlP8okppxgvYCC8zhBwKBgQCR97/C1bMogD5+7glG6URvseHspSQAX+qlSLPVbfZaaqrqz/URClh6Q8ih+JDMySs3fy74DG5YDVMS9oXM+0PBDOvbW+FNfzmyB1txv6yW2B0qS9catm1Hs3e+1xL6C93VqAAdRcxzcakT9rPsfimR31h2yMhuSroevpBY3WYJAA==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];