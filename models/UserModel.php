<?php
require_once 'Model.php';

class UserModel extends Model {
    public function getAll() {
        $sql = "SELECT * FROM user";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM user WHERE User_ID = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function create($data) {
        $stmt = $this->db->prepare("INSERT INTO user (Nama, Alamat, Kontak) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $data['Nama'], $data['Alamat'], $data['Kontak']);
        return $stmt->execute();
    }

    public function update($id, $data) {
        $stmt = $this->db->prepare("UPDATE user SET Nama = ?, Alamat = ?, Kontak = ? WHERE User_ID = ?");
        $stmt->bind_param("sssi", $data['Nama'], $data['Alamat'], $data['Kontak'], $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM user WHERE User_ID = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>