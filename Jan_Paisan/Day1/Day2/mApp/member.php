<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paisan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* จัดการความสูงของหน้าเว็บให้ Footer อยู่ล่างสุดเสมอ */
        body {
            display: flex;
            flex-direction: column;
            min-vh-100;
            overflow-x: hidden;
        }
        /* ปรับแต่ง Sidebar */
        .sidebar {
            width: 250px;
            min-height: calc(100vh - 56px); /* หักความสูงของ Top Navbar ออก */
            transition: all 0.3s;
        }
        /* เมื่อแสดงผลบนหน้าจอขนาดเล็ก (มือถือ) ให้ซ่อน Sidebar ไว้ก่อน */
        @media (max-width: 767.98px) {
            .sidebar {
                margin-left: -250px;
            }
            .sidebar.active {
                margin-left: 0;
            }
        }
    </style>
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
        <div class="container-fluid">
            <button class="btn btn-dark d-md-none me-2" id="sidebarToggle">
                <i class="fa-solid fa-bars"></i>
            </button>
            
            <a class="navbar-brand fw-bold" href="#"><i class="fa-solid fa-layer-group me-2"></i>MyDashboard</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="topNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fa-solid fa-bell me-1"></i> แจ้งเตือน</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-user-circle me-1"></i> ผู้ใช้งาน
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-menu-item dropdown-item" href="#">โปรไฟล์</a></li>
                            <li><a class="dropdown-menu-item dropdown-item" href="#">ตั้งค่า</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-menu-item dropdown-item text-danger" href="#">ออกจากระบบ</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="d-flex flex-grow-1">
        
        <div class="sidebar bg-white border-end shadow-sm" id="sidebarMenu">
            <div class="p-3">
                <span class="text-muted text-uppercase fw-bold fs-7">เมนูหลัก</span>
                <ul class="nav flex-column mt-2">
                    <li class="nav-item mb-1">
                        <a href="index.php" class="nav-link text-dark bg-light rounded p-2">
                            <i class="fa-solid fa-house me-2 text-primary"></i> หน้าแรก
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a href="bmi.php" class="nav-link text-dark p-2">
                            <i class="fa-solid fa-chart-line me-2 text-success"></i> ดัชนีมวลกาย
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a href="member.php" class="nav-link text-dark p-2">
                            <i class="fa-solid fa-chart-line me-2 text-success"></i> สมาชิก
                        </a>
                    </li>
                     <li class="nav-item mb-1">
                        <a href="member_exc.php" class="nav-link text-dark p-2">
                            <i class="fa-solid fa-chart-line me-2 text-success"></i> สมาชิก
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a href="contact.php" class="nav-link text-dark p-2">
                            <i class="fa-solid fa-circle me-2 text-secondary"></i> ผู้พัฒนา
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="flex-grow-1 p-4">
            <form name="form1" action="member_exc.php" method="POST">
            <table border="1" align="center" width="80%">
                <tr>
                    <td>น้ำหนัก</td>
                    <td><input type="text" id="w" name="w" ></td>
                     <td>ส่วนสูง</td>
                    <td><input type="text" id="h" name="h" ></td>
                </tr>
                 <tr>
                    <td>บัตรประชาชน</td>
                    <td><input type="text" id="member" name="member" ></td>
                </tr>
                <tr>
                    <td>ชื่อ</td>
                    <td><input type="text" id="Fname" name="Fname" ></td>
                    <td>นามสกุล</td>
                    <td><input type="text" id="Lname" name="Lname" ></td>
                </tr>
                 <tr>
                    <td>อายุ</td>
                    <td><input type="number" id="age" name="age" ></td>
                </tr>
                 <tr>
                    <td>เพศ</td>
                    <td>
                        <input type="radio" id="sex" name="sex" value="MAN">
                        <label for="MAN">MAN</label><br>
                        <input type="radio" id="sex" name="sex" value="Girl">
                        <label for="Girl">Girl</label><br>
                        <input type="radio" id="sex" name="sex" value="Other">
                        <label for="Other">Other</label><br>

                    </td>
                    
                </tr>
                 <tr>
                    <td>ที่อยู่</td>
                    <td><textarea name="address" id="address" rows="5" cols="40"></textarea></td>
                </tr>
                <tr>
                    <td>ตำบล</td>
                    <td>
                        <select name="subdistric" id="subdistric">
                            <option value="">...เลือกตำบล...</option>
                            <option value="subdistric1">กาญจนบุรี</option>
                            <option value="subdistric2">นครปฐม</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>อำเภอ</td>
                    <td>
                        <select name="distric" id="distric">
                            <option value="">...เลือกอำเภอ...</option>
                            <option value="distric1">อ.กาญจนบุรี</option>
                            <option value="distric2">อ.นครปฐม</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>จังหวัด</td>
                   <td>
                        <select name="provice" id="provice">
                            <option value="">...เลือกจังหวัด...</option>
                            <option value="provice1">จ.กาญจนบุรี</option>
                            <option value="provice2">จ.นครปฐม</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>รหัสไปรษณีย์</td>
                    <td><input type="text" id="postcode" name="postcode" ></td>
                </tr>
                <tr>
                    <td>เบอร์โทร</td>
                    <td><input type="text" id="mobile" name="mobile" ></td>
                </tr>
                <tr>
                    <td>สถานะ</td>
                    <!-- <td><input type="text" id="status" name="status" ></td> -->
                    <td>
                        <input type="radio" id="status" name="status" value="s">
                        <label for="MAN">โสด</label>
                        <input type="radio" id="status" name="status" value="m">
                        <label for="Girl">มีผัว</label>
                        <input type="radio" id="status" name="status" value="d">
                        <label for="Other">โดนทิ้ง</label>

                    </td>
                </tr>
                <tr>
                    <td>Birthady</td>
                    <td><input type="datetime-local" id="birthdaytime" name="birthdaytime"></td>
                </tr>
                <tr>
                    <!-- <td><input type="text" id="chk" name="chk" value="bmi"></td> -->
                    <td><input type="hidden" id="chk" name="chk" value="member"></td> <!-- hiddent เอาไว้ซ่อน-->
                    <td><input type="submit" name="Submit" value="ประมวลผล" />  </td>
                </tr>
            </table>
            </form>
        </div>

    </div>

    <footer class="bg-dark text-white-50 text-center py-3 border-top mt-auto">
        <div class="container">
            <small>&copy; 2026 Paisan.CS. All Rights Reserved.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function () {
            document.getElementById('sidebarMenu').classList.toggle('active');
        });
    </script>
</body>
</html>