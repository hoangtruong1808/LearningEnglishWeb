<?php
class unit_Controller extends Controller{
    public function __construct(){
        parent::__construct();
       
    }
    public function countunit()
    {
        if(isset($_GET['url'])){
            $url=rtrim($_GET['url'],"/");
            
            $url=explode('/',$url);
            $c=$url[2];
           
            if($c!=null)
            {
                $course=$this->LoadModel("course")->getCourse("select * from course where CourseName='$c'");
                if($course!=null)
                {
                    //lấy id để count số dượng unit
                    $id=$course->__getCourse();
                    $countunit= $this->LoadModel("unit")->countunit("select count(UnitID) from unit WHERE CourseID='$id'");
                    return $countunit;
                }
            }
        }


    }
    public function autoload()
    {
        global $unit;
        global $count;// số lượng unit 
        global $id;// mã khóa học (courseID)
        global $session; //
        //load unit1 của course
        if(isset($_GET['url'])){
            $url=rtrim($_GET['url'],"/");
            
            $url=explode('/',$url);
            $c=$url[2];
           
            if($c!=null)
            {
                $course=$this->LoadModel("course")->getCourse("select * from course where CourseName='$c'");
                if($course!=null)
                {
                    //lấy id để count số dượng unit
                    $id=$course->__getCourse();
                    $unit= $this->LoadModel("unit")->getunit("select * from unit WHERE CourseID='$id' and UnitName='Unit 1'");
                    
                }
            }
        }

        //end----------

        // load count unit
        $count= $this->countunit();
        //end----------

        // load session (load tất cả các sesion của unit1 -> course) sel
        $session=$this->LoadModel("sessions")->getall("SELECT * from course, unit, session where course.CourseID=unit.CourseID AND unit.UnitID=session.UnitID AND unit.UnitName='Unit 1'And course.CourseID='$id' ");
        
        
        //end----------
        
        // render views 
        include("views/layout.php"); 
        //end------------

              
        
    }
    public function loadunit()
    {
        global $unit;
        global $count;// số lượng unit 
        global $id;// mã khóa học (courseID)
        global $session; //
        global $uniturl;// tên unit trên thanh địa chỉ
        //load unit1 của course
        if(isset($_GET['url'])){
            $url=rtrim($_GET['url'],"/");
            
            $url=explode('/',$url);
            $c=$url[2];
            $uniturl=$url[3];
            if($c!=null)
            {
                $course=$this->LoadModel("course")->getCourse("select * from course where CourseName='$c'");
                if($course!=null)
                {
                    //lấy id để count số dượng unit
                    $id=$course->__getCourse();
                    $unit= $this->LoadModel("unit")->getunit("select * from unit WHERE CourseID='$id' and UnitName='$uniturl'");
                    
                }
            }
        }

        // load count unit
        $count= $this->countunit();
        //end----------

        // load session (load tất cả các sesion của unit1 -> course) sel
        $session=$this->LoadModel("sessions")->getall("SELECT * from course, unit, session where course.CourseID=unit.CourseID AND unit.UnitID=session.UnitID AND unit.UnitName='$uniturl'And course.CourseID='$id' ");
        
        
        //end----------
        
        // render views 
        include("views/layout.php"); 
        //end------------
    }
}
?>