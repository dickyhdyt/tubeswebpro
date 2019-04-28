<style>

</style>

<body style="background-color:#f2f2f2FF;height:100%">
<div class="container" style="height:100%;">
  <div class="row justify-content-md-center">
      <div class="col-md-9 " style="background-color:white;height:100%;">
        <div class="container mt-5 pt-4 pb-3" style="background-color:white;height:100%;">
            <div class="main-content" style="">
              <div class="panel-heading span_header_white">
                <div class="panel-title" style="color: #000000; font-weight: bold">Registrasi<hr>
                </div>
                <?php if(validation_errors()) { ?>
                  <div class="alert alert-danger">
                    <?php echo validation_errors(); ?>
                  </div>
                <?php } ?>
              </div>
              <div class="form-mag col-md-12" style="max-width:600px; border-color: #FFF">
                <div class="box_title" style="padding: 0px; margin-bottom: 20px; border:0px">
                  <div class="alert alert-warning" role="alert" style=" padding-left: 15px; padding-right: 15px;padding-top: 0px;padding-bottom: 0px;margin: 0px;font-size: 14px">
                    <ul style="padding: 10px;margin: 0px;">                                
                      <li>Fill in your profile data as per your ID (Lengkapi data sesuai dengan KTP/SIM/PASPOR).</li>                                
                      <li>Fill in your active mobile number and email ID (Masukkan nomor dan email yang benar).</li>
                      <li>In case of transaction discrepancy, we can only validate your account with your ID (Dalam hal terjadinya perbedaan transaksi, kami hanya dapat melakukan verifikasi sesuai dengan data KTP/SIM/PASPOR).</li>
                    </ul>
                  </div>
                </div>
                <?php echo form_open('C_user/tambahUser'); ?>
                 
                  <div class="form-group">
                  <label for="handphone" class="cols-sm-2 control-label" style="margin: 0px; padding: 0px;">Handphone:</label>
                    <div class="cols-sm-10" style="max-width: 250px;">
                      <div class="input-group">
                        <span class="input-group-addon"><i aria-hidden="true"></i></span>
                        <input name="handphone" id="handphone" type="number" pattern="[\d]*" class="form-control" value="" onkeyup="checkNumber(this)" maxlength="12" placeholder="Handphone Number" required="">                                
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="username" class="cols-sm-2 control-label" style="margin: 0px; padding: 0px;">Username:</label>
                    <div class="cols-sm-10" style="max-width: 300px;">
                      <div class="input-group">
                        <span class="input-group-addon"><i aria-hidden="true"></i></span>
                        <input name="username" id="username" type="text" class="form-control" value="" maxlength="50" placeholder="Your Name" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label" style="margin: 0px; padding: 0px;">Password:</label>
                    <div class="cols-sm-10" style="max-width: 200px;">
                      <div class="input-group">
                        <span class="input-group-addon"><i  aria-hidden="true"></i></span>
                        <input name="password" id="password" type="password" class="form-control" id="pass" size="40" placeholder="Your Password" required>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <label for="pin2" class="cols-sm-2 control-label" style="margin: 0px; padding: 0px;">Re-type PIN/Password:</label>
                    <div class="cols-sm-10" style="max-width: 200px;">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key fa" aria-hidden="true"></i></span>
                        <input name="pin2" type="password" class="form-control" id="pin2" size="40" maxlength="6" placeholder="6 digits Number" onkeyup="checkNumber(this);">
                      </div>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label" style="margin: 0px; padding: 0px;">Email:</label>
                    <div class="cols-sm-10" style="max-width: 300px;">
                      <div class="input-group">
                        <span class="input-group-addon"><i aria-hidden="true"></i></span>
                        <input name="email" id="email" type="email" class="form-control" value="" maxlength="50" placeholder="Your valid email" required="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="address" class="cols-sm-2 control-label" style="margin: 0px; padding: 0px;">Alamat:</label>
                    <div class="cols-sm-10" style="max-width: 350px;">
                      <div class="input-group">
                        <span class="input-group-addon"><i aria-hidden="true"></i></span>
                        <textarea name="address" id="address" rows="3" cols="50" maxlength="100" class="form-control" placeholder="Correspondence address based on ID/KTP"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="jk" class="cols-sm-2 control-label" style="margin: 0px; padding: 0px;">Gender:</label>
                    <div class="cols-sm-10">
                      <div class="input-group">
                        <select name="jk" id="jk" class="form-control">
                          <option value="L">Laki-laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  </div>                        
                  <!-- <div class="form-group">
                    <div style="margin-bottom: 20px">
                      <input type="hidden" name="tanggal_lahir" value="" id="tanggal_lahir"><div class="input-group">
                        <span class="input-group-addon">
                        <select name="tanggal_lahir[day]" class="form-control input-sm">
                          <option value="0">Day</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                          <option value="31">31</option>
                        </select>
                        </span>
                        <span class="input-group-addon">
                        <select name="tanggal_lahir[month]" class="form-control input-sm"><option value="0">Month</option>
                          <option value="1">Jan</option>
                          <option value="2">Feb</option>
                          <option value="3">Mar</option>
                          <option value="4">Apr</option>
                          <option value="5">May</option>
                          <option value="6">Jun</option>
                          <option value="7">Jul</option>
                          <option value="8">Aug</option>
                          <option value="9">Sep</option>
                          <option value="10">Oct</option>
                          <option value="11">Nov</option>
                          <option value="12">Dec</option>
                        </select>
                        </span>
                        <span class="input-group-addon">
                        <select name="tanggal_lahir[year]" class="form-control input-sm">
                          <option value="0">Year</option>
                          <option value="2002">2002</option>
                          <option value="2001">2001</option>
                          <option value="2000">2000</option>
                          <option value="1999">1999</option>
                          <option value="1998">1998</option>
                          <option value="1997">1997</option>
                          <option value="1996">1996</option>
                          <option value="1995">1995</option>
                          <option value="1994">1994</option>
                          <option value="1993">1993</option>
                          <option value="1992">1992</option>
                          <option value="1991">1991</option>
                          <option value="1990">1990</option>
                        </select>
                        </span>
                      </div>
                    </div>
                  </div> -->
                  
                  <div class="div_space"></div>
                  <button type="submit" name="tambahUser"class="btn btn-success btn-md login-button">Register Account</button>
                  <div class="div_space"></div>
                  <div style="font-size: 12px; margin-bottom: 20px">By clicking Register Account, I confirm I have agreed to
                    <a href="gui.term.php?sid=&amp;source=" target="_blank" style="text-decoration: underline">Terms &amp; Condition</a>, and 
                    <a href="gui.privacy.php?sid=&amp;source=" target="_blank" style="text-decoration: underline">Privacy Policy</a> of Cinema XXI.
                  </div>
                <?php echo form_close(); ?>
              </div>
              <div class="clearfix"></div>
              <div class="clearfix"></div>
              <!--body wrapper end-->
            </div>
            
          
        </div>
      </div>
  </div>
</div>
</body>

