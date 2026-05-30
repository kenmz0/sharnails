<?php

interface UserRepositoryInterface
{
    public function getUserProfile($user_id);
    public function findByEmail($email);
    public function create($userData);
    public function getCredentials($email);
    public function createSession($sessionData);
    public function getSessionById($sessionId);
    public function revokeSession($sessionId);
}
?>