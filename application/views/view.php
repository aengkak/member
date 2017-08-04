<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              <h4><?php echo $member->nama_member?></h4>
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            
                    							<form action="#" id="form" class="form-horizontal">
                              <div class="form-body">
                                    <input name="id_member" placeholder="id" class="form-control" type="hidden">
                                <div class="form-group">
                                  <label class="control-label col-md-3">No Identitas</label>
                                  <div class="col-md-9">
                                    <input placeholder="No Identitas" class="form-control" type="text" value="<?php echo $member->no_identitas?>">
                                  </div>
                                </div>
                    			<div class="form-group">
                                  <label class="control-label col-md-3">Nama</label>
                                  <div class="col-md-9">
                                    <input name="nama_member" placeholder="Nama" value="<?php echo $member->nama_member?>" class="form-control" type="text">
                                  </div>
                                </div>
                    			<div class="form-group">
                                  <label class="control-label col-md-3">Alamat</label>
                                  <div class="col-md-9">
                                    <input name="alamat" placeholder="Alamat" value="<?php echo $member->alamat?>" class="form-control" type="text">
                                  </div>
                                </div>
                    			<div class="form-group">
                                  <label class="control-label col-md-3">No Telp</label>
                                  <div class="col-md-9">
                                    <input name="no_telp" placeholder="No Telp" value="<?php echo $member->no_telp?>" class="form-control" type="text">
                                  </div>
                                </div>
                    			<div class="form-group">
                                  <label class="control-label col-md-3">No Hp</label>
                                  <div class="col-md-9">
                                    <input name="no_hp" placeholder="No Hp" value="<?php echo $member->no_hp?>" class="form-control" type="text">
                                  </div>
                                </div>
                    			<div class="form-group">
                                  <label class="control-label col-md-3">Email</label>
                                  <div class="col-md-9">
                                    <input name="email" placeholder="Email" value="<?php echo $member->email?>" class="form-control" type="text">
                                  </div>
                                </div>
                    			<div class="form-group">
                                  <label class="control-label col-md-3">Tgl Lahir</label>
                                  <div class="col-md-9">
                                    <input name="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $member->tgl_lahir?>" class="form-control" type="text">
                                  </div>
                                </div>
                              </div>
                            </form>
							
                          </div>
                        </div>
                      </div>
					  <?php 
					  $i=0;
					  foreach($partner as $data)
					  {$i++;
						  ?>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i?>" aria-expanded="false" aria-controls="collapseTwo">
                              <h4><?php echo $data->nama_partner;?></h4>
                            </a>
                          </h4>
                        </div>
                        <div id="collapse<?php echo $i?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
						  
                      						  <form action="#" id="form" class="form-horizontal">
                                <div class="form-body">
                                      <input name="id_partner" placeholder="id" class="form-control" type="hidden">
                                  <div class="form-group">
                                    <label class="control-label col-md-3">No Identitas</label>
                                    <div class="col-md-9">
                                      <input name="no_identitas" value="<?php echo $data->no_identitas;?>" placeholder="No Identitas" class="form-control" type="text">
                                    </div>
                                  </div>
                      			<div class="form-group">
                                    <label class="control-label col-md-3">Nama</label>
                                    <div class="col-md-9">
                                      <input name="nama_partner" placeholder="Nama" value="<?php echo $data->nama_partner;?>" class="form-control" type="text">
                                    </div>
                                  </div>
                      			<div class="form-group">
                                    <label class="control-label col-md-3">Tgl Lahir</label>
                                    <div class="col-md-9">
                                      <input name="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $data->tgl_lahir;?>" class="form-control" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label col-md-3">No Telp</label>
                                    <div class="col-md-9">
                                      <input name="no_telp" placeholder="No Telp" value="<?php echo $data->no_telp;?>" class="form-control" type="text">
                                    </div>
                                  </div>

                                </div>
                              </form>
						  
                          </div>
                        </div>
                      </div>
					  <?php } ?>
                    </div>