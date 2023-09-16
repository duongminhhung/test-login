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
            <h5 style="color: #549430">App Token</h5>
           <button class="btn btn-success">Hiển thị Token</button>
           <br>
           <button class="btn btn-secondary mt-3">Thu hồi Token</button>
           <p class="mt-5">IP Whitelist</p>
           <p>Bạn chưa cài đặt Ip WhiteList. Để bảo mật cho tài khoản, bạn nên cài đặt danh sách các ip được phép sử dụng token. Mỗi ip cách nhau bởi đấu;</p>
           <input type="text" placeholder="VD: 123.12.32.12;f2:34:fd:32:32:32:54;">
           <br>
           <button class="btn-success btn mt-3">Cập nhật</button>
           <h5 style="color: #549430" class="mt-5">Tài liệu Api</h5>
           <a style="color: red" class="apiDocPage_warn__XxP3u" href="https://docs.google.com/document/d/1nScAL7f9HCtdQSAKd1vXscF2CrYbjiuTVWxAZafvR9g/edit" target="_blank">API V1 (ResfulAPI - API giống website)</a>
           <br>
           <a style="color: red" class="apiDocPage_warn__XxP3u" href="https://docs.google.com/document/d/1hiV6xrn4nMdJygHx2Bwv1UGpqxTVtnUOvNHwgcEtpKs/edit#" target="_blank">API V2 (API Dạng Get dành cho nông dân chăm chỉ cày ruộng)</a>       </div>
  </div>
@endsection
