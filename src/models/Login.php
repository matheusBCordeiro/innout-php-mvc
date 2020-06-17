<?php

loadModel('User');

class Login extends Model
{
    public function validate()
    {
        $errors = [];
        if (!$this->email) {
            $errors['email'] = 'Por favor, informe o email.';
        }
        if (!$this->password) {
            $errors['password'] = 'Por favor, informe a senha.';
        }
        if (count($errors) > 0) {
            throw new ValidationException($errors);
        }
    }

    public function checkLogin()
    {
        $this->validate();
        $user = User::getOne(['email' => $this->email]);
        if ($user) {
            if ($user->end_date)
                throw new AppException("Usuário está desligado da empresa.");

            if (password_verify($this->password, $user->password))
                return $user;
        }
        throw new AppException('Usário/Senha inválidos');
    }
}
