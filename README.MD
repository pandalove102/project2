Cấu trúc dự án
--
Cấu trúc gồm 2 thư mục chính
```
|-- application         : Chứa các thành phần liên quan đến xử lý ở PHP (Validate, API, Render ...)
    |-- controllers     : Định nghĩa các method để giao tiếp với FE & render. Các method phục vụ cho ajax thì cần có tiền tố ajax_ để dễ phân biệt
    |-- models          : Định nghĩa API Endpoint cho các đối tượng tương ứng
    |-- views           : Template html để controller render
    |-- config          : Cấu hình, thiết lập hệ thống đều gom vào đây
        |-- api.php     : Định nghĩa các System API Endpoint
        |-- assets.php  : Định nghĩa các Global Asset (css/js..)
        |-- sidebar_menu.php            : Định nghĩa sidebar menu của layout
        |-- view_global_variables.php   : Định nghĩa các Global Constant để JS xài
    |-- log             : Thư mục này chứa log API, cần dùng để debug
    |--modules
|-- assets              : Chứa các thành phần liên quan đến javascript (knockback, backbone, jquery ...)
    |-- css             : Custom CSS
    |-- img             : Chứa hình ảnh
    |-- js              : Thư mục chính, chứa hầu hết js app
        |-- app         : Các thành phần global js (load ở mọi trang)
            |-- ajax    : Các method phục vụ việc gọi AJAX ở FE
            |-- api     : Định nghĩa các PHP API ENDPOINT ROUTE để ajax gọi
            |-- helper  : Các hàm helper, dùng chung cho toàn hệ thống
            |-- plugins : Nạp các plugins bên thứ 3 (hầu hết là jquery), cần build mới chạy. Không biết build thì liên hệ.
            |-- other   : Chứa các thành phần init, preconfig plugin
        |-- modules     : Chứa các thành phần module js (load theo module tương ứng)
            |-- auth    : Module Auth (Collection, BB Model, BB View)
            |-- ...
    |-- theme           : Chứa các assets của theme (Hầu như không cần quan tâm tới nó, giữ nguyên hiện trạng)
    |-- vendor          : Chứa các package được cài thông quan yarn
```

**Một số lưu ý:**
- PHP sử dụng composer để quản lý các package (add thêm package nào thì cần hỏi ý kiến trước để hạn chế thừa các package không cần thiết)
- JS sử dụng yarn để quản lý package (tương tự, thêm package nào thì nên hỏi trước ý kiến)
- Giữ code luôn Clean & Readable & Maintainable
- Commit phải có message rõ ràng, thay đổi những gì
- Chỉ define đủ để dùng, không define thừa, cái nào thừa thì xóa luôn (có git rồi)
- Javascript App
> **Controller** chỉ chứa các biến nắm giữ Model / Collection. 

> Model và Collection dùng backbone, chứa các thuộc tính, ajax

> Lớp View chỉ nên định nghĩa các hành động khi thực hiện sự kiện nào đó như onSubmit, onClick ..


(Còn gì sẽ bổ sung sau..)