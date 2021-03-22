<?php

namespace Drupal\hello_user\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;


class HelloUserForm extends FormBase {

    public function getFormId() {
        return 'hello_user_form';
    }
    public function buildForm(array $form, FormStateInterface $form_state) {
        $form['name'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Cuantes vols imprimir?'),
            '#size' => 60,
            '#maxlength' => 10,
            '#required' => TRUE,
        ];

        $form['actions']['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Enviar'),
        ];

        return $form;
    }
    public function submitForm(array &$form, FormStateInterface $form_state) {

        $node = $this->t('/drupal/hello/@name', ['@name' => $form_state->getValue('name')]);

        $response = new RedirectResponse($node);
        $response->send();

        return;
    }


}
?>
