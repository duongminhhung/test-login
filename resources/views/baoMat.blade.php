@extends('layouts.app')

@section('content')
    <style>
        /* Định dạng cho bảng */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        /* Định dạng cho tiêu đề của bảng */
        th {
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        /* Định dạng cho cột ID */
        td:nth-child(1) {
            font-weight: bold;
            color: #333;
        }

        /* Định dạng cho cột Dịch Vụ */
        td:nth-child(2) {
            font-style: italic;
            color: #0066cc;
        }

        /* Định dạng cho cột Số Điện Thoại */
        td:nth-child(3) {
            font-weight: bold;
        }

        /* Định dạng cho cột OTP */
        td:nth-child(4) {
            font-weight: bold;
            color: #ff6600;
        }

        /* Định dạng cho cột Tin Nhắn */
        td:nth-child(5) {
            color: #008000;
        }

        /* Định dạng cho cột Phí */
        td:nth-child(6) {
            font-weight: bold;
            color: #ff0000;
        }

        /* Định dạng cho cột Thời Gian */
        td:nth-child(7) {
            font-weight: bold;
            font-style: italic;
        }

        /* Định dạng cho cột Trạng Thái */
        td:nth-child(8) {
            text-transform: uppercase;
            font-weight: bold;
            color: #ff3300;
        }

        /* Định dạng cho nút gửi */
        button {
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        /* Định dạng cho nút gửi khi hover */
        button:hover {
            background-color: #0056b3;
        }


    </style>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-header">EXAMPLES</li>
                    <li class="nav-item">
                        <a href="/home" class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Thuê sim
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/tai-lieu-api" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Tài liệu API
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="bao-mat" class="nav-link">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>
                                Bảo mật
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="support" class="nav-link">
                            <i class="nav-icon far fa-envelope"></i>
                            <p>
                                Hỗ trợ khách hàng
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-fluid" style="padding: 40px">
            <p style="color: #129347">Xác thực 2 lớp (2fa)</p>
            <p>Bạn nên bật xác thực 2 lớp để tăng độ an toàn cho tài khoản của bạn.</p>
            <button class="btn btn-success">Bật 2fa</button>
            <p  style="color: #129347;margin-top: 10px">Đổi mật khẩu</p>
            <p style="color: red">Pass mới cần có ít nhất 8 ký tự, 1 chữ hoa, 1 chữ thường và 1 số</p>
            <form>
                <label>
                    <input placeholder="Nhập Mật Khẩu Mới" type="password" value="">
                </label>
                <br>
                <label>
                    <input placeholder="Nhập Mật Khẩu Cũ" type="password" value="">
                </label>
                <br>
                <label>
                    <input placeholder="Nhập Lại Mật Khẩu Mới" type="password" value="">
                </label>
                <br>
                <div class="userPage_checkBox__IPwo9">
                    <label>
                        <input type="checkbox" value="true">
                    </label>
                    <label>Đăng xuất khỏi các thiết bị khác</label>
                </div>
                <button type="submit" class="btn" style="color:#fff;background: #129347">Cập Nhật</button>
            </form>
            <h5 class="mt-3">Lịch sử đăng nhập</h5>
            <table class="mt-3">
                <thead>
                <tr>
                    <th>Thời gian	</th>
                    <th>IP</th>
                    <th>Trình duyệt</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>21:46:45 16/09/2023	</td>
                    <td>1.55.109.11	</td>
                    <td>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
