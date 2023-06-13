<?php
    $exam = $_POST['exam'];
    $class = $_POST['class'];
    $grades = array();
    if($_POST['exam']=="2023年3月金太阳联考(仅高二1班)"){
        $conn = new mysqli('mg.707077.xyz','s2866525', 'uiXT12mtIA');
        $sql = "use s2866525";
        $result = mysqli_query($conn,$sql);
        $sql = "set names utf8";
        $result = mysqli_query($conn,$sql);
        $sql = "SELECT * FROM `2023年3月金太阳联考(仅高二1班)` ORDER BY 赋分总分 DESC";
        $result = mysqli_query($conn,$sql);
        $i = 1;
        while($row = $result->fetch_assoc()) {
            array_push($grades,'排名:'.$i++. "\t姓名:".$row['姓名']."\t赋分总分:".$row['赋分总分']."\t原始分总分:".$row['原始分总分']."\t数学:".$row['数学']."\t语文:".$row['语文']."\t英语:".$row['英语']."\t物理:".$row['物理']."\t生物原始分:".$row['生物原始分']."\t生物赋分成绩:".$row['生物赋分成绩']."\t化学原始分:".$row['化学原始分']."\t化学赋分成绩:".$row['化学赋分成绩'].'<br><hr>'); 
        } 
        echo json_encode($grades);
    }
    else{
        $conn = new mysqli('mg.707077.xyz','s2866525', 'uiXT12mtIA');
        $sql = "use s2866525";
        $result = mysqli_query($conn,$sql);
        $sql = "set names utf8";
        $result = mysqli_query($conn,$sql);
        $sql = "SELECT * FROM ".$exam." ORDER BY 赋分总分 DESC";
        $result = mysqli_query($conn,$sql);
        $i = 1;
        while($row = $result->fetch_assoc()) {
            if(substr($row['考号'],7,1) == $class){
                array_push($grades,'排名:'.$i++. "\t姓名:".$row['姓名']."\t总分:".$row['总分']."\t".$row['subject_1'].$row['subject_1_grade']."\t".$row['subject_2'].$row['subject_2_grade']."\t".$row['subject_3'].$row['subject_3_grade']."\t".$row['subject_4'].$row['subject_4_grade']."\t".$row['subject_5'].$row['subject_5_grade']."\t".$row['subject_6'].$row['subject_6_grade']."</br><hr>");
            }
            
        } 
        echo json_encode($grades);
    }

?>