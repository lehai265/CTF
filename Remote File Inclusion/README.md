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

![](https://github.com/lehai265/CTF/blob/main/Remote%20File%20Inclusion/1.png)

Theo đề bài trang web này có trang info.php nên ta vào xem thử và thấy phần allow_url_include On. 

![](https://github.com/lehai265/CTF/blob/main/Remote%20File%20Inclusion/2.png)

Đầu tiên ta thử lỗi LFI.

![](https://github.com/lehai265/CTF/blob/main/Remote%20File%20Inclusion/3.png)

Woa trang web đã bị lỗi LFI giờ ta đi lấy flag nào

![](https://github.com/lehai265/CTF/blob/main/Remote%20File%20Inclusion/4.png)

Nhưng đời không như mơ flagXXXX.txt đã bị random các kí tự cuối nên ta không biết chính xác tên file

Ta có 1 số cách khai thác [tại đây](https://www.cdxy.me/?p=752). Payload:data:text/plain;base64,PD9waHAgc3lzdGVtKCJpZCIpPz4=. Khi giải mã ra là <?php system("id") ?>

![](https://github.com/lehai265/CTF/blob/main/Remote%20File%20Inclusion/5.png)

Kết quả là ta đã thực hiện được RCE. Bây giờ chúng ta đi tìm flag nào

![](https://github.com/lehai265/CTF/blob/main/Remote%20File%20Inclusion/6.png)


![](https://github.com/lehai265/CTF/blob/main/Remote%20File%20Inclusion/7.png)


![](https://github.com/lehai265/CTF/blob/main/Remote%20File%20Inclusion/8.png)


![](https://github.com/lehai265/CTF/blob/main/Remote%20File%20Inclusion/9.png)


![](https://github.com/lehai265/CTF/blob/main/Remote%20File%20Inclusion/10.png)

Cảm ơn các bạn đã xem !!!






