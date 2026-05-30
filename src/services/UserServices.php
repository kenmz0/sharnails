<?php
require_once SRC_PATH . '/database/Database.php';
require_once SRC_PATH . '/interface/UserRepository.php';

class UserServices
{
    private static ?UserRepositoryInterface $userRepository = null;

    private static function initUserRepository()
    {
        if (self::$userRepository === null) {
            self::$userRepository = new UserRepository(Database::getConnection());
        }
    }
    public function __construct()
    {
        $db = Database::getConnection();
        self::$userRepository = new UserRepository($db);
    }

    public function getUserData($user_id): array
    {
        return UserServices::$userRepository->getUserProfile($user_id);
    }

}
?>