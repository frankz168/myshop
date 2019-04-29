<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function __construct(){
        parent::__construct();
        //load model->
        $this->load->model('model_products');

    }
	public function index()
	{
        $data['products'] = $this->model_products->all();
		$this->load->view('backend/view_all_products', $data);
    }
    
    public function create(){
        //form validation sebelum mengeksekusi query insert
        $this->form_validation->set_rules('name', 'Product Name', 'required');
        $this->form_validation->set_rules('description', 'Product Description', 'required');
        $this->form_validation->set_rules('price', 'Product Price', 'required');
        $this->form_validation->set_rules('stock', 'Available Stock', 'required');

        if ($this->form_validation->run() == FALSE)
        {

            $this->load->view('backend/form_tambah_product');
        }
        else{
            //eksekusi query insert
            $data_product = array(
                'name'          => set_value('name'),
                'description'   => set_value('description'),
                'price'         => set_value('price'),
                'stock'         => set_value('stock')
            );
            $this->model_products->create($data_product);
            redirect('admin/products');
        }
    }

    public function update($id){
           //form validation sebelum mengeksekusi query update
           $this->form_validation->set_rules('name', 'Product Name', 'required');
           $this->form_validation->set_rules('description', 'Product Description', 'required');
           $this->form_validation->set_rules('price', 'Product Price', 'required');
           $this->form_validation->set_rules('stock', 'Available Stock', 'required');
   
           if ($this->form_validation->run() == FALSE)
           {
                $data['product'] = $this->model_products->find($id);
                $this->load->view('backend/form_edit_product', $data);
           }
           else
           {
            //eksekusi query update
            $data_product = array(
                'name'          => set_value('name'),
                'description'   => set_value('description'),
                'price'         => set_value('price'),
                'stock'         => set_value('stock')
            );
            $this->model_products->update($id, $data_product);
            redirect('admin/products');
           }
    }

    public function delete($id){
        $this->model_products->delete($id);
        redirect('admin/products');
    }
}
