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
       <div class="container-fluid">
        <form id="formFillerForm" class="d-flex flex-column">
            <div class="mb-3">
                <label for="selectOption1" class="form-label">Select Option 1:</label>
                <select class="form-select" id="selectOption1">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="selectOption2" class="form-label">Select Option 2:</label>
                <select class="form-select" id="selectOption2">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <table class="mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Dịch Vụ</th>
                    <th>Số Điện Thoại</th>
                    <th>OTP</th>
                    <th>Tin Nhắn</th>
                    <th>Phí</th>
                    <th>Thời Gian</th>
                    <th>Trạng Thái</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Service A</td>
                    <td>123-456-7890</td>
                    <td>12345</td>
                    <td>Message 1</td>
                    <td>$10.00</td>
                    <td>2023-09-15 10:30:00</td>
                    <td>Completed</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Service B</td>
                    <td>987-654-3210</td>
                    <td>67890</td>
                    <td>Message 2</td>
                    <td>$20.00</td>
                    <td>2023-09-15 11:45:00</td>
                    <td>Pending</td>
                </tr>
                <!-- Thêm các dòng dữ liệu khác ở đây -->
            </tbody>
        </table>
       </div>
  </div>
@endsection
