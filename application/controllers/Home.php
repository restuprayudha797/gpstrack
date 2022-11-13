<?php


class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
    }



    public function index()
    {

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header');
            $this->load->view('Home/index');
            $this->load->view('templates/footer');
        } else {

            $username = $this->input->post('username', true);
            $password = $this->input->post('password', true);


            if ($username == 'yuda' && $password == 'lakilaki') {

                $this->session->set_flashdata('pesan', 'Succeed');

                $data = [
                    'username' => $username,

                ];

                $this->session->set_userdata($data);

                redirect('home');
            } elseif ($username == 'rtyu' && $password == '@Bella781') {


                $this->session->set_flashdata('pesan', 'Succeed');

                $data = [
                    'username' => $username,

                ];

                $this->session->set_userdata($data);

                redirect('home');
            } else {

                $this->session->set_flashdata('pesan', 'Fail');
                redirect('home');
            }
        }
    }


    public function Application()
    {

        if (!$this->session->userdata('username')) {


            $this->session->set_flashdata('pesan', 'Fail');


            redirect('home');
        }

        $data['marker'] = $this->db->get('tb_marker')->result_array();








        $this->load->view('templates/headerr');
        $this->load->view('application/index', $data);
        $this->load->view('templates/footer');
    }

    public function Power()
    {


        if (!$this->session->userdata('username')) {


            $this->session->set_flashdata('pesan', 'Fail');


            redirect('home');
        }

        $data['state'] = $this->db->get('ledStatus')->result_array();








        $this->load->view('templates/headerr');
        $this->load->view('power/index', $data);
        $this->load->view('templates/footer');
    }

    public function logout()
    {


        $data = ['username' => ''];
        $this->session->unset_userdata($data);

        $this->session->sess_destroy();

        $this->session->set_flashdata('pesan', 'tes');



        redirect('home');
    }


    public function On()
    {

        $this->db->set('state', 1);
        $this->db->update('ledstatus');



        redirect('home/power');
    }
    public function Off()
    {

        $this->db->set('state', 0);
        $this->db->update('ledstatus');



        redirect('home/power');
    }
}
