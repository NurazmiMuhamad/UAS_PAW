
@extends('masterCompany')
@section('konten')


<h1>Company Profile</h1>
<br>
<div class="container bootstrap snippet">

    	<div>   
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="{{ route('updateProfileCompany')}}" method="get" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Nama Perusahaan</h4></label>
                              <input type="text" class="form-control" name="nama_perusahaan" id="first_name" placeholder="Nama Perusahaan" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Alamat Perusahaan</h4></label>
                              <input type="text" class="form-control" name="alamat_perusahaan" id="last_name" placeholder="Alamat Perusahaan" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Tanggal Berdiri</h4></label>
                              <input type="text" class="form-control" name="tanggal_berdiri" id="phone" placeholder="31-07-1998" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Nomer Telepon</h4></label>
                              <input type="text" class="form-control" name="no_tlp" id="mobile" placeholder="No.Telepon" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email."><br><br>
                          </div>
                      </div><br><br>
                      
                      <div class="form-group">
                          
                          <div class="col-xs-6"><br>
                            <label for="description">Deskripsi Perusahaan</label><br>
                               <textarea type="description" id="description" name="desc_perusahaan" rows = "5" cols = "85" name = "description"> Deskripsi Perusahaan</textarea>
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                      </div>

                      
              	</form>
              
            
              
             
                                                      
<script type="text/javascript">
$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
</script>
</body>
</html>
