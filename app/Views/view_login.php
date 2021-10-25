<?= $this->extend('templated/main') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
    <div class="login-page" style="min-height: 496.391px;">
        <div class="login-box">
            <div class="login-logo">
                <a href="/">LOGIN BOY </a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in </p>

                    <form action="../../index3.html" method="post">
                        <div class="input-group mb-3">
                            <input type="user" class="form-control" placeholder="User">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="ion ion-person-add""></span>
                                </div>
                            </div>
                        </div>
                        <div class=" input-group mb-3">
                                        <input type="password" class="form-control" placeholder="Password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="icheck-primary">
                                            <input type="checkbox" id="remember">
                                            <label for="remember">
                                                Remember Me
                                            </label>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                    </form>

                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->


    </div>
</div>
<!-- /.login-box -->
<?= $this->endSection() ?>

<?= $this->section('css') ?>
<!-- <link rel="stylesheet" href="/assets/templated/dist/css/style1.css"> -->
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<?= $this->endsection() ?>