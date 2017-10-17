<div class="box box-solid box-danger">
  <div class="box-header">
    <h3 class="box-title">YTD <span class="tahun"></span></h3>
  </div>
  <div class="box-body table-responsive no-padding">
    <table class="table table-condensed table-striped">
        <thead>
          <tr>
            <th class="text-center" style="width: 70px">Witel</th>
            <th class="text-center">%</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">KDS</td>
            <td class="text-center" id="ytd-kudus"></td>
          </tr>
          <tr>
            <td class="text-center">MGL</td>
            <td class="text-center" id="ytd-magelang"></td>
          </tr>
          <tr>
            <td class="text-center">PKL</td>
            <td class="text-center" id="ytd-pekalongan"></td>
          </tr>
          <tr>
            <td class="text-center">PWT</td>
            <td class="text-center" id="ytd-purwokerto"></td>
          </tr>
          <tr>
            <td class="text-center">SMG</td>
            <td class="text-center" id="ytd-semarang"></td>
          </tr>
          <tr>
            <td class="text-center">SLO</td>
            <td class="text-center" id="ytd-solo"></td>
          </tr>
          <tr>
            <td class="text-center">YKT</td>
            <td class="text-center" id="ytd-yogyakarta"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th class="text-center">TR4</th>
            <th class="text-center" id="ytd-total"></th>
          </tr>
        </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
  <div class="overlay" id="load-ytd">
    <i class="fa fa-refresh fa-spin"></i>
  </div>
</div>
<!-- /.box -->
<div class="box box-solid box-danger">
  <div class="box-header"></div>
  <div class="box-body table-responsive no-padding">
    <table class="table table-condensed table-striped">
        <tr>
          <th class="text-center" style="width: 70px">BLN</th>
          <th class="text-center">%</th>
        </tr>
        <?php for ($i=1; $i < 7; $i++) { ?>
          <tr>
            <td class="text-center">JAN</td>
            <td class="text-center"><span class="badge bg-yellow">80,00%</span></td>
          </tr>
        <?php } ?>
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
