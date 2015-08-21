<?php

namespace DailyWorkBundle\Controller;

use EntityBundle\Entity\Paciente;
use EntityBundle\Entity\TipoSanguineo;
use EntityBundle\Entity\TipoParto;
use EntityBundle\Entity\Orden_Responsavel;
use EntityBundle\Entity\ProblemasSaude;
use EntityBundle\Entity\Paciente_ProblemasSaude;
use EntityBundle\Entity\Responsavel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    public function indexAction() {
        
        $paciente = new \EntityBundle\Entity\Paciente();

        $orde1 = new Orden_Responsavel();
        $orde2 = new Orden_Responsavel();
        $resp = new Responsavel();

        $psaude = new ProblemasSaude();
        $p_psaude = new Paciente_ProblemasSaude();
        //$p_psaude->setProblemaSaude($psaude);

        $resp->addOrdenResponsavel($orde1);
        $resp->addOrdenResponsavel($orde2);

        $psaude->addPacienteProblemasSaude($p_psaude);
                
        $paciente->addOrdenResponsavel($orde1);
        $paciente->addOrdenResponsavel($orde2);
        $paciente->addPacienteProblemasSaude($p_psaude);


        $request = $this->getRequest();

        //Datos personales
        //$form = $this->createForm(new Forms\UserType($userConfig), $user);

        $formulario = $this->createForm(new \DailyWorkBundle\Form\Paciente\PacienteType(), $paciente);
        $formulario->setData(array('responsavel' => $resp));

        $formulario->handleRequest($request);



        if ($formulario->isValid()) {
            $nome = $formulario->get('nome')->getData();
            $paciente->setNome($nome);

            $data_nascimento = $formulario->get('data_nascimento')->getData();
            $paciente->setDataNascimento($data_nascimento);

            $tipoSanguineo = $formulario->get('tipoSanguineo')->getData();
            $paciente->setTipoSanguineo(new TipoSanguineo($tipoSanguineo));

            $problemas_gravidez = $formulario->get('problemas_gravidez')->getData();
            $paciente->setProblemasGravidez($problemas_gravidez);

            $leite_artificial = $formulario->get('leite_artificial')->getData();
            $paciente->setLeiteArtificial($leite_artificial);

            $depressao_puerperal = $formulario->get('depressao_puerperal')->getData();
            $paciente->setDepressaoPuerperal($depressao_puerperal);

            $problemas_posparto = $formulario->get('problemas_posparto')->getData();
            $paciente->setProblemasPosparto($problemas_posparto);

            $leite_materno_exclusivo = $formulario->get('leite_materno_exclusivo')->getData();
            $paciente->setLeiteMaternoExclusivo($leite_materno_exclusivo);

            $leite_materno_idade = $formulario->get('leite_materno_idade')->getData();
            $paciente->setLeiteMaternoIdade($leite_materno_idade);

            $endereco = $formulario->get('endereco')->getData();


            $responsavels =  $formulario->get('responsavels')->getData();
            

            /* $oresponsavel = new Orden_Responsavel();
              $oresponsavel->setOrden(1);
              $responsavel = new Responsavel();
              $responsavel->addOrdenResponsavels($oresponsavel);
              $paciente->addOrdenResponsavel($oresponsavel); */

            $tipoParto = $formulario->get('tipoParto')->getData();
            $paciente->setTipoParto(new TipoParto($tipoParto));

            $problemasSaude = $formulario->get('paciente_problemasSaude')->getData();

           $p_psaude = new Paciente_ProblemasSaude();
           //$p_psaude->setPaciente($paciente);
           $p_psaude->setProblemaSaude($psaude);
           
           $psaude = new ProblemasSaude();
           $psaude->setNombrePsaude($problemasSaude);
           $psaude->addPacienteProblemasSaude($p_psaude);
           
           $paciente->addPacienteProblemasSaude($p_psaude);
           
            $nCuidados = $formulario->get('nCuidados')->getData();

            
            return new Response('<html><body>Hello '.var_dump($paciente->getProblemasSaude()[0]->getNombrePsaude()) . '!</body></html>');
            //return $this->redirect($this->generateUrl('inicio'));
        }
        return $this->render('DailyWorkBundle:Default:ficha.html.twig', array('formulario' => $formulario->createView()));
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
        /* $form->handleRequest($request);
          if ($formulario->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($paciente);
          $em->flush();
          return $this->redirect($this->generateUrl('backend_ciudad'));
          } */
    }

}
