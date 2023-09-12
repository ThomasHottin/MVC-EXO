<?php
require 'model/Model.php';

class ContactModel extends Model
{
    public function getAllContacts()
    {

        $query = "SELECT * FROM contact";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function UpdateContacts($idContact, $updateNom, $updatePrenom, $updateTel, $updateMail)
    {
        $sqlUpdate = "UPDATE contact SET nom = :updateNom, prenom = :updatePrenom, tel = :updateTel, mail = :updateMail WHERE id = :idContact";
        $stmtUpdate = $this->db->prepare($sqlUpdate);
        $stmtUpdate->bindValue(':idContact', $idContact, PDO::PARAM_INT);
        $stmtUpdate->bindValue(':updateNom', $updateNom, PDO::PARAM_STR);
        $stmtUpdate->bindValue(':updatePrenom', $updatePrenom, PDO::PARAM_STR);
        $stmtUpdate->bindValue(':updateTel', $updateTel, PDO::PARAM_STR);
        $stmtUpdate->bindValue(':updateMail', $updateMail, PDO::PARAM_STR);
        $stmtUpdate->execute();
    }




    public function InsertContacts($nom, $prenom, $tel, $mail)
    {
        $sqlInsert = "INSERT INTO contact (nom, prenom, tel, mail) VALUES (:nom, :prenom, :tel, :mail)";
        $stmt = $this->db->prepare($sqlInsert);
        $stmt->bindValue(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $stmt->bindValue(':tel', $tel, PDO::PARAM_STR);
        $stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
        $stmt->execute();
    }



    public function DeleteContacts($idContact)
    {
        $sqlDelete = "DELETE FROM contact WHERE id = :idContact";
        $stmtDelete = $this->db->prepare($sqlDelete);
        $stmtDelete->bindValue(':idContact', $idContact, PDO::PARAM_INT);
        $stmtDelete->execute();
    }



    public function getAllContactsID($idContact)
    {
        $sqlIdContact = "SELECT * FROM contact WHERE id = :idContact";
        $stmt = $this->db->prepare($sqlIdContact);
        $stmt->bindValue(':idContact', $idContact, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
