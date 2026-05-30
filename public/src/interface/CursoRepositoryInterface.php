<?php

interface CursoRepositoryInterface
{
    public function getCursoCardById($curso_id);
    public function getCursoInfoById($curso_id);
    public function getCursoList();
    public function getCursoBySlug($slug);
    public function userActiveEnrollment($user_id, $curso_id);
}
?>