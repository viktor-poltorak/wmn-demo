<?php
	$boot->addRoute('registration_individual', 'registration/individual', 'registration', 'index', 'individual');
	$boot->addRoute('registration_company', 'registration/company', 'registration', 'index', 'company');
	$boot->addRoute('registration_save', 'registration/save', 'registration', 'index', 'save');