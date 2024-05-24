<?php

include_once 'config/conn.php';

class user {
    static function login($data=[]) {
        extract($data);
        global $conn;
    
        $email = $conn->real_escape_string($email);
    
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            
            if ($password === $user['password']) {
                return $user; 
            } else {
                return false; 
            }
        } else {
            return false; 
        }
    }  
    
    static function register($data=[]) {
        extract($data);
        global $conn;
        
        $inserted_at = date('Y-m-d H:i:s', strtotime('now'));
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users SET name = ?, email = ?, password = ?, inserted_at = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssss', $name, $email, $hashedPassword, $inserted_at);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }

    static function getPassword($email) { 
        global $conn;
        $sql = "SELECT password FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }

}