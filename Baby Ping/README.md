## BabyPing
#### By @es
Địa chỉ:https://battle.cookiearena.org/skills-path/os-command-injection/challenge/baby-ping
### Challenge Details
- Flag Location: /flag.txt
- Flag Format: CHH{XXX}
- Credits: MEME
### Tag
- Command Injection
- Python
- Ping
### Web Analysis:
Trang web này có chức năng ping:
![](https://github.com/lehai265/OS-Command-Injection/blob/main/Baby%20Ping/web.png)

Ta dùng Burp Suite để phân tích và thử payload:8.8.8.8;ls


![](https://github.com/lehai265/OS-Command-Injection/blob/main/Baby%20Ping/web1.png)


Response trả về "8.8.8.8;ls". Vì vậy ta cần sửa lại payload 1 chút là: 8.8.8.8";ls"

Kết quả trả về ta đã thực hiện được Command Injection bây giờ ta có thể đi tìm flag rồi

