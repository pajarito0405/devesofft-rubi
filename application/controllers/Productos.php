<?php
class Productos extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper("mabuya");
        $this->load->model('User_model','user');
        $this->load->model('Productos_model','product');

        @session_start();
        $this->load_language();

        $this->load->library('cart');
        //$this->load->model('gallery_model','slides');
        if (!isset($_SESSION['lang'])) {
            $_SESSION['lang']=1;
        }

        $this->init_form_validation();

    }


    public function change_lang($lang_id = 0){
    //var_dump("chsss"); die();
        if(in_array($lang_id,[1,2])){

            $_SESSION['lang'] = $lang_id;
            $this->load_language();
            redirect();

        }else{
            $_SESSION['lang'] = 1;
        }
    }

    public function index()
    {  
      $this->load_view_user("user/productos");
    }

    public function productos()
    {  
      $this->load_view_user("user/productos");
    }
    
    public function get_by_category(){
      
      $id_cat = $_POST['cat']; $html=''; $msg = "";$details = "";
      if($id_cat=='1' or $id_cat=='2' or $id_cat=='3'){$details="Detalles";}
      $pbc = $this->product->get_by_category_id($id_cat);
      if($pbc){
         foreach($pbc as $p){
           $html.='
              <div class="col-md-3" style="padding-top:20px;">
                <div class="product-item" style="height:281.69px; width:222.66px;">
                  <div class="pi-img-wrapper">
                    <img src="'.base_url().$p->img_producto.'" class="img-responsive" alt="'.$p->nombre.'" style="height:182.09px;">
                    <div>
                      <a href="'.base_url().$p->img_producto.'" class="btn btn-default fancybox-button">Zoom</a>
                      <!--a href="#product-pop-up" data-id="'.$p->id_producto.'" class="btn btn-default fancybox-fast-view ">View</a-->
                    </div>
                  </div>
                  <h3><a href="shop-item.html">'.$p->nombre.'</a></h3>
                  <div class="pi-price">$'.$p->precio.'</div>
                  <a href="'.site_url().'Productos/product_detail/'.$p->id_producto.'" class="btn btn-default add2cart">'.$details.'</a>
                  <div class="sticker sticker-new"></div>
                </div>
              </div> 
            ';  
         }
      }
    
      $response = array('error_msg'=> $msg,'html'=>$html); 
      echo json_encode($response); 

    }

    public function product_detail($id){
     $product = $this->product->get_by_id($id);  
     $data['p'] =  $product;
    $this->load_view_user("user/producto_detalle",$data);
 
    }

    


  }

?>