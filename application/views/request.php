            <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Request Member</h3>
                        <p class="animated fadeInDown">
                          member <span class="fa-angle-right fa"></span> request
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><button class="btn btn-primary fa fa-plus" onclick="addmember()"></button></div>
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
					  <?php $no = 1; foreach ($req as $r) :?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td><?php echo $r->no_identitas;?></td>
                          <td><?php echo $r->nama_member;?></td>
						  <td><?php echo $r->alamat;?></td>
                          <td><?php echo $r->tgl_lahir;?></td>
                          <td><?php echo $r->no_telp;?></td>
                          <td><button class="btn btn-success fa fa-check" onclick="checkm(<?php echo $r->id_member;?>)"></button>
							  <button class="btn btn-danger fa fa-close" onclick="rejectm(<?php echo $r->id_member;?>)"> </button>
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
                  <div class="modal-body form">
                    <form action="#" id="form" class="form-horizontal">
            		  <div class="form-group">
                          <label class="control-label col-md-3">Username</label>
                          <div class="col-md-9">
                            <input name="username" placeholder="Username" class="form-control" type="text">
                          </div>
                        </div>
            		  <div class="form-group">
                          <label class="control-label col-md-3">Password</label>
                          <div class="col-md-9">
                            <input name="password" placeholder="Password" class="form-control" type="password">
                          </div>
                        </div>
                      <div class="form-body">
                            <input name="id_member" placeholder="id" class="form-control" type="hidden">
                        <div class="form-group">
                          <label class="control-label col-md-3">No Identitas</label>
                          <div class="col-md-9">
                            <input name="identitas" placeholder="No Identitas" class="form-control" type="text">
                          </div>
                        </div>
            			<div class="form-group">
                          <label class="control-label col-md-3">Nama</label>
                          <div class="col-md-9">
                            <input name="nama" placeholder="Nama" class="form-control" type="text">
                          </div>
                        </div>
            			<div class="form-group">
                          <label class="control-label col-md-3">Alamat</label>
                          <div class="col-md-9">
                            <input name="alamat" placeholder="Alamat" class="form-control" type="text">
                          </div>
                        </div>
            			<div class="form-group">
                          <label class="control-label col-md-3">No Telp</label>
                          <div class="col-md-9">
                            <input name="telp" placeholder="No Telp" class="form-control" type="text">
                          </div>
                        </div>
            			<div class="form-group">
                          <label class="control-label col-md-3">No Hp</label>
                          <div class="col-md-9">
                            <input name="hp" placeholder="No Hp" class="form-control" type="text">
                          </div>
                        </div>
            			<div class="form-group">
                          <label class="control-label col-md-3">Email</label>
                          <div class="col-md-9">
                            <input name="email" placeholder="Email" class="form-control" type="text">
                          </div>
                        </div>
            			<div class="form-group">
                          <label class="control-label col-md-3">Tgl Lahir</label>
                          <div class="col-md-9">
                            <input name="lahir" placeholder="Tgl Lahir" id="datepicker" class="form-control" type="text">
                          </div>
                        </div>
                      </div>
                    </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" id="btnSave" onclick="save2()" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
  <!-- End Bootstrap modal -->			  

            </div>
          <!-- end: content -->

<script type="text/javascript">
    var save_method2; //for save method string
    var table;


    function addmember()
    {
      save_method2 = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function save2()
    {
      var url;
      if(save_method2 == 'add')
      {
          url = "<?php echo base_url('memberadd')?>";
      }
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload()// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
        elert(errorThrown);
            }
        });
    }

    function checkm(id)
    {
      if(confirm('Confirm Member?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('checkm')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error Check data');
            }
        });

      }
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