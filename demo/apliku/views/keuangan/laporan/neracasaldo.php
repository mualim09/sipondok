    <section class="content">  <!-- Jangan Dihilangkan.. Tutupnya ada di footer.php -->
        <div class="container-fluid">
            <div class="block-header">

            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        <div class="block-header" align="center"><b>Laporan Neraca Saldo</b></div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="mydata">
                                    <thead>
                                        <tr>
                                            <th>No Urut</th>
                                            <th>Kode Rekening</th>
                                            <th>Nama Rekening</th>
                                            <th>Debet</th>
                                            <th>Kredit</th>
                                        </tr>
                                    </thead>

                                    <tbody id="show_data">
                                          <?php $i = 1 ?>
                                          <?php foreach($data as $m): ?>
                                          <tr>
                                            <td><?php echo $i++ ?></a>   </td>
                                            <td><?php echo $m->koderekening ?></td>
                                            <td><?php echo $m->namarekening ?></td>
                                            <td align="right"><?php echo number_format($m->totdebet,0,",",".") ?></td>
                                            <td align="right"><?php echo number_format($m->totkredit,0,",",".") ?></td>
                                          </tr>
                                          <?php endforeach ?>
