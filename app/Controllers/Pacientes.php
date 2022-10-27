<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Paciente;

class Pacientes extends Controller{
    public function index(){

        $paciente= new Paciente();
        $datos['pacientes']= $paciente->orderBy('id','ASC')->findAll();

        $datos['header']= view('template/header');
        $datos['footer']= view('template/footer');

        return view('listar',$datos);

    }
    public function crear(){
        $datos['header']= view('template/header');
        $datos['footer']= view('template/footer');

        return view('crear',$datos);
    }
    public function guardar(){

        $paciente= new Paciente();

        $validacion = $this->validate([
            'name'=>'required|min_length[3]',
            'lastname'=>'required|min_length[3]',
            'date_birth'=>'required',
            'gender'=>'required',
            'height'=>'required',
            'weight'=>'required'
        ]);

        if(!$validacion){
            $session= session();
            $session->setFlashdata('mensaje','Revisa la información');
            return redirect()->back()->withInput();
            //return $this->response->redirect(site_url('/'));
        };

        $datos=[
            'name'=>$this->request->getVar('name'),
            'lastname'=>$this->request->getVar('lastname'),
            'date_birth'=>$this->request->getVar('date_birth'),
            'gender'=>$this->request->getVar('gender'),
            'height'=>$this->request->getVar('height'),
            'weight'=>$this->request->getVar('weight')
        ];
        $paciente->insert($datos);

        return $this->response->redirect(site_url('/'));
    }
    public function borrar($id=null){

        $paciente= new Paciente();
        //$datosPaciente=$paciente->where('id',$id)->first();

        $paciente->where('id',$id)->delete($id);
        return $this->response->redirect(site_url('/'));
    }
    public function editar($id=null){
        $paciente= new Paciente();
        $datos['paciente']=$paciente->where('id',$id)->first();

        $datos['header']= view('template/header');
        $datos['footer']= view('template/footer');

        return view('editar', $datos);
    }
    public function actualizar(){
        $paciente= new Paciente();
        $datos=[
            'name'=>$this->request->getVar('name'),
            'lastname'=>$this->request->getVar('lastname'),
            'date_birth'=>$this->request->getVar('date_birth'),
            'gender'=>$this->request->getVar('gender'),
            'height'=>$this->request->getVar('height'),
            'weight'=>$this->request->getVar('weight')
        ];
        $id= $this->request->getVar('id');
        $paciente->update($id,$datos);
        $session= session();
        $session->setFlashdata('mensaje','Revisa la información');
        return $this->response->redirect(site_url('/'));//cerrar popup

    }
    public function detalle($id=null){
        $paciente= new Paciente();
        $datos['paciente']=$paciente->where('id',$id)->first();

        $datos['header']= view('template/header');
        $datos['footer']= view('template/footer');

        return view('detalle', $datos);
    }
}