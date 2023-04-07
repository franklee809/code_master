<?php


// Sensitive Parameter Value Redaction Support
// PHP 8.2 adds a new built-in parameter Attribute named #[\SensitiveParameter] that PHP makes sure to redact the actual value in stack traces and error messages.

// Functions that accept passwords, private keys, or otherwise sensitive information can declare the parameters with the #[\SensitiveParameter] attribute. If the function calls within it causes a PHP error or an exception, the actual value passed to that parameter will be replaced with a \SensitiveparameterValue object.

// PHP's built-in functions such as password_hash and password_verify are already declared with the #[\SensitiveParameter] attribute.

class User {
    public function __construct(public string $name, #[\SensitiveParameter] public string $password )
    {
        throw new Exception('wrong password');
        // without sensitive parameter
        // #0 /Users/franklee/my_code-master/php/php@8.2/SensitiveParameter.php(18): User->__construct('frank', '12w345')

        // with sensitive parameter
        #0 /Users/franklee/my_code-master/php/php@8.2/SensitiveParameter.php(18): User->__construct('frank', Object(SensitiveParameterValue))
    }
}

new User('frank', '12w345');