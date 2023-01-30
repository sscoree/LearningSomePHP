<?php

class PasswordValidator {

    public array $errors = [];

    public function validate($password): void
    {
        if (strlen($password) < 10) {
            $this->errors[] = "Password must be at least ten symbols long.";
        }

        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        preg_match_all('/[!@#\$%^&*(),.?":{}|<>]/', $password, $matches);

        if(!$uppercase) {
            $this->errors[] = "Password must contain uppercase letter.";
        }
        if(!$lowercase) {
            $this->errors[] = "Password must contain lowercase letter.";
        }
        if(!$number) {
            $this->errors[] = "Password must contain number.";
        }
        if(sizeof($matches[0]) < 2) {
            $this->errors[] = "Password must contain at least 2 special symbols (!@#\$%^&*(),.?\":{}|<>)";
        }
    }
}

$validator = new PasswordValidator();

try {
    $password = $argv[1];
    $validator->validate($password);
    if(count($validator->errors)>0){
        echo implode("\n",$validator->errors);
    }else{
        echo "Password is valid.";
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
