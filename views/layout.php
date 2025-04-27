<!DOCTYPE html>
<html>
<head>
    <title>APLIKASI CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #e0eafc, #cfdef3);
            font-family: 'Poppins', sans-serif;
            color: #2f3542;
        }
        .box {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        .navbar-brand {
            font-family: 'Poppins', sans-serif !important;
            color: #ffffff !important;
            font-size: 26px;
            font-weight: 600;
        }
        #navbar {
            background: linear-gradient(135deg, #667eea, #764ba2) !important;
            border: none;
            border-radius: 0;
            margin-bottom: 0;
            padding: 15px 0;
        }
        .navbar-nav {
            display: inline-block;
            float: none;
            vertical-align: top;
        }
        .navbar-nav > li {
            display: inline-block;
            float: none;
        }
        .navbar-nav > li > a {
            color: #ffffff !important;
            font-weight: 500;
            padding: 15px 20px;
            transition: background-color 0.4s, color 0.4s;
        }
        .navbar-nav > li > a:hover {
            background-color: rgba(255, 255, 255, 0.2) !important;
            color: #ffffff !important;
        }
        .navbar-nav > .active > a {
            background-color: rgba(255, 255, 255, 0.3) !important;
        }
        .btn-success {
            background: linear-gradient(135deg, #42e695, #3bb2b8) !important;
            border: none;
            font-weight: 600;
            transition: all 0.3s;
        }
        .btn-success:hover {
            background: linear-gradient(135deg, #3bb2b8, #42e695) !important;
            transform: scale(1.05);
        }
        .btn-danger {
            background: linear-gradient(135deg, #f85032, #e73827) !important;
            border: none;
            font-weight: 600;
            transition: all 0.3s;
        }
        .btn-danger:hover {
            background: linear-gradient(135deg, #e73827, #f85032) !important;
            transform: scale(1.05);
        }
        .btn-info {
            background: linear-gradient(135deg, #3a7bd5, #00d2ff) !important;
            border: none;
            font-weight: 600;
            transition: all 0.3s;
        }
        .btn-info:hover {
            background: linear-gradient(135deg, #00d2ff, #3a7bd5) !important;
            transform: scale(1.05);
        }
        .container .jumbotron {
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
            margin-top: 30px;
            text-align: center;
        }
        h1 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 36px;
            margin-bottom: 15px;
            color: #2f3542;
        }
        p {
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            color: #57606f;
        }
        .table {
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .table th {
            background: linear-gradient(135deg, #667eea, #764ba2) !important;
            color: #ffffff;
            text-align: center;
            font-weight: 600;
        }
        .table td {
            background-color: #f8f9fa;
            color: #2f3542;
            text-align: center;
        }
        .form-control {
            background-color: #f1f2f6;
            border: 1px solid #dcdde1;
            border-radius: 6px;
            padding: 10px 15px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php require_once __DIR__ . '/partials/header.php'; ?>
    
    <div class="container">
        <?php 
        $content = __DIR__ . '/../views/' . $view . '.php';
        if (file_exists($content)) {
            require_once $content;
        } else {
            echo '<div class="alert alert-danger">View tidak ditemukan</div>';
        }
        ?>
    </div>
    
    <?php require_once __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
