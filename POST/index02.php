<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>way 2 with method: $.POST  </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<script>

// jQuery.post( url [, data ] [, success ] [, dataType ] )
/*
url: đường dẫn đến file cần lấy thông tin
data: là một đối tượng object gồm các key : value sẽ gửi lên server
success: là function sẽ xử lý khi thực hiện thành công
dataType: là dạng dữ liệu trả về. (text, json, script, xml)
*/

function load_ajax()
{
    $.post(
            'result.php', // URL 
            {number : $('#number').val()},  // Data
            function(result){ // Success
                $('#result').html(result);
            }, 
            'text' // dataTyppe
    );
}

/*
Nếu bạn vẫn chưa hiểu thì tôi sẽ đưa ra thêm một ví dụ nữa, 
tôi sẽ tách từng tham số trong hàm đó ra rồi ráp vào. 
Nội dung như sau:

function load_ajax()
{
    // URL
    var url = "result.php";
 
    // Data
    var data = {
        number : $('#number').val()
    };
 
    // Success Function
    var success = function (result){
        $('#result').html(result);
    };
 
    // Result Type
    var dataType = 'text';
 
    // Send Ajax
    $.post(url, data, success, dataType);
}


Bởi vì phương thức POST an toàn hơn phương thức GET nên trong Ajax thường được dùng 
cho các trường hợp thao tác có ảnh hưởng tới cơ sở dữ liệu như thao tác thêm, sửa và xóa.
*/ 

</script>

<div id="result">
            Nội dung ajax sẽ được load ở đây
</div>
<br/>
<input type="text" value="" id="number"/>
 <input type="button" name="clickme" id="clickme" onclick="load_ajax()" value="Click Me"/>
</body>
</html>