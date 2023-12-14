## Command Limit Length

#### By @es
 
Địa chỉ:https://battle.cookiearena.org/challenges/web/command-limit-length

### Chanllenge Details
- Format flag:CHH{XXX}
- Web
- Command Injection

### Web Analysis

Trang web này dùng để lệnh thực thi từ xa. Nhưng có một số lệnh như: ls, cat, sh,... bị chặn 

![](https://github.com/lehai265/CTF/blob/main/Command%20Limit%20Length/1.png)
![](https://github.com/lehai265/CTF/blob/main/Command%20Limit%20Length/2.png)

Ta thực hiện bypass filter payload: <b style="color:red;">'l's.</b>. Để hiểu thêm bypass [tại đây](https://book.hacktricks.xyz/linux-hardening/bypass-bash-restrictions)

![](https://github.com/lehai265/CTF/blob/main/Command%20Limit%20Length/3.png)

Kết quả ta đã thực hiện được bypass. Nhưng còn 1 điều nữa là nó chỉ cho giới hạn nhập 4 kí tự. Ta liền tên từ điền hacktrick đẻ tiếp tục tra và có kết quả [tại đây](https://book.hacktricks.xyz/linux-hardening/bypass-bash-restrictions#rce-with-4-chars) 

![](https://github.com/lehai265/CTF/blob/main/Command%20Limit%20Length/4.png)

Nhưng lệnh sh đã bị chặn mất nên các này bị fail

Sau 1 ngày trằn trọc mình đã nảy lên ý tưởng. Mình đem ý tưởng vào môi trường kali linux để có cái nhìn trực quan.

Mình tạo 1 folder test và flag.txt để test ý tưởng 

![](https://github.com/lehai265/CTF/blob/main/Command%20Limit%20Length/5.png)


Ý tưởng của mình là dùng lệnh > để tạo 1 file mới có tên là cat <b style="color:red;">>cat</b>. Sau đó mình dùng lệnh <b style="color:red;">*</b>.

![](https://github.com/lehai265/CTF/blob/main/Command%20Limit%20Length/6.png)
![](https://github.com/lehai265/CTF/blob/main/Command%20Limit%20Length/7.png)

<b style="color:red;">BUMP!!!</b> mình đã đọc được file flag với 1 ký tự duy nhất. Bây giờ mình sẽ giải thích cách hoạt động của nó nhé.
Đầu tiên ta tạo 1 file có tên là cat thay cho câu lệnh cat. Tiếp theo ta dùng lệnh * lệnh  * này hoạt động theo kiểu là lấy tên tất cả các file trong vị trí folder hiện tại. Đầu tiên nó đọc từng file riêng sau đó có sẽ đọc 2 file và từ đó cứ tiếp tục tăng lên nếu có càng nhiều file. Trong đó có 1 lúc sẽ ra lệnh cat flag.txt. Thế là ta đã đọc được flag rồi.

Bây giờ mình đem đi thử trên challenge 

![](https://github.com/lehai265/CTF/blob/main/Command%20Limit%20Length/8.png)
![](https://github.com/lehai265/CTF/blob/main/Command%20Limit%20Length/9.png)
![](https://github.com/lehai265/CTF/blob/main/Command%20Limit%20Length/10.png)

## Cảm ơn các bạn đã xem!!!






