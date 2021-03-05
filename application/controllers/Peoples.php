<?php
class Peoples extends  CI_Controller
{
    //jika satu kelas memakai semua model/database maka memerlukan contruct agar terpanggil otomatis dan tidak terulang


    public function index()
    {

        $data['judul'] = 'List Of Peoples';

        $this->load->model('Peoples_model', 'peoples');
        // $data['peoples'] = $this->peoples->getPeoples(12, 30); //param limit dan strat ke data berapa
        //PAGINATION
        $this->load->library('pagination');
        //ambil data keyword atau searching
        if ($this->input->post('btn')) {
            // echo $this->input->post('keyword');
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            // $data['keyword'] = null; // data kosong maka akan null/kosong
            $data['keyword'] = $this->session->userdata('keyword');
        }
        $this->db->like('name', $data['keyword']);
        $this->db->from('peoples');

        //config

        $config['base_url'] = 'http://localhost/codeIgniter-app/peoples/index'; //ambil di url
        // $config['total_rows'] = $this->peoples->countAllPeoples(); //diganti karena setiap pencarian itu menghitung bukan mendapatkan nomor dari people saat ini
        $config['total_rows'] = $this->db->count_all_results();
        //ingin mendapatkan total baris dari hasil pencarian
        // $data['total_rows'] = $config['total_rows'];
        // var_dump($config['total_rows']);
        $config['per_page'] = 7;
        $config['num_link'] = 5; // ubah kanan 5 kiri 5
        //agar pagination terlihat rapi
        $config['full_tag_open'] = '<nav><ul class="pagination pagination-lg justify-content-center">';
        $config['full_tag_close']  = '</ul> </nav>';

        $config['frist_link'] = 'Frist';
        $config['frist_tag_open'] = '<li class="page-item">';
        $config['frist_tag_close'] = '</li>';


        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '>>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';


        $config['prev_link'] = '<<';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active">      <a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');




        //init/load library
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start'], $data['keyword']);


        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');
    }
}
