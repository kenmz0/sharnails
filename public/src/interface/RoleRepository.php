<?php
require_once 'RoleRepositoryInterface.php';
class RoleRepository implements RoleRepositoryInterface
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function findByCode($code)
    {
        $stmt = $this->db->prepare("SELECT id FROM roles WHERE code = :code LIMIT 1");
        $stmt->execute(['code' => $code]);
        $role = $stmt->fetch(PDO::FETCH_ASSOC);
        return $role ?: null;
    }
}
?>