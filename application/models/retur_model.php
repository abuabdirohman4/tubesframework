<?php

class retur_model extends CI_model
{
public $id_pembelian;
public $id_bahan_baku;
public $jumlah;
public $id_pegawai;
public $kd_vendor;


public $labels=[];

public function __construct(){
parent::__construct();
$this->labels=$this->_atributelabels();
$this->load->database();
}
public function insert(){
$data=[
'id_retur'=>$this->input->post('id_retur'),
'tgl_retur'=>$this->input->post('tgl_retur'),
'jumlah_retur'=>$this->input->post('jumlah_retur'),
'id_pembelian'=>$this->input->post('id_pembelian'),
'id_bahan_baku' => $this->input->post('id_bahan_baku')
];
$this->db->insert('retur_pembelian',$data);
$this->db->query("UPDATE bahan_baku SET jumlah_stok=jumlah_stok-$_POST[jumlah_retur] WHERE id_bahan_baku='$_POST[id_bahan_baku]'");
$id_retur = $this->input->post('id_retur');
}
public function update(){
$id_retur=$this->input->post('id_retur');
$tgl_retur=$this->input->post('tgl_retur');
$jumlah_retur=$this->input->post('jumlah_retur');
$id_pembelian=$this->input->post('id_pembelian');
$id_bahan_baku=$this->input->post('id_bahan_baku');
$selisih = $this->db->query("SELECT * FROM retur_pembelian WHERE id_retur='$id_retur'")->result()[0]->jumlah_retur;
$selisih = $selisih - $jumlah_retur;
$this->db->query("UPDATE bahan_baku SET jumlah_stok=jumlah_stok+$selisih WHERE id_bahan_baku='$id_bahan_baku'");
$sql=sprintf("UPDATE retur_pembelian SET tgl_retur='%s', jumlah_retur='%s', id_pembelian='%s', id_bahan_baku='%s' where id_retur='%s'",
$tgl_retur,
$jumlah_retur,
$id_pembelian,
$id_bahan_baku,
$id_retur
);
$this->db->query($sql);
}
public function delete(){
$this->db->query('SET FOREIGN_KEY_CHECKS=0');
$query = $this->db->query("SELECT * FROM retur_pembelian WHERE id_retur='$this->id'")->result()[0];
$jumlah_retur = $query->jumlah_retur;
$id_bahan_baku = $query->id_bahan_baku;
$this->db->query("UPDATE bahan_baku SET jumlah_stok=jumlah_stok+$jumlah_retur WHERE id_bahan_baku='$id_bahan_baku'");
$sql=sprintf("DELETE FROM retur_pembelian WHERE id_retur='%s'",$this->id);
$this->db->query($sql);
$this->db->query('SET FOREIGN_KEY_CHECKS=1');

}
public function read(){
$sql="SELECT * FROM retur_pembelian ORDER BY id_retur";
$query=$this->db->query($sql);
return $query->result();
}

public function _atributelabels(){
return[
'id_pembelian'=>'ID Pembelian:',
'id_bahan_baku'=>'ID Bahan Baku:',
'jumlah'=>'Jumlah:',
'id_pegawai'=>'ID Pegawai',
'kd_vendor'=>'KD Vendor'
];
}
public function increase($id_bahan_baku, $jumlah) {

    $query = $this->db->query("UPDATE bahan_baku SET jumlah_stok=jumlah_stok+$jumlah WHERE id_bahan_baku='$id_bahan_baku'");
    return $query;
}

}