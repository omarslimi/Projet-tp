<?php
$category = new categories;
$project = new projects;
$categoryList = $category->selectCategoriesList();
$formErrors = [];
$BudgetrangesList = $project->selectBudgetrangesList();
if(count($_POST) > 0){

    if(!empty($_POST['title'])){
        if (strlen($_POST['title']) >= 7) {
            if (preg_match($regex['businessNameRegex'], $_POST['title'])) {
                $user->title = strip_tags($_POST['title']);
            } else{
                $formErrors['title'] = TITLE_ERROR_INVALID;
            }
        } else{
            $formErrors['title'] = TITLE_ERROR;
        }
    } else {
        $formErrors['title'] = TITLE_ERROR_EMPTY;
    }

    if(!empty($_POST['selectCategory'])){
        $user->selectCategory = strip_tags($_POST['selectCategory']);
    } else {
        $formErrors['selectCategory'] = CATEGORY_EMPTY;
    }

    if(!empty($_POST['budget'])){
        $budget = strip_tags($_POST['budget']);
    } else {
        $formErrors['budget'] = 'Veuillez choisir un budget.';
    }

    if(!empty($_POST['froala-editor'])){
        $budget = strip_tags($_POST['froala-editor']);
    } else {
        $formErrors['froala-editor'] = 'Veuillez ecrire une description.';
    }
}