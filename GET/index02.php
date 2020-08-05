<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>way 2 with method: $.GET  </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<script>

// jQuery.get( url [, data ] [, success ] [, dataType ] )
/*
Url: đường dẫn đến file cần lấy thông tin
data: là một đối tượng object gồm các key : value sẽ gửi lên server
success: là hàm sẽ xử lý khi thực hiện thành công
dataType: là dạng dữ liệu trả về. (text, json, script, xml)
*/

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
    $.get(url, data, success, dataType);
}

/*
Như tôi đề cập ở đầu bài, với phương thức GET ta có thể truyền dưới dạng URL. 
Như vậy thì trong ajax ta hoàn toàn làm được bằng cách gắn tham số đó vào trong URL gửi đi.
function load_ajax()
{
    // URL có kèm tham số number
    var url = "result.php?number="+$('#number').val();
 
    // Data lúc này cho bằng rỗng
    var data = {};
 
    // Success Function
    var success = function (result){
        $('#result').html(result);
    };
 
    // Result Type
    var dataType = 'text';
 
    // Send Ajax
    $.get(url, data, success, dataType);
}


Phương thức GET trong Ajax thường được dùng trong các trường hợp thao tác không ảnh hưởng tới cơ sở dữ liệu đó là thao tác SELECT, 
vì vậy bạn cần cân nhắc khi sử dụng phương thức GET và POST phù hợp với từng trường hợp cụ thể.

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