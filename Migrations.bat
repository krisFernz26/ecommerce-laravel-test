
php artisan migrate:fresh --path=database\migrations\2020_10_30_140547_create_users_type_table.php

php artisan migrate --path=database\migrations\2020_10_30_140650_create_users_table.php

php artisan migrate --path=database\migrations\2020_11_01_151249_create_product_types_table.php

php artisan migrate --path=database\migrations\2020_11_03_143646_create_payment_types_table.php

php artisan migrate --path=database\migrations\2020_11_31_091753_create_products_table.php

php artisan migrate --path=database\migrations\2020_11_31_101099_create_posts_table.php

php artisan migrate --path=database\migrations\2020_11_31_10109_create_payments_table.php
TIMEOUT \T 5

php artisan migrate --path=database\migrations\2020_11_31_101100_create_orders_table.php
PAUSE