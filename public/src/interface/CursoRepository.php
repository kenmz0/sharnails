<?php
require_once 'CursoRepositoryInterface.php';
class CursoRepository implements CursoRepositoryInterface
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }


    public function getCursoCardById($curso_id)
    {
        $stmt = $this->db->prepare("SELECT id, name, tags, cover_url, description, modalidad FROM courses WHERE id = :curso_id AND is_active LIMIT 1");
        $stmt->execute(['curso_id' => $curso_id]);
        $curso = $stmt->fetch(PDO::FETCH_ASSOC);
        return $curso ?: null;
    }
    public function getCursoInfoById($curso_id)
    {

        $stmt = $this->db->prepare("SELECT id, name, tags, cover_url, description, price, discount, modalidad, gallery_cloudinary FROM courses WHERE id = :curso_id AND is_active LIMIT 1");
        $stmt->execute(['curso_id' => $curso_id]);
        $curso = $stmt->fetch(PDO::FETCH_ASSOC);
        return $curso ?: null;
    }
    public function getCursoList()
    {
        $stmt = $this->db->prepare("SELECT id, name, tags, cover_url, description, modalidad, slug FROM courses WHERE is_active");
        $stmt->execute();
        $cursos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $cursos ?: null;
    }

    public function getCursoBySlug($slug)
    {

        $stmt = $this->db->prepare("SELECT id, name, tags, cover_url, description, price, discount, modalidad, gallery_cloudinary FROM courses WHERE slug = :slug  LIMIT 1");
        $stmt->execute(['slug' => $slug]);
        $curso = $stmt->fetch(PDO::FETCH_ASSOC);
        return $curso ?: null;
    }

    public function userActiveEnrollment($user_id, $curso_id)
    {

        $stmt = $this->db->prepare("SELECT EXISTS (
                                        SELECT 1 
                                        FROM enrollments 
                                        WHERE course_id = :curso_id AND user_id = :user_id
                                        AND status = 'ACTIVA'
                                    );");
        $stmt->execute(['curso_id' => $curso_id, 'user_id' => $user_id]);
        $cursos = $stmt->fetch(PDO::FETCH_ASSOC);
        return $cursos ?: null;
    }
}

?>