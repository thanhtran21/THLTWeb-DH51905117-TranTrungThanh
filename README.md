# THLTWeb-DH51905117-TranTrungThanh
Hướng dẫn cài đặt
- Bước 1: Cài đặt WampServer
- Tải về WampServer:
  + Truy cập trang chính thức của WampServer tại: WampServer.
  + Tải phiên bản phù hợp với hệ điều hành của bạn (Windows 32-bit hoặc 64-bit).
- Cài đặt WampServer:
  + Chạy tệp cài đặt bạn vừa tải về.
  + Tuân theo hướng dẫn cài đặt trên màn hình.
- Kiểm tra cài đặt:
  + Mở trình duyệt web và truy cập http://localhost/ để đảm bảo WampServer đã được cài đặt thành công.

- Bước 2: Tạo Database và Import Dữ liệu
- Mở trình duyệt và truy cập phpMyAdmin:
  + Mở trình duyệt và nhập http://localhost/phpmyadmin/ vào thanh địa chỉ.
- Đăng nhập vào phpMyAdmin:
  + Sử dụng thông tin đăng nhập mặc định (thường là root cho tên người dùng và không có mật khẩu).
- Tạo Database:
  + Tạo một cơ sở dữ liệu mới cho ứng dụng của bạn.
- Import Dữ liệu:
  + Nếu bạn có tệp SQL hoặc bản sao lưu cơ sở dữ liệu, sử dụng chức năng "Import" để đưa dữ liệu vào cơ sở dữ liệu mới.

- Bước 3: Thiết lập Dự án trong Visual Studio Code
- Tải và Cài đặt Visual Studio Code:
  + Truy cập trang chính thức của Visual Studio Code tại https://code.visualstudio.com/.
  + Tải và cài đặt phiên bản cho hệ điều hành của bạn.
- Mở Dự án:
  + Mở Visual Studio Code và chọn "File" > "Open Folder".
  + Chọn thư mục trong đó bạn muốn lưu trữ mã nguồn của dự án.
- Tạo Một Ứng Dụng Web:
  + Tạo các tệp HTML, CSS, và JavaScript cho ứng dụng web của bạn.
- Kết nối với Cơ sở Dữ liệu:
  + Sử dụng một ngôn ngữ lập trình phù hợp (ví dụ: PHP) để kết nối ứng dụng web của bạn với cơ sở dữ liệu MySQL.
- Chạy Ứng Dụng:
  + Mở trình duyệt và nhập http://localhost/ten-du-an để kiểm tra ứng dụng của bạn.

--------------------------------------------------------------------------------------------------------
Hướng dẫn sử dụng
- Bước 1: Tải source và database
- Bước 2: Vô local tạo database rồi import database đã tải
- Bước 3: Bỏ source vô file www của wamp khi cài đặt ở phần trên
- Bước 4: Mở trình duyệt và nhập http://localhost/webbandienthoai/src/page hoặc http://localhost/webbandienthoai/src/admin

Hướng Dẫn Sử Dụng Cho Admin
1. Quản Lý Đơn Hàng
- Xem Đơn Hàng:
  + Truy cập vào trang quản lý đơn hàng để xem danh sách đơn hàng mới và đã xử lý.
  + Xem chi tiết từng đơn hàng, bao gồm thông tin khách hàng và sản phẩm.
- Xử Lý Đơn Hàng:
  + Cập nhật trạng thái đơn hàng (đang xử lý, đã giao hàng, đã hủy, v.v.).
  + Gửi thông báo cho khách hàng về trạng thái đơn hàng của họ.
2. Quản Lý Khuyến Mãi
- Thêm, Sửa, Xóa Khuyến Mãi:
  + Thêm khuyến mãi mới với mô tả, ngày bắt đầu và kết thúc.
  + Sửa đổi thông tin khuyến mãi hoặc xóa khuyến mãi không còn hiệu lực.
3. Quản Lý Nhà Sản Xuất
- Thêm, Sửa, Xóa Nhà Sản Xuất:
  + Thêm mới nhà sản xuất với tên, địa chỉ và thông tin liên hệ.
  + Sửa đổi thông tin nhà sản xuất hoặc xóa nhà sản xuất không còn hoạt động.
4. Quản Lý Sản Phẩm
- Thêm, Sửa, Xóa Sản Phẩm:
  + Thêm sản phẩm mới với thông tin chi tiết, hình ảnh và giá.
  + Sửa đổi thông tin sản phẩm hoặc xóa sản phẩm không còn cần thiết.
5. Quản Lý Tài Khoản
- Quản Lý Người Dùng:
  + Xem danh sách người dùng và thông tin chi tiết của họ.
  + Cấp quyền admin cho người dùng nếu cần.

Hướng Dẫn Sử Dụng Cho Người Dùng
1. Danh Mục Sản Phẩm
- nDuyệt Danh Mục:
  + Truy cập danh mục sản phẩm để xem danh sách các loại điện thoại.
2. Đặt Hàng
- Thêm Sản Phẩm vào Giỏ Hàng:
  + Chọn sản phẩm và thêm vào giỏ hàng.
  + Xem giỏ hàng để kiểm tra sản phẩm và tổng số tiền.
- Đặt Hàng:
  + Tiến hành thanh toán sau khi kiểm tra giỏ hàng.
  + Nhập thông tin giao hàng và chọn phương thức thanh toán.
3. Đơn Hàng
- Xem Đơn Hàng:
  + Kiểm tra trạng thái đơn hàng và lịch sử đơn hàng trước đó.
4. Khuyến Mãi
- Xem Khuyến Mãi:
  + Kiểm tra các khuyến mãi đang diễn ra và áp dụng chúng khi đặt hàng.
5. Quản Lý Giỏ Hàng
- Thêm, Xóa Sản Phẩm:
  + Thay đổi số lượng hoặc xóa sản phẩm trong giỏ hàng.
6. Quản Lý Thông Tin Cá Nhân
- Chỉnh Sửa Thông Tin:
  + Cập nhật thông tin cá nhân, địa chỉ giao hàng và mật khẩu.