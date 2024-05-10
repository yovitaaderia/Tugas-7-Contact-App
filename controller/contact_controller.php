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
}
