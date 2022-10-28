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

        $datos=[
            'name'=>$this->request->getVar('name'),
            'lastname'=>$this->request->getVar('lastname'),
            'date_birth'=>$this->request->getVar('date_birth'),
            'gender'=>$this->request->getVar('gender'),
            'height'=>$this->request->getVar('height'),
            'weight'=>$this->request->getVar('weight')
        ];

        

        $validacionCrear = $this->validate([
            'name'=>'required|min_length[3]',
            'lastname'=>'required|min_length[3]',
            'date_birth'=>'required',
            'gender'=>'required',
            'height'=>'required',
            'weight'=>'required'
        ]);

        if($validacionCrear){
            $sessionExito= session();
            $sessionExito->setFlashdata('mensajeExito','¡Felicidades! has añadido con éxito una nueva historia.');
            $paciente->insert($datos);
            return redirect()->back();
        }

        else{
            $session= session();
            $session->setFlashdata('mensaje','Por favor, verifica la información proporcionada.');
            return redirect()->back()->withInput();
        };

        //return $this->response->redirect(site_url('/'));
    }
    public function borrar($id=null){

         $paciente= new Paciente();
         $datosPaciente=$paciente->where('id',$id)->first();

         $validacionBorrar=$paciente->where('id',$id)->delete($id);
        
         if($validacionBorrar){
             $sessionExito= session();
             $sessionExito->setFlashdata('mensajeExito','¡Felicitaciones! has eliminado esta historia con éxito.');
             return $this->response->redirect(site_url('/'));
         } else {
              $session= session();
             $session->setFlashdata('mensaje','Lo sentimos, hubo un error al intentar eliminar esta historia :(');
             return $this->response->redirect(site_url('/'));
        }

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

        $validacionAct = $this->validate([
            'name'=>'required|min_length[3]',
            'lastname'=>'required|min_length[3]',
            'date_birth'=>'required',
            'gender'=>'required',
            'height'=>'required',
            'weight'=>'required'
        ]);

        if($validacionAct){
            $sessionExito= session();
            $sessionExito->setFlashdata('mensajeExito','¡Felicitaciones! has actualizado los datos de la historia con éxito.');
            $paciente->update($id,$datos);
            return $this->response->redirect(site_url('/'));

        }
        

        else{
            $session= session();
            $session->setFlashdata('mensaje','Ups:( hubo un error. Por favor, verifica la información proporcionada.');
            return redirect()->back()->withInput();
        };

        

    }
    public function detalle($id=null){
        $paciente= new Paciente();
        $datos['paciente']=$paciente->where('id',$id)->first();

        $datos['header']= view('template/header');
        $datos['footer']= view('template/footer');

        return view('detalle', $datos);
    }
}