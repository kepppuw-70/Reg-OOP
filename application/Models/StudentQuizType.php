<?php


namespace Application\Models;


class StudentQuizType implements QuizTypeInterface
{
    private const TYPE = 'student';
    private $firstName;
    private $lastName;
    private $email;
    private $group;
    private $averageScore;
    private $address;

    public function getName()
    {
        return 'Student quiz';
    }

    public function getType()
    {
        return self::TYPE;
    }

    public function setQuestions()
    {
        
        $this->firstName = 'Ivan';
        $this->lastName = 'Ivanov';
        $this->email = 'qqq@q.qq';
        $this->group = '1';
        $this->averageScore = 'Tolmachev';
        $this->address = 'WWW';

        return $this;
    }


    public function toArray()
    {
        return [
            'name' => $this->getName(),
            'type' => $this->getType(),
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'address' => $this->address,
            'group' => $this->group,
            'trener' => $this->averageScore
        ];
    }
}
