<?php


namespace Application\Models;


class TeacherQuizType implements QuizTypeInterface
{
    private const TYPE = 'trener';
    private $lastNameUkr;
    private $firstNameUkr;
    private $patronymicUkr;
    private $lastNameIngl;
    private $firstNameIngl;
    private $patronymicIngl;
    private $sex;
    private $birth;
    private $rank;
    private $certificait;
    private $club;
    private $phone;
    private $email;
    private $camp;
    
    public function getName()
    {
        return 'Trener quiz';
    }

    public function getType()
    {
        return self::TYPE;
    }

    public function setQuestions()
    {
        $this->lastNameUkr = $_POST['last_name_ukr'];
        $this->firstNameUkr = $_POST['first_name_ukr'];
        $this->patronymicUkr = $_POST['patronymic_ukr'];
        $this->lastNameIngl = $_POST['last_name_ingl'];
        $this->firstNameIngl = $_POST['first_name_ingl'];
        $this->patronymicIngl = $_POST['patronymic_ingl'];
        $this->sex = $_POST['sex'];
        $this->birth = $_POST['birth_day'] . '/' . $_POST['birth_munz'] . '/' . $_POST['birth_yar'];
        $this->rank = $_POST['rank'];
        if (!empty($_POST['certificait_ai'])) {
            $certificait_ai = '/' . $_POST['certificait_ai'];
        }
        if (!empty($_POST['certificait_i'])) {
            $certificait_i = '/' . $_POST['certificait_i'];
        }
        if (!empty($_POST['certificait_si'])) {
            $certificait_si = '/' . $_POST['certificait_si'];
        }
        if (!empty($_POST['certificait_mi'])) {
            $certificait_mi = '/' . $_POST['certificait_mi'];
        }
        if (!empty($_POST['certificait_dc'])) {
            $certificait_dc = '/' . $_POST['certificait_dc'];
        }
        if (!empty($_POST['certificait_ao'])) {
            $certificait_ao = '/' . $_POST['certificait_ao'];
        }
        if (!empty($_POST['certificait_rc'])) {
            $certificait_rc = '/' . $_POST['certificait_rc'];
        }
        $this->certificait = $certificait_ai . $certificait_i . $certificait_si . $certificait_mi . $certificait_dc . $certificait_ao . $certificait_rc .'/';
        $this->club = $_POST['club'];
        $this->phone = $_POST['phone'];
        $this->email = $_POST['email'];
        $this->camp = $_POST['camp_day'] . '/' . $_POST['camp_munz'] . '/' . $_POST['camp_yar'];
        
        return $this;
    }

    public function toArray()
    {
        return [
            'name' => $this->getName(),
            'type' => $this->getType(),
            'first_name_ukr' => $this->firstNameUkr,
            'patronymic_ukr' => $this->patronymicUkr,
            'last_name_ukr' => $this->lastNameUkr,
            'first_name_ingl' => $this->firstNameIngl,
            'patronymic_ingl' => $this->patronymicIngl,
            'last_name_ingl' => $this->lastNameIngl,
            'sex' => $this->sex,
            'birth' => $this->birth,
            'rank' => $this->rank,
            'certificait' => $this->certificait,
            'club' => $this->club,
            'phone' => $this->phone,
            'email' => $this->email,
            'camp' => $this->camp,
        ];
    }
}
