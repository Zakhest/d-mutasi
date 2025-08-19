<div class="lampiran">

<div class="pos" id="_114:1220" style="top:1240;left:114">
<span id="_16.1" style="font-weight:bold; font-family:Arial; font-size:16.1px; color:#000000">
<U>Lampiran Surat</U></span>
</div>
<div class="pos" id="_114:1239" style="top:1260;left:114">
<span id="_16.1" style=" font-family:Arial; font-size:16.1px; color:#000000">
Nomor</span>
</div>
<div class="pos" id="_223:1239" style="top:1259;left:223">
<span id="_16.1" style=" font-family:Arial; font-size:16.1px; color:#000000">
:</span>
</div>
<div class="pos" id="_252:1239" style="top:1260;left:252">
<span id="_16.1" style=" font-family:Arial; font-size:16.1px; color:#000000">
421.2/          </span>
</div>
<div class="pos" id="_252:1239" style="top:1260;left:322">
<span id="_16.1" style=" font-family:Arial; font-size:16.1px; color:#000000">
          - Bid. SD</span>
</div>
<div class="pos" id="_114:1258" style="top:1280;left:114">
<span id="_16.1" style=" font-family:Arial; font-size:16.1px; color:#000000">
Tanggal</span>
</div>
<div class="pos" id="_223:1258" style="top:1280;left:223">
<span id="_16.1" style=" font-family:Arial; font-size:16.1px; color:#000000">
:</span>
</div>
<div class="pos" id="_252:1258" style="top:1280;left:252">
<span id="_16.1" style=" font-family:Arial; font-size:16.1px; color:#000000">
<?php echo $detail['tanggal_surat']?></span>
</div>
<div class="pos" id="_114:1278" style="top:1300;left:114">
<span id="_16.1" style=" font-family:Arial; font-size:16.1px; color:#000000">
Perihal</span>
</div>
<div class="pos" id="_223:1278" style="top:1300;left:223">
<span id="_16.1" style=" font-family:Arial; font-size:16.1px; color:#000000">
:</span>
</div>
<div class="pos" id="_252:1278" style="top:1300;left:252">
<span id="_16.1" style=" font-family:Arial; font-size:16.1px; color:#000000">
Persetujuan Mutasi Siswa</span>
</div>
<div class="pos" id="_110:1335" style="top:1335;left:110">
<span id="_16.1" style=" font-family:Arial; font-size:16.1px; color:#000000">
Daftar Siswa Pindahan Yang Mendapat Izin Masuk di Kepala <?php echo $detail['kepala_sd']?></span>
</div>
<div class="pos" id="_421:1354" style="top:1354;left:421">
<span id="_16.1" style=" font-family:Arial; font-size:16.1px; color:#000000">
</span>
</div>

<!--- Tabel --->

<div class="pos" id="_115:1397" style="top:1397;left:115">
<table cellpadding="1" cellspacing="1" class="coba">
   <thead>
      <th width="10px" height="10px" class="coba">NO</th>
      <th width="200px" height="10px" class="dua">NAMA SISWA </th>
      <th width="200px" height="10px" class="dua">TEMPAT TANGGAL LAHIR</th>
     <th width="90px" height="10px" class="dua" colspan="2"> MASUK DI KLS / TAHUN</th>
     <th height="10px" class="dua">Asal Sekolah</th>
      <th height="10px" class="dua">NISN</th>

   </thead>
   <tbody>
      <?php
        
        $no = 1;
       foreach ($siswa_masuk as $s) {
        
      ?>
   <tr>
      
      <td class="dua" align="center"><?php echo $no++ ?></td>
      <td class="dua" align="center"><?php echo $s->nama_siswa?></td>
       <td class="dua" align="center"><?php echo $s->ttl?></td>
       <td class="dua" align="center"><?php echo $s->masuk_kelas?></td>
       <td class="dua" align="center"><?php echo $s->tahun ?></td>
       <td class="dua" align="center"><?php echo $s->asal_sekolah?></td>
       <td class="dua" align="center"><?php echo $s->nisn?></td>

   </tr>
<?php }?>
</tbody>
</table>


</div>




<div class="pos" id="_428:1630" style="top:1630;left:428">
<span id="_16.3" style=" font-family:Arial; font-size:16.3px; color:#000000">
A.n. Kepala,</span>
</div>
<div class="pos" id="_472:1649" style="top:1649;left:462">
<span id="_16.3" style=" font-family:Arial; font-size:16.3px; color:#000000">
Sekretaris,</span>
</div>
<div class="pos" id="_430:1668" style="top:1668;left:430">
<span id="_16.3" style=" font-family:Arial; font-size:16.3px; color:#000000">
u.b.  Kabid SD</span>
</div>
<div class="pos" id="_472:1783" style="top:1783;left:462">
<span id="_16.3" style="font-weight:bold; font-family:Arial; font-size:16.3px; color:#000000">
Raden Medi Sandora, S.Pt., M.Sc., M.S.E</span> 
</div>
<div class="pos" id="_472:1802" style="top:1802;left:462">
<span id="_16.3" style=" font-family:Arial; font-size:16.3px; color:#000000">
Pembina / IV-a</span>
</div>
<div class="pos" id="_472:1821" style="top:1821;left:462">
<span id="_16.3" style=" font-family:Arial; font-size:16.3px; color:#000000">
NIP 197005231997031003</span>
</div>



       </div>