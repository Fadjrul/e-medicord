<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pemeriksaan_odontogram extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_pemeriksaan_odontogram');
        $this->load->model('m_pasien');
        $this->load->model('m_dokter');
        if (!$this->session->userdata('user_id') OR $this->session->userdata('user_group')!=1) {
			// ALERT
			$alertStatus  = 'failed';
			$alertMessage = 'Anda tidak memiliki Hak Akses atau Session anda sudah habis';
			getAlert($alertStatus, $alertMessage);
			redirect('auth');
		}
    }
    

    public function index() {
        $this->session->unset_userdata('sess_search_pemeriksaan_odontogram');

        // PAGINATION
        $baseUrl    = base_url() . "pemeriksaan_odontogram/index/";
        $totalRows  = count((array) $this->m_pemeriksaan_odontogram->read('','','','',''));
        $perPage    = $this->session->userdata('sess_rowpage');
        $uriSegment = 3;
        $paging     = generatePagination($baseUrl, $totalRows, $perPage, $uriSegment);
        $page       = ($this->uri->segment($uriSegment)) ? $this->uri->segment($uriSegment) : 0;
        
        $data['numbers']    = $paging['numbers'];
        $data['links']      = $paging['links'];
        $data['total_data'] = $totalRows ;
        

        
        //DATA
        $data['setting']       = getSetting();
        $data['title']         = 'Rekam Medis Pemeriksaan Odontogram';
        $data['pemeriksaan_odontogram']        = $this->m_pemeriksaan_odontogram->read($perPage, $page,'','','','','');
        $data['pasien']  = $this->m_pasien->read('', '', '', '', '', $this->uri->segment(3));
		
        
        // TEMPLATE
		$view         = "rekam_medis/pemeriksaan_odontogram/index";
		$viewCategory = "all";
		TemplateApp($data, $view, $viewCategory);
    }
    

    public function search() {
        if ($this->input->post('key')) {
            $data['search'] = $this->input->post('key');
            $this->session->set_userdata('sess_search_pemeriksaan_odontogram', $data['search']);
        } else {
            $data['search'] = $this->session->userdata('sess_search_pemeriksaan_odontogram');
        }
        
        // PAGINATION
        $baseUrl    = base_url() . "pemeriksaan_odontogram/search/".$data['search']."/";
        $totalRows  = count((array)$this->m_pemeriksaan_odontogram->read('','',$data['search']));
        $perPage    = $this->session->userdata('sess_rowpage');
        $uriSegment = 5;
        $paging     = generatePagination($baseUrl, $totalRows, $perPage, $uriSegment);
        $page       = ($this->uri->segment($uriSegment)) ? $this->uri->segment($uriSegment) : 0;
        
        $data['numbers']    = $paging['numbers'];
        $data['links']      = $paging['links'];
        $data['total_data'] = $totalRows ;
        
        //DATA
        $data['setting']       = getSetting();
        $data['title']         = 'Rekam Medis Pemeriksaan Odontogram';
        $data['pemeriksaan_odontogram']        = $this->m_pemeriksaan_odontogram->read($perPage, $page, $data['search']);
        
        // TEMPLATE
		$view         = "rekam_medis/pemeriksaan_odontogram/index";
		$viewCategory = "all";
		TemplateApp($data, $view, $viewCategory);
    }

    public function create_page()
    {

        //DATA
        $data['setting']       = getSetting();
        $data['title']         = 'Tambah Data';
        $data['pasien']  = $this->m_pasien->read('', '', '', '', '', $this->uri->segment(3));
        $data['dokter']  = $this->m_dokter->read('', '', '', '', '');
        $data['pemeriksaan_odontogram']       = $this->m_pemeriksaan_odontogram->read('', '', '', '', '', $this->uri->segment(3));

        // TEMPLATE
        $view         = "rekam_medis/pemeriksaan_odontogram/add";
        $viewCategory = "all";
        TemplateApp($data, $view, $viewCategory);
    }

    public function detail_page()
    {

        //DATA
        $data['setting']       = getSetting();
        $data['title']         = 'Detail Data';
        $data['pemeriksaan_odontogram']  = $this->m_pemeriksaan_odontogram->get($this->uri->segment(3));
        $data['pasien']  = $this->m_pasien->read('', '', '', '', '');
        $data['dokter']  = $this->m_dokter->read('', '', '', '', '');
        $data['pemeriksaan_odontograms']        = $this->m_pemeriksaan_odontogram->read('', '', '', '', '');

        // TEMPLATE
        $view         = "rekam_medis/pemeriksaan_odontogram/detail";
        $viewCategory = "all";
        TemplateApp($data, $view, $viewCategory);
    }

    public function update_page()
    {

        //DATA
        $data['setting']       = getSetting();
        $data['title']         = 'Ubah Data';
        $data['pemeriksaan_odontogram']  = $this->m_pemeriksaan_odontogram->get($this->uri->segment(3));
        $data['pasien']  = $this->m_pasien->read('', '', '', '', '');
        $data['dokter']  = $this->m_dokter->read('', '', '', '', '');
        $data['pemeriksaan_odontograms']        = $this->m_pemeriksaan_odontogram->read('', '', '', '', '');

        // TEMPLATE
        $view         = "rekam_medis/pemeriksaan_odontogram/update";
        $viewCategory = "all";
        TemplateApp($data, $view, $viewCategory);
    }
    

    public function create() {
        csrfValidate();
        // POST
        $data['pemeriksaan_odontogram_id']   = '';
        $data['odontogram_11[51]'] = $this->input->post('odontogram_11[51]');
        $data['odontogram_12[52]'] = $this->input->post('odontogram_12[52]');
        $data['odontogram_13[53]'] = $this->input->post('odontogram_13[53]');
        $data['odontogram_14[54]'] = $this->input->post('odontogram_14[54]');
        $data['odontogram_15[55]'] = $this->input->post('odontogram_15[55]');
        $data['odontogram_16'] = $this->input->post('odontogram_16');
        $data['odontogram_17'] = $this->input->post('odontogram_17');
        $data['odontogram_18'] = $this->input->post('odontogram_18');
        $data['odontogram_[61]21'] = $this->input->post('odontogram_[61]21');
        $data['odontogram_[62]22'] = $this->input->post('odontogram_[62]22');
        $data['odontogram_[63]23'] = $this->input->post('odontogram_[63]23');
        $data['odontogram_[64]24'] = $this->input->post('odontogram_[64]24');
        $data['odontogram_[65]25'] = $this->input->post('odontogram_[65]25');
        $data['odontogram_26'] = $this->input->post('odontogram_26');
        $data['odontogram_27'] = $this->input->post('odontogram_27');
        $data['odontogram_28'] = $this->input->post('odontogram_28');
        $data['odontogram_48'] = $this->input->post('odontogram_48');
        $data['odontogram_47'] = $this->input->post('odontogram_47');
        $data['odontogram_46'] = $this->input->post('odontogram_46');
        $data['odontogram_45[85]'] = $this->input->post('odontogram_45[85]');
        $data['odontogram_44[84]'] = $this->input->post('odontogram_44[84]');
        $data['odontogram_43[83]'] = $this->input->post('odontogram_43[83]');
        $data['odontogram_42[82]'] = $this->input->post('odontogram_42[82]');
        $data['odontogram_41[81]'] = $this->input->post('odontogram_41[81]');
        $data['odontogram_38'] = $this->input->post('odontogram_38');
        $data['odontogram_37'] = $this->input->post('odontogram_37');
        $data['odontogram_36'] = $this->input->post('odontogram_36');
        $data['odontogram_[75]35'] = $this->input->post('odontogram_[75]35');
        $data['odontogram_[74]34'] = $this->input->post('odontogram_[74]34');
        $data['odontogram_[73]33'] = $this->input->post('odontogram_[73]33');
        $data['odontogram_[72]32'] = $this->input->post('odontogram_[72]32');
        $data['odontogram_[71]31'] = $this->input->post('odontogram_[71]31');
        $data['keterangan_tambahan'] = $this->input->post('keterangan_tambahan');
        $data['jumlah_photo_diambil'] = $this->input->post('jumlah_photo_diambil');
        $data['jumlah_rongten_photo_diambil'] = $this->input->post('jumlah_rongten_photo_diambil');
        $data['pasien_id'] = $this->input->post('pasien_id');
        $data['dokter_id'] = $this->input->post('dokter_id');
        $data['createtime']  = date('Y-m-d H:i:s');
        $this->m_pemeriksaan_odontogram->create($data);

        // LOG
        $message    = $this->session->userdata('user_name')." menambah data rekam medis pemeriksaan odontogram ".$data['pasien_id'];
        createLog($message);

        // ALERT
        $alertStatus  = "success";
        $alertMessage = "Berhasil menambah data rekam medis pemeriksaan odontogram ".$data['pasien_id'];
        getAlert($alertStatus, $alertMessage);

        redirect('pemeriksaan_odontogram/index');
    }
    

    public function update() {
        csrfValidate();
        // POST
        $data['pemeriksaan_odontogram_id']   = $this->input->post('pemeriksaan_odontogram_id');
        $data['odontogram_11[51]'] = $this->input->post('odontogram_11[51]');
        $data['odontogram_12[51]'] = $this->input->post('odontogram_12[51]');
        $data['odontogram_13[51]'] = $this->input->post('odontogram_13[51]');
        $data['odontogram_14[51]'] = $this->input->post('odontogram_14[51]');
        $data['odontogram_15[51]'] = $this->input->post('odontogram_15[51]');
        $data['odontogram_16'] = $this->input->post('odontogram_16');
        $data['odontogram_17'] = $this->input->post('odontogram_17');
        $data['odontogram_18'] = $this->input->post('odontogram_18');
        $data['odontogram_[61]21'] = $this->input->post('odontogram_[61]21');
        $data['odontogram_[62]22'] = $this->input->post('odontogram_[62]22');
        $data['odontogram_[63]23'] = $this->input->post('odontogram_[63]23');
        $data['odontogram_[64]24'] = $this->input->post('odontogram_[64]24');
        $data['odontogram_[65]25'] = $this->input->post('odontogram_[65]25');
        $data['odontogram_26'] = $this->input->post('odontogram_26');
        $data['odontogram_27'] = $this->input->post('odontogram_27');
        $data['odontogram_28'] = $this->input->post('odontogram_28');
        $data['odontogram_48'] = $this->input->post('odontogram_48');
        $data['odontogram_47'] = $this->input->post('odontogram_47');
        $data['odontogram_46'] = $this->input->post('odontogram_46');
        $data['odontogram_45[85]'] = $this->input->post('odontogram_45[85]');
        $data['odontogram_44[84]'] = $this->input->post('odontogram_44[84]');
        $data['odontogram_43[83]'] = $this->input->post('odontogram_43[83]');
        $data['odontogram_42[82]'] = $this->input->post('odontogram_42[82]');
        $data['odontogram_41[81]'] = $this->input->post('odontogram_41[81]');
        $data['odontogram_38'] = $this->input->post('odontogram_38');
        $data['odontogram_37'] = $this->input->post('odontogram_37');
        $data['odontogram_36'] = $this->input->post('odontogram_36');
        $data['odontogram_[75]35'] = $this->input->post('odontogram_[75]35');
        $data['odontogram_[74]34'] = $this->input->post('odontogram_[74]34');
        $data['odontogram_[73]33'] = $this->input->post('odontogram_[73]33');
        $data['odontogram_[72]32'] = $this->input->post('odontogram_[72]32');
        $data['odontogram_[71]31'] = $this->input->post('odontogram_[71]31');
        $data['keterangan_tambahan'] = $this->input->post('keterangan_tambahan');
        $data['jumlah_photo_diambil'] = $this->input->post('jumlah_photo_diambil');
        $data['jumlah_rongten_photo_diambil'] = $this->input->post('jumlah_rongten_photo_diambil');
        $data['pasien_id'] = $this->input->post('pasien_id');
        $data['dokter_id'] = $this->input->post('dokter_id');
        $this->m_pemeriksaan_odontogram->update($data);

        // LOG
        $message    = $this->session->userdata('user_name')." mengubah data rekam medis pemeriksaan odontogram dengan ID = ".$data['pemeriksaan_odontogram_id']." - ".$data['pasien_id'];
        createLog($message);

        // ALERT
        $alertStatus  = "success";
        $alertMessage = "Berhasil mengubah data rekam medis pemeriksaan odontogram : ".$data['pasien_id'];
        getAlert($alertStatus, $alertMessage);

        redirect('pemeriksaan_odontogram/index');
    }
    

    public function delete() {
        csrfValidate();
        // POST
        $this->m_pemeriksaan_odontogram->delete($this->input->post('pemeriksaan_odontogram_id'));
        
        // LOG
        $message    = $this->session->userdata('user_name')." menghapus data rekam medis pemeriksaan odontogram dengan ID = ".$this->input->post('pemeriksaan_odontogram_id')." - ".$this->input->post('pasien_id');
        createLog($message);

        // ALERT
        $alertStatus  = "failed";
        $alertMessage = "Menghapus data rekam medis pemeriksaan odontogram : ".$this->input->post('pasien_id');
        getAlert($alertStatus, $alertMessage);

        redirect('pemeriksaan_odontogram/index');
    }
    
}
?>