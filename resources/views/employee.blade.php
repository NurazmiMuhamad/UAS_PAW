
@extends('master')
@section('content')

<h1>Employee Profile</h1>
<br>
<div class="container bootstrap snippet">

    	<div>   
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="{{ route('updateProfileFreelancer')}}" method="get" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Tempat Lahir</h4></label>
                              <input type="text" class="form-control" name="tempat_lahir" id="phone" placeholder="Sukabumi" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Tanggal Lahir</h4></label>
                              <input type="text" class="form-control" name="tanggal_lahir" id="mobile" placeholder="31-07-1998" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Jenis Kelamin</h4></label>
                              <input type="text" class="form-control" name="jk" id="email" placeholder="Pria/Wanita" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Agama</h4></label>
                              <input type="text" class="form-control" name="agama" id="location" placeholder="Islam" title="enter a location">
                          </div>
                      </div>
                     
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Alamat</h4></label>
                              <input type="text" class="form-control" name="alamat" id="location" placeholder="........" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Nomer Telepon</h4></label>
                              <input type="nomer" class="form-control" name="no_telp" id="password2" placeholder="Masukan No.Telepon" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="password2" placeholder="youremail@mail.com" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Kewarganegaraan</h4></label>
                              <input type="text" class="form-control" name="kewarganegaraan" id="password2" placeholder="Kewarganegaraan" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Tinggi Badan</h4></label>
                              <input type="text" class="form-control" name="tinggi_badan" id="password2" placeholder="170 cm" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Berat Badan</h4></label>
                              <input type="text" class="form-control" name="berat_badan" id="password2" placeholder="60 kg" title="enter your password2.">
                          </div>
                      </div>
<!--                       <div class="form-group">
                          
                          <div class="col-xs-6">
                            <br>
                            <label for="fileselect">Upload Your CV right here:</label><br>
                            <input type="file" id="fileselect" name="fileselect[]" multiple="multiple" />
                          </div>  
                      </div> -->
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	
                            </div>
                      </div>
              	</form>
              
            
              
             
              	</form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
  </section>
                                                      
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
@stop