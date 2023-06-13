$(document).ready(function(){
    $("#table").change(function(){
      var table = $(this).children("option:selected").val();
      if(table == '2023年3月金太阳联考(仅高二1班)'){
        $("#class_div").css('display','none');
        $.ajax({
          type: "post",
          url: "ranking_server.php",
          dataType: 'json',
          data: {exam:table,class:1},
          success: function (response) {
            document.getElementById("grades").innerHTML = '';
            response.forEach(function(element) {
            document.getElementById("grades").innerHTML = document.getElementById("grades").innerHTML+element
            }); 
          }
        });
      }
      else{
        $("#class_div").css('display','block');
        $.ajax({
          type: "post",
          url: "ranking_server.php",
          dataType: 'json',
          data: {exam:table,class:1},
          success: function (response) {
            document.getElementById("grades").innerHTML = '';
            response.forEach(function(element) {
            document.getElementById("grades").innerHTML = document.getElementById("grades").innerHTML+element
          }); 
          }
        });
      }
    });

    $("#class").change(function() { 
      var class_number = $('#class').children("option:selected").val();
      var table = $('#table').children("option:selected").val();
      $.ajax({
        type: "post",
        url: "ranking_server.php",
        dataType: 'json',
        data: {exam:table,class:class_number},
        success: function (response) {
          document.getElementById("grades").innerHTML = '';
          response.forEach(function(element) {
          document.getElementById("grades").innerHTML = document.getElementById("grades").innerHTML+element
        }); 
        }
      });
      
    });
  
  });