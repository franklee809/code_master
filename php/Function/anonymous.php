<?php
$new = function () { return 'foo'; };

echo $new();
echo call_user_func(function () { return 'foo'; });
