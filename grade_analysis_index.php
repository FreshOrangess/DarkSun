<?php
$conn = new mysqli('mg.707077.xyz','s2866525', 'uiXT12mtIA');
$sql = "use s2866525";
$result = mysqli_query($conn,$sql);
$sql = "set names utf8";
$result = mysqli_query($conn,$sql);
$sql = "SELECT * FROM `2023年3月金太阳联考(仅高二1班)` ORDER BY 赋分总分 DESC";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI成绩分析</title>
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <script src="js/dropdown.js"></script>
    <script src="js/select.js"></script>
</head>
<script>
    function lodding() {
        document.getElementById('lodding').style.display = 'block';
    }
</script>
<body>
    <div>
        <select id="method">
            <option value="sql">从数据库中选择成绩</option>
            <option value="self">自定义成绩</option>
        </select>
    </div>
    <div>
        <div id="exam">
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
                    $i = 1;
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
        <div id="grade_div">
            <form method="post" action="grade_analysis.php">
                <select name="grade" id="grade">
                    <?php
                    $conn = new mysqli('mg.707077.xyz','s2866525', 'uiXT12mtIA');
                    $sql = "use s2866525";
                    $result = mysqli_query($conn,$sql);
                    $sql = "set names utf8";
                    $result = mysqli_query($conn,$sql);
                    $sql = "SELECT * FROM `2023年3月金太阳联考(仅高二1班)` ORDER BY 赋分总分 DESC";
                    $result = mysqli_query($conn,$sql);
                    while($row = $result->fetch_assoc()) {
                        echo '<option value=姓名:'.$row['姓名'].",赋分总分:".$row['赋分总分'].",原始分总分:".$row['原始分总分'].",数学:".$row['数学'].",语文:".$row['语文'].",英语:".$row['英语'].",物理:".$row['物理'].",生物原始分:".$row['生物原始分'].",生物赋分成绩:".$row['生物赋分成绩'].",化学原始分:".$row['化学原始分'].",化学赋分成绩:".$row['化学赋分成绩'].'>姓名:'.$row['姓名']."\t赋分总分:".$row['赋分总分']."\t原始分总分:".$row['原始分总分']."\t数学:".$row['数学']."\t语文:".$row['语文']."\t英语:".$row['英语']."\t物理:".$row['物理']."\t生物原始分:".$row['生物原始分']."\t生物赋分成绩:".$row['生物赋分成绩']."\t化学原始分:".$row['化学原始分']."\t化学赋分成绩:".$row['化学赋分成绩'].'</option>';
                    } 
                    
                    ?>
                </select>
                <input type="submit" value="开始分析" onclick="lodding()">
            </form>
        </div>


    <div id='select_self' style="display:none">
        <form action="grade_analysis.php" method="GET">
            姓名:<input type="text" name="student_name">
            赋分总分:<input type="text" name="bonus_total_score">
            原始分总分:<input type="text" name="original_total_score">
            数学:<input type="text" name="math_score">
            语文:<input type="text" name="chinese_score">
            英语:<input type="text" name="english_score">
            物理:<input type="text" name="physics_score">
            生物原始分:<input type="text" name="biology_original_score">
            生物赋分成绩:<input type="text" name="biology_bonus_score">
            化学原始分:<input type="text" name="chemistry_original_score">
            化学赋分成绩:<input type="text" name="chemistry_bonus_score">
            <input type="submit" value="开始分析" onclick="lodding()">
        </form>
    </div>
    <div id="lodding" style="display: none;">
        正在分析中，请稍候...
    </div>
</body>
</html>
