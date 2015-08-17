<?php

namespace DailyWorkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        $paciente = new \EntityBundle\Entity\Paciente();

        //Datos personales
        $formulario = $this->createForm(new \DailyWorkBundle\Form\Paciente\PacienteType(), $paciente);
        return $this->render('DailyWorkBundle:Default:ins_ficha.html.twig', array('formulario' => $formulario->createView()));
        //return $this->consultaAction(1);
    }

    public function daily_workAction() {
        $em = $this->getDoctrine()->getManager();
        $paciente = $em->getRepository('EntityBundle:Paciente')->findAll();
        //var_dump($paciente);
        return $this->render('DailyWorkBundle:Default:dailywork.html.twig', array('paciente' => $paciente[0]));
    }

    public function consultaAction($id_paciente) {
        $formulario = $this->createForm(new \DailyWorkBundle\Form\Consulta\ConsultaType());
        $em = $this->getDoctrine()->getManager();
        $paciente = $em->getRepository('EntityBundle:Paciente')->findOneBy(array('idPaciente' => $id_paciente));
        if (!$paciente) {
            throw $this->createNotFoundException('No existe paciente');
        }
        return $this->render('DailyWorkBundle:Default:consulta.html.twig', array('formulario' => $formulario->createView(),
                    'paciente' => $paciente));
    }

    public function actualizarAction($id_paciente) {
        $em = $this->getDoctrine()->getManager();
        $paciente = $em->getRepository('EntityBundle:Paciente')->find($id_paciente);
        if (!$paciente) {
            throw $this->createNotFoundException('No existe paciente');
        }
        
        $formulario = $this->createForm(new \DailyWorkBundle\Form\Paciente\PacienteType(), $paciente);
        die();
        /*$form->handleRequest($request);
        if ($formulario->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($paciente);
            $em->flush();
            return $this->redirect($this->generateUrl('backend_ciudad'));
        }*/
    }
}
    