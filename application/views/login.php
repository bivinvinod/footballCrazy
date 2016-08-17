<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Silver Leads</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <!-- NProgress -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css">

  <!-- Custom Theme Style -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/gentelella.min.css">
  <!-- Custom style -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
  <!-- Animate.css -->
  <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

</head>

<body class="login">
  <div>
    <div class="login_wrapper">
      <div class="animate slideInUp form login_form">
        <section class="login_content">
          <form  action="<?php echo site_url('login/check'); ?>" method="post" enctype="multipart/form-data" data-parsley-validate>
            <h1>Login</h1>
            <div>
              <input name="username" type="text" class="form-control" placeholder="Username" required="" >
            </div>
            <div>
              <input name="password" type="password" class="form-control" placeholder="Password" required="" >
              <p style="color: red;"><?= $this->session->flashdata('msg') ?></p>
            </div>
            <div>
              <button  class="btn btn-default submit" type="submit">Login</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <div>
                <img width="49" height="42" src="<?php echo base_url(); ?>img/logo-min.png" />
                <img width="147" height="32" src="<?php echo base_url(); ?>img/logo.png" />
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>
</html>