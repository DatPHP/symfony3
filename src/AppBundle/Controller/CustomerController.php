<?php
  namespace AppBundle\Controller;

  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use Symfony\Component\HttpFoundation\Request;
  use Symfony\Component\Routing\Annotation\Route;

  use Symfony\Component\HttpFoundation\Response;

  use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
  class CustomerController extends AbstractController
  {
      /**
       * @Route("/customer/add")
       */
      public function add(Request $request)
      {





          return $this->render('customer/index.html.twig');

      }

  }