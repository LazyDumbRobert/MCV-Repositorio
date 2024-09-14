<?php

namespace Model;

use PDO;

class Producto
{
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function textiles() {
        try {
            $sql = "SELECT * FROM productos";
            $stmt = $this->db->query($sql);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\Throwable $th) {
            echo "Error en la conexión: " . $th->getMessage();
        }
    }

    public function obtenerPorId($id) {
        $stmt = $this->db->prepare("SELECT * FROM productos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
