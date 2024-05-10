<?php
class contact {
    static function select($id='') {
        global $conn;
        $sql = "SELECT * FROM tbcontact";
        if ($id!='') {
            $sql .= " WHERE id = $id";
        }
        $result = $conn->query($sql);
        $rows = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        $result->free();
        $conn->close();
        return $rows;
    }

    static function insert($data=[]) {
        extract($data);
        global $conn;
        $Owner = 'Yovita'; 
        $sql = "INSERT INTO tbcontact SET id = ?, no_HP = ?, Owner = ?"; 
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('iss', $id, $no_HP, $Owner); 
        $stmt->execute();
    
        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }
    

    static function update($data=[]) {
        extract($data);
        global $conn;
        $Owner = 'Yovita';
        $sql = "UPDATE tbcontact SET id = ?, no_HP = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('iss', $id, $no_HP, $Owner);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        $conn->close();
        return $result;
    }

    static function delete($id='') {
        global $conn;
        $result = '';
        $Owner = 'Yovita';
        if ($id == '') {
            $sql = "UPDATE tbcontact SET deleted_at = '$Owner'";
            $result = $conn->query($sql);
        }
        else {
            $sql = "UPDATE tbcontact SET deleted_at = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('si', $deleted_at, $id);
            $stmt->execute();
    
            $result = $stmt->affected_rows > 0 ? true : false;
        }
        return $result;
    }

    static function rawQuery($sql) {
        global $conn;
        $result = $conn->query($sql);
        $rows = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        $result->free();
        $conn->close();
        return $rows;
    }
}