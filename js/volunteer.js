function student_info(){
    $('#accordion').css("display", "block");
    $.ajax({
        type: "get",
        url: "volunteer.php",
        data: {'grade':$("#grade").val(),'province':$('#province').val()},
        dataType: "json",
        success: function (response) {
            $('#chabuduo').empty();
            $('#youdianxuan').empty();
            $('#kaobushang').empty();
            if (response.chabuduo.length == 0 ){
                $('#chabuduo').append('无');
            }
            if (response.kaobushang.length == 0 ){
                $('#kaobushang').append('无');
            }
            if (response.youdianxuan.length == 0 ){
                $('#youdianxuan').append('无');
            }
            response.chabuduo.forEach(function(element) {
                let regex = /(\D+)(\d+)/; 
                let matches = regex.exec(element);
                $('#chabuduo').append('<p><a href="https://www.gaokao.cn/school/'+matches[2]+'">'+matches[1]+'</a></p>');
              })
            response.kaobushang.forEach(function(element) {
                let regex = /(\D+)(\d+)/; 
                let matches = regex.exec(element);
                $('#kaobushang').append('<p><a href="https://www.gaokao.cn/school/'+matches[2]+'">'+matches[1]+'</a></p>');
              })
            response.youdianxuan.forEach(function(element) {
                let regex = /(\D+)(\d+)/; 
                let matches = regex.exec(element);
                $('#youdianxuan').append('<p><a href="https://www.gaokao.cn/school/'+matches[2]+'">'+matches[1]+'</a></p>');
              })              
        }
    });
}
