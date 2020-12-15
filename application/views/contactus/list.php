<center><h3>CONTACT US</h3></center><br>
<?php 
// notifikasi sukses
if($this->session->flashdata('sukses'))
{
	echo '<div class="alert alert-success text-center">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}
// form open
echo form_open(base_url('contactus'),' class="form-horizontal"');
 ?>



<div class="comment_form">
    <h5>Keluhan:</h5>
    <div>
        <textarea name="saran" class="textaa" placeholder="Tulis keluhan anda disini"><?php echo set_value('saran') ?></textarea>
    </div>     
    
    <div>
        <input type="submit" class="tombol_kirim" name="submit" value="Kirim">
    </div>
    
</div>

 <?php echo form_close(); ?>