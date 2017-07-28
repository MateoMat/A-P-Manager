<?php

namespace APManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    /**
     * @Route("/admin")
     */
    public function adminMainPageAction()
    {
        return $this->render('APManagerBundle:Admin:admin_main_page.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("admin/showAllUsers")
     */
    public function showAllUsersAction()
    {
        return $this->render('APManagerBundle:Admin:show_all_users.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("admin/createUser")
     */
    public function createUserAction()
    {
        return $this->render('APManagerBundle:Admin:create_user.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("admin/deleteUser")
     */
    public function deleteUserAction()
    {
        return $this->render('APManagerBundle:Admin:delete_user.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("admin/editUser")
     */
    public function editUserAction()
    {
        return $this->render('APManagerBundle:Admin:edit_user.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("admin/addCredentials")
     */
    public function addCredentialsAction()
    {
        return $this->render('APManagerBundle:Admin:add_credentials.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("admin/showAllProducts")
     */
    public function showAllProductsAction()
    {
        return $this->render('APManagerBundle:Admin:show_all_products.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("admin/addProduct")
     */
    public function addProductAction()
    {
        return $this->render('APManagerBundle:Admin:add_product.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("admin/deleteProduct")
     */
    public function deleteProductAction()
    {
        return $this->render('APManagerBundle:Admin:delete_product.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("admin/editProduct")
     */
    public function editProductAction()
    {
        return $this->render('APManagerBundle:Admin:edit_product.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("admin/showAllCycles")
     */
    public function showAllCyclesAction()
    {
        return $this->render('APManagerBundle:Admin:show_all_cycles.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("admin/addCycle")
     */
    public function addCycleAction()
    {
        return $this->render('APManagerBundle:Admin:add_cycle.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("admin/deleteCycle")
     */
    public function deleteCycleAction()
    {
        return $this->render('APManagerBundle:Admin:delete_cycle.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("admin/editCycle")
     */
    public function editCycleAction()
    {
        return $this->render('APManagerBundle:Admin:edit_cycle.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("admin/showBudgets")
     */
    public function showBudgetsAction()
    {
        return $this->render('APManagerBundle:Admin:show_budgets.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("admin/addBudget")
     */
    public function addBudgetAction()
    {
        return $this->render('APManagerBundle:Admin:add_budget.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("admin/deleteBudget")
     */
    public function deleteBudgetAction()
    {
        return $this->render('APManagerBundle:Admin:delete_budget.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("admin/editBudget")
     */
    public function editBudgetAction()
    {
        return $this->render('APManagerBundle:Admin:edit_budget.html.twig', array(
            // ...
        ));
    }

}
