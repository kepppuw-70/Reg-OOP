<?php


namespace Application\Models;


interface QuizTypeInterface
{
    public function getName();
    public function getType();
    public function setQuestions();
    public function toArray();

}
