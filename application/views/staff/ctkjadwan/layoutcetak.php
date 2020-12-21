<?php
	$dataundangan = $this->db->query("SELECT * FROM undwawancara INNER JOIN jadwal ON undwawancara.no_jdwl = jadwal.no_jdwl INNER JOIN pelamar ON jadwal.id_pelamar = pelamar.id_pel INNER JOIN sp ON jadwal.no_sp = sp.no_sp INNER JOIN wo ON sp.no_wo = wo.no_wo INNER JOIN lokasi ON wo.idlokasi = lokasi.idlokasi INNER JOIN pewawancara ON undwawancara.id_wan = pewawancara.id_wan WHERE undwawancara.no_undangan = '$no_undangan'")->row();
?>
<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view("staff/_partials/head.php") ?>
</head>
<body style="padding: 20px; font-size: 17px;" onload="detailwo()">
	<center>
		<h2>PT LOTUS LESTARI RAYA</h2>
		<hr>
	</center>
    <p style="float: right; margin-right:20px; ">
        Jakarta, <?php echo $dataundangan->tgl_und;?>
        <br>
    </p>
	<p>
		<table width="100%">
            <tr>
                <td width="5%"><b>No.</b></td>
                <td width="3%">:</td>
                <td><?php echo $dataundangan->no_undangan;?></td>
            </tr> 
            <tr>
                <td width="5%"><b>Hal</b></td>
                <td width="3%">:</td>
                <td>Undangan Wawancara</td>
            </tr>      
        </table>
        <br>
        Yth. <b><?php echo $dataundangan->nmpel;?></b><br>
        di tempat<br><br>
        Dengan hormat.
        <br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sehubung dengan ketertarikan anda pada lowongan di PT. Lotus Lestari Raya, Kami menjadwalkan anda untuk interview di {{lokasi}}. Mohon kehadirannya pada :<br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal : <?php echo $dataundangan->tgl_jdwl;?><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jam : 10.00 WIB<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat : <?php echo $dataundangan->nmlokasi;?><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bertemu : <?php echo $dataundangan->namawan;?><br><br>
        Apabila anda berhalangan dengan jadwal yang diberikan atau sudah dapat pekerjaan, mohon sekiranya untuk menghunbungi kami terlebih dahulu.
	</p>
	<div id="detailwo">
		
	</div>
	<br>
	<p style="float: right; margin-right:20px; ">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hormat Kami, 
		<br>
        Project Coordinator<br><br>
		<br><br><br>
		(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
	</p>



	<?php $this->load->view("staff/_partials/scrolltop.php") ?>

	<?php $this->load->view("staff/_partials/js.php") ?>

	<script type="text/javascript">
		function detailwo(){
        		var kode_wo = "<?php echo $datasp->no_wo;?>";
        		$("#detailwo").load("<?php echo site_url('staff/workorder/detailwo/');?>" + kode_wo);
        	}
	</script>
	<script type="text/javascript">
		var detik = 1;
          var menit = 0;
              
            function hitung() {
                /** setTimout(hitung, 1000) digunakan untuk 
                    * mengulang atau merefresh halaman selama 1000 (1 detik) 
                */
                setTimeout(hitung,1000);
  
               /** Jika waktu kurang dari 10 menit maka Timer akan berubah menjadi warna merah */
               
                var peringatan = 'style="color:red"';
               
 
               /** Menampilkan Waktu Timer pada Tag #Timer di HTML yang tersedia */
               $('#waktu').html(
                      '<span class="'+peringatan+'"><i class="fa fa-timer"></i>' + menit + ' menit : ' + detik + ' detik</span>'
                );
  
                /** Melakukan Hitung Mundur dengan Mengurangi variabel detik - 1 */
                detik --;
 
                /** Jika var detik < 0
                    * var detik akan dikembalikan ke 59
                    * Menit akan Berkurang 1
                */
                if(detik < 0) {
                    detik = 59;
                    menit --;
 
                    /** Jika menit < 0
                        * Maka menit akan dikembali ke 59
                        * Jam akan Berkurang 1
                    */
                    if(menit < 0) {
                      
                        window.print();

                    } 
                } 
            }           
            /** Menjalankan Function Hitung Waktu Mundur */
            hitung();
	</script>

</body>
</html>