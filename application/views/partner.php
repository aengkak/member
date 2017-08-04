            <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Partner</h3>
                        <p class="animated fadeInDown">
                          partner
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><button class="btn btn-primary fa fa-plus" onclick="addpart()"></button></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
						  <th>No</th>
                          <th>No Identittas</th>
                          <th>Nama</th>
                          <th>Tgl Lahir</th>
                          <th>No Telp</th>
						  <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php $no = 1; foreach ($partner as $p) :?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td><?php echo $p->no_identitas;?></td>
                          <td><?php echo $p->nama_partner;?></td>
                          <td><?php echo $p->tgl_lahir;?></td>
                          <td><?php echo $p->no_telp;?></td>
                          <td><button class="btn btn-warning fa fa-edit" onclick="editpart(<?php echo $p->id_partner;?>)"></button>
							  <button class="btn btn-danger fa fa-close" onclick="deletepart(<?php echo $p->id_partner;?>)"> </button>
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
                        <div class="form-body">
                              <input name="id_partner" placeholder="id" class="form-control" type="hidden">
                          <div class="form-group">
                            <label class="control-label col-md-3">No Identitas</label>
                            <div class="col-md-9">
                              <input name="no_identitas" placeholder="No Identitas" class="form-control" type="text">
                            </div>
                          </div>
              			<div class="form-group">
                            <label class="control-label col-md-3">Nama</label>
                            <div class="col-md-9">
                              <input name="nama_partner" placeholder="Nama" class="form-control" type="text">
                            </div>
                          </div>
              			<div class="form-group">
                            <label class="control-label col-md-3">Tgl Lahir</label>
                            <div class="col-md-9">
                              <input name="tgl_lahir" placeholder="Tgl Lahir" id="datepicker" class="form-control" type="text">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3">No Telp</label>
                            <div class="col-md-9">
                              <input name="no_telp" placeholder="No Telp" maxlength="12" onkeypress="return hanyaAngka(event)" class="form-control" type="text">
                            </div>
                          </div>

                        </div>
                      </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                <!-- End Bootstrap modal -->
            </div>
          <!-- end: content -->
<script type="text/javascript">
    var save_method; //for save method string
    var table;


    function addpart()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function editpart(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('partedit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id_partner"]').val(data.id_partner);
      $('[name="no_identitas"]').val(data.no_identitas);
            $('[name="nama_partner"]').val(data.nama_partner);
            $('[name="tgl_lahir"]').val(data.tgl_lahir);
      $('[name="no_telp"]').val(data.no_telp);

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Partner'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }

    function save()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo base_url('partadd')?>";
      }
      else
      {
        url = "<?php echo site_url('partupdate')?>";
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

    function deletepart(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('partdelete')?>/"+id,
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