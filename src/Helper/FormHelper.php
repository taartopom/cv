<?php

namespace App\Helper;

use Symfony\Component\Form\FormInterface;

class FormHelper
{
	public static function getErrors(FormInterface $form)
    {
        $result = [
            'name' => $form->getName(),
            'success' => $form->isValid(),
        ];

        if (!$form->isValid()) {
            $errors = [];

            foreach ($form->getErrors() as $error) {
                $errors[$form->getName()][] = $error->getMessage();
            }

            foreach ($form as $child) {
                if (!$child->isValid()) {
                    foreach ($child->getErrors() as $error) {
                        $errors[$form->getName().'['.$child->getName().']'][] = $error->getMessage();
                    }
                }
            }

            $result['errors'] = $errors;
        }

        return $result;
    }
}
