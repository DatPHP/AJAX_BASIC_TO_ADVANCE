<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method Get in ajax </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <script>
    /*

    GET thì ta sẽ có hai cách. 

Cách 1: Sử dụng form với method = GET, 
như vậy khi ta submit thì url sẽ tự động thêm các tham số dạng input_name = input_value.
Cách 2: Ta truyền trực tiếp tham số vào URL. 
Ví dụ tôi gõ url domain.com?task=news&action=edit&id=12 
thì tôi đã gửi lên server ba thông tin với phương thức GET gồm task=news, action=edit, id=12.
    */
    function load_ajax()
            {
                $.ajax({
                    url : "result.php", // gửi ajax đến file result.php
                    type : "get", // chọn phương thức gửi là get
                    dateType:"text", // dữ liệu trả về dạng text
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
    </script>
<div id="result">
            Nội dung ajax sẽ được load ở đây
        </div>
        <br/>
        <input type="text" value="" id="number"/>
        <input type="button" name="clickme" id="clickme" onclick="load_ajax()" value="Click Me"/>
    </body>
</html>
</body>
</html>