## Remote File Inclusion

#### By @es
 
Địa chỉ:https://battle.cookiearena.org/challenges/web/remote-file-inclusion

### Chanllenge Details
- Format flag:CHH{XXX}
- Web
- RCE
- LFI

### Web Analysis

Giao diện trang web

image1

Theo đề bài trang web này có trang info.php nên ta vào xem thử và thấy phần allow_url_include On. 

image2

Đầu tiên ta thử lỗi LFI.

image3

Woa trang web đã bị lỗi LFI giờ ta đi lấy flag nào

image4

Nhưng đời không như mơ flagXXXX.txt đã bị random các kí tự cuối nên ta không biết chính xác tên file

Ta có 1 số cách khai thác [tại đây](https://www.cdxy.me/?p=752). Payload:data:text/plain;base64,PD9waHAgc3lzdGVtKCJpZCIpPz4=. Khi giải mã ra là <?php system("id") ?>

image5

Kết quả là ta đã thực hiện được RCE. Bây giờ chúng ta đi tìm flag nào