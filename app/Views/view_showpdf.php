<?= $this->extend('templated/main') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h5 class="m-0"><?= $datapdf->menu ?></h5>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Content PDF -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="row">
                                <iframe src="/assets/file_pdf/<?= $datapdf->path_pdf ?>" style="height:600px;width:1100px;" title="Iframe Example"></iframe>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- link -->
<div class="modal fade" id="modal-link" data-backdrop="static">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Link Applications</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- content link -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-2 col-2">
                            <div class="small-box bg-gradient-primary">
                                <div class="inner">
                                    <h6>SIMONE</h6>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="http://10.14.150.146/simonev1_cso/" target="_blank" class="small-box-footer">SIMONE <i class="fas fa-arrow-circle-right"></i></a>
                                <a href="http://10.14.150.160/simonev2/" target="_blank" class="small-box-footer">SIMONE V2 <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-2">
                            <div class="small-box bg-gradient-primary">
                                <div class="inner">
                                    <h6>Finesse</h6>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-"></i></a>
                                <a href="https://dcpccefnsa.cc.iconpln.co.id:8445/desktop/container/landing.jsp?locale=en_US" target="_blank" class="small-box-footer">
                                    Finesse <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-2">
                            <div class="small-box bg-gradient-primary">
                                <div class="inner">
                                    <h6>CRM</h6>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="http://10.14.152.42:8080/crmv3/" target="_blank" class="small-box-footer">CRM <i class="fas fa-arrow-circle-right"></i></a>
                                <a href="http://crm.cc.iconpln.co.id:8080" target="_blank" class="small-box-footer">CRM Domain <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-2">
                            <div class="small-box bg-gradient-primary">
                                <div class="inner">
                                    <h6>APKT</h6>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="http://10.68.35.95" target="_blank" class="small-box-footer">APKT <i class="fas fa-arrow-circle-right"></i></a>
                                <a href="http://10.68.35.95/pages/home/ticket.aspx?" target="_blank" class=" small-box-footer">APKT Monitor <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-2">
                            <div class="small-box bg-gradient-primary">
                                <div class="inner">
                                    <h6>AP2T</h6>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="http://10.72.35.8/ap2t/Login.aspx" target="_blank" class="small-box-footer">AP2T <i class="fas fa-arrow-circle-right"></i></a>
                                <a href="http://10.68.35.72" target="_blank" class="small-box-footer">AP2T WEB PLN <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-2">
                            <div class="small-box bg-gradient-primary">
                                <div class="inner">
                                    <h6>P2APST</h6>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="https://10.68.35.68/dacen/default/index.php" class="small-box-footer">P2APST <i class="fas fa-arrow-circle-right"></i></a>
                                <a href="https://hosting3.iconpln.net.id:2096/" class="small-box-footer">Email P2APST <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <!-- smallbox 2 -->
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h4>CHAT CC</h4>
                                    <div class="image">
                                        <img src="/assets/templated/dist/img/cc123.png" alt="Image" height="70" width="70">
                                    </div>
                                    <br>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-comments"></i>
                                </div>
                                <a href="http://10.14.151.51:8383/chat123/#" target="_blank" class="small-box-footer">CHAT CC <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h4>-</h4>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="http://10.14.151.61:8181/intermapv2/public/" target="_blank" class="small-box-footer">INTERMAP V2 / KNOWLEDGE <i class="fas fa-arrow-circle-right"></i></a>
                                <a href="https://forms.gle/8QY6GeWTBrKdqv859" target="_blank" class="small-box-footer">ICONNET (Penginputan Data) <i class="fas fa-arrow-circle-right"></i></a>
                                <a href="https://docs.google.com/spreadsheets/d/1-j2poPolyi1WPFTRAg3bdPJNmoTMB5s0x6gEBStEkrg/edit?usp=sharing" target="_blank" class="small-box-footer">ICONNET (Progress Laporan) <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h4>-</h4>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="http://stimulusrm.pln.co.id/" target="_blank" class="small-box-footer">Stimulus RM & Rupiah Beban <i class="fas fa-arrow-circle-right"></i></a>
                                <a href="http://10.68.35.119:9090/" target="_blank" class="small-box-footer">Skema Lonjakan Tagihan <i class="fas fa-arrow-circle-right"></i></a>
                                <a href="http://10.23.123.193/mancc" target="_blank" class="small-box-footer">Aplikasi Input Downtime <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h4>ACMT & SIP</h4>
                                    <div class="image">
                                        <img src="/assets/templated/dist/img/cc123.png" alt="Image" height="65" width="65">
                                    </div>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-bolt" aria-hidden="true"></i>
                                </div>
                                <a href="https://10.72.35.8/acmt" target="_blank" class="small-box-footer">ACMT (Kwh Meter Pelanggan) <i class="fas fa-arrow-circle-right"></i></a>
                                <a href="http://10.14.150.147/sip/dashboard" target="_blank" class="small-box-footer">SIP (Sistem Informasi Pegawai) <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <!-- smallbox 3 -->
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-2 col-2">
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h6>SLA</h6>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-bug" aria-hidden="true"></i>
                                        </div>
                                        <a href="http://10.68.35.93/sla/index.php" target="_blank" class="small-box-footer">SLA <i class="fas fa-arrow-circle-right"></i></a>
                                        <a href="http://10.68.35.93/cari_history/index.php" target="_blank" class="small-box-footer">Cari History <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-2">
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h6>STROOM & PANAS</h6>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-bug" aria-hidden="true"></i>
                                        </div>
                                        <a href="http://10.14.151.16:8585/sarma/" target="_blank" class="small-box-footer">STROMM AS <i class="fas fa-arrow-circle-right"></i></a>
                                        <a href="http://apps.iconpln.co.id:7777/Panas-1.0" target="_blank" class="small-box-footer">PANAS <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-2">
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h6>Listriqu & ITSM</h6>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-bug" aria-hidden="true"></i>
                                        </div>
                                        <a href="https://listriqu.com/listriqu-home/login.php" target="_blank" class="small-box-footer">ListriQu <i class="fas fa-arrow-circle-right"></i></a>
                                        <a href="http://10.1.86.28/HEAT" target="_blank" class="small-box-footer">ITSM <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-2">
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h6>MAP</h6>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-bug" aria-hidden="true"></i>
                                        </div>
                                        <a href="https://www.google.co.id/maps/" target="_blank" class="small-box-footer">Google Maps <i class="fas fa-arrow-circle-right"></i></a>
                                        <a href="http://10.14.150.136/simulasi" target="_blank" class="small-box-footer">Lap. Simulasi Map <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row (main row) -->
                    </div><!-- /.container-fluid -->

            </section>
            <!--/. content link -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?= $this->endSection() ?>
<!-- css -->
<?= $this->section('css') ?>
<?= $this->endSection() ?>

<!-- js -->
<?= $this->section('js') ?>
<?= $this->endSection() ?>