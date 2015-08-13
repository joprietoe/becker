<?php

namespace ReportsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ReportsBundle\Classes\FilterNome;

class DefaultController extends Controller {

    // Para la pagina principal
    private $rows = 10;

    public function indexPageAction(Request $request, $actualPage) {
       # $data = $this->makeQuery($request, $actualPage);
        
        return $this->render('ReportsBundle:Default:dashboard.html.twig', array(
                    'actPage' => $actualPage
        ));
    }

    public function indexAction(Request $request) {
        //echo 'aaaaaaaa';
        return $this->indexPageAction($request, 1);
    }

    public function pageAction(Request $request, $activepage) {
        $numrows = count($this->makeQuery($request, -1));
        #var_dump($numrows);
        #die();
        $pageNumber = (int) ($numrows / $this->rows) + 1;
        $arr = Array();
        for ($i = 0; $i < 3; $i++) {
            if ($activepage - 3 + $i >= 0) {
                if ($activepage == $activepage - 3 + $i) {
                    $elem = Array('pos' => $activepage - 2 + $i, 'act' => 'true');
                    array_push($arr, $elem);
                } else {
                    $elem = Array('pos' => $activepage - 2 + $i, 'act' => 'false');
                    array_push($arr, $elem);
                }
            }
        }
        for ($i = $activepage; $i < $pageNumber; $i++) {
            $elem = Array('pos' => $i + 1, 'act' => 'false');
            array_push($arr, $elem);
        }
        if ($request->getMethod() == 'POST') {
            return $this->renderView('ReportsBundle:Default:page.html.twig', array(
                        'pages' => $arr, 'pageNumber' => $pageNumber
            ));
        }
        return $this->render('ReportsBundle:Default:page.html.twig', array(
                    'pages' => $arr, 'pageNumber' => $pageNumber
        ));
    }

    public function makeQuery(Request $request, $page) {
        $session = $request->getSession();
        $filter_name = new FilterNome($session);
        $arr = Array($filter_name);
        return $this->filterResultAction($arr, $page);
    }

    // Para ser llamado desde la pagina web
    public function dataPageAction(Request $request, $page) {

        $data = $this->makeQuery($request, $page);

        if ($request->getMethod() == 'POST') {
            $html = $this->renderView('ReportsBundle:Default:data.html.twig', array(
                'data' => $data
            ));
            $pag = $this->pageAction($request, $page);
            $response = array('result' => $html, 'paginator' => $pag, 'status' => 'OK');
            $resp = json_encode($response);
            return new \Symfony\Component\HttpFoundation\Response($resp, 200);
        }
        return $this->render('ReportsBundle:Default:data.html.twig', array(
                    'data' => $data
        ));
    }

    public function dataAction(Request $request) {
        return $this->dataPageAction($request, 1);
    }

    // Parte de los filtros. Para que pueda ser llamado de cualquier lugar
    public function filterPageAction(Request $request) {

        $session = $request->getSession();
        $filter_name = new FilterNome($session);
        $filters = $filter_name->genActiveFilter();
        return $this->render('ReportsBundle:Default:filterElements.html.twig', array(
                    'filters' => $filters
        ));
    }

    // Para ser llamado usando AJAX
    public function filterAction(Request $request) {
        $session = $request->getSession();
        if ($request->request->has('filter')) {
            $filter_name = new FilterNome($session);

            switch ($request->request->get('filter')) {
                case 'NM':
                    if ($request->request->get('action') == 'add') {
                        $filter_name->setName($request->request->get('name'));
                        $filter_name->setMatch($request->request->get('match'));
              
                    } else if ($request->request->get('action') == 'del') {
                        $filter_name->setName(null);
                    }
                    break;
                default:
                    $response = array('result' => 'Error', 'status' => 'ERROR');
                    $resp = json_encode($response);
                    return new \Symfony\Component\HttpFoundation\Response($resp, 200);
            }
            return $this->dataAction($request);
        }
        $response = array('result' => 'Error', 'status' => 'ERROR');
        $resp = json_encode($response);
        return new \Symfony\Component\HttpFoundation\Response($resp, 200);
    }

    public function filterResultAction($filters, $page) {
        $querySelect = 'SELECT p ';
        $queryFROM = 'FROM EntityBundle:Paciente p ';
        $queryWhere = "WHERE ";

        $first = true;
        foreach ($filters as $filter) {
            if ($filter->hasMatch()) {
                #$querySelect = $querySelect.'';
                $queryFROM = $queryFROM . $filter->fromDQL('p') . ' ';
                if ($first) {
                    $first = false;
                    $queryWhere = $queryWhere . $filter->whereDQL('p') . ' ';
                } else {
                    $queryWhere = $queryWhere . ' AND ' . $filter->whereDQL('p') . ' ';
                }
            }
        }
        if ($first) {
            $queryWhere = '';
        }

        $query = $querySelect . ' ' . $queryFROM . ' ' . $queryWhere . ' ' . ' ORDER BY p.nome ASC';
        $em = $this->getDoctrine()->getManager();
        $docQuery = $em->createQuery($query);

        foreach ($filters as $filter) {
            #$querySelect = $querySelect.'';
            $docQuery = $filter->setFilter($docQuery);
        }

        if ($page >= 1) {
            $docQuery->setMaxResults($this->rows);
            $docQuery->setFirstResult(((int) ($page - 1)) * $this->rows);
        }

        return $docQuery->getResult();
    }

}
