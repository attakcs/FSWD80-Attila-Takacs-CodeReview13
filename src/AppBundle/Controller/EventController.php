<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Events;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EventController extends Controller
{
    /**
     * @Route("/", name="event_list")
     */
    public function listAction()
    {
        $events = $this->getDoctrine()
                ->getRepository('AppBundle:Events')
                ->findAll();
         
        return $this->render('events/index.html.twig', array(
            'events' => $events
        ));
    }

    /**
     * @Route("/event/create", name="event_create")
     */
    public function createAction(Request $request)
    {
        $event = new Events;

        $form = $this->createFormBuilder($event)
            ->add('event_name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('event_image', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('event_contact', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('event_phone', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('event_address', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('event_web', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('event_description', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('event_date', DateTimeType::class, array('attr' => array('class' => 'formcontrol', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Create Event', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            // get data
            $name = $form['event_name']->getData();
            $image = $form['event_image']->getData();
            $contact = $form['event_contact']->getData();
            $phone = $form['event_phone']->getData();
            $address = $form['event_address']->getData();
            $web = $form['event_web']->getData();
            $description = $form['event_description']->getData();
            $date = $form['event_date']->getData();
     
            $event->setEventName($name);
            $event->setEventImage($image);
            $event->setEventContact($contact);
            $event->setEventPhone($phone);
            $event->setEventAddress($address);
            $event->setEventWeb($web);
            $event->setEventDescription($description);
            $event->setEventDate($date);

            $em = $this->getDoctrine()->getManager();

            $em->persist($event);
            $em->flush();

            $this->addFlash(
                'notice',
                'Event Added');

            return $this->redirectToRoute('event_list');
        }

         
        return $this->render('events/create.html.twig', array(
            'form' => $form->createView()
        ));
        
    }

    /**
     * @Route("/event/edit/{id}", name="event_edit")
     */
    public function editAction($id, Request $request)
    {
         
        $event = $this->getDoctrine()
                ->getRepository('AppBundle:Events')
                ->find($id);


        $form = $this->createFormBuilder($event)
            ->add('event_name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('event_image', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('event_contact', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('event_phone', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('event_address', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('event_web', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('event_description', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('event_date', DateTimeType::class, array('attr' => array('class' => 'formcontrol', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Update Event', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            // get data
            $name = $form['event_name']->getData();
            $image = $form['event_image']->getData();
            $contact = $form['event_contact']->getData();
            $phone = $form['event_phone']->getData();
            $address = $form['event_address']->getData();
            $web = $form['event_web']->getData();
            $description = $form['event_description']->getData();
            $date = $form['event_date']->getData();

            $em = $this->getDoctrine()->getManager();
            $event = $em->getRepository('AppBundle:Events')->find($id);

            $event->setEventName($name);
            $event->setEventImage($image);
            $event->setEventContact($contact);
            $event->setEventPhone($phone);
            $event->setEventAddress($address);
            $event->setEventWeb($web);
            $event->setEventDescription($description);
            $event->setEventDate($date);

            $em->flush();

            $this->addFlash(
                'notice',
                'Event Updated');

            return $this->redirectToRoute('event_list');
        }
         
        return $this->render('events/edit.html.twig', array(
            'event' => $event,
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/event/delete/{id}", name="event_delete")
     */
    public function deleteAction($id)
    {
         
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository('AppBundle:Events')->find($id);

        $em->remove($event);
        $em->flush();

        $this->addFlash(
                'notice',
                'Event Removed');

        return $this->redirectToRoute('event_list');
    }

    /**
     * @Route("/event/details/{id}", name="event_details")
     */
    public function detailsAction($id)
    {
        $event = $this->getDoctrine()
                ->getRepository('AppBundle:Events')
                ->find($id);
         
        return $this->render('events/read.html.twig', array(
            'event' => $event
        ));
    }
}
