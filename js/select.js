$(document).ready(function(){
    $("#method").change(function(){
      $("#class_div").css('display','none');
      var method = $('#method').children("option:selected").val();
      if(method == "sql"){
        $("#grade_div").css('display','block');
        $("#exam").css('display','block');
        $('#exam option:eq(0)').prop('selected', true);
        $("#select_self").css('display','none');
        $.ajax({
          type: "post",
          url: "grade_analysis_server.php",
          data: {exam:'2023年3月金太阳联考(仅高二1班)',class:1},
          dataType: "json",
          success: function (response) {
            document.getElementById('grade').innerHTML =""
            response.forEach(function(element) {
              const optionElement = document.createElement('option');
              optionElement.text = element;
              optionElement.value = element;
              document.getElementById('grade').add(optionElement)
            }); 
          }
        });
      }
      else if(method == "self"){
        // 如果选中了第二个选项，则执行某些操作
        $("#exam").css('display','none');
        $("#select_self").css('display','block');
        $("#grade_div").css('display','none');
      }
    });
    $("#table").change(function () { 
      var table = $('#table').children("option:selected").val();
      if(table != "2023年3月金太阳联考(仅高二1班)"){
        $("#class_div").css('display','block');
        $('#class option:eq(0)').prop('selected', true);
        $.ajax({
          type: "post",
          url: "grade_analysis_server.php",
          data: {exam:table,class:1},
          dataType: "json",
          success: function (response) {
            document.getElementById('grade').innerHTML =""
            response.forEach(function(element) {
              const optionElement = document.createElement('option');
              optionElement.text = element;
              optionElement.value = element;
              document.getElementById('grade').add(optionElement)
            }); 
          }
        });
      }
      else{
        $("#class_div").css('display','none');
        $("#class").change(function() {   
          var table = $('#table').children("option:selected").val();
          var class_number = $('#class').children("option:selected").val();     
          $.ajax({
          type: "post",
          url: "grade_analysis_server.php",
          data: {exam:"2023年3月金太阳联考(仅高二1班)",class:class_number},
          dataType: "json",
          success: function (response) {
            document.getElementById('grade').innerHTML =""
            response.forEach(function(element) {
              const optionElement = document.createElement('option');
              optionElement.text = element;
              optionElement.value = element;
              document.getElementById('grade').add(optionElement)
            }); 
          }
        }); })
       
          var table = $('#table').children("option:selected").val();
          var class_number = $('#class').children("option:selected").val();     
          $.ajax({
          type: "post",
          url: "grade_analysis_server.php",
          data: {exam:"2023年3月金太阳联考(仅高二1班)",class:class_number},
          dataType: "json",
          success: function (response) {
            document.getElementById('grade').innerHTML =""
            response.forEach(function(element) {
              const optionElement = document.createElement('option');
              optionElement.text = element;
              optionElement.value = element;
              document.getElementById('grade').add(optionElement)
            }); 
          }
        }); 
      }


      
    });
    $("#class").change(function() {   
      var table = $('#table').children("option:selected").val();
      var class_number = $('#class').children("option:selected").val();     
      $.ajax({
      type: "post",
      url: "grade_analysis_server.php",
      data: {exam:table,class:class_number},
      dataType: "json",
      success: function (response) {
        document.getElementById('grade').innerHTML =""
        response.forEach(function(element) {
          const optionElement = document.createElement('option');
          optionElement.text = element;
          optionElement.value = element;
          document.getElementById('grade').add(optionElement)
        }); 
      }
    }); })
  });
  