<?php
namespace Application\Models;

class Check_in
{
    private $quizTypes = ['students', 'trener'];

    private $studentQuizType;
    private $teacherQuizType;

    private $outputDir;

    public function __construct($outputDir)
    {
        //echo '<br><br><p><b>class Check_in</b></p>';
        $this->studentQuizType = new StudentQuizType();
        $this->teacherQuizType = new TeacherQuizType();

        $this->outputDir = $outputDir;
        //echo '<br><br><p><b>$outputDir - ' . $this->outputDir . '</b></p>';
    }

    public function metodCheck_in()
    {   
    	  $output = [];
    	  if (file_exists($this->outputDir)) {
    	     $str = file_get_contents($this->outputDir . '/data.json');
           $output = json_decode($str, true);
           $output[] = $this->getQuestionsByType($this->quizTypes[1]);
        } else {
        	  mkdir($this->outputDir);
        	  $output[] = $this->getQuestionsByType($this->quizTypes[1]);
        }
                
        $json = json_encode($output, JSON_UNESCAPED_UNICODE);
        if ($_POST['check-in'] == 'check') {
          
           file_put_contents($this->outputDir . '/data.json', $json);
           //echo '<br><br><br>';
           //var_dump($output);
        }
    }

    private function getQuestionsByType($type)
    {
        switch ($type) {
            case 'students':
                return $this->studentQuizType->setQuestions()->toArray();
            case 'trener':
                return $this->teacherQuizType->setQuestions()->toArray();
            default:
                return [];
        }
    }
}
        