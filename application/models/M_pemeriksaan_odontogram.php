<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_pemeriksaan_odontogram extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
    public function read($limit, $start, $key, $pasien, $dokter) {
        $this->db->select('a.*, b.*, c.*');
        $this->db->from('tbl_rm_pemeriksaan_odontogram a');
        $this->db->join('tbl_pasien b','a.pasien_id=b.pasien_id','LEFT');
        $this->db->join('tbl_dokter c','a.dokter_id=c.dokter_id','LEFT');
        
        if($pasien !=""){
            $this->db->where('a.pasien_id', $pasien);
        }

        if($dokter !=""){
            $this->db->where('a.dokter_id', $dokter);
            
        }

        if($key!=''){
            $this->db->like("a.odontogram_11[51]", $key);
            $this->db->or_like("a.odontogram_12[52]", $key);
            $this->db->or_like("a.odontogram_13[53]", $key);
            $this->db->or_like("a.odontogram_14[54]", $key);
            $this->db->or_like("a.odontogram_15[55]", $key);
            $this->db->or_like("a.odontogram_16", $key);
            $this->db->or_like("a.odontogram_17", $key);
            $this->db->or_like("a.odontogram_18", $key);
            $this->db->or_like("a.odontogram_[61]21", $key);
            $this->db->or_like("a.odontogram_[62]22", $key);
            $this->db->or_like("a.odontogram_[63]23", $key);
            $this->db->or_like("a.odontogram_[64]24", $key);
            $this->db->or_like("a.odontogram_[65]25", $key);
            $this->db->or_like("a.odontogram_26", $key);
            $this->db->or_like("a.odontogram_27", $key);
            $this->db->or_like("a.odontogram_28", $key);
            $this->db->or_like("a.odontogram_48", $key);
            $this->db->or_like("a.odontogram_47", $key);
            $this->db->or_like("a.odontogram_46", $key);
            $this->db->or_like("a.odontogram_45[85]", $key);
            $this->db->or_like("a.odontogram_44[84]", $key);
            $this->db->or_like("a.odontogram_43[83]", $key);
            $this->db->or_like("a.odontogram_42[82]", $key);
            $this->db->or_like("a.odontogram_41[81]", $key);
            $this->db->or_like("a.odontogram_38", $key);
            $this->db->or_like("a.odontogram_37", $key);
            $this->db->or_like("a.odontogram_36", $key);
            $this->db->or_like("a.odontogram_[75]35", $key);
            $this->db->or_like("a.odontogram_[74]34", $key);
            $this->db->or_like("a.odontogram_[73]33", $key);
            $this->db->or_like("a.odontogram_[72]32", $key);
            $this->db->or_like("a.odontogram_[71]31", $key);
            $this->db->or_like("a.keterangan_tambahan", $key);
            $this->db->or_like("a.jumlah_photo_diambil", $key);
            $this->db->or_like("a.jumlah_rongten_photo_diambil", $key);
            $this->db->or_like("b.nama_pasien", $key);
            $this->db->or_like("b.no_rekam_medis", $key);
            $this->db->or_like("b.jenis_kelamin", $key);
            $this->db->or_like("b.tgl_lahir_pasien", $key);
            $this->db->or_like("b.nik_pasien", $key);
            $this->db->or_like("c.nama_dokter", $key);
            $this->db->or_like("c.ttd_dokter", $key);
        }

        if($limit !="" OR $start !=""){
            $this->db->limit($limit, $start);
        }

        $this->db->order_by('a.pemeriksaan_odontogram_id', 'DESC');

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return null;
    }

    public function create($data) {
        $this->db->insert('tbl_rm_pemeriksaan_odontogram', $data);
    }
    
    public function update($data) {
        $this->db->update('tbl_rm_pemeriksaan_odontogram', $data, array('pemeriksaan_odontogram_id' => $data['pemeriksaan_odontogram_id']));
    }
    
    public function delete($id) {
        $this->db->delete('tbl_rm_pemeriksaan_odontogram', array('pemeriksaan_odontogram_id' => $id));
    }
    
    public function get($id) {
        $this->db->where('pemeriksaan_odontogram_id', $id);
        $query = $this->db->get('tbl_rm_pemeriksaan_odontogram', 1);
        return $query->result();
    }

    public function widget() {
        $query  = $this->db->query(" SELECT
            (SELECT count(pemeriksaan_odontogram_id) FROM tbl_rm_pemeriksaan_odontogram) as total_rm_pemeriksaan_odontogram
        ");
        return $query->result();
    }

    function __destruct() {
        $this->db->close();
    }
    
}
?>
