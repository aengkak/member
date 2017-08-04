          <!-- start: Content -->
          <div id="content" class="profile-v1">
             <div class="col-md-12 col-sm-12 profile-v1-wrapper">
                <div class="col-md-9  profile-v1-cover-wrap" style="padding-right: 0px; width: 1025px;">
                    <div class="profile-v1-pp">
                      <img src="<?php echo base_url('asset/img/user.png');?>"/>
                      <h2><?php echo $pro->nama_member;?></h2>
                    </div>
                    <div class="col-md-12 profile-v1-cover">
                      <img src="asset/img/bg.png" class="img-responsive">
                    </div>
                </div>
             </div>
             <div class="col-md-12 col-sm-12 profile-v1-body">
                   
				   
				   <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Form Edit</h4>
                        </div>
                    <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
						  <form action="" method="post">
                            <div class="form-group"><label class="col-sm-2 control-label text-right">No Identitas</label>
                              <div class="col-sm-10"><input type="text" name="no_identitas" value="<?php echo $pro->no_identitas;?>" class="form-control android"></div>
                            </div>
							
							<div class="form-group"><label class="col-sm-2 control-label text-right">Password</label>
                              <div class="col-sm-10"><input type="password" name="password" class="form-control android"></div>
                            </div>
							
							<div class="form-group"><label class="col-sm-2 control-label text-right">Nama</label>
                              <div class="col-sm-10"><input type="text" name="nama_member" value="<?php echo $pro->nama_member;?>" class="form-control android"></div>
                            </div>
							
							<div class="form-group"><label class="col-sm-2 control-label text-right">Alamat</label>
                              <div class="col-sm-10"><input type="text" name="alamat" value="<?php echo $pro->alamat;?>" class="form-control android"></div>
                            </div>
							
							<div class="form-group"><label class="col-sm-2 control-label text-right">No Telp</label>
                              <div class="col-sm-10"><input type="text" name="no_telp" value="<?php echo $pro->no_telp;?>" class="form-control android"></div>
                            </div>
							
							<div class="form-group"><label class="col-sm-2 control-label text-right">No Hp</label>
                              <div class="col-sm-10"><input type="text" name="no_hp" value="<?php echo $pro->no_hp;?>" class="form-control android"></div>
                            </div>
							
							<div class="form-group"><label class="col-sm-2 control-label text-right">Email</label>
                              <div class="col-sm-10"><input type="text" name="email" value="<?php echo $pro->email;?>" class="form-control android"></div>
                            </div>
							
							<div class="form-group"><label class="col-sm-2 control-label text-right">Tgl Lahir</label>
                              <div class="col-sm-10"><input type="text" id="datepicker" name="tgl_lahir" value="<?php echo $pro->tgl_lahir;?>" class="form-control android"></div>
                            </div>
							<br>
							<label class="pull-right">
								<button type="submit" class="btn btn-primary">Save</button>
							</label>
							</form>
                            </div>
                          </div>
                        </div>
                    </div>
					</div>
					</div>
					</div>
                  
                
             </div>
           
          </div>
          <!-- end: content -->