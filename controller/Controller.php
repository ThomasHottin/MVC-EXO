<?php

require_once 'model/ContactModel.php';

class Controller
{

    private $contactModel;

    public function __construct()
    {
        $this->contactModel = new ContactModel();
    }

    public function index()
    {
        $tab = $this->contactModel->getAllContacts();
        include 'view/base.php';
    }

    public function modif()
    {
        $idContact = $_GET['idModif'];
        $tab1 = $this->contactModel->getAllContactsID($idContact);
        include 'view/modif.php';
    }

    public function new()
    {
        include 'view/new.php';
    }

    public function UpdateContacts($idContact, $updateNom, $updatePrenom, $updateTel, $updateMail)
    {

        $this->contactModel->UpdateContacts($idContact, $updateNom, $updatePrenom, $updateTel, $updateMail);
    }

    public function InsertContacts($nom, $prenom, $tel, $mail)
    {

        $this->contactModel->InsertContacts($nom, $prenom, $tel, $mail);
    }

    public function  DeleteContacts($idContact)
    {
        $this->contactModel->DeleteContacts($idContact);
    }
}



$controller = new Controller();
$model = new ContactModel();

if (isset($_GET['page'])) {
} else {

    $controller->index();
}

if (isset($_POST['submitUpdate'])) {

    $idContact = $_POST['submitUpdate'];

    header("Location: index.php?page=Modifier&idModif=$idContact");
}


if (isset($_POST['Cree'])) {
    header("Location: index.php?page=New");
}

if (isset($_GET['page']) && ($_GET['page'] == 'Modifier')) {
    $controller->modif();
}

if (isset($_GET['page']) && ($_GET['page'] == 'New')) {
    $controller->new();
}

if (isset($_POST['submitContact'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel = $_POST['tel'];
    $mail = $_POST['mail'];

    $model->InsertContacts($nom, $prenom, $tel, $mail);

    header("Location: index.php");
}


if (isset($_POST['submitModif'])) {
    $idContact = $_GET['idModif'];
    $updateNom = $_POST['nom'];
    $updatePrenom = $_POST['prenom'];
    $updateTel = $_POST['tel'];
    $updateMail = $_POST['mail'];


    $model->UpdateContacts($idContact, $updateNom, $updatePrenom, $updateTel, $updateMail);

    header("Location: index.php");
}

if (isset($_POST['supp'])) {

    $idContact = $_POST['idSupp'];

    $model->DeleteContacts($idContact);
}
