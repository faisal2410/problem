<?php
class University
{
    public function __construct(protected $universityName, protected $universityAddress, protected $licenseNo)
    {
        
    }

    public function printUniversityDetails():void
    {
       printf("University Name: %s , University Address : %s , License No : %s  <br>", $this->universityName, $this->universityAddress, $this->licenseNo);
    }
}

