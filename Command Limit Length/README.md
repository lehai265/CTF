## Command Limit Length

#### By @es
 
Địa chỉ:https://battle.cookiearena.org/challenges/web/command-limit-length

### Chanllenge Details
- Format flag:CHH{XXX}
- Web
- Command Injection

### Web Analysis

Trang web này dùng để lệnh thực thi từ xa. Nhưng có một số lệnh như: ls, cat, sh,... bị chặn 

image
image

Ta thực hiện bypass filter payload: <b style="color:red;">'l's.</b>. Để hiểu thêm bypass [tại đây](https://book.hacktricks.xyz/linux-hardening/bypass-bash-restrictions)

image

Kết quả ta đã thực hiện được bypass. Nhưng còn 1 điều nữa là nó chỉ cho giới hạn nhập 4 kí tự. Ta liền tên từ điền hacktrick đẻ tiếp tục tra và có kết quả [tại đây](https://book.hacktricks.xyz/linux-hardening/bypass-bash-restrictions#rce-with-4-chars) 

image

Nhưng lệnh sh đã bị chặn mất nên các này bị fail

Sau 1 ngày trằn trọc mình đã nảy lên ý tưởng. Mình đem ý tưởng vào môi trường kali linux để có cái nhìn trực quan.

Mình tạo 1 folder test và flag.txt để test ý tưởng 

image 


Ý tưởng của mình là dùng lệnh > để tạo 1 file mới có tên là cat <b style="color:red;">>cat</b>. Sau đó mình dùng lệnh <b style="color:red;">*</b>.

image

<b style="color:red;">BUMP!!!</b> mình đã đọc được file flag với 1 ký tự duy nhất. Bây giờ mình sẽ giải thích cách hoạt động của nó nhé.
Đầu tiên ta tạo 1 file có tên là cat thay cho câu lệnh cat. Tiếp theo ta dùng lệnh * lệnh  * này hoạt động theo kiểu là lấy tên tất cả các file trong vị trí folder hiện tại. Đầu tiên nó đọc từng file riêng sau đó có sẽ đọc 2 file và từ đó cứ tiếp tục tăng lên nếu có càng nhiều file. Trong đó có 1 lúc sẽ ra lệnh cat flag.txt. Thế là ta đã đọc được flag rồi.

Bây giờ mình đem đi thử trên challenge 

image
image

## Cảm ơn các bạn đã xem!!!






