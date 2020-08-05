<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST method in AJAX -jQuery </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script language="javascript">
            function load_ajax(){
                $.ajax({
                    url : "result.php", // gửi ajax đến file result.php
                    type : "post", // chọn phương thức gửi là post
                    dataType:"text", // dữ liệu trả về dạng text
                    data : { // Danh sách các thuộc tính sẽ gửi đi
                        number : $('#number').val()
                    },
                    success : function (result){
                        // Sau khi gửi và kết quả trả về thành công thì gán nội dung trả về
                        // đó vào thẻ div có id = result
                        $('#result').html(result);
                    }
                });
            }


/*
tham số Ajax thực chất là một đối tượng Object bình thường trong javascript, 
nghĩa là bạn hoàn toàn có thể viết lại như thế này:

function load_ajax()
{
    // Khai báo object
    var agrs = {
        url : "result.php", // gửi ajax đến file result.php
        type : "post", // chọn phương thức gửi là post
        dataType:"text", // dữ liệu trả về dạng text
        data : { // Danh sách các thuộc tính sẽ gửi đi
             number : $('#number').val()
        },
        success : function (result){
            // Sau khi gửi và kết quả trả về thành công thì gán nội dung trả về
            // đó vào thẻ div có id = result
            $('#result').html(result);
        }
    };
 
    // Truyền object vào để gọi ajax
    $.ajax(agrs);
}
*/
        </script>
</head>
<body>
<div id="result">
            Nội dung ajax sẽ được load ở đây
</div>
<br/>
<input type="text" value="" id="number"/>
 <input type="button" name="clickme" id="clickme" onclick="load_ajax()" value="Click Me"/>
</body>
</html>