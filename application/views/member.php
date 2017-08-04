            <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Member</h3>
                        <p class="animated fadeInDown">
                          member <span class="fa-angle-right fa"></span> view
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
						  <th>No</th>
                          <th>No Identittas</th>
                          <th>Nama</th>
						  <th>Alamat</th>
                          <th>Tgl Lahir</th>
                          <th>No Telp</th>
						  <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php $no = 1; foreach ($member as $m) :?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td><?php echo $m->no_identitas;?></td>
                          <td><?php echo $m->nama_member;?></td>
						  <td><?php echo $m->alamat;?></td>
                          <td><?php echo $m->tgl_lahir;?></td>
                          <td><?php echo $m->no_telp;?></td>
                          <td>
						  <button class="btn btn-info fa fa-eye" onclick="view(<?php echo $m->id_member;?>)"></button>
							  <button class="btn btn-danger fa fa-close" onclick="rejectm(<?php echo $m->id_member;?>)"> </button>
						  </td>
                        </tr>
                        <?php $no++; endforeach;?>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>

			      <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Partner Form</h3>
      </div>
      <div class="modal-body form" id="modalbody">
        
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <!-- End Bootstrap modal -->			  

            </div>
          <!-- end: content -->
<script>
 function view(id)
 {
	 $('#modal_form').modal('show');
	 $("#modalbody").load("memberview/"+id,function(data){
		 $("#modalbody").html(data);
	 });
 }
 
 function rejectm(id)
    {
      if(confirm('Are you sure reject member?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('rejectm')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

      }
    }

</script>