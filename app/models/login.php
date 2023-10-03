<?php

class login{
private $db;
public function __construct(){

    $this->db = MySQLdb::getInstance()->getDatabase();
}

public function existsEmail($email)
    {
        $sql = 'SELECT * FROM users WHERE email=:email';
        $query = $this->db->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->execute();

        return $query->rowCount();
    }

    public function createUser($data)
    {

        $response = false;
        if ( ! $this->existsEmail($data['email'])) {
            //Si no existe se inserta
        } else {
            //Si ya existe, no hace nada

            $password = hash_hmac('sha512', $data['password1'], 'elperrodesanroque');

            $sql = 'INSERT INTO users(first_name, last_name_1, last_name_2, email, address, city, state, postcode, country, password) VALUES (:first_name, :last_name_1, :last_name_2, :email, :address, :city, :state, :postcode, :country, :password)';

            $params = [
                ':first_name' => $data['first_name'],
                ':last_name_1' => $data['last_name_1'],
                ':last_name_2' => $data['last_name_2'],
                ':email' => $data['email'],
                ':address' => $data['address'],
                ':city' => $data['city'],
                ':state' => $data['state'],
                ':postcode' => $data['postcode'],
                ':country' => $data['country'],
                ':password' => $password,
            ];

            $query = $this->db->prepare($sql);
            $response = $query->execute($params);
        }


        return $response;
    }
}