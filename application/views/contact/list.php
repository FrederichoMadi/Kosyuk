<center><h3>CONTACT US</h3></center><br>
<?php 
// notifikasi pengiriman pesan
if($this->session->flashdata('sukses'))
{
	echo '<div class="alert alert-success"> ';
	echo $this->session->flashdata('sukses');	
	echo '</div>';
}
// notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');
// form open
echo form_open('contact');
 ?>


<div class="comment_form">
    <h5>Keluhan:</h5>
    <div class="form-group">
        <textarea class="textaa" name="keluhan" placeholder="Tulis keluhan anda disini" ><?php echo set_value('keluhan') ?></textarea>
    </div>     
        <button type="submit" name="submit" class="tombol_kirim" >Kirim</button>
    
    
</div>

 <?php echo form_close(); ?>