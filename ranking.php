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
    <script src="js/select_exam.js"></script>
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
        <div>
            考试:
            <select name="table" id="table">
                <?php
                    $conn = new mysqli('mg.707077.xyz','s2866525', 'uiXT12mtIA');
                    $sql = "use s2866525";
                    $result = mysqli_query($conn,$sql);
                    $sql = "set names utf8";
                    $result = mysqli_query($conn,$sql);
                    $sql = "SHOW TABLES;";
                    $result = mysqli_query($conn,$sql);
                    while($row = $result->fetch_assoc()) {
                        echo "<option value=".$row['Tables_in_s2866525'].">".$row['Tables_in_s2866525']."</option>";
                    }
                ?>
            </select>
        </div>
        <div class="class_div" id="class_div" style="display: none;">
            班级:
            <select name="class" id="class">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
        </div>

          <div class="grades" id="grades">
               <?php
                    $sql = "SELECT * FROM `2023年3月金太阳联考(仅高二1班)` ORDER BY 赋分总分 DESC";
                    $result = mysqli_query($conn,$sql);
                    $i = 1;
                    while($row = $result->fetch_assoc()) {
                         echo '排名:'.$i++. "\t姓名:".$row['姓名']."\t赋分总分:".$row['赋分总分']."\t原始分总分:".$row['原始分总分']."\t数学:".$row['数学']."\t语文:".$row['语文']."\t英语:".$row['英语']."\t物理:".$row['物理']."\t生物原始分:".$row['生物原始分']."\t生物赋分成绩:".$row['生物赋分成绩']."\t化学原始分:".$row['化学原始分']."\t化学赋分成绩:".$row['化学赋分成绩'].'<br><hr>';
                    }
               ?>    
          </div>
    </div>
</body>
</html>
