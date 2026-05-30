<?php
require_once SRC_PATH . '/database/Database.php';
require_once SRC_PATH . '/interface/CursoRepository.php';

class CursoServices
{
    private static ?CursoRepositoryInterface $cursoRepository = null;

    private static function initUserRepository()
    {
        if (self::$cursoRepository === null) {
            self::$cursoRepository = new CursoRepository(Database::getConnection());
        }
    }
    public function __construct()
    {
        $db = Database::getConnection();
        self::$cursoRepository = new CursoRepository($db);
    }

    public function getCursoCard($curso_id): array
    {
        return self::$cursoRepository->getCursoCardById($curso_id);
    }

    public function getCursoInfo($curso_id): array
    {
        return self::$cursoRepository->getCursoInfoById($curso_id);
    }

    public static function getCursoBySlug($slug): array
    {
        self::initUserRepository();
        $result = self::$cursoRepository->getCursoBySlug($slug);
        return $result;
    }

    public static function getCursos(): array
    {
        self::initUserRepository();
        return self::$cursoRepository->getCursoList();
    }


    public function userWithActivEnrollment($user_id, $curso_id): array
    {
        return self::$cursoRepository->userActiveEnrollment($curso_id, $user_id);
    }


}
?>