<!-- Invoice js -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/invoice.js" type="text/javascript"></script>



<!--Add Invoice -->
<div class="row">
    <div class="col-sm-8">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <span><?php echo display('target_invoice') ?></span>

                </div>
            </div>

            <div class="panel-body">
                <?php echo form_open_multipart('invoice/invoice/japasys_target_period_insert', array('class' => 'form-inline')) ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-body">

                                <?php

                                $today = date('Y-m-d');
                                ?>
                                <div class="form-group">
                                    <label class="" for="to_date">Periode</label>
                                    <select class="form-control" name='period'>
                                        <option value="">-Pilih Periode-</option>
                                        <option value="Januari">Januari</option>
                                        <option value="Febuari">Febuari</option>
                                        <option value="Maret">Maret</option>
                                        <option value="April">April</option>
                                        <option value="Mei">Mei</option>
                                        <option value="Juni">Juni</option>
                                        <option value="Juli">Juli</option>
                                        <option value="Agustus">Agustus</option>
                                        <option value="September">September</option>
                                        <option value="Oktober">Oktober</option>
                                        <option value="November">November</option>
                                        <option value="Desember">Desember</option>
                                    </select>
                                </div><br>
                                <br>
                                <div class="form-group">
                                    <label class="" for="from_date">Dari</label>
                                    <input type="text" name="from_date" class="form-control datepicker" id="from_date" placeholder="<?php echo display('start_date') ?>" value="<?php echo (!empty($from_date) ? $from_date : $today) ?>">
                                </div>

                                <div class="form-group">
                                    <label class="" for="to_date">Sampai</label>
                                    <input type="text" name="to_date" class="form-control datepicker" id="to_date" placeholder="<?php echo display('end_date') ?>" value="<?php echo (!empty($to_date) ? $to_date : $today) ?>">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <center>
                    <input type="submit" class="btn btn-success" value="Add Periode" tabindex="17" />
                </center>

                <?php echo form_close() ?>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-8">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <span>Periode</span>
                    <table class="table table-sm table-hover table-striped" style="font-size: 10pt;" id="dataTableExample2" cellspacing="0" width="100%">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tahun</th>
                                <th>Bulan Periode</th>
                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($get_periode as $gp) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php
                                        $date = strtotime($gp['start_date']);
                                        $dat = date('Y', $date);
                                        echo $dat;
                                        ?></td>
                                    <td><?php echo $gp['period']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url() . 'target_invoice/' . $gp['id']; ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <button class="btn btn-sm btn-primary">Atur Target</button>
                                        <button style="margin-left: 2px;" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>