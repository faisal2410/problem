<?php

class Teacher extends University
{
    public function __construct(private $teacherName, private $teacherAge, private $subject,   private University $university)
    {
        // $this->universityName = $university->universityName;
        // $this->universityAddress = $university->universityAddress;
        // $this->licenseNo = $university->licenseNo;

        parent::__construct(
            $university->universityName,
            $university->universityAddress,
            $university->licenseNo
        );

    }

    public function printTeacherDetails():void
    {
        printf("Teacher Name : %s , Teacher Age : %s , Subject : %s <br>", $this->teacherName, $this->teacherAge, $this->subject);
    }
}