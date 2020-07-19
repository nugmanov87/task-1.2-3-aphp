<?php


namespace Students;


class Student
{
    public string $name;
    public string $lastName;
    public string $faculty;
    public string $course;


    public function __construct(string $name, string $lastName, string $faculty, string $course)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->faculty = $faculty;
        $this->course = $course;
    }

    public function showInfo():string
    {
        return (
            "<tr>
               <td>$this->name</td>
               <td>$this->lastName</td>
               <td>$this->faculty</td>
               <td>$this->course</td>
             </tr>"
        );
    }

    public function changeCourse(string $newCourse): string
    {
        return $this->course = $newCourse;
    }
}