<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DarkSun</title>
    <link rel="stylesheet" href="css/iconfont.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/dropdown.js"></script>
</head>
<body>
    <div class="header" id="header">
        <ul>
            <li><a href=""><i class="iconfont2">&#xe672;</i></a></li>
            <li class="header2"><a href="ranking.php">成绩排行</a></li>
            <li class="header2"><a href="grade_analysis_index.php">成绩分析</a></li>
            <li class="header2"><a href="comparison.html">成绩对比</a></li>
            <li class="header2"><a href="volunteer.html">志愿模拟</a></li>
            <li class="header2"><a href="#">留言板</a></li>
            <li class="header2"><a href="#">问题反馈</a></li>
            <li id="dropdown-button" class="header1"><a href="#"><i class="iconfont" onclick="dropdown()">&#xe68c;</i></a></li>
        </ul>
    </div>
    <div class="mydropdown" id = "mydropdown">
        <ul>
            <li class="dropdown-top"><a href="ranking.php">成绩排行</a></li>
            <li class="dropdown-a"><a href="grade_analysis_index.php">成绩分析</a></li>
            <li class="dropdown-a"><a href="comparison.html">成绩对比</a></li>
            <li class="dropdown-a"><a href="volunteer.html">志愿模拟</a></li>
            <li class="dropdown-a"><a href="#">留言板</a></li>
            <li class="dropdown-a"><a href="#">问题反馈</a></li>
        </ul>
    </div>
    <div class="top">
    <p>因高一年级考号格式过于抽象,地球科技还不能将高一年级成绩进行分类,所以该表不分组合、班级</p><hr>
    
    <?php
    $conn = new mysqli('mysql.sqlpub.com','freshoranges', '12fbdb4d335b0276');
    $sql = "use grade_1";
    $result = mysqli_query($conn,$sql);
    $sql = "SELECT * FROM `2023年5月金太阳联考` ORDER BY 赋分总分 DESC";
    $result = mysqli_query($conn,$sql);
    $i = 1;
    while($row = $result->fetch_assoc()) {
        echo '排名:'.$i++. "\t姓名:".$row['姓名']."\t总分:".$row['总分']."\t".$row['subject_1'].$row['subject_1_grade']."\t".$row['subject_2'].$row['subject_2_grade']."\t".$row['subject_3'].$row['subject_3_grade']."\t".$row['subject_4'].$row['subject_4_grade']."\t".$row['subject_5'].$row['subject_5_grade']."\t".$row['subject_6'].$row['subject_6_grade']."</br><hr>";
        
    } 
    ?>
    </div>
</body>
</html>
