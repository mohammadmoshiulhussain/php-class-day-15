<?php
namespace App\classes;
class Student
{
    protected $text;
    protected $students;
    protected $result = [];
    public function __construct($post = null)
    {
        $this->text = $post['search'];
    }

    public function getAllStudent()
    {
        return [
            0 => [
                'name' => 'Moshiul Hussain',
                'mobile' => '01712812980',
                'email' => 'mohammadmoshiulhussain@gmail.com',
                'address' => 'Bashundhara R/A'
            ],
            1 => [
        'name' => 'Zahid ',
        'mobile' => '01712812980',
        'email' => 'zahid@gmail.com',
        'address' => 'dhaka'
    ],
            2 => [
                'name' => 'samiul',
                'mobile' => '01712812980',
                'email' => 'samiul@gmail.com',
                'address' => 'cumilla'
            ],
        ];
    }
    public function getAllStudentBySearchText()
    {
        $this->students = $this->getAllStudent();
        foreach ($this->students as $student)
        {
            if($this->text == $student['name'])
            {
                return $this->result = $student;
                break;
            }
        }
        return $this->result;
    }
}