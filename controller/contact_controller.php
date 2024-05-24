<?php

include_once 'model/contact_model.php';

class ContactController {
    static function add() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            header('Location: '.BASEURL.'dash_page/layout?url=view/contact_crud_page/add');
            exit;
        }
    }

    static function saveAdd() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            $post = array_map('htmlspecialchars', $_POST);
            $contact = Contact::insert([
                'phone_number' => $post['phone_number'], 
                'owner' => $post['owner'],
                'user_fk' => $_SESSION['user']['id']
            ]);
            
            if ($contact) {
                header('Location: '.BASEURL.'dashboard/contacts');
                exit;
            }
            else {
                header('Location: '.BASEURL.'contacts/add?addFailed=true');
                exit;
            }
        }
    }

    static function edit() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            header('Location: '.BASEURL.'dash_page/layout?url=view/contact_crud_page/edit&id='.$_GET['id']);
            exit;
        }
    }

    static function saveEdit() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            $post = array_map('htmlspecialchars', $_POST);
            $contact = Contact::update([
                'id' => $_GET['id'],
                'phone_number' => $post['phone_number'],
                'owner' => $post['owner']
            ]);
            if ($contact) {
                header('Location: '.BASEURL.'dashboard/contacts');
                exit;
            }
            else {
                header('Location: '.BASEURL.'contacts/edit?id='.$_GET['id'].'&editFailed=true');
                exit;
            }
        }
    }

    static function remove() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            $contact = Contact::delete($_GET['id']);
            if ($contact) {
                header('Location: '.BASEURL.'dashboard/contacts');
                exit;
            }
            else {
                header('Location: '.BASEURL.'dashboard/contacts?removeFailed=true');
                exit;
            }
        }
    }

    static function api() {
        $url = 'https://api.coinlore.net/api/tickers/';
        $json = file_get_contents($url);
        $data = json_decode($json, true);
        if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
            echo "Error decoding JSON: " . json_last_error_msg();
        } else {
            var_dump($data['data'][0]['id']);
        }
    }
}
