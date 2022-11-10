//Ajax cho đăng ký
$("#dangky").click(function(){
    $.post($("#myform").attr("action"),
            $("#myform").serializeArray(),        
            function(thongtin){ 
                $("#ack").empty();
                $("#ack").html(thongtin);
            });
    $("#myform").submit(function(){
        return false;
    });
}); 


//Cập nhật thông tin cá nhân
$("#xacnhanin4").click(function(){
    var data = $("#formin4").serializeArray();
    $.post($("#formin4").attr("action"), 
            data, function(thongtin){
                if(thongtin == 0){
                    $("#test").empty();
                    $("#test").html("Vui lòng điền thông tin mới!");
                }else if(thongtin == 1){
                    $("#test").empty();
                    $("#test").html("Cập nhật thành công!");
                }else{
                    $("#test").empty();
                    $("#test").html("Email đã được dùng!");
                }
            } 
    );
    $("#formin4").submit(function(){
        return false;
    });
}); 

//Lấy random các lựa chọn
$("#xacnhan").click(function(){
    $.post($("#formlc").attr("action"),
            $("#formlc :input").serializeArray(),        
            function(info){ 
                $("#lc").empty();
                $("#lc").html(info);
            });
    $("#formlc").submit(function(){
        return false;
    });
}); 


// Lấy màu ngẫu nhiên
function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)];
    }
    document.getElementById("k").innerHTML= color;
    return color;
}
  
function setRandomColor() {
    $("#colorpad").css("background-color", getRandomColor());
}


// Xác nhận xoá thực vật

$("#tv_de_ok").click(function(){
    $.post($("#form_de_tv").attr("action"),
            $("#form_de_tv").serializeArray(),        
            function(thongtin){ 
                $("#mess_xoa_tv").empty();
                $("#mess_xoa_tv").html(thongtin);
            });
    $("#form_de_tv").submit(function(){
        return false;
    });
}); 


