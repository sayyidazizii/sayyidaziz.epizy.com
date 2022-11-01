<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm extends CI_Controller{

    public function __construct()
    {
            parent::__construct();
            //pengecekan sesi
			if($this->session->userdata('is_login') != true){
				redirect('SessLog');
			}
            $this->load->model('m_user');
            $this->load->model('m_home');
            $this->load->model('m_portfolio');
            $this->load->model('m_post');
            $this->load->model('m_about');
            $this->load->model('m_skill');
             $this->load->model('m_sosmed');
    }
    public function index()
    {
        $data['Home'] = $this->db->get('home')->num_rows();
        $data['Portfolio'] = $this->db->get('portfolio')->num_rows();
        $data['Post'] = $this->db->get('posts')->num_rows();
        $data['About'] = $this->db->get('about')->num_rows();
        // var_dump($_SESSION);
        $this->load->view('Dashboard/index',$data);
    }



    // crud home
    public function Home()
    {
        $home= $this->m_home->data();
        $data = array (
            'home' => $home
        );
        // var_dump($data);
        $this->load->view('home/index',$data);
    }
    public function  halaman_edit($id)
	{
		$query =  $this->m_home->getbyid($id);
        $data = array(
            'home' =>$query
        );
		// var_dump($data);
		$this->load->view('home/edit.php',$data);
	}
    public function  edithome()
	{
        $data = array();
        
        if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
          // lakukan upload file dengan memanggil function upload yang ada di model.php
          $upload = $this->m_home->upload();
          
          if($upload['result'] == "success"){ // Jika proses upload sukses
             // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
            $this->m_home->save($upload);
            
            redirect('Adm/home'); // Redirect kembali ke halaman awal / halaman view data
          }else{ // Jika proses upload gagal
            $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
          }
        }
        
        $this->load->view('home/index', $data);
	}
    public function  deletehome($id)
	{
		$this->m_home->hapus($id);
        redirect('Adm/home');
	}


    // end crud home





    // crud Portfolio
    public function Portfolio()
    {
        $portfolio= $this->m_portfolio->data();
        $data = array (
            'portfolio' => $portfolio
        );
        // var_dump($data);
        $this->load->view('portfolio/index',$data);
    }
    public function addport()
    {
        $this->load->view('portfolio/add');
    }
    public function  saveport()
	{
        $data = array();
        
        if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
          // lakukan upload file dengan memanggil function upload yang ada di model.php
          $upload = $this->m_portfolio->upload();
          
          if($upload['result'] == "success"){ // Jika proses upload sukses
             // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
            $this->m_portfolio->save($upload);
            
            redirect('Adm/Portfolio'); // Redirect kembali ke halaman awal / halaman view data
          }else{ // Jika proses upload gagal
            $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
          }
        }
        
        $this->load->view('portfolio/add', $data);
	}
    public function editport($id)
    {
        $query =  $this->m_portfolio->getbyid($id);
        $data = array(
            'portfolio' =>$query
        );
        $this->load->view('portfolio/edit',$data);
    }
    public function  updateport()
	{
        // $data = array();
        
        if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
          // lakukan upload file dengan memanggil function upload yang ada di model.php
          $upload = $this->m_portfolio->uploadimage();
          
          if($upload['result'] == "success"){ // Jika proses upload sukses
             // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
           
                $id = $this->input->post('id');
                $title = $this->input->post('title');
                $slug = $this->input->post('slug');
                $paragraf = $this->input->post('paragraf');
                $image = $upload['file']['file_name'];

                $Arrupdate = array(
                  'id' => $id,
                  'title'=>$title,
                  'slug'=>$slug,
                  'paragraf'=>$paragraf,
                  'image'=>$image,
                );
                var_dump($Arrupdate);
                $this->m_portfolio->update($id,$Arrupdate);
         
         redirect('Adm/Portfolio'); // Redirect kembali ke halaman awal / halaman view data
          }else{ // Jika proses upload gagal
            $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
          }
        }
        
        $this->load->view('portfolio/edit', $data);
	}
    public function  deleteporto($id)
	{
		$this->m_portfolio->hapus($id);
        redirect('Adm/Portfolio');
	}


    // end crud Portfolio


     // crud Post
     public function Post()
     {
         $post= $this->m_post->data();
         $data = array (
             'post' => $post
         );
         // var_dump($data);
         $this->load->view('post/index',$data);
     }
 
     public function addpost()
    {
        $this->load->view('post/add');
    }
    public function  savepost()
	{
        $data = array();
        
        if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
          // lakukan upload file dengan memanggil function upload yang ada di model.php
          $upload = $this->m_post->uploadimage();
          
          if($upload['result'] == "success"){ // Jika proses upload sukses
             // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
            $this->m_post->save($upload);
            
            redirect('Adm/Post'); // Redirect kembali ke halaman awal / halaman view data
          }else{ // Jika proses upload gagal
            $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
          }
        }
        
        $this->load->view('post/add', $data);
	}
    public function editpost($id)
    {
        $query =  $this->m_post->getbyid($id);
        $data = array(
            'post' =>$query
        );
        $this->load->view('post/edit',$data);
    }
    public function  updatepost()
	{
        // $data = array();
        
        if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
          // lakukan upload file dengan memanggil function upload yang ada di model.php
          $upload = $this->m_post->uploadimage();
          
          if($upload['result'] == "success"){ // Jika proses upload sukses
             // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
           
                $id = $this->input->post('id');
                $title = $this->input->post('title');
                $slug = $this->input->post('slug');
                $paragraf = $this->input->post('paragraf');
                $image = $upload['file']['file_name'];

                $Arrupdate = array(
                  'id' => $id,
                  'title'=>$title,
                  'slug'=>$slug,
                  'paragraf'=>$paragraf,
                  'image'=>$image,
                );
                //var_dump($Arrupdate);
                $this->m_post->update($id,$Arrupdate);
         
         redirect('Adm/Post'); // Redirect kembali ke halaman awal / halaman view data
          }else{ // Jika proses upload gagal
            $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
          }
        }
        
        $this->load->view('post/edit', $data);
	}
    public function  deletepost($id)
	{
		$this->m_post->hapus($id);
        redirect('Adm/Post');
	}
     // end crud post


      // crud about
      public function About()
      {
          $about= $this->m_about->data();
          $data = array (
              'about' => $about
          );
          // var_dump($data);
          $this->load->view('about/index',$data);
      }

      public function editabout($id)
      {
          $query =  $this->m_about->getbyid($id);
          $data = array(
              'about' =>$query
          );
          $this->load->view('about/edit',$data);
      }
      public function  updateabout()
      {
          // $data = array();
          
          if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
            // lakukan upload file dengan memanggil function upload yang ada di model.php
            $upload = $this->m_about->uploadimage();
            
            if($upload['result'] == "success"){ // Jika proses upload sukses
               // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
             
                  $id = $this->input->post('id');
                  $name = $this->input->post('name');
                  $current_job = $this->input->post('current_job');
                  $address = $this->input->post('address');
                  $phone = $this->input->post('phone');
                  $email = $this->input->post('email');
                  $school = $this->input->post('school');
                  $image = $upload['file']['file_name'];
  
                  $Arrupdate = array(
                    'id' => $id,
                    'name'=>$name,
                    'current_job'=>$current_job,
                    'address'=>$address,
                    'phone'=> $phone,
                    'email'=> $email,
                    'school'=>$school,
                    'image'=>$image,
                  );
                  //var_dump($Arrupdate);
                  $this->m_about->update($id,$Arrupdate);
           
           redirect('Adm/About'); // Redirect kembali ke halaman awal / halaman view data
            }else{ // Jika proses upload gagal
              $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
            }
          }
          
          $this->load->view('about/edit', $data);
      }
      public function  deleteabout($id)
      {
          $this->m_about->hapus($id);
          redirect('Adm/about');
      }

  
      // end crud about



    //   crud skill
    
    public function Skill()
    {
        $post= $this->m_skill->data();
        $data = array (
            'skill' => $post
        );
        // var_dump($data);
        $this->load->view('skill/index',$data);
    }

    public function addskill()
   {
       $this->load->view('skill/add');
   }
   public function  saveskill()
   {
    $skill = $this->input->post('skill');
    $bgcolor = $this->input->post('bgcolor');

    $Arrinsert = array(
        'skill' =>$skill,
        'bgcolor' =>$bgcolor
    );

    $this->m_skill->insert($Arrinsert);
    redirect('Adm/skill');
   }
   public function editskill($id)
   {
       $query =  $this->m_skill->getbyid($id);
       $data = array(
           'skill' =>$query
       );
       $this->load->view('skill/edit',$data);
   }
   public function  updateskill()
   {
               $id = $this->input->post('id');
               $skill = $this->input->post('skill');
               $bgcolor = $this->input->post('bgcolor');

               $Arrupdate = array(
                 'id' => $id,
                 'skill'=>$skill,
                 'bgcolor'=>$bgcolor,
               );
               //var_dump($Arrupdate);
               $this->m_skill->update($id,$Arrupdate);
        
          redirect('Adm/Skill'); // Redirect kembali ke halaman awal / halaman view data

   }
   public function  deleteskill($id)
   {
       $this->m_skill->hapus($id);
       redirect('Adm/Skill');
   }

    // ----------------------------------------

    //sosmed
    public function Sosmed()
    {
        $post= $this->m_sosmed->data();
        $data = array (
            'sosmed' => $post
        );
        // var_dump($data);
        $this->load->view('sosmed/index',$data);
    }

    public function addsosmed()
   {
       $this->load->view('sosmed/add');
   }
   public function  savesosmed()
   {
    $sosmed = $this->input->post('sosmed');
    $link = $this->input->post('link');

    $Arrinsert = array(
        'sosmed' =>$sosmed,
        'link' =>$link
    );

    $this->m_sosmed->insert($Arrinsert);
    redirect('Adm/sosmed');
   }
   public function editsosmed($id)
   {
       $query =  $this->m_sosmed->getbyid($id);
       $data = array(
           'sosmed' =>$query
       );
       $this->load->view('sosmed/edit',$data);
   }
   public function  updatesosmed()
   {
               $id = $this->input->post('id');
               $sosmed = $this->input->post('sosmed');
               $link = $this->input->post('link');

               $Arrupdate = array(
                 'id' => $id,
                 'sosmed'=>$sosmed,
                 'link'=>$link,
               );
               //var_dump($Arrupdate);
               $this->m_sosmed->update($id,$Arrupdate);
        
          redirect('Adm/sosmed'); // Redirect kembali ke halaman awal / halaman view data

   }
   public function  deletesosmed($id)
   {
       $this->m_sosmed->hapus($id);
       redirect('Adm/Sosmed');
   }
    //----------------------------------------
    public function  resetpass($id)
    {
        $query =  $this->m_user->getbyid($id);
        $data = array(
            'pass' =>$query
        );
        $this->load->view('Dashboard/resetpass',$data);
    }
    public function updatepass()
    {
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $Arrupdate = array(
          'id' => $id,
          'username'=>$username,
          'password'=>$password,
        );
        $this->session->set_flashdata('ubahpass','berhasil ubah password');
       redirect('Adm');
    }

    
}
